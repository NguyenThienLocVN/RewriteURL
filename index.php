
<?php include 'Database.php';


echo "<pre>";
$p = $db->posts;

?>

<h1>List Blog Post</h1>
<ul>
    <?php foreach($p as $value){
        $url = $value['post_name'].'-'.$value['ID'].".html";
        echo "<li><a href='$url'> ".$value['post_title']." </a></li>";
    } ?>
</ul>

