<?php
$redis=new redis();
$redis->connect("127.0.0.1","6379");
$redis->set("hello","qiuyang");
echo $redis->get("hello");
$array = array('name'=>'qiuyang','age'=>'23','sex'=>'1');
$array_get=array('name','age','sex');
$redis->mset($array);
var_dump($redis->mget($array_get));

$redis->rPush('key1','A');
$redis->rPush('key1','B');
$redis->rPush('key1','C');

echo $redis->lSize('key1').'<br>';
$redis->rPop('key1');
echo $redis->lSize('key1').'<br>';