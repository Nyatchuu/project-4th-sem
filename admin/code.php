<?php

require('../config/function.php');
if(isset($_POST['saveUser'])){
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $password = validate($_POST['password']);
    $role = validate($_POST['role']);
    $is_ban = validate($_POST['is_ban']) == true ? 1:0;

    if($name != '' && $phone != '' && $email != '' && $password != '' && $role!= '')
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

if(isset($_POST['updateUser'])){
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $password = validate($_POST['password']);
    $role = validate($_POST['role']);
    $is_ban = validate($_POST['is_ban']) == true ? 1:0;
    
    $userId = validate($_POST['userId']);
    $user = getById('users', $userId);
    if($user['status'] !=200){
        redirect('users-edit.php?id='.$userId,'No such id found.');
    }

    if($name != '' && $phone != '' && $email != '' && $password != '' && $role!= '')
    {
        $query = "UPDATE users SET 
                name='$name',
                email='$email',
                phone='$phone',
                password='$password',
                is_ban='$is_ban',
                role = '$role'
                WHERE id ='$userId'";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('users.php','User or admin updated successfully.');
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