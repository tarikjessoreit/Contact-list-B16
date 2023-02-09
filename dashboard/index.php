<?php require('header.php') ?>
<!-- Container -->
<div class="container">
    <!-- title -->
    <div class="row border-bottom mb-4">
        <div class="col">
            <h1>Dashboard</h1>
        </div>
    </div>

    <!-- content -->
    <div class="row">
        <div class="col">
            <!-- datatable -->
            <table id="allData" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $user_ID = $_COOKIE['userID'];
                    $result = $conn->query("SELECT * FROM $TBL_CONTACT WHERE user_ID = $user_ID");
                    while ($row = $result->fetch_assoc()) { ?>

                        <tr>
                            <td><?php echo $row['ID']?></td>
                            <td><?php echo $row['cont_name']?></td>
                            <td><?php echo $row['cont_phone_no']?></td>
                            <td><?php echo $row['cont_email']?></td>
                            <td><?php echo $row['cont_address']?></td>
                            <td>
                                <a href="edit-data.php?eid=<?php echo $row['ID']?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                <a href="delete.php?delteid=<?php echo $row['ID']?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<?php require('footer.php') ?>