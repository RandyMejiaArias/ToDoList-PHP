<?php
    include('db.php');
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM task WHERE idtask='$id'";
        $result = mysqli_query($link, $query);
        if(!$result) {
            die("Query failed!");
        }

        $_SESSION['message'] = 'Task deleted succesfully.';
        $_SESSION['message_type'] = 'success';
        header("Location: index.php");
    }
?>