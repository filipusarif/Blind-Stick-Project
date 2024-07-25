// library wifi
#ifdef ESP32
  #include <WiFi.h>
  #include <HTTPClient.h>
#else
  #include <ESP8266WiFi.h>
  #include <ESP8266HTTPClient.h>
  #include <WiFiClient.h>
#endif
#include <ArduinoJson.h>
#define Echo_pin_Depan 19
#define Trig_pin_Depan 18
#define pb 0

// Konfigurasi Wifi
const char* ssid = "OPPO A15";
const char* password = "11223344";

// Alamat IP
const char* IPserver = "blindstickapp.000webhostapp.com";

String dataSignal;

String postData = "";                                                       //Variable untuk mengirim HTTP POST request data.
String payload = ""; 
String object;
int jarak, sos;

void setup() {
  // put your setup code here, to run once:
  Serial.begin(115200);

  // koneksi WIFI
  WiFi.hostname("NodeMCU");
  WiFi.begin(ssid, password);

  // tes WIFI
  while(WiFi.status() != WL_CONNECTED){
    Serial.print("gagal connect!");
    delay(500);
  }
  pinMode(Trig_pin_Depan, OUTPUT);
  pinMode(Echo_pin_Depan, INPUT);
  pinMode(pb, INPUT_PULLUP);
}

float readDistanceCM_Depan() {
  digitalWrite(Trig_pin_Depan, LOW);
  delayMicroseconds(2);
  digitalWrite(Trig_pin_Depan, HIGH);
  delayMicroseconds(10);
  digitalWrite(Trig_pin_Depan, LOW);
  int duration = pulseIn(Echo_pin_Depan, HIGH);
  return duration * 0.034 / 2;
}

bool status = false;

void loop() {
  int tombol = digitalRead(pb);
  float jarak = readDistanceCM_Depan();
  if(jarak < 100){
      object = "Ada";
  }else{
    object = "Aman";
  }
  if(tombol == LOW ){
    sos = 1;
  }else {
    sos = 0;
  }
  Serial.println(object + ", "+ jarak + ", " + sos );
  send(object, jarak, sos);
  delay(100);
}



void send(String object, float jarak, int sos) {
  WiFiClient wClient;
  const int httpPort = 80;
  if(!wClient.connect(IPserver, httpPort)){
    Serial.println("gagal connect ke web server");
    return;
  }

  // pengiriman data
  String url;
  HTTPClient http;
  url = "http://" + String(IPserver) + "/api/XPR/" + String(object) + "/" + String(jarak) + "/" + String(sos);
  // eksekusi 
  http.begin( wClient, url);
  http.GET();
  http.end();
  Serial.println(url);
}
