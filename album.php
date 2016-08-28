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
    }

 ?>
