@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Site Bookmarker</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="../../dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
   <!--  <link href="jumbotron-narrow.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- Optional theme -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

  </head>

  <body onload='fetchBookmarks()'>

    <div class="container">
      <div class="header clearfix">
        <nav>
        </nav>
        <h3 class="text-muted">Bookmarker</h3>
      </div>

      <div class="jumbotron">
        <h2>Bookmark Your Favorite Sites</h2>
        <form id="myForm">
        	<div class="form-group">
        		<label>Site Name</label>
        		<input type="text" class="form-control" id="siteName" placeholder="Website Name">
        	</div>
        	<div class="form-group">
        		<label>Site URL</label>
        		<input type="text" class="form-control" id="siteUrl" placeholder="Website URL">
        	</div>
        	<button type="submit" class="btn btn-primary">Submit</button>
		</form>       
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <div id='bookmarksResults'></div>
        </div>
      </div>

      <footer class="footer">
        <p>&copy; 2017 Jay Nichols</p>
      </footer>

    </div> <!-- /container -->

  
   
	<!-- Latest compiled and minified JavaScript -->
	
  

</body>
</html>
@stop