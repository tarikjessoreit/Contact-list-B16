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
                    <tr>
                        <td>01</td>
                        <td>Mr Jon Abr.</td>
                        <td>017777777</td>
                        <td>email@yahoo.com</td>
                        <td>USA</td>
                        <td>
                            <a href="edit-data.php" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>01</td>
                        <td>Mr Jon Abr.</td>
                        <td>017777777</td>
                        <td>email@yahoo.com</td>
                        <td>USA</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>01</td>
                        <td>Mr Jon Abr.</td>
                        <td>017777777</td>
                        <td>email@yahoo.com</td>
                        <td>USA</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    
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