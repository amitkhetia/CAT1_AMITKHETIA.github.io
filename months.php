<?php
	$monthList=array('January'=>'31','February' => '28 days, if leap year 29','March' => '30','April' => '30', 'May' => '31','June' => '30','July' => '31','August' => '31','September' => '30','October' => '31','November' => '30','December' => '31');
 
	function createOptions(){		
		foreach($GLOBALS['monthList'] as $month => $days){
			echo "<option value=\"$month\">".strtoupper($month)."</option>";}
	}
?>
<html>
<head>
<title>months</title>
</head>
<body>
	<?php		
		if (isset($_POST['monthSelect'])){
			foreach($GLOBALS['monthList'] as $month => $days) {
				if($month == $_POST['monthSelect'])
					echo "The month of $month has $days days. <br/>";
			}
		}
		echo "Please choose a month: <br/>";
	?>
	<form action="<?php echo"{$_SERVER['PHP_SELF']}";?>" method="POST">		
		<select name="monthSelect" multiple="yes" size="8">
			<?php createOptions(); ?>
		</select>
		<br/><input type="submit" value="Check"/>
	</form>
</body>
</html>