<?php

function testTableauNotEmpty($array){
	if (isset($array) && is_array($array)){
		return true;
	}
	return false;
}