<?php

function __autoload($ClassName){
	require ("MVC/".$ClassName.".php");
}
