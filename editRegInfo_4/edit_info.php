<?php

include 'connection.php'; 

if (isset($_POST['submit']) && $_POST['submit'] != '') {
    // require the db connection
    

    $id = (!empty($_POST['id'])) ? $_POST['id'] : '';
    $name = (!empty($_POST['name'])) ? $_POST['name'] : '';
    $age = (!empty($_POST['age'])) ? $_POST['age'] : '';
    $email = (!empty($_POST['section'])) ? $_POST['section'] : '';
    

    if (!empty($id)) {
        // update the record
        $stu_query = "UPDATE `student` SET name='" . $name . "', age='" . $age . "', section= '" . $section;
        $msg = "update";
    } else {
        // insert the new record
        $stu_query = "INSERT INTO `student` (name, age, section) VALUES ('" . $name . "', '" . $age . "', '" . $section . "')";
        $msg = "add";
    }

    $result = mysqli_query($conn, $stu_query);

    if ($result) {
        header('location:/index.php?msg=' . $msg);
    }

}

if (isset($_GET['id']) && $_GET['id'] != '') {
    // require the db connection
    include 'connection.php'; 

    $id = $_GET['id'];
    $stu_query = "SELECT * FROM `student` WHERE id='" . $id . "'";
    $stu_res = mysqli_query($conn, $stu_query);
    $results = mysqli_fetch_row($stu_res);
    $name = $results[1];
    $age = $results[2];
    $section = $results[3];
    

} else {
    $name = "";
    $age = "";
    $section = "";
    $id = "";
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
<body>

    <div class="container">
        <div class="formdiv">
        <div class="info"></div>
        <form method="POST" action="">

            <div class="form-group row">
                <label for="name" class="col-form-label">Name</label>
                
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php echo $name; ?>">
        
            </div>

            <div class="form-group row">
            <label for="age" class=" col-form-label">Age</label>
            <input type="number" value="<?php echo $age; ?>" name="age" class="form-control" id="age" placeholder="Age">
            </div>

            <div class="form-group row">
                <label for="section" class="col-sm-3 col-form-label">Section</label>
                
                <input type="section" value="<?php echo $section; ?>" name="section" class="form-control" id="section" placeholder="Section">
                

            </div>

            
            <div class="form-group row">
                <div class="col-sm-7">
                <input type="hidden" name="student_id" value="<?php echo $id; ?>">
                <input type="submit" name="submit" class="btn btn-success" value="SUBMIT" />
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>