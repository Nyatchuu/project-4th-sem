<?php 
    include('includes/header.php');
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-body">

            <?= alertMessage(); ?>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Departure date</th>
                            <th>Return date</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $bookings = getAll('bookings');
                            if (mysqli_num_rows($bookings) > 0) {
                                foreach ($bookings as $bookingitem) {
                                    ?>
                                    <tr>
                                        <td><?= $bookingitem['id']; ?></td>
                                        <td><?= $bookingitem['name']; ?></td>
                                        <td><?= $bookingitem['email']; ?></td>
                                        <td><?= $bookingitem['departure_date']; ?></td>
                                        <td><?= $bookingitem['return_date'] ; ?></td>
                                        <td>
                                            <a href="cancel-booking.php?id=<?= $bookingitem['id']; ?>" class="btn btn-danger btn-sm mx-2" 
                                            onclick="return confirm('Are you sure you want to delete this data?')">
                                                Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="7">No Record Found</td>
                                </tr>
                                <?php
                            }
                        ?>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


<?php 
    include('includes/footer.php');
?>