<?php #namespace amirat\hw3\controllers; ?>
<?php
			$conn = NULL;
			
			
					
			//function to create connnection instance with DB
			function connect_mysql()
			{
			$servername = "127.0.0.1";
			$username = "root";
			$password = "";

			// Create connection
			$GLOBALS['conn'] = new mysqli($servername, $username, $password, "stories");

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
			
			
			function get_HighestRated($varFilter, $varGenre)
			{
			if(empty($varFilter))
			{
				if($varGenre == 'All Genres')
				{
			//select Title, rating from story order by rating DESC limit 10;
			$sql = "SELECT Title, rating, genres, link, ID FROM stories.story ORDER BY rating DESC LIMIT 10";
			$result = $GLOBALS['conn']->query($sql);


			if ($result->num_rows > 0) {
			// output data of each row
			
			$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Rating&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo "<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["rating"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";


			
			echo "<br />\n";
			
			}
				echo "</ol>";
			}
			
			else 
			{
					echo "0 results";
			}
			}
			
			elseif ($varGenre == "Crime")
			{
				$sql = "SELECT Title, rating, genres, link, ID FROM stories.story where genres='Crime' ORDER BY rating DESC LIMIT 10";
			$result = $GLOBALS['conn']->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
			
			$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Rating&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo "<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["rating"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";
	
			
			echo "<br />\n";

			
			
			}
				echo "</ol>";
			} 

			else {
					echo "0 results";
				}
			}
				
			
			
			elseif ($varGenre == "Horror")
			{
				$sql = "SELECT Title, rating, genres, link, ID FROM stories.story where genres='Horror' ORDER BY rating DESC LIMIT 10";
			$result = $GLOBALS['conn']->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
			$i = 1;
			$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Rating&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo"<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["rating"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";
			
			echo "<br />\n";

			
			
			}
				echo "</ol>";
			} 

			else {
					echo "0 results";
				}
			}
			
			elseif ($varGenre == "Adventure")
			{
				$sql = "SELECT Title, rating, genres, link, ID FROM stories.story where genres='Adventure' ORDER BY rating DESC LIMIT 10";
			$result = $GLOBALS['conn']->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
			$i = 1;
			$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Rating&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo "<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["rating"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";
			
			
			echo "<br />\n";

			
			
			}
			echo "</ol>";
			} else {
					echo "0 results";
				}
			}
				
			
			
			else{
				
			
			$sql = "SELECT Title, rating, genres, link, ID FROM stories.story ORDER BY rating DESC LIMIT 10";
			$result = $GLOBALS['conn']->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
			$i = 1;
			$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Rating&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo "<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["rating"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";

			echo "<br />\n";

			
			
							}
							echo "</ol>";

			} 

			else {
					echo "0 results";
				}
			
			
			
			}
			}
			elseif (isset($varFilter))
			{
				//when there is phrase filter 
				if($varGenre == 'All Genres')
				{
					getHighestWithFilter($varFilter, $varGenre);
				}
				else
				{
					getHighestWithFilter($varFilter, $varGenre);
				}
			}
			}
			
			
			
			function getHighestWithFilter($varFilter, $varGenre)
			{
				 
			$pieces = explode(" ", $varFilter);
				if($varGenre == 'All Genres')
				{
						
				
				$sql = "SELECT Title, rating, genres, link, ID FROM stories.story where Title like '%" .$varFilter ."%' ORDER BY rating DESC LIMIT 10";
				$result = $GLOBALS['conn']->query($sql);

				if ($result->num_rows > 0) {
				// output data of each row
				$i = 1;
				$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Rating&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
				echo $txt1;
				echo "<br />\n";

				echo"<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["rating"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";
				echo "<br />\n";

				
				
							}
							echo "</ol>";


				} 

				else {
					echo "0 results";
				}
				}
				else
				{
						
				
				$sql = "SELECT Title, rating, genres, link, ID FROM stories.story where Title like '%" .$varFilter ."%' and genres='".$varGenre."' ORDER BY rating DESC LIMIT 10";
				$result = $GLOBALS['conn']->query($sql);

				if ($result->num_rows > 0) {
				// output data of each row
				$i = 1;
				$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Rating&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo"<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["rating"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=" . $row["ID"] ."> Link to Story </a>"."</li>";
				
				echo "<br />\n";

				
				
							}

							echo "</ol>";
				} else {
					echo "0 results";
				}
				}
			}
			
			
			
			
			function get_MostReviewed ($varFilter, $varGenre)
			{
				if(empty($varFilter))
			{
				if($varGenre == 'All Genres')
				{
			
			$sql = "SELECT Title, views, genres, link,ID FROM stories.story ORDER BY views DESC LIMIT 10";
			$result = $GLOBALS['conn']->query($sql);

			if ($result->num_rows > 0) {
			
			$i = 1;
			$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Views&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo"<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["views"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";
			echo "<br />\n";

			$i++;
			
							}

							echo"</ol>";
			} else {
					echo "0 results";
				}
			}
			
			
			elseif ($varGenre == "Crime")
			{
				$sql = "SELECT Title, views, genres, link, ID FROM stories.story where genres='Crime' ORDER BY views DESC LIMIT 10";
			$result = $GLOBALS['conn']->query($sql);

			if ($result->num_rows > 0) {
			
			$i = 1;
			$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Views&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo"<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["views"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";
			echo "<br />\n";

			$i++;
			
							}

							echo"</ol>";
			} else {
					echo "0 results";
				}
			}
			
			elseif ($varGenre == "Horror")
			{
				$sql = "SELECT Title, views, genres, link, ID FROM stories.story where genres='Horror' ORDER BY views DESC LIMIT 10";
			$result = $GLOBALS['conn']->query($sql);

			if ($result->num_rows > 0) {
			
			$i = 1;
			$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Views&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo"<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["views"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";
			echo "<br />\n";

			$i++;
			
							}

							echo"</ol>";
			} else {
					echo "0 results";
				}
			}
			
			
			elseif ($varGenre == "Adventure")
			{
				$sql = "SELECT Title, views, genres, link, ID FROM stories.story where genres='Adventure' ORDER BY views DESC LIMIT 10";
			$result = $GLOBALS['conn']->query($sql);

			if ($result->num_rows > 0) {
			
			$i = 1;
			$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Views&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo"<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["views"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";
			echo "<br />\n";

			$i++;
			
							}

							echo"</ol>";
			} else {
					echo "0 results";
				}
			}
			
			
			}
			
			
			elseif (isset($varFilter))
			{
				//when there is phrase filter 
				if($varGenre == 'All Genres')
				{
					getHighestViewWithFilter($varFilter, $varGenre);
				}
				else
				{
					getHighestViewWithFilter($varFilter, $varGenre);
				}
			}
			}
			
			function getHighestViewWithFilter($varFilter, $varGenre)
			{
				 
			$pieces = explode(" ", $varFilter);
				if($varGenre == 'All Genres')
				{
						
				
				$sql = "SELECT Title, views, genres, link, ID FROM stories.story where Title like '%" .$varFilter ."%' ORDER BY views DESC LIMIT 10";
				$result = $GLOBALS['conn']->query($sql);

				if ($result->num_rows > 0) {
				// output data of each row
				$i = 1;
				$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Views&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo "<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["views"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";
				echo "<br />\n";

				$i++;
				
							}

							echo"</ol>";
				} else {
					echo "0 results";
				}
				}
				else
				{
							
				
				$sql = "SELECT Title, views, genres, link, ID FROM stories.story where Title like '%" .$varFilter ."%' and genres='".$varGenre."' ORDER BY views DESC LIMIT 10";
				$result = $GLOBALS['conn']->query($sql);

				if ($result->num_rows > 0) {
				// output data of each row
				$i = 1;
				$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Views&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo"<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["views"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";
				echo "<br />\n";

				$i++;
				
							}

							echo"</ol>";
				} else {
					echo "0 results";
				}
				}
			}
			
			
			function get_Newest ($varFilter, $varGenre)
			{
				if(empty($varFilter))
			{
				if($varGenre == 'All Genres')
				{
			
			$sql = "SELECT Title, submission_date, genres, link, ID FROM stories.story ORDER BY submission_date DESC LIMIT 10";
			$result = $GLOBALS['conn']->query($sql);

			if ($result->num_rows > 0) {
			
			$i = 1;
			$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo"<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["submission_date"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";
			echo "<br />\n";

			$i++;
			
							}

							echo"</ol>";
			} else {
					echo "0 results";
				}
			}
			
			elseif ($varGenre == "Crime")
			{
				$sql = "SELECT Title, submission_date, genres, link, ID FROM stories.story where genres='Crime' ORDER BY submission_date DESC LIMIT 10";
			$result = $GLOBALS['conn']->query($sql);

			if ($result->num_rows > 0) {
			
			$i = 1;
			$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo"<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["submission_date"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";
			echo "<br />\n";

			$i++;
			
							}

							echo"</ol>";
			} else {
					echo "0 results";
				}
			}
			
			elseif ($varGenre == "Horror")
			{
				$sql = "SELECT Title, submission_date, genres, link, ID FROM stories.story where genres='Horror' ORDER BY submission_date DESC LIMIT 10";
			$result = $GLOBALS['conn']->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
			$i = 1;
			$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo"<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["submission_date"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";
			echo "<br />\n";

			$i++;
			
							}

							echo "</ol>";
			} else {
					echo "0 results";
				}
			}
			
			elseif ($varGenre == "Adventure")
			{
				$sql = "SELECT Title, submission_date, genres, link, ID FROM stories.story where genres='Adventure' ORDER BY submission_date DESC LIMIT 10";
			$result = $GLOBALS['conn']->query($sql);

			if ($result->num_rows > 0) {
			
			$i = 1;
			$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo"<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["submission_date"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";
			echo "<br />\n";

			$i++;
			
							}

							echo"</ol>";
			} else {
					echo "0 results";
				}
			}
			}
			
			elseif (isset($varFilter))
			{
				 
				if($varGenre == 'All Genres')
				{
					getNewestWithFilter($varFilter, $varGenre);
				}
				else
				{
					getNewestWithFilter($varFilter, $varGenre);
				}
			}
			}
			
			function getNewestWithFilter($varFilter, $varGenre)
			{
				 
			$pieces = explode(" ", $varFilter);
				if($varGenre == 'All Genres')
				{
					
				
				$sql = "SELECT Title, submission_date, genres, link, ID FROM stories.story where Title like '%" .$varFilter ."%' ORDER BY submission_date DESC LIMIT 10";
				$result = $GLOBALS['conn']->query($sql);

				if ($result->num_rows > 0) {
				// output data of each row
				$i = 1;
				$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo"<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["submission_date"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";
				
				echo "<br />\n";

				$i++;
				
							}

							echo "</ol>";
				} else {
					echo "0 results";
				}
				}
				else
				{
							
				
				$sql = "SELECT Title, submission_date, genres, link, ID FROM stories.story where Title like '%" .$varFilter ."%' and genres='".$varGenre."' ORDER BY submission_date DESC LIMIT 10";
				$result = $GLOBALS['conn']->query($sql);

				if ($result->num_rows > 0) {
				// output data of each row
				$i = 1;
				$txt1 = sprintf("%5s%40s%40s%40s%40s","No.&nbsp;&nbsp;","Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Genres&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Story Link&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			echo $txt1;
			echo "<br />\n";

			echo "<ol>";

			while($row = $result->fetch_assoc()) {
			echo "<li>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["Title"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .  $row["submission_date"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["genres"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<a href = /hw3/src/views/storyview.php?id=".$row["ID"]."> Link to Story </a>"."</li>";
				
				echo "<br />\n";

				$i++;
				
							}

							echo"</ol>";
				} else {
					echo "0 results";
				}
				}
			}
				
			
		?>
		