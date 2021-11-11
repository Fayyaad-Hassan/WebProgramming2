<?php

$number = false;
if(isset($_POST['number'])){
    $number = $_POST['number'];



}

echo 'Your funny number is: ' . $number."<br/>";
echo "Dogs:".($number*7)."<br/>";
echo "Cats:".($number*6)."<br/>";
echo "Humans:".($number*3)."<br/>";
echo "Frogs:".($number*2781)."<br/>";
echo "The creepy man in your basement that refuses to leave your home:".($number*1)."<br/>";

?>
