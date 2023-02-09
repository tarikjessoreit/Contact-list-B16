<?php require('header.php') ?>

<?php
if ($_GET['delteid']) {
    if (isset($_POST['deletebtn'])) {
        $did = $_GET['delteid'];
        $sql = "DELETE FROM $TBL_CONTACT WHERE ID = $did";
        if ($conn->query($sql) === true) {
            header('location:index.php');
        } else {
            $err = "Data added Faild: " . $conn->error;
        }
    }

} else {
    header('location:index.php');
}



?>

<form action="" method="post">
    <input type="submit" name="deletebtn" value="confirm">
</form>

<?php require('footer.php') ?>