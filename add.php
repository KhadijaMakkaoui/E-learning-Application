<?php include "./include_Mysql/connection.php";

if (isset($_POST['submit'])) {
    $student_name    = $_POST['Name'];
    $student_email   = $_POST['Email'];
    $student_phone   = $_POST['Phone'];
    $date            = $_POST['Date_addmission'];
    $img_src         = $_POST['img_src'];
    $Query = mysqli_query($conn, "INSERT INTO students(Name, Email, Phone, Date_addmission, img_src) VALUES ('$student_name','$student_email', '$student_phone','$date','$img_src')");
    if ($Query) {
        echo "<script>alert('Student record is successfully inserted!')</script>";
    } else {
        echo "<script>alert('Sorry an error occured!')</script>";
    }
}

?>
<div class="container">

    <div class="modal fade" id="AddForm" aria-labelledby="addForm" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addForm">Addition Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Select student image</label>
                            <input class="form-control" type="file" id="formFile" name="img_src">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" name="Name" class="form-control" placeholder="Enter Name..." required="">
                        </div><!-- form-group -->
                        <div class="form-group mb-2">
                            <input type="email" name="Email" class="form-control" placeholder="Enter Email..." required="">
                        </div><!-- form-group -->
                        <div class="form-group mb-2">
                            <input type="text" name="Phone" class="form-control" placeholder="Enter Phone..." required="">
                        </div><!-- form-group -->
                        <div class="form-group mb-2">
                            <input type="date" name="Date_addmission" class="form-control" placeholder="Enter Date addmission..." required="">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary btn-info text-white">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>