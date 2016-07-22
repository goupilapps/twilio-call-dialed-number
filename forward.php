<?php

$matches = array();
preg_match('/sip:(.*)\@/', $_GET['To'], $matches);


echo '<?xml version="1.0" encoding="UTF-8"?>
<Response>
    <Dial callerId="' . $_GET['callerid'] . '">' . $matches[1] . '</Dial>
</Response>';

