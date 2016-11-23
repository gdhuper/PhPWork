<?php

namespace amirat\hw3\views\helpers;
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
