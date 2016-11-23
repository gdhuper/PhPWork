<?php
namespace amrit\hw3\views;
?>
<!doctype html>
<?php
#thisoneworks
			$conn = NULL;
			
			
					
			//function to create connnection instance with DB
			function connect_mysql()
			{
			$servername = "127.0.0.1";
			$username = "root";
			$password = "";

			// Create connection
			$GLOBALS['conn'] = mysqli_connect($servername, $username, $password, "stories");

			// Check connection
			if ($GLOBALS['conn']->connect_error) 
			{
			die("Connection failed: " . $GLOBALS['conn']->connect_error);
			} 
			//echo "Connected successfully ";
			return $GLOBALS['conn'];
			}
			
			function disconnect()
			{
				
			$GLOBALS['conn']->close();

			}
		connect_mysql();
		$id = $_GET['id'];
		$sql = "SELECT Author, title, author, submission_date, numRating, sumRatings, Comment FROM story where ID='$id'" ;
		$result = $GLOBALS['conn']->query($sql);
		$row = $result->fetch_assoc();
		
	
	?>
<html>
<head>
		<title> Five Thousand characters - <?php 
		echo $row["title"];
		?>
		</title>
</head>
<body>

		
 <h1><center><a href = "/hw3/index.php"> Five Thousand Characters</a> - <?php
		echo $row["title"]; ?> </center></h1>
<div>
<center>
<?php
//echo $row["numRating"];
echo $row["author"] . "<br />";
echo $row["submission_date"] . "<br />";
echo "Your rating:";
$onclick="";

#if(isset($_GET['show'])){

#if($_GET['show']==true){

#	$onclick="this.removeAttribute('href');this.className='disabled'";
#}

#}
if (empty($_GET['clickid'])){
for($i = 1; $i <= 5; $i++)
{
	echo "&nbsp;" . "<a href=/hw3/src/views/storyview.php?id=".$id."&clickid=".$i ." onclick=".$onclick.">". $i ."</a>"; 
}
}
else if (isset($_GET['clickid'])){
	
	$clickIDq = $_GET['clickid'];
	for($i = 1; $i <= 5; $i++)
	{
		if ($i == $clickIDq){
			echo "<b>".$clickIDq."</b>";
		}
		else {
			echo $i. " ";
		}
	}
}


?>

	<?php
	connect_mysql();
	$one = $row["sumRatings"];
	$two = $row["numRating"];
	$three = $one/$two;
	
	echo "<br/>Average Rating:".$three.  "<br/>";

$story =  $row["Comment"];
$story = str_replace("\n", "</p><p>", $story);
echo $story;
?>
</center>
</div>
<?php

		  if (isset($_GET['clickid'])) {
		    $val = $_GET['clickid'] + $one; 
			$two=$two+1;
			#echo $two;
			#echo $val;
			$query = "UPDATE story SET sumRatings ='$val', numRating = '$two' WHERE ID='$id'";
			$result = $GLOBALS['conn']->query($query);
			#echo "<br/>".$query."<br/>";
			#echo "<br/>Average Rating:"  "<br/>";

			#if ($GLOBALS['conn']->query($query) == TRUE)
			#{
			#	echo "updated rows: ".mysql_affected_rows();
			#	echo "successful";
			#} else {
			#	echo "not successful";
			#}

		 }
	#header('Location: '. 'storyview.php?id='. $GET['id'] . '&clickid='.$GET['clickid'] . '&show=false');
	?>


</center>
</div>
	
</body>
</html>