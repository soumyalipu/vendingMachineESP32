#include <WiFi.h>     //Include Esp library
#include <HTTPClient.h> 
#include <SPI.h>
#include <MFRC522.h>        //include RFID library
#include <Wire.h>
#include <LiquidCrystal_I2C.h>
#define SS_PIN 4 //RX slave select
#define RST_PIN 5
MFRC522 mfrc522(SS_PIN, RST_PIN); // Create MFRC522 instance.
/* Set these to your desired credentials. */


const char *ssid = "geeks";  //ENTER YOUR WIFI SETTINGS
const char *password = "susu@1998";

String getData ,Link;
String CardID="";
LiquidCrystal_I2C lcd(0x27, 16, 4);  
void setup() {
  Serial.begin(9600);
  
  SPI.begin();  // Init SPI bus
  mfrc522.PCD_Init(); // Init MFRC522 card
  
  WiFi.mode(WIFI_OFF);        
  delay(1000);
  WiFi.mode(WIFI_STA);        
  WiFi.begin(ssid, password);     //Connect to your WiFi router
  Serial.println("");
  Serial.print("Connecting to ");
  Serial.print(ssid);
  // Wait for connection
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  //If connection successful show IP address in serial monitor
  Serial.println("");
  Serial.println("Connected");
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());  //IP address assigned to your ESP 
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
        lcd.setCursor(0, 2);
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
        delay(10);
        String payload = http.getString();
        Serial.println(payload);
        
        lcd.setCursor(0,1);
        lcd.print("Available balance is");
        lcd.setCursor(0,2);
        lcd.print(payload);
        delay(5000);
        /////////////////////////////////////////  

        
        lcd.clear();
        
        CardID = "";
        Link = "";
        http.end();  //Close connection*/
}
