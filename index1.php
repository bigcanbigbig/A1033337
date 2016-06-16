<?php
	class PostOffice{
		function mailFiler(){
			$myfile = fopen("string.txt", "r");
			echo $myfile;
		}
		function mailRegex(){
			$myfile = fopen("string.txt", "r");
			if($myfile){
			    while(!feof($myfile)) {
			        $fc=fgetc($myfile);
			        if(preg_match($fc,"[a-zA-Z0-9]")){
			        	echo $fc;
			        }
			    }
			}
		}
		function spiltroad(){
			$myfile = fopen("road.txt", "r");

		}
	}
?>