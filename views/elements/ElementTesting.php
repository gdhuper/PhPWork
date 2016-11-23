<?php

namespace amirat\hw3\views\elements;

require_once('Element.php');

class ElementTesting extends Element
{
    public function render($data)
    {
        ?>
     <div>
        <h1>Five Thousand - Story title</h1>
     <?php
                    $popular->render($data);
                ?>
            </div>
        <?php
    }
}