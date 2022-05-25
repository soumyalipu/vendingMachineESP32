#include <SPI.h>
#include <MFRC522.h>        //include RFID library
#define SS_PIN 4 //RX slave select
#define RST_PIN 5
MFRC522 mfrc522(SS_PIN, RST_PIN); // Create MFRC522 instance.

String CardID="";

void setup() {
  Serial.begin(9600);
  
  SPI.begin();  // Init SPI bus
  mfrc522.PCD_Init(); // Init MFRC522 card
}
void loop() {
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
  }
