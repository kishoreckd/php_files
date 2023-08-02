<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create task</title>
</head>
<body>
    <form action="/creatingtask" method="post" enctype="multipart/form-data">

        <label for="Taskname">Task name</label>
        <input type="text" autocomplete="off"  id ="Taskname"name ="Task_name">
        <label for="TaskDescription">Task Description</label>
        <input type="text" id ="TaskDescription"name ="Task_Description">
        <label for="TaskImage">Task images</label>
        <input type="file" name="task[]" multiple="multiple">
        <input type="text" value="<?php echo $projectid?>">
    <button name ="project_id" value ="<?php echo $projectid?>">create</button>
    </form>
    
</body>
</html>