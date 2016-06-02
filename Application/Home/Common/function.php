<?php

function debug($value){
	var_dump($value);
	die();
}

function apiReturn($data){
	echo json_encode($data);
}
