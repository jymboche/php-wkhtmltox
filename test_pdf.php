<?php

wkhtmltox_convert('pdf', 
    array('out' => 'test.pdf', 'imageQuality' => '95'), // global settings
    array(
        array('page' => 'http://www.visionaryrenesis.com/'),
        array('page' => 'http://www.google.com/')
        )); // object settings

?>