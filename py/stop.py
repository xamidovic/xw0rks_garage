import RPi.GPIO as GPIO  
import time  

#VCC to pin 02
#GRD to pin 06
#SIGNAL to pin 26

# blinking function  
def blink(pin):  
        GPIO.output(pin,GPIO.HIGH)  
        time.sleep(0.1)  
        GPIO.output(pin,GPIO.LOW)  
        time.sleep(0.1)  
        return  

# to use Raspberry Pi board pin numbers  
GPIO.setmode(GPIO.BOARD)  

# set up GPIO output channel  
GPIO.setup(26, GPIO.OUT)  

# blink GPIO04 1 times  
for i in range(0,1):  
        blink(26)  
GPIO.cleanup()
