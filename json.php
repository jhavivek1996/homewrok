<?php

$a=array(array("1"=>"Vivek","2"=>"Satish"));
json_encode($a);
echo json_encode($a);
// $b=array("1"=>"Jha");
// print_r($b);

$jd=json_encode($a);
echo"<pre>";
var_dump(json_decode($jd,true));













?>