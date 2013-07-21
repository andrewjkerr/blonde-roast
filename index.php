<!--
	ROAST is made with love, coffee, and Bootstrap by Andrew Kerr
		He can be found @andrewuf
		And at www.andrewjkerr.com
	
	Bootstrap can be found at http://twitter.github.com/bootstrap/.

	Roast can be found at http://www.andrewjkerr.com/roast/.
	
	Blonde Roast can be found at https://github.com/andrewjkerr/blonde-roast
	And at http://www.andrewjkerr.com/roast/blonde/.

	This file was created in VERSION 1.0.
	This file was updated last in VERSION 1.0.
	
	Big changes in this version:
		- Fixed small bugs.
		- Used jQuery to make the forms a bit more dynamic!
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Blonde Roast | A Static Resume Page Generator</title>
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
	  
	  form    {
		  background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
		  background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
		  margin:auto;
		  position:relative;
		  font-size: 14px;
		  line-height: 24px;
		  text-decoration: none;
		  -webkit-border-radius: 10px;
		  -moz-border-radius: 10px;
		  border-radius: 10px;
		  padding:10px;
		  border: 1px solid #999;
		  border: inset 1px solid #333;
		  -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
		  -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
		  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	  }
	  
	  input    {
		  width:500px;
		  display:block;
		  border: 1px solid #999;
		  height: 25px;
		  -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
		  -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
		  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	  }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
	<link href="favicon.ico" rel="icon" type="image/x-icon" />
    
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
          <a class="brand">Blonde Roast | A Static Resume Page Generator</a>
        </div>
      </div>
    </div>

    <div class="container">
		<form action="roast-gen.php" method="post">
			<p><h3>Name: <input type="text" name="name" id="name" onkeyup='setName();'/></h3></p>
			
			<!-- Education form start -->
			
			<script type="text/javascript">
			// This controls the education forms
			var numEducationForms = 0;
			var educationForm =
						"<p>University: <p><input type='text' name='university" + numEducationForms + "'/></p>" +
						"<p>Degree name: <p><input type='text' name='degreeName" + numEducationForms + "'/></p>" +
						"<p>Graduation date: <p><input type='text' name='gradDate" + numEducationForms + "'/></p>" +
						"<p>GPA: <p><input type='text' name='gpa" + numEducationForms + "'/></p><br>";
						
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
				<div id="eduAdd"><p><code>Add Education Form</code></div>
				<div id="eduSub"><code>Remove Education Form</code></p></div>
			</div>
			<p><input type='hidden' name='numEduForms' id='numEduForms' /></p>
			<!-- Education form end -->
			
			<br />
			<hr />
			
			<!-- Involvement form start -->
			
			<script type="text/javascript">
			// This controls the involvement forms
			var numOrgForms = 0;
			var orgForm = 
				'<p>Organization: <p><input type="text" name="title' + numOrgForms + '"/></p>' +
				'<p>Position: <p><input type="text" name="position' + numOrgForms + '"/></p>' +
				'<p>Date: <p><input type="text" name="date' + numOrgForms + '"/></p>' +
				'<p>Description: <p><input type="text" style="width: 500px; height:200px" name="description' + numOrgForms + '" value="<li>[INSERT ONE LINE OF DESCRIPTION HERE]</li>" /></p>';
				
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
				<div id="orgAdd"><p><code>Add Involvement Form</code></div>
				<div id="orgSub"><code>Remove Involvement Form</code></p></div>
			</div>
			<p><input type='hidden' name='numInvolvement' id='numOrgForms' value='0' readonly /></p>
			<!-- Involvement form end -->
			
			<br />
			<hr />
			
			<!-- Experience form start -->
			
			<script type="text/javascript">
			// This controls the experience forms
			var numExForms = 0;
			var exForm = 
				'<p>Company: <p><input type="text" name="extitle' + numExForms + '"/></p>' +
				'<p>Position: <p><input type="text" name="exposition' + numExForms + '"/></p>' +
				'<p>Date: <p><input type="text" name="exdate' + numExForms + '"/></p>' +
				'<p>Description: <p><input type="text" style="width: 500px; height:200px" name="exdescription' + numExForms + '" value="<li>[INSERT ONE LINE OF DESCRIPTION HERE]</li>" /></p>';
				
			$(document).ready(function(){
				$("#exAdd").click(function(){
					$("#exForms").append('<div id="exForm' + numExForms + '">' + exForm +'</div>');
					numExForms++;
					document.getElementById('numExForms').value = numExForms;
				})
			});

			$(document).ready(function(){
				$("#exSub").click(function(){
					if(numExForms == 0){
						alert("There are already zero experience forms!");
					}
					else{
						numExForms--;
						$("#exForm" + numExForms).remove();
						document.getElementById('numExForms').value = numExForms;
					}
				})
			});
			
			</script>
			
			<div id = "exForms">
				<p><h3><u>EXPERIENCE INFORMATION</u></h3></p>
				<div id="exAdd"><p><code>Add Experience Form</code></div>
				<div id="exSub"><code>Remove Experience Form</code></p></div>
			</div>
			<p><input type='hidden' name='numExperience' id='numExForms' value='0' readonly /></p>
	
			<!-- Experience form end -->
			<br />
			<hr />
			
			<!-- Skills form start -->
			
			<script type="text/javascript">
			// This controls the experience forms
			var numSkillForms = 0;
			var skillForm = 
				'<p><input type="text" style="width:500px" name="skill' + numSkillForms + '"/></p>';
				
			$(document).ready(function(){
				$("#skillAdd").click(function(){
					$("#skillForms").append('<div id="skillForm' + numSkillForms + '">' + skillForm +'</div>');
					numSkillForms++;
					document.getElementById('numSkillForms').value = numSkillForms;
				})
			});

			$(document).ready(function(){
				$("#skillSub").click(function(){
					if(numSkillForms == 0){
						alert("There are already zero skill forms!");
					}
					else{
						numSkillForms--;
						$("#skillForm" + numSkillForms).remove();
						document.getElementById('numSkillForms').value = numSkillForms;
					}
				})
			});
			
			</script>
			
			<div id = "skillForms">
				<p><h3><u>SKILLS INFORMATION</u></h3></p>
				<div id="skillAdd"><p><code>Add Skill Form</code></div>
				<div id="skillSub"><code>Remove Skill Form</code></p></div>
			</div>
			<p><input type='hidden' name='numSkills' id='numSkillForms' value='0' readonly /></p>

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
