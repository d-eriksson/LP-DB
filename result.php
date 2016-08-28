<HTML>
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
	<body>
		<div class="albumWrapper">
				<ul>
    <?php
    $servername = "mysql.domain99.com";
    $username = "davideri_WP";
    $password = "134GF1570a";
    $dbname = "davideri_WP";

$search = $_GET['Search'];
$type = $_GET['type'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
  if ($type == "search")
  {
    $query = "SELECT * FROM Albums WHERE Artist LIKE '%$search%' OR Album LIKE '%$search%' OR Genre LIKE '%$search%' OR Year LIKE '$search'";
  }
  else if($type == "showAll")
  {
    $query = "SELECT * FROM Albums";
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
					print("<li><a href='album.php?pageID=$UUID'>");
					if($Pic != null)
					{
					print("<img src=pics/$Pic>");
					}
					else{
					print("<img src=pics/Oidentifierad.png>");
					}

					print("<i></i><div class='hoverinfo'><p>$Artist - $Album</p>");
						print('<marquee behavior="scroll" direction="up" style="  height: 100px;">');
            $query1 = "SELECT * FROM Songs WHERE UUID='$UUID'";
            $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
            while ($row = mysqli_fetch_array($result1))
            {
              $UUID = $row['UUID'];
              $Song = $row['Song'];
              $SongNo = $row['SongNo'];
              //Printa informationen

						print("<p style='font-size: 20px;'>$Song</p>");

            }
						print('</marquee>');
						print('</div></a></li>');
        }
}

        ?>
			</ul>
      </div>
  </body>
