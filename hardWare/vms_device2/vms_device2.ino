#include <WiFi.h>     //Include Esp library
#include <HTTPClient.h> 
#include <SPI.h>
#include <MFRC522.h>        //include RFID library
#include <Wire.h>
#include <Servo.h>
#include <LiquidCrystal_I2C.h>
#define SS_PIN 4 //RX slave select
#define RST_PIN 5
MFRC522 mfrc522(SS_PIN, RST_PIN); // Create MFRC522 instance.
/* Set these to your desired credentials. */
Servo myservo1;
Servo myservo2;

LiquidCrystal_I2C lcd(0x27, 16, 4);  
String MachineID="2345";

const char *ssid = "Rout";  //ENTER YOUR WIFI SETTINGS
const char *password = "rout@1234";

const unsigned long eventInterval = 5000;

unsigned long currentTime =0;
#define disp1_switch 34
#define disp2_switch 35

int buttonState = 0;         // variable for reading the pushbutton status
int prestate =0;

float disp1_value=0.5;
float disp2_value=2.0;

int flag=0;
int pos1 = 0;
int pos2 = 0;
String getData ,Link,Link2,Link1;
String CardID="";
unsigned long previousTime=0;
void setup() {
  Serial.begin(9600);
  pinMode(disp1_switch,INPUT);
  pinMode(disp2_switch,INPUT);
  SPI.begin();  // Init SPI bus
  mfrc522.PCD_Init(); // Init MFRC522 card
  
  WiFi.mode(WIFI_OFF);        
  delay(1000);
  WiFi.mode(WIFI_STA);        
  WiFi.begin(ssid, password);     //Connect to your WiFi router
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.println(".");
  }
  Serial.println("successfull");
  previousTime = millis();
  myservo1.attach(13);
  myservo2.attach(12);
  lcd.init();
  // turn on LCD backlight                      
  lcd.backlight();
}
void loop() {
    if(WiFi.status() != WL_CONNECTED){
      WiFi.disconnect();
      WiFi.mode(WIFI_STA);
      WiFi.begin(ssid, password);
    while (WiFi.status() != WL_CONNECTED) {
      delay(500);
    }
    }
    lcd.setCursor(0, 0);
  // print message
    lcd.print("Scan Your Card");
    /////////////////////////////////////////////////////////////////rfid card
    if ( ! mfrc522.PICC_IsNewCardPresent()) {
          return;
    }
    if ( ! mfrc522.PICC_ReadCardSerial()) {
      return;
    }
    for (byte i = 0; i < mfrc522.uid.size; i++) {
       CardID += mfrc522.uid.uidByte[i];
    }
    Serial.println(CardID);
    delay(100);
    getData = CardID;
    lcd.clear();
    //////////////////////////////////////////////send to server for balance check
    HTTPClient http;
    Link = "https://vms.techforfun.in/update.php?id="+getData+"&type=Check";
    http.begin(Link);
    int httpCode = http.GET();
    String balance = http.getString();
    Serial.println(balance);
    if(balance.toInt()>=0){
    lcd.setCursor(0,1);
    lcd.print("Available balance is");
    lcd.setCursor(0,2);
    lcd.print(balance);
    lcd.setCursor(0,3);
    lcd.print("Wating for your order");
    }
    else{
      lcd.setCursor(0,2);
      lcd.print(balance);
      }
    if (balance.toInt()-2>0){
        flag=1;
        previousTime = millis();
      }
    if (balance.toInt()<=2 && balance.toInt()>0){
        Serial.println("No balance, Recharge");
      }
    /////////////////////////////////////////  
    String balance1="";
    String balance2="";
    if(flag==1){
//      Serial.println("asasasad100");
//      Serial.println(millis());
//      Serial.println(previousTime);
//      Serial.println(currentTime - previousTime);
    while ((millis() - previousTime) < 5000) {
      //Serial.println("inwhile");
      buttonState = digitalRead(disp1_switch);
      if(buttonState == LOW){
        delay(500);
        lcd.clear();
        //Serial.println("inif");
            Link1 = "https://vms.techforfun.in/update.php?id="+getData+"&type=Update&machineId="+MachineID+"&amt="+disp1_value;
            http.begin(Link1);
            int httpCode1 = http.GET();
             balance1 = http.getString();
            Serial.println("updated balance is ");
            Serial.println(balance1);
            lcd.setCursor(0,1);
            lcd.print("Available balance is");
            lcd.setCursor(0,2);
            lcd.print(balance1);
            for (pos1 = 0; pos1 <= 180; pos1 += 1) { // goes from 0 degrees to 180 degrees
              // in steps of 1 degree
              myservo1.write(pos1);
              Serial.println(pos1);// tell servo to go to position in variable 'pos'
              delay(15);                       // waits 15ms for the servo to reach the position
            }
            for (pos1 = 180; pos1 >= 0; pos1 -= 1) { // goes from 180 degrees to 0 degrees
              myservo1.write(pos1);
              Serial.println(pos1);// tell servo to go to position in variable 'pos'
              delay(15);                       // waits 15ms for the servo to reach the position
            }
            flag=0;
            break;
         }
         if((digitalRead(disp1_switch)==1)){
            Link1 = "";
            Serial.println("no button presses");
          }
//         if(digitalRead(disp2_switch)==0){
              delay(500);
//            lcd.clear();
//            Link2 = "https://vms.techforfun.in/update.php?id="+getData+"&type=Update&machineId="+MachineID+"&amt="+disp2_value;
//            http.begin(Link2);
//            int httpCode2 = http.GET();
//            balance2 = http.getString();
//            Serial.println("updated balance is ");
//            Serial.println(balance2);
//              lcd.setCursor(0,1);
//              lcd.print("Available balance is");
//              lcd.setCursor(0,2);
//              lcd.print(balance1);
//            for (pos2 = 0; pos2 <= 180; pos2 += 1) { // goes from 0 degrees to 180 degrees
//              // in steps of 1 degree
//              myservo2.write(pos2);              // tell servo to go to position in variable 'pos'
//              delay(15);                       // waits 15ms for the servo to reach the position
//            }
//            for (pos2 = 180; pos2 >= 0; pos2 -= 1) { // goes from 180 degrees to 0 degrees
//              myservo2.write(pos2);              // tell servo to go to position in variable 'pos'
//              delay(15);                       // waits 15ms for the servo to reach the position
//            }
//            flag=0;
//            break;
//         }
//         if((digitalRead(disp2_switch)==1)){
//            Link2 = "";
//            Serial.println("no button presses");
//           
//          }
      }
      
    }
    if((millis() - previousTime) >= 4000){
      previousTime = currentTime;
      CardID = "";
      balance="";
      balance1="";
      balance2="";
      Link = "";
      Link1 = "";
      Link2 = "";
      }
    
    
    http.end();
}
