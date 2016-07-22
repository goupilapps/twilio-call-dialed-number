# twilio-call-dialed-number Installation Guide
Forward call from Twilio SIP Registration to the dialed number.

Deploy with:
    google_appengine/appcfg.py -A PROJECT-ID -V v1 update twilio-call-dialed-number/
    
in the Twilio console  go to Programmable Voice -> SIP Domains -> {domain}.sip.twilio.com and set the GET Request URL with:
    http://<YOUR_PROJECT_ID>.appspot.com/forward?callerid=CALLER-ID
    
 That's it. it should work.
 Enjoy your calls :)
