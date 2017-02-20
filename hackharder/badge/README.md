#
``` 
 _   _            _    _   _               _
| | | | __ _  ___| | _| | | | __ _ _ __ __| | ___ _ __ 
| |_| |/ _` |/ __| |/ / |_| |/ _` | '__/ _` |/ _ \ '__|
|  _  | (_| | (__|   <|  _  | (_| | | | (_| |  __/ |   
|_| |_|\__,_|\___|_|\_\_| |_|\__,_|_|  \__,_|\___|_|   
```


* Open Arduino IDE
* CLick "file, then "preferences"
* On the "Settings" tab, find "Additional Boards Manager URLs"
* Add the [ESP8266 URL](http://arduino.esp8266.com/stable/package_esp8266com_index.json)
* CLick "tools" then "board" then "Boards Manager" and install the ESP8266 package

Connect the cable, verify with dmesg. 

"/dev/tty/USB0" 

* Try this test sketch

```
#define ESP8266_LED 2

void setup() 
{
  pinMode(ESP8266_LED, OUTPUT);
}

void loop() 
{
  digitalWrite(ESP8266_LED, HIGH);
  delay(500);
  digitalWrite(ESP8266_LED, LOW);
  delay(500);
}
```


[wiring the OLED](http://arduino-er.blogspot.com/2016/04/nodemcu-esp8266-to-display-on-128x64.html)
[i2c scanner, very useful](http://playground.arduino.cc/Main/I2cScanner)
