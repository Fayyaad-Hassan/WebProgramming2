<?php

	$strUsername = $_POST["username"];
	$day = $_POST["schedule"];

	if ($strUsername != "") {
	    $strHeading = "<h1>Hello " . $_POST["username"] . "</h1>";
	}
	else {
	    $strHeading = "<h1>Hello stranger!</h1> ";
	}
	if ($day == "monday" || $day =="Monday"){
        $events= "<br> Film Class <br> Medieval Literature <br> Physics II";
    }
		elseif ($day == "tuesday" || $day =="Tuesday"){
					$events= "<br> Web Programming 2";
			}
			elseif ($day == "wednesday" || $day =="Wednesday"){
						$events= "<br> Calculus 2 <br> Chemistry 101 Lab";
				}
				elseif ($day == "thursday" || $day =="Thursday"){
							$events= "<br> Computer Science";
					}
					elseif ($day == "friday" || $day =="Friday"){
								$events= "<br> Chemistry 101 lecture";
						}
						elseif ($day == "saturday" || $day =="Saturday"){
									$events= "<br> Arabic Film Class";
							}
							elseif ($day == "sunday" || $day =="Sunday"){
										$events= "<br> Free day!";
								}
    else{
    	echo "please input a valid day. You might have spelled the weekday wrong. Please do not abbreviate.";
    }


	?>

	<html>

	<head>

	<title>Schedule</title>
	</head>
    <body>

<?php
if($day == "monday" || $day == "Monday" || $day == "tuesday" || $day == "Tuesday" || $day == "wednesday" || $day == "Wednesday" || $day == "thursday" || $day == "Thursday" || $day == "friday" || $day == "Friday" || $day == "saturday" || $day == "Saturday" || $day == "Sunday" || $day == "sunday"){
date_default_timezone_set("America/New_York");
echo "Today's date is " . date("Y/m/d");
echo "<br>";
echo "The time is " . date("h:i:sa");
echo $strHeading;
echo "The following events are planned for " .$day .":" .$events;
}
else{
	echo "";
}
?>


	</body>
	</html>
