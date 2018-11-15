<!-- 

Teodulfo Espero
BS Cloud and Systems Administration
Western Governors University 

-->

<! DOCTYPE html>
<html lang="en">
<html>
	<head>	
			<meta charset="utf-8">
			<title>teoespero.com | UDFs - PHP Programming</title>
			<meta name="description" content="">
  			<meta name="author" content="teoespero">
	</head>
	<body>
		<?php

			// define constants
			define("_NEWLINE", "<br>");
			define("_SPACER", " ");
			define("_BOLDSTART", "<strong>");
			define("_BOLDEND", "</strong>");
			define("_ITALICSTART", "<em>");
			define("_ITALICEND", "</em>");
			
			// function lists

			function sayHello($theName){
				echo $theName;
			}

			function getAverage($theGrades){
				$sum = 0.00;
				foreach ($theGrades as $grade) {
					$sum = $sum + $grade;
				}
				return ($sum/sizeof($theGrades));
			}

			$myName = "Teodulfo";
			$message = "Hello";

			$myGrades = array(80, 75, 90, 100, 87);
			$myAverage = 0.0;

			sayHello($message . _SPACER . $myName . _NEWLINE);
			$myAverage = getAverage($myGrades);

			$message = "My grade point average is";
			sayHello($message . _SPACER . (string)$myAverage . _NEWLINE);

		?>


	</body>
</html>

