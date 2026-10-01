import Adafruit_DHT

# Replace with your sensor type (DHT11, DHT22, or AM2302)
sensor_type = Adafruit_DHT.DHT11

# Replace with the GPIO pin connected to your sensor's data pin
pin = 4

humidity, temperature = Adafruit_DHT.read_retry(sensor_type, pin)

if humidity is not None and temperature is not None:
    print("Temperature: {0:0.1f}°C  Humidity: {1:0.1f}%".format(temperature, humidity))
else:
    print("Failed to read from sensor!")
