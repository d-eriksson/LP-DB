<?php
$Artist = $_POST["Artist"];
$Album = $_POST["Album"];
$Year = $_POST["Year"];
$Info = $_POST["Info"];
$Rating = $_POST["Rating"];
$Songs = $_POST["mytext"];
$Filename= basename( $_FILES['Image']['name']);
$Pic = $_FILES["Image"]["name"];
$Genre = $_POST["Genre"];
$UUID = uniqid();


//This is the directory where images will be saved
 $target = "pics/";
 $target = $target . basename( $_FILES['Image']['name']);



 if(move_uploaded_file($_FILES['Image']['tmp_name'], $target)) {
     //Tells you if its all ok
    echo "The file ". basename( $_FILES['Image']['name']). " has been uploaded, and your information has been added to the directory";
 }

  include 'DBConnect.php';
  	$sql = "INSERT INTO Albums (UUID, Artist, Album, Year, Rating, Info, Pic, Genre) VALUES ('$UUID','$Artist','$Album','$Year','$Rating','$Info','$Filename','$Genre')";
  	if ($conn->query($sql) === TRUE) {
     	echo "New record created successfully";
      	echo $username;
  	} else {
      	echo "Error: " . $sql . "<br>" . $conn->error;
  	}
  	for($k = 0; $k < count($Songs); $k++)
  	{
  		$song = $Songs[$k];
  		$SongNo = $k + 1;

  		$sql = "INSERT INTO Songs (UUID, Song, SongNo) VALUES ('$UUID','$song','$SongNo')";
	  	if ($conn->query($sql) === TRUE) {
	     	echo "New record created successfully";
	      	echo $username;
	  	} else {
	      	echo "Error: " . $sql . "<br>" . $conn->error;
	  	}
  	}



  $conn->close();

 ?>
 <meta http-equiv="refresh" content="0;URL=index.php" />
