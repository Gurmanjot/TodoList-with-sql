<!DOCTYPE html>

<?php require("conn.php"); ?>

<html>
<head>
    <title>My ToDo App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 style="padding-left:40%">Sql Todo</h1>
        <form class="form-inline" action="add.php" method="POST" style="padding-left:25%;margin-bottom:20px">
            <div class="form-group" >
                <input class="form-control" name="item" type="text" style="width:400px" placeholder="" autofocus required>
            </div>
            <button type="submit" class="btn btn-primary ml-4" >Add</button>
        </form>

<?php   
  $result = mysqli_query($db_handle,"SELECT * FROM task");
?>
 <ul class="list-group">
 <?php while($row = mysqli_fetch_array($result)){  ?>
    <li class="list-group-item">
    <input type="text" class="data" value="<?= $row['caption'] ?>" style="border:none">
    <a href="delete.php?id=<?= $row['id'] ?>" style="float:right">
        <button class="btn btn-dark">Delete</button>
    </a>
    </li>          
</ul> 
 <?php  
       }
         ?>
</div>
</body>
</html>
 

