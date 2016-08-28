<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>LPDB</title>

  <!-- Bootstrap -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<?php
include 'DBConnect.php';
$pageID = $_GET[pageID];
if($pageID == "Random"){
    $query = "SELECT * FROM Albums ORDER BY RAND() LIMIT 1";
}
else{
   $query = "SELECT * FROM Albums WHERE UUID = '$pageID'";
}

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    while ($row = mysqli_fetch_array($result))
    {
      $UUID = $row['UUID'];
      $Artist = $row['Artist'];
      $Album = $row['Album'];
      $Year = $row['Year'];
      $Rating = $row['Rating'];
      $Rating = $Rating . "/10";
      $Info = $row['Info'];
      $Pic = $row['Pic'];
      $Genre = $row['Genre'];
      //Printa informationen
      print("<div style='width:50%;float: left;min-width: 410px;'>");
      print ("<img src=pics/$Pic width='400px'>");
      print ("</div>");
      print("<div style='width:50%;float: left;min-width: 410px;'>");
      print ("<h1> $Artist </h1>");
      print ("<h3> $Album - $Year </h3>");
      print ("<p>$Rating</p>");
      print ("<p>$Genre</p>");
      print ("<p>$Info</p>");

      print("<ol>");
        $query1 = "SELECT * FROM Songs WHERE UUID ='$UUID'";
        $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
        while ($row = mysqli_fetch_array($result1))
        {
          $UUID = $row['UUID'];
          $Song = $row['Song'];
          $SongNo = $row['SongNo'];
          //Printa informationen
          print("<li>$Song</li>");


        }
        print("</ol>");
        print ("</div>");
        print('<button id="singlebutton" name="singlebutton" formaction="alter.php" class="btn btn-primary" type="submit" value="$UUID">Alter Information</button>');
    }
 ?>
