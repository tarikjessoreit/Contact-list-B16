<?php require('header.php') ?>
<?php
if (isset($_POST['adddata'])) {
    $user_ID = $_COOKIE['userID'];
    $cont_entry_datetime = date('Y-m-d H:i:s');
    $cont_name = $_POST['uname'];
    $cont_phone_no = $_POST['ucontactno'];
    $cont_email = $_POST['uemail'];
    $cont_address = $_POST['uaddress'];
    $cont_status = "active";
    
    $sql = "INSERT INTO $TBL_CONTACT(user_ID, cont_entry_datetime, cont_name, cont_phone_no, cont_email, cont_address, cont_status) VALUES ($user_ID, '$cont_entry_datetime', '$cont_name', '$cont_phone_no', '$cont_email', '$cont_address', '$cont_status')";
    if ($conn->query($sql) === true) {
        $msg = "Data Added Successfull";
    } else {
        $err = "Data added Faild: " . $conn->error;
    }
}
?>

<!-- Container -->
<div class="container">
    <!-- title -->
    <div class="row border-bottom mb-4">
        <div class="col">
            <h1>Add New Contact</h1>
        </div>
    </div>

    <!-- content -->
    <div class="row">
        <div class="col">

            <!-- show message -->
            <?php if (isset($msg)) { ?>
                <div class="alert alert-success">
                    <?php echo $msg; ?>
                </div>
            <?php } ?>

            <?php if (isset($err)) { ?>
                <div class="alert alert-danger">
                    <?php echo $err; ?>
                </div>
            <?php } ?>

            <!-- form start -->
            <form method="post" action="">
                <div class="form-group mb-4">
                    <label for="uname">Full Name</label>
                    <input type="text" name="uname" class="form-control" id="uname" aria-describedby="emailHelp"
                        placeholder="Enter Name">
                </div>

                <div class="form-group mb-4">
                    <label for="ucontactno">Phone Number</label>
                    <input type="text" name="ucontactno" class="form-control" id="ucontactno"
                        aria-describedby="emailHelp" placeholder="Enter Phone Number">
                </div>

                <div class="form-group mb-4">
                    <label for="uemail">Email address</label>
                    <input type="email" name="uemail" class="form-control" id="uemail" aria-describedby="emailHelp"
                        placeholder="Enter email">
                </div>
                <div class="form-group mb-4">
                    <label for="uaddress">Address</label>
                    <input type="text" name="uaddress" class="form-control" id="uaddress" placeholder="Enter Address">
                </div>
                <button type="submit" name="adddata" class="btn btn-primary">Add Contact</button>
            </form><!-- form end -->
        </div><!-- col end -->
    </div><!-- row end -->
</div>

<?php require('footer.php') ?>