<?php 
	session_start(); 
	$_SESSION["name"] = $_POST["name"];
?>

<!--
	ROAST is made with love, coffee, and Bootstrap by Andrew Kerr
		He can be found @andrewuf
		And at www.andrewjkerr.com
	
	Bootstrap can be found at http://twitter.github.com/bootstrap/.

	Roast can be found at http://www.andrewjkerr.com/roast/.
	
	Blonde Roast can be found at https://github.com/andrewjkerr/blonde-roast
	And at http://www.andrewjkerr.com/roast/blonde/.

	This file was created in VERSION A.1.
	This file was updated last in VERSION A.1.
	
	Big changes in this version:
		- Oh look, I've made something.
		- No, serious, this is the first version so there's a lot of big changes (or none, depending on how you look at it.)
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Blonde Roast | VERSION A.1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="bootstrap/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Favicon goes here>
	<link rel="shortcut icon" href="bootstrap/ico/favicon.png"-->
    
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand">Andrew J. Kerr | Student at the University of Florida</a>
        </div>
      </div>
    </div>

    <div class="container">
		<form action="roast-gen.php" method="post">
			
			<!-- Education form start -->
			<p><h3><u>EDUCATION INFORMATION</u></h3></p>
			<?php
			for($i = 0; $i < $_POST["numEducation"]; $i++){
				echo '<p><u>Education #' . $i . '</u></p>';
				echo '<p>University: <input type="text" name="university' . $i . '"/></p>';
				echo '<p>Degree name: <input type="text" name="degreeName' . $i . '"/></p>';
				echo '<p>Graduation date: <input type="text" name="gradDate' . $i . '"/></p>';
				echo '<p>GPA: <input type="text" name="gpa' . $i . '"/></p>';
			}
			$_SESSION["numEducation"] = $_POST["numEducation"];
			?>
			<!-- Education form end -->
			<br />
			<hr />
			
			<!-- Involvement form start -->
			<p><h3><u>INVOLVEMENT INFORMATION</u></h3></p>
			<?php
			for($i = 0; $i < $_POST["numInvolvement"]; $i++){
				echo '<p><u>Involvement #' . $i . '</u></p>';
				echo '<p>Organization: <input type="text" name="title' . $i . '"/></p>';
				echo '<p>Position: <input type="text" name="position' . $i . '"/></p>';
				echo '<p>Date: <input type="text" name="date' . $i . '"/></p>';
				echo '<p>Description: <input type="text" style="width: 500px; height:200px" name="description' . $i . '" value="<li>[INSERT ONE LINE OF DESCRIPTION HERE]</li>" /></p>';
			}
			$_SESSION["numInvolvement"] = $_POST["numInvolvement"];
			?>
			<!-- Involvement form end -->
			<br />
			<hr />
			
			<!-- Experience form start -->
			<p><h3><u>EXPERIENCE INFORMATION</u></h3></p>
			<?php
			for($i = 0; $i < $_POST["numExperience"]; $i++){
				echo '<p><u>Experience #' . $i . '</u></p>';
				echo '<p>Company: <input type="text" name="extitle' . $i . '"/></p>';
				echo '<p>Position: <input type="text" name="exposition' . $i . '"/></p>';
				echo '<p>Date: <input type="text" name="exdate' . $i . '"/></p>';
				echo '<p>Description: <input type="text" style="width: 500px; height:200px" name="exdescription' . $i . '" value="<li>[INSERT ONE LINE OF DESCRIPTION HERE]</li>" /></p>';
			}
			$_SESSION["numExperience"] = $_POST["numExperience"];
			?>
			<!-- Experience form end -->
			<br />
			<hr />
			
			<!-- Skills form start -->
			<p><h3><u>SKILLS INFORMATION</u></h3></p>
			<?php
			for($i = 0; $i < $_POST["numSkills"]; $i++){
				echo '<p><input type="text" style="width:500px" name="skill' . $i . '"/></p>';
			}
			$_SESSION["numSkills"] = $_POST["numSkills"];
			?>
			<!-- Skills form end -->
			<br />
			
		<input type="submit" />
		</form>
		<hr>
		
      <footer>
        <p>&copy; Andrew Kerr 2013 | Made with <a href="http://twitter.github.com/bootstrap/index.html">Bootstrap</a></p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>

  </body>
</html>
