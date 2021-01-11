<?php

namespace Faker\Provider\lb_LU;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = [
        'gmail.com', 'hotmail.com', 'yahoo.com',
        'pt.lu', 'vo.lu', 'tango.lu', 'gmail.com',
    ];

    protected static $tld = ['lu', 'com', 'eu', 'net', 'org'];
}
