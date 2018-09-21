<?php include 'Database.php';?>
<?php

$p = $db->posts;



foreach($p as $value)
{
    $id = $value['ID'];

    if(!isset($_GET['id']))
    {
        echo "Not Found";
    }
    else
    {
        if($id == $_GET['id'] )
        {
            echo "<h1>".$value['post_title']."</h1>";
            echo "<p>".$value['post_date']."</p>";
            echo $value['post_content'];
        }
    }
}






?>