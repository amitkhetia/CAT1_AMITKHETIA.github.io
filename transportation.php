<!DOCTYPE html>
<html>
<head>
	<title>Transportation</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<?php		
		echo "Travel takes many form, wheather across the country, or around the world. <br/>";
		echo "Here is a list of some common modes of transportation: <br/> <br/>";			
 
		if (empty($_POST['userInput'])) {
			$transMode=array ('Automobile','Jet','Train','Ferry');
			$textLabel="<br/>Do you have something to add? <br/>(Please separate entries with a comma): <br/>";
		}															
		else {														
			$tempString1=explode (',',$_POST['transModeArray']);	
			$tempString2=explode (',',$_POST['userInput']);	
			$transMode=array_merge ($tempString1,$tempString2);		
			$textLabel="<br/> wanna add some more?<br/>";
		}
		foreach ($transMode as $transportMode) 
			echo "<li>$transportMode</li>";		

		$tempString1=implode(',',$transMode);	
	?>											
	<form action="" method="post">		
		<?php echo"$textLabel"; ?>
		<input type="text" name="userInput" maxlength="500"/>
		<input type="hidden" name="transModeArray" value="<?php echo"$tempString1"; ?>" /> <br/>
		<input type="submit" value="Add">
	</form>
	</body>
</html>