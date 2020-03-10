<?php
    include('db.php');
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT titletask, descriptiontask, created_at FROM task WHERE idtask='$id'";
        $result = mysqli_query($link, $query);
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $title = $row['titletask'];
            $description = $row['descriptiontask'];
        }

    }
?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit_task.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" placeholder="Task title">
                    </div>
                    <div class="form-goup">
                        <textarea name="description" rows="3" placeholder="Task description" class="form-control"><?php echo $description; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success col-5" name="update">Update</button>
                    <a href="index.php" class="btn btn-danger col-5 float-right">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>