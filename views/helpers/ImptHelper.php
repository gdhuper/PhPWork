<?php

namespace amirat\hw3\views\helpers;
require_once("Helper.php");

class ImptHelper extends Helper
{
    public function render($data){

           
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

}
?>