<?php
include 'connection.php'; 
include 'delete.php';

// mysql connection
$query = "SELECT * FROM `student`";

$results = mysqli_query($conn, $query);
$records = mysqli_num_rows($results);
$msg = "";
if (!empty($_GET['msg'])) {
    $msg = $_GET['msg'];
    $alert_msg = ($msg == "add") ? "New Record has been added successfully!" : (($msg == "del") ? "Record has been deleted successfully!" : "Record has been updated successfully!");
} else {
    $alert_msg = "";
}

?>


<div class="container d-flex justify-content-center">
<?php if (!empty($alert_msg)) {?>
        <div class="alert alert-success"><?php echo $alert_msg; ?></div>
<?php }?>
    <div class="info"></div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Section</th>
                </tr>
            </thead>

            <tbody>
                <?php
if (!empty($records)) {
    while ($row = mysqli_fetch_assoc($results)) {
        ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?>
                                </th>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['age']; ?></td>
                                    <td><?php echo $row['section']; ?></td>
                                    <td>
                                        <!-- <a href="edit_info.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">EDIT</a> -->
                                        <a href="index.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onClick="javascript:return confirm('Do you really want to delete?');" >DELETE</a>
                                    </td>
                                </tr>

                            <?php
}
}
?>



            </tbody>
        </table>
    </div>


