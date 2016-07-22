# twilio-call-dialed-number Installation Guide
Forward call from Twilio SIP Registration to the dialed number.

Deploy with:
```
google_appengine/appcfg.py -A PROJECT-ID -V v1 update twilio-call-dialed-number/
```
    
In the Twilio console  go to Programmable Voice -> SIP Domains -> {domain}.sip.twilio.com and set the GET Request URL with:
```
http://<YOUR_PROJECT_ID>.appspot.com/forward?callerid=CALLER-ID
```

That's it, it should work.

If you do not wish to to host this script on your own account, you can use my hosted script. However I do not garantee its availability and the stability.
```
https://twilio-1380.appspot.com/forward?callerid=CALLER-ID
```

Enjoy your calls :)
