<?php


$redis = new Redis();
$redis->connect('localhost', 6379);

// Redis Strings

$redis->set("name", "rohan");
$redis->get("name");

// the below will create a folder and in that folder there will be 2 keys named as city:1 and city:2

$redis->set("city:1", "thane");
$redis->set("city:2", "thane west");
echo $redis->get("city:1");  // produce empty if not used number

print_r($redis->mget(["city:1", "city:2"])); // produce strings from multiple keys using mget 

