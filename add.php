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

<script type = "text/javascript"src="addField.js"></script>

	</head>
	<body>
<form class="form-horizontal" action="DB.php" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Add Album</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Artist">Artist</label>
  <div class="col-md-4">
  <input id="Artist" name="Artist" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">if no artist "Various"</span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Album">Album</label>
  <div class="col-md-4">
  <input id="Album" name="Album" type="text" placeholder="" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Year">Year</label>
  <div class="col-md-4">
  <input id="Year" name="Year" type="text" placeholder="" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Genre">Genre</label>
  <div class="col-md-4">
  <input id="Genre" name="Genre" type="text" placeholder="" class="form-control input-md">

  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Info">Info</label>
  <div class="col-md-4">
    <textarea class="form-control" id="Info" name="Info"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Rating">Rating</label>
  <div class="col-md-4">
  <input id="Rating" name="Rating" type="text" placeholder="" class="form-control input-md">

  </div>
</div>

<!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Image">Image</label>
  <div class="col-md-4">
    <input id="Image" name="Image" class="input-file" type="file">
  </div>
</div>

<!-- Songs -->

<div class="input_fields_wrap">
    <button class="add_field_button">Add songs</button><br>
    <div style="width:100%;margin-bottom: 20px;display: inline-block;">
    <label class="col-md-4 control-label" for="Image">Song 1</label>
    <div class="col-md-4"><input type="text" name="mytext[]"  class="form-control input-md"></div>
    </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Submit</label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit" value="Upload">Submit</button>
  </div>
</div>

</fieldset>
</form>


</body>
