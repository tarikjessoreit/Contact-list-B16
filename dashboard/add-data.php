<?php require('header.php') ?>
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
            <form method="post" action="">
                <div class="form-group mb-4">
                    <label for="uname">Full Name</label>
                    <input type="text" name="uname" class="form-control" id="uname" aria-describedby="emailHelp"
                        placeholder="Enter Name">
                </div>

                <div class="form-group mb-4">
                    <label for="ucontactno">Phone Number</label>
                    <input type="text" name="ucontactno" class="form-control" id="ucontactno" aria-describedby="emailHelp"
                        placeholder="Enter Phone Number">
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
                <button type="submit" class="btn btn-primary">Add Contact</button>
            </form>
        </div>
    </div>
</div>

<?php require('footer.php') ?>