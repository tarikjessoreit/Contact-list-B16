<?php require('header.php') ?>

<?php


if (isset($_GET['eid'])) {
    $dataID = $_GET['eid'];

    // Update Data
    if (isset($_POST['updatebtn'])) {
        $user_ID = $_COOKIE['userID'];
        $cont_name = $_POST['uname'];
        $cont_phone_no = $_POST['ucontactno'];
        $cont_email = $_POST['uemail'];
        $cont_address = $_POST['uaddress'];

        $sql = "UPDATE $TBL_CONTACT SET cont_name ='$cont_name', cont_phone_no = '$cont_phone_no', cont_email='$cont_email', cont_address='$cont_address' WHERE ID = $dataID";

        if ($conn->query($sql) === true) {
            $msg = "Data Update Successfull";
        } else {
            $err = "Data Update Faild ";
        }
    }

    // view data
    $user_ID = $_COOKIE['userID'];

    $result = $conn->query("SELECT * FROM $TBL_CONTACT WHERE ID= $dataID AND user_ID = $user_ID");
    $row = $result->fetch_assoc();
} else {
    header('location:index.php');
}




?>
<!-- Container -->
<div class="container">
    <!-- title -->
    <div class="row border-bottom mb-4">
        <div class="col">
            <h1>Edit Contact</h1>
        </div>
    </div>

    <!-- content -->
    <div class="row">
        <div class="col">
            <form method="post" action="">
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

                <div class="form-group mb-4">
                    <label for="uname">Full Name</label>
                    <input type="text" name="uname" class="form-control" id="uname" aria-describedby="emailHelp"
                        placeholder="Enter Name" value="<?php echo $row['cont_name'] ?>">
                </div>

                <div class="form-group mb-4">
                    <label for="ucontactno">Phone Number</label>
                    <input type="text" name="ucontactno" class="form-control" id="ucontactno"
                        aria-describedby="emailHelp" placeholder="Enter Phone Number"
                        value="<?php echo $row['cont_phone_no'] ?>">
                </div>

                <div class="form-group mb-4">
                    <label for="uemail">Email address</label>
                    <input type="email" name="uemail" class="form-control" id="uemail" aria-describedby="emailHelp"
                        placeholder="Enter email" value="<?php echo $row['cont_email'] ?>">
                </div>
                <div class="form-group mb-4">
                    <label for="uaddress">Address</label>
                    <input type="text" name="uaddress" class="form-control" id="uaddress" placeholder="Enter Address"
                        value="<?php echo $row['cont_address'] ?>">
                </div>
                <button type="submit" name="updatebtn" class="btn btn-primary">Update Contact</button>
            </form>
        </div>
    </div>
</div>

<?php require('footer.php') ?>