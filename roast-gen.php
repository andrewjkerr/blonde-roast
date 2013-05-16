<?php session_start(); ob_start(); ?>
<!--
	ROAST is made with love, coffee, and Bootstrap by Andrew Kerr
		He can be found @andrewuf
		And at www.andrewjkerr.com
	
	Bootstrap can be found at http://twitter.github.com/bootstrap/.

	Roast can be found at http://www.andrewjkerr.com/roast/.
	
	Blonde Roast can be found at https://github.com/andrewjkerr/blonde-roast
	And at http://www.andrewjkerr.com/roast/blonde/.

	This file was created in VERSION A.1.
	This file was updated last in VERSION 1.0.
	
	Big changes in this version:
		- Switched from relying on PHP to generate the forms to using jQuery :)
-->

<!DOCTYPE html>
<html lang="en">
	<head>
   	 	<meta charset="utf-8">
		<title>Blonde Roast | Web Resume Generator</title>
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
					<a class="brand" href="index.html"> <?php echo $_SESSION["name"]; ?> </a>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="span12"><h1>PREVIEW:</h1></div>
			</div>
			
			<!-- EDUCATION START-->
			<div class="row">
				<div class="span12"><h3>EDUCATION</h3>
					<?php
					for($i = 0; $i < $_SESSION["numEducation"]; $i++){
						$degreeName = "degreeName" . $i;
						$gradDate = "gradDate" . $i;
						$university = "university" . $i;
						$gpa = "gpa" . $i;
						echo "<!-- EDUCATION INFO #" . $i . " START -->\n";
						echo "<div class = \"row\">\n";
							echo "<div class = \"span10\"><h4>" . $_POST[$degreeName] . "</h4></div>\n";
							echo "<div class = \"span10 offset1\">\n";
								echo "<ul><li>" . $_POST[$university] . "</li>\n";
								echo "<li>" . $_POST[$gradDate] . "</li>\n";
								if($_POST[$gpa] != ""){
									echo "<li>GPA: " . $_POST[$gpa] . "</li>\n";
								}
								echo "</ul>\n";
							echo "</div>\n";
						echo "</div>\n";
						echo "<!-- END OF EDUCATION INFO -->\n";
					}
					?>
				</div>
			</div>
			<!-- EDUCATION END -->
			
			<hr />
			
			<!-- INVOLVEMENT START -->
			<div class = "row">
				<div class="span12"><h3>INVOLVEMENT</h3>
					<?php
					for($i = 0; $i < $_SESSION["numInvolvement"]; $i++){
						$title = "title" . $i;
						$position = "position" . $i;
						$date = "date" . $i;
						$description = "description" . $i;
						echo '<!-- INVOLVMENT INFO #' . $i . ' START -->';
						echo "<div class = \"row\">\n";
							echo "<div class = \"span12\"><h4>" . $_POST[$title] . "</h4></div>\n";
							echo "<div class = \"span9 offset1\"><i>" . $_POST[$position] . "</i></div>\n";
							echo "<div class = \"span2\"><i>" . $_POST[$date] . "</i></div>\n";
							echo "<div class = \"span10 offset1\"><ul>" . $_POST[$description] . "</ul></div>\n";
						echo "</div>\n";
						echo "<!-- END OF INVOLVEMENT INFO -->";
					}
					?>
				</div>
			</div>
			<!-- INVOLVEMENT END -->
			<hr />
			
			<!-- EXPERIENCE START -->
			<div class = "row">
				<div class="span12"><h3>EXPERIENCE</h3>
					<?php
					for($i = 0; $i < $_SESSION["numExperience"]; $i++){
						$title = "extitle" . $i;
						$position = "exposition" . $i;
						$date = "exdate" . $i;
						$description = "exdescription" . $i;
						echo '<!-- EXPERIENCE INFO #' . $i . ' START -->';
						echo "<div class = \"row\">\n";
							echo "<div class = \"span12\"><h4>" . $_POST[$title] . "</h4></div>\n";
							echo "<div class = \"span9 offset1\"><i>" . $_POST[$position] . "</i></div>\n";
							echo "<div class = \"span2\"><i>" . $_POST[$date] . "</i></div>\n";
							echo "<div class = \"span10 offset1\"><ul>" . $_POST[$description] . "</ul></div>\n";
						echo "</div>\n";
						echo "<!-- END OF EXPERIENCE INFO -->";
					}
					?>
				</div>
			</div>
			<!-- EXPERIENCE END -->
			<hr />
			
			<!-- SKILLS START -->
			<div class="row">
				<div class="span12"><h3>SKILLS</h3>
					<div class="row">
						<div class="span10 offset1">
							<ul>
							<?php
							for($i = 0; $i < $_SESSION["numSkills"]; $i++){
								$skill = "skill" . $i;
								echo '<li>' . $_POST[$skill] . '</li>';
								echo "\n";
							}
							?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- SKILLS END -->
			<hr />
			
			
			<footer>
				<p>&copy; <?php echo $_SESSION["name"]; ?> 2013 | Made with Roast.</p>
			</footer>

			<?php
			$_SESSION["html"] = ob_get_contents();
			$_SESSION["html"] .= '</div><script src="bootstrap/js/bootstrap.js"></script><script src="bootstrap/js/bootstrap.min.js"></script></body></html>';
			?>
			<hr />
			
			<div class="row">
				<div class="span12"><h1>Like what you see? Here's the code:</h1>
					<p>
						<form>
							<xmp>
								<?php
								echo $_SESSION["html"];
								?>
							</xmp>
						</form>
					</p>
				</div>
			</div>
		</div> <!-- /container -->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>