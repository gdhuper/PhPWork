<?php
namespace amirat\hw3\views;
?>

<!doctype html>

<html>
<body>
<?php
$con = "";
$title= "";
$author = "";
$id = "";
$comment= "";
$genre = "";
               
            

                function connect_database()
                {
                    $servername = "127.0.0.1";
                    $username = "root";
                    $password = "";

                    // Create connection
                    $GLOBALS['con'] = mysqli_connect($servername, $username, $password);

                    // Check connection
                    if ($GLOBALS['con']->connect_error) 
                        {
                            die("Connection failed: " . $GLOBALS['con']->connect_error);
                        } 
                   // echo "Connected successfully ";
            
                }


            function get_data($varId)
            {

               
                connect_database();
                
                $sql = "SELECT Title, Author, Comment, genres, ID FROM stories.story  where ID=$varId";


                $result = $GLOBALS['con']->query($sql);
               

              

                if ($result->num_rows > 0) {
            
                    while($row = $result->fetch_assoc()) {
            
                        $GLOBALS['title'] = $row['Title'];
                        $GLOBALS['author'] = $row['Author'];
                         $GLOBALS['comment'] = $row['Comment'];
                         $GLOBALS['genre'] = $row['genres'];
                         $GLOBALS['id'] = $row['ID'];


                        }
                    }
                }

                function add_Entry($varTitle, $varAuthor, $varId, $varComment, $varGenre)
                {
   
                    connect_database();
                    
                    $len = count($_SESSION['data']['genres']);
                    $arryGen = $_SESSION['data']['genres'];
                    if($len - 1 > 0){
                      
                        for ($i=0; $i < $len; $i++) { 
                         $sql = "INSERT INTO stories.story (Title, Author, ID, Comment, genres)  VALUES ('$varTitle', '$varAuthor', '$varId', '$varComment', '".$arryGen[$i]."')";
                       $result =   $GLOBALS['con']->query($sql);

                                                     } 
                                   }
                    else
                    {
                     $sql = "INSERT INTO stories.story (Title, Author, ID, Comment, genres)  VALUES ('$varTitle', '$varAuthor', '$varId', '$varComment', '".$arryGen[0]."')";
                      $result = $GLOBALS['con']->query($sql);

                    }
                    return $result;     
                   
                }
               session_start();

           
             
             if(count($_POST) > 0) {
                $_SESSION['data'] = $_POST;
                
                header("HTTP/1.1 303 Redirecting");
                header("Location: http://$_SERVER[HTTP_HOST]/hw3/src/views/writingpage.php");
                die();
                }

            if(isset($_SESSION['data']) && empty($_SESSION['data']['Title']) && empty($_SESSION['data']['Author']) && empty($_SESSION['data']['Comment'])&& !empty($_SESSION['data']['Identifier']))
            {
                    
                    get_data($_SESSION['data']['Identifier']);
                    
                session_unset();
            }

             if (isset($_SESSION['data']) && !empty($_SESSION['data']['Title']) && !empty($_SESSION['data']['Author']) && !empty($_SESSION['data']['Comment'])&& !empty($_SESSION['data']['Identifier'])){
                 echo "Saving data in DB...";
                 
                 $status = add_Entry($_SESSION['data']['Title'], $_SESSION['data']['Author'], $_SESSION['data']['Identifier'], $_SESSION['data']['Comment'], $_SESSION['data']['genres']);

                 if($status != NULL)
                 {
                    echo "Entry added successfully";
                 }
                 session_unset();
                 session_destroy();
                }

                




            


?>
<p>
     <h1 align="center"> <a href = "/hw3/index.php"> Five Thousand Characters </a> </h1>
      <form  action="writingpage.php" method="post" > <!--pending-->
        Title:  <input type = "text" placeholder = "Title" style="margin-bottom:5px;margin-left: 10px;" name="Title" value="<?php echo $title; ?>" ><br>
        Author: <input type = "text" placeholder = "Author" style="margin: 5px;" name="Author" value="<?php echo $author; ?>"><br>
        Identifier: <input type = "text" placeholder = "Identifier" style="margin: 5px;" name="Identifier" value="<?php echo $id; ?>"><br>
        <textarea rows ="4" cols = "50" placeholder="Your writing..." name="Comment"><?php echo $comment; ?></textarea><br>

        <select name = "genres[]" style="margin: 5px;" multiple="multiple">
        <?php

         if($genre == "")
        {
            
            echo "<option value = 'Crime'> Crime </option>";
            echo "<option value = 'Horror'> Horror </option>";
            echo "<option value = 'Adventure'> Adventure </option>";
            
        }
        if(count($genre)- 1 > 0)
        {
            if($genre == 'Crime' && $genre == 'Horror' && $genre == 'Adventure')
            {
            echo "<option value = 'Crime' selected='selected'> Crime </option>";
            echo "<option value = 'Horror'> Horror </option>";
            echo "<option value = 'Adventure'> Adventure </option>";
            }
            if($genre == 'Crime' && $genre == 'Horror')
            {
            echo "<option value = 'Crime'> Crime </option>";
            echo "<option value = 'Horror' selected='selected'> Horror </option>";
            echo "<option value = 'Adventure'> Adventure </option>";
            }
            if($genre == 'Crime' && $genre == 'Adventure')
            {
            echo "<option value = 'Crime' > Crime </option>";
            echo "<option value = 'Horror'> Horror </option>";
            echo "<option value = 'Adventure' selected='selected'> Adventure </option>";
            }
             
            

        }
        else
        {
            if($genre == 'Crime')
            {
            echo "<option value = 'Crime' selected='selected'> Crime </option>";
            echo "<option value = 'Horror' > Horror </option>";
            echo "<option value = 'Adventure'> Adventure </option>";
            }
            if($genre == 'Horror')
            {
            echo "<option value = 'Crime'> Crime </option>";
            echo "<option value = 'Horror' selected='selected'> Horror </option>";
            echo "<option value = 'Adventure'> Adventure </option>";
            }
             if($genre == 'Adventure')
            {
            echo "<option value = 'Crime'> Crime </option>";
            echo "<option value = 'Horror> Horror </option>";
            echo "<option value = 'Adventure' selected='selected'> Adventure </option>";
            } 
        }



            ?>
        </select>
            
            <input type = "reset"  style="margin: 5px;" action="writingpage.php" name = "Reset">
            <input type = "submit"  style="margin: 5px;" action="writingpage.php" name = "Submit">

      </form>

    </p>






</body>








</html>