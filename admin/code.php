<?php

require('../config/function.php');
if(isset($_POST['saveUser'])){
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $password = validate($_POST['password']);
    $role = validate($_POST['role']);
    $is_ban = validate($_POST['is_ban']) == true ? 1:0;

    if($name != '' && $phone != '' && $email != '' && $password != '')
    {
        $query = "INSERT INTO users (name,phone,email,password,is_ban, role) VALUES('$name','$phone','$email','$password','$is_ban','$role')";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('users.php','User or admin added successfully.');
        }
        else{
            redirect('users-create.php','Something went wrong.');
        }

    }
    else{
        redirect('users-create.php', 'Please fill all the input fields');
    }
}

?>