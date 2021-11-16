<?php
    // create an array

$emailAddress = false;
if(isset($_POST['title'])){
    $emailAddress = $_POST['title'];
}
    //$new_games = array();

    $new_movies = array
      (
        array("Joker",2019,"Warner Bros","<img src='images/joker.jpg'>"),
        array("John Wick",2014,"Lionsgate","<img src='images/john_wick.jpg'>"),
        array("Black Dynamite",2009,"ARS Nova","<img src='images/Black_dynamite_poster.jpg'>"),
        array("Back to the Future",1985,"Universal Pictures","<img src='images/back-to-the-future.jpg'>")

    );


    switch ($emailAddress) {
     case "Joker":
     case "joker":
         echo "Title: " .$new_movies[0][0]."<br>Year: ".$new_movies[0][1]."<br>Producer: ".$new_movies[0][2]."<br>".$new_movies[0][3];
         break;
     case "John Wick":
      case "john wick":
         echo "Title: " .$new_movies[1][0]."<br>Year: ".$new_movies[1][1]."<br>Producer: ".$new_movies[1][2]."<br>".$new_movies[1][3];
         break;
     case "Black Dynamite":
     case "black dynamite":
         echo "Title: " .$new_movies[2][0]."<br>Year: ".$new_movies[2][1]."<br>Producer: ".$new_movies[2][2]."<br>".$new_movies[2][3];
         break;
         case "Back to the Future":
         case "back to the future":
             echo "Title: " .$new_movies[2][0]."<br>Year: ".$new_movies[2][1]."<br>Producer: ".$new_movies[2][2]."<br>".$new_movies[2][3];
             break;
     default:
         echo "Movie Not Found 😕";
    }

/*    if($emailAddress == "Far Cry" || $emailAddress == "far cry"){

    //echo "Title: " .$new_games[0][0].": Year: ".$new_games[0][1]."<br>".$new_games[0][2];

echo "Title: " .$new_games[0][0]."<br>Year: ".$new_games[0][1]."<br>Developer: ".$new_games[0][2]."<br>".$new_games[0][3];


}else{

    echo "Game Not Found 😕";
}*/
//echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
?>
