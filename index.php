<?php
namespace amirat\hw3;
#include '../hw3/src/controllers/controller.php';
?>


<!doctype html>

<html>
<head>
		
		<title> Five Thousand Characters </title>
		
		
</head>
<body>

		<h1 align="center"> Five Thousand Characters </h1>

		<div style="text-align:center">
		<a href = "/hw3/src/views/writingpage.php"> Write Something </a>
		</div>

		<div> Check out what people are writing...</div>

		</div>
		<form action="index.php" method="get">
		<input type = "text" placeholder = "Phrase Filter" style="margin: 5px;" name="PFilter"><br>
			
		<select name = "genres" style="margin: 5px;" >
			<option value = "All Genres"> All Genres </option>
			<option value = "Crime"> Crime </option>
			<option value = "Horror"> Horror </option>
			<option value = "Adventure"> Adventure </option>
		</select>
			<input type = "submit" value = "Go" style="margin: 5px;" action="index.php" name = "Go">
		</form>	

		<?php
		include '../hw3/src/controllers/controller.php';
	    #echo "<a href = '/hw3/src/controllers/controller.php'>";

			session_start();
			if (isset($_GET['Go'])) 
			{ 
 			$_SESSION['PFilter'] = $_GET['PFilter'];
 			
 			}

 			
 			
			$varFilter = NULL;
			$varGenre = NULL;


			
			function submit()
			{
			$GLOBALS['varFilter'] =  $_GET['PFilter'];
		
			$GLOBALS['varGenre'] = $_GET['genres'];
			
			}

			

		?>


			
		
		<h3> Highest Rated </h3>
		<ol>
			<?php 
			
			
			if(isset($_GET['Go']))
			{
				
			submit();
			connect_mysql();
			get_HighestRated($GLOBALS['varFilter'], $GLOBALS['varGenre']);
		
			}
			
			?>
		</ol>	
		
		<h3> Most Viewed </h3>
		<ol>
			<?php 
			if(isset($_GET['Go']))
			{
				//submit();
				get_MostReviewed($GLOBALS['varFilter'], $GLOBALS['varGenre']);
			}
			 ?>
		</ol>	
		
		<h3> Newest </h3>
		<ol>
			<?php
			if(isset($_GET['Go']))
			{
				
				//submit();
				get_Newest($GLOBALS['varFilter'], $GLOBALS['varGenre']);
			}
			?>
			 
		</ol>	
		
</body>
</html>		