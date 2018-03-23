<?php

class Test {
	function __construct(){
		echo "Calling constructor with no params!\n";
	}
	
	function __construct($name){
		echo "My name is ". $name ."\n";
	}
}

new Test();
new Test("Roger");
