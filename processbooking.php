<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Booking confirmation">
    <meta name="keywords" content="PHP, form, booking">
    <meta name="author" content="Sara Kneina">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php
        // check each value exists before using it (isset)
        if (isset($_POST["firstname"])) { $firstname = $_POST["firstname"]; } else { $firstname = ""; }
        if (isset($_POST["lastname"]))  { $lastname  = $_POST["lastname"]; }  else { $lastname  = ""; }
        if (isset($_POST["age"]))       { $age       = $_POST["age"]; }       else { $age       = ""; }
        if (isset($_POST["species"]))   { $species   = $_POST["species"]; }   else { $species   = ""; }
        if (isset($_POST["food"]))      { $food      = $_POST["food"]; }      else { $food      = ""; }
        if (isset($_POST["bookday"]))   { $bookday   = $_POST["bookday"]; }   else { $bookday   = ""; }
        if (isset($_POST["partysize"])) { $partysize = $_POST["partysize"]; } else { $partysize = ""; }

        // the radio button sends a letter, so turn it into the full name
        if ($species == "M")      { $speciesname = "Human"; }
        elseif ($species == "D")  { $speciesname = "Dwarf"; }
        elseif ($species == "E")  { $speciesname = "Elf"; }
        elseif ($species == "H")  { $speciesname = "Hobbit"; }
        else                      { $speciesname = "Not selected"; }

        // checkboxes only exist in $_POST when ticked
        $booking = "";
        if (isset($_POST["accom"])) { $booking = $booking . "Accommodation "; }
        if (isset($_POST["4day"]))  { $booking = $booking . "Four-day tour "; }
        if (isset($_POST["10day"])) { $booking = $booking . "Ten-day tour "; }
        if ($booking == "")         { $booking = "nothing selected"; }

        echo "<p>Welcome $firstname $lastname !<br>";
        echo "You are now booked on: $booking<br>";
        echo "Species: $speciesname<br>";
        echo "Age: $age<br>";
        echo "Meal Preference: $food<br>";
        echo "Date: $bookday<br>";
        echo "Number of travellers: $partysize</p>";
    ?>
</body>
</html>