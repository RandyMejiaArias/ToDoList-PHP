<!---- Connection to DB ---->
<?php include("db.php") ?>

<!---- HTML Header ---->
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
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
        </div>
    </div>
</div>

<!---- HTML Footer ---->
<?php include("includes/footer.php") ?>