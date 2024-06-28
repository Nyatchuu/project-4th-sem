<?php 
    include('includes/header.php');
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    User Lists
                    <a href="users-create.php" class="btn btn-primary float-end">Add Users</a>
                </h4>
            </div>
            <div class="card-body">

            <?= alertMessage(); ?>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone no.</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>name</td>
                            <td>email</td>
                            <td>phone</td>
                            <td>
                                <a href="users-edit.php" class="btn btn-success bth-sm">Edit</a>
                                <a href="users-delete.php" class="btn btn-danger bth-sm mx-2">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


<?php 
    include('includes/footer.php');
?>