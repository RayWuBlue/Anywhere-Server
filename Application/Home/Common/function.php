<?php

function debug($value){
	var_dump($value);
	die();
}

function apiReturn($data){
	echo json_encode($data);
}
function startwith($str,$pattern) {
    if(strpos($str,$pattern) === 0)
          return true; 
    else
          return false;
}
function getAbsUrl($relative_url){
	if (startwith($relative_url,".")) {
		return 'http://'.$_SERVER['SERVER_NAME'].__ROOT__.substr($relative_url, 1);
	}
	else if (startwith($relative_url,"/app")) {
		return 'http://'.$_SERVER['SERVER_NAME'].$relative_url;	
	}
}