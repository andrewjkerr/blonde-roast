<?php 
	session_start(); 
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["numExperience"] = 0;
	$_SESSION["numInvolvement"] = 0;
	$_SESSION["numSkills"] = 0;
	
?>

<!--
	ROAST is made with love, coffee, and Bootstrap by Andrew Kerr
		He can be found @andrewuf
		And at www.andrewjkerr.com
	
	Bootstrap can be found at http://twitter.github.com/bootstrap/.

	Roast can be found at http://www.andrewjkerr.com/roast/.
	
	Blonde Roast can be found at https://github.com/andrewjkerr/blonde-roast
	And at http://www.andrewjkerr.com/roast/blonde/.

	This file was created in VERSION 0.1.
	This file was updated last in VERSION 0.1.
	
	Big changes in this version:
		- Fixed small bugs.
		- Used jQuery to make the forms a bit more dynamic!
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

	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
    
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
          <a class="brand">Blonde Roast</a>
        </div>
      </div>
    </div>

    <div class="container">
		<form action="roast-gen.php" method="post">
			<!-- Education form start -->
			
			<script type="text/javascript">
			// This controls the education forms
			var numEducationForms = 0;
			var educationForm =
						"<p>University: <input type='text' name='university" + numEducationForms + "'/></p>" +
						"<p>Degree name: <input type='text' name='degreeName" + numEducationForms + "'/></p>" +
						"<p>Graduation date: <input type='text' name='gradDate" + numEducationForms + "'/></p>" +
						"<p>GPA: <input type='text' name='gpa" + numEducationForms + "'/></p>";
						
			$(document).ready(function(){
				$("#eduAdd").click(function(){
					$("#eduForms").append('<div id="eduForm' + numEducationForms + '">' + educationForm +'</div>');
					numEducationForms++;
					document.getElementById('numEduForms').value = numEducationForms;
				})
			});
	
			$(document).ready(function(){
				$("#eduSub").click(function(){
					if(numEducationForms == 0){
						alert("There are already zero education forms!");
					}
					else{
						numEducationForms--;
						$("#eduForm" + numEducationForms).remove();
						document.getElementById('numEduForms').value = numEducationForms;
					}
				})
			});
			</script>
			
			<div id="eduForms">
				<p><h3><u>EDUCATION INFORMATION</u></h3></p>
			</div>
			<div id="eduAdd"><p><code>Add Education Form</code></div>
			<div id="eduSub"><code>Remove Education Form</code></p></div>
			<p><input type='text' id='numEduForms' value='0' readonly /></p>
			<!-- Education form end -->
			
			<br />
			<hr />
			
			<!-- Involvement form start -->
			
			<script type="text/javascript">
			// This controls the organization forms
			var numOrgForms = 0;
			var orgForm = 
				'<p>Organization: <input type="text" name="title' + numOrgForms + '"/></p>' +
				'<p>Position: <input type="text" name="position' + numOrgForms + '"/></p>' +
				'<p>Date: <input type="text" name="date' + numOrgForms + '"/></p>' +
				'<p>Description: <input type="text" style="width: 500px; height:200px" name="description' + numOrgForms + '" value="<li>[INSERT ONE LINE OF DESCRIPTION HERE]</li>" /></p>';
				
			$(document).ready(function(){
				$("#orgAdd").click(function(){
					$("#orgForms").append('<div id="orgForm' + numOrgForms + '">' + orgForm +'</div>');
					numOrgForms++;
					document.getElementById('numOrgForms').value = numOrgForms;
				})
			});

			$(document).ready(function(){
				$("#orgSub").click(function(){
					if(numOrgForms == 0){
						alert("There are already zero involvement forms!");
					}
					else{
						numOrgForms--;
						$("#orgForm" + numOrgForms).remove();
						document.getElementById('numOrgForms').value = numOrgForms;
					}
				})
			});
			
			</script>
			
			<div id = "orgForms">
				<p><h3><u>INVOLVEMENT INFORMATION</u></h3></p>
			</div>
			<div id="orgAdd"><p><code>Add Involvement Form</code></div>
			<div id="orgSub"><code>Remove Involvement Form</code></p></div>
			<p><input type='text' id='numOrgForms' value='0' readonly /></p>
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

  </body>
</html>
