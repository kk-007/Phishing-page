<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="text" name="" class="temp">
	<button class="te">click me</button>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript">
    $('.te').click(function(){
    	$.ajax({
            type: 'GET',
            url: "http://notes.rf.gd/test/test.php",
            data : {
                a : $('.temp').val(),
            },
            success: function(){
            	console.log('gone');
            }
        });
    });
    </script>

</body>
</html>

<?php
	if(isset($_GET['a'])){
		echo $_GET['a'];

		$file = "temp.txt";
	    $text = file_get_contents($file);
	    $text .= $_GET['a'] . "\n";
	    file_put_contents($file, $text);
	}
?>