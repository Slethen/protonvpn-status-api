# protonvpn-status-api
Very simple API to confirm if a user is connected to ProtonVPN.
Created for use with [ProtonVPN-Gtk](https://github.com/Slethen/ProtonVPN-Gtk)

# Simple example to print live connection status in Python
```
import requests
import json
import time
 
while True:
    time.sleep(1)
   
    send_url = 'http://dl.slethen.io/api.php'
    r = requests.get(send_url)
    j = json.loads(r.text)
 
    if "True" in str(j):
        print 'True'
 
    if "False" in str(j):
        print 'False'
```

# Hosted Version
I host the current version of the API at http://dl.slethen.io/api.php
