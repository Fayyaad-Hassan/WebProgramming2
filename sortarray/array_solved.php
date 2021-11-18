<?php
    // create an array
    $new_games = array();

    $games = array_push($new_games,
        "Farcry 4",
        "Metal Gear",
        "Fallout 4",
        "Witcher 3",
        "Batman",
      "Call of duty",
    "Battlefield");

    // count number of items
    $total_items = count($new_games);

    // Sort the array
    sort($new_games);

    // Randomly select an item
    $selected = rand(0, $total_items);

    // echo
    echo ($new_games[$selected]);
?>
