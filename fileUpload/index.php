

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="upload">
</form>


<?php
require 'connection.php';
$app['db'] = (new Database())->db;

$allData = $app['db']->query("SELECT * FROM upload");
$allData = $allData->fetchAll();

foreach ($allData as $key=>$value){
//    print_r($value["file_path"] );
    ?>
    <img src="<?php echo $value["file_path"]?>">
    <?php
}
?>


