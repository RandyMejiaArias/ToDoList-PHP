<!---- Connection to DB ---->
<?php include("db.php") ?>

<!---- HTML Header ---->
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <!---- Add Task Form ---->
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Task title" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="3" class="form-control" placeholder="Task description"></textarea>
                    </div>
                    <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save">
                </form>
            </div>
            
            <!---- Messages ---->
            <?php
                if(isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
            <?php session_unset(); } ?>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "SELECT idtask, titletask, descriptiontask, created_at FROM task";
                    $result_tasks = mysqli_query($link, $query);
                    while($row = mysqli_fetch_array($result_tasks)) { ?>
                        <tr>
                            <td><?php echo $row['titletask'] ?></td>
                            <td><?php echo $row['descriptiontask'] ?></td>
                            <td><?php echo $row['created_at'] ?></td>
                            <td>
                                <a href="edit_task.php?id=<?php echo $row['idtask'] ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                <a href="delete_task.php?id=<?php echo $row['idtask'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!---- HTML Footer ---->
<?php include("includes/footer.php") ?>