<!DOCTYPE html >
<html>
	<head>
		<title>12th Feb Assignment</title>
	</head>
	
	<body>
	
		<?php
			//get current month
			$month = date('F');
			
			
			if($month == "August" ){
				echo "It's ".$month."; so it's really hot.";
			}
			
			else{
				echo "It's ".$month."; at least not in the peak of the heat.";
			}
		?>
	
	</body>
</html>
