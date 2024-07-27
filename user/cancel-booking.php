<?php

require '../config/function.php';

$paraResult = checkParamId('id');
if (is_numeric($paraResult)) {
    $bookingId = validate($paraResult);

    $booking = getById('bookings', $bookingId);
    if ($booking['status'] == 200) {
        $bookingDeleteRes = deleteQuery('bookings', $bookingId);

        if ($bookingDeleteRes) {
            redirect('user-bookings.php', 'Booking Deleted Successfully');
        } else {
            redirect('user-bookings.php', 'Something Went Wrong');
        }
    } else {
        redirect('user-bookings.php', $booking['message']);
    }
} else {
    redirect('user-bookings.php', $paraResult);
}

?>