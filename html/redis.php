<?php
//Connecting to Redis server on localhost
$redis = new Redis();
$redis->connect('192.168.99.100', 6379);
echo "Connection to server sucessfully";
//check whether server is running or not
echo "Server is running: " .$redis->ping();
?>
