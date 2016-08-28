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

        <form class="form-horizontal" action="result.php" method="get" enctype="multipart/form-data">
        <fieldset>
                <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Search"></label>
          <div class="col-md-4">
          <input id="Search" name="Search" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="type"></label>
          <div class="col-md-4">
            <button id="type" name="type" class="btn btn-primary" type="submit" value="search">Search</button>
          </div>
        </div>

        </fieldset>
        </form>


</body>
