<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
}

include 'config.php';

// if (isset($_POST["submit"])) {
//     $full_name = mysqli_real_escape_string($conn, $_POST["full_name"]);
//     $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
//     $cpassword = mysqli_real_escape_string($conn, md5($_POST["cpassword"]));

//     if ($password === $cpassword) {
//         $photo_name = $_FILES["photo"]["name"];
//         $photo_tmp_name = $_FILES["photo"]["tmp_name"];
//         $photo_size = $_FILES["photo"]["size"];
//         $photo_new_name = rand() . $photo_name;

//         if ($photo_size > 5242880) {
//             echo "<script>alert('Photo is very big. Maximum photo uploading size is 5MB.');</script>";
//         } else {
//             $sql = "UPDATE users SET full_name='$full_name', password='$password', photo='$photo_new_name' WHERE id='{$_SESSION["user_id"]}'";
//             $result = mysqli_query($conn, $sql);
//             if ($result) {
//                 echo "<script>alert('Profile Updated successfully.');</script>";
//                 move_uploaded_file($photo_tmp_name, "uploads/" . $photo_new_name);
//             } else {
//                 echo "<script>alert('Profile can not Updated.');</script>";
//                 echo  $conn->error;
//             }
//         }
//     } else {
//         echo "<script>alert('Password not matched. Please try again.');</script>";
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Profile Page - Pure Coding</title>
</head>
<body>
    <div style="text-align: center; margin: 30px;">
        <a href="logout.php" style="padding: 10px 20px; background: #5995fd; color: #fff; text-decoration: none; border-radius: 10px;">Logout</a>
    </div>
</body>
</html>