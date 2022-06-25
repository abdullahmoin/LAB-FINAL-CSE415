
<?php

if (!empty($_GET['id'])) {
    // require connection
    include 'connection.php';

    $student_id = $_GET['id'];
   $del_query = "DELETE FROM `student` WHERE id = '" . $student_id . "'";
   
    $result = mysqli_query($conn, $del_query);
    if ($result) {
        header('location: ./index.php');
    }
}