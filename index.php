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
			
			// FUNCTION LIST

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

			function didYouPass($gpa){
				if ($gpa >= 75){
					$pass = TRUE;
				}
				else {
					$pass = FALSE;
				}
				return $pass;
			}

			// MAIN PROGRAM 

			$myName = "Teodulfo";
			$message = "Hello";

			$myGrades = array(80, 75, 90, 100, 87);
			$myAverage = 0.0;

			sayHello($message . _SPACER . _BOLDSTART . $myName . _BOLDEND . "!" . _NEWLINE);
			$myAverage = getAverage($myGrades);

			$message = "Your grade point average is";
			sayHello($message . _SPACER . _BOLDSTART . (string)$myAverage . _BOLDEND . _NEWLINE);

			if (didYouPass((float)$myAverage)){
				sayHello( _NEWLINE . "Remarks:" . _SPACER . _BOLDSTART . "Passed" . _BOLDEND . _NEWLINE);
			}
			else {
				sayHello( _NEWLINE . "Remarks:" . _SPACER . _BOLDSTART . "Failed" . _BOLDEND . _NEWLINE);
			}

		?>


	</body>
</html>

