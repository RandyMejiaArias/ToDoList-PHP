<?php
    include('db.php');
    
    if(isset($_POST['save_task'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $query = "INSERT INTO task(titletask, descriptiontask) VALUES ('$title', '$description')";
        $result = mysqli_query($link, $query);
        if(!$result) {
            die("Query failed!");
        }

        $_SESSION['message'] = 'Task saved succesfully.';
        $_SESSION['message_type'] = 'success';
        header("Location: index.php");
    }
?>