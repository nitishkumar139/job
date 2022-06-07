<?php

if (isset($_GET['submit'])) {
    $conn = mysqli_connect("localhost", "root", "", "db");
    if (!$conn) {
        echo "Error";
        exit;
    }
    $fname = $_GET['first_name'];
    $lname = $_GET['last_name'];
    $email  = $_GET['email'];
    $job_role =$_GET['job_role'];
    $address =$_GET['address'];
    $city =$_GET['city'];
    $pincode=$_GET['pincode'];
    $file=$_GET['file'];
    $date=$_GET['date'];
    if (empty($fname) or empty($lname) or empty ($email) or empty($job_role) or empty($address) or empty($city) or empty($pincode)) {
        echo "Please fill all fields";
    } else {
        $sql = mysqli_query($conn, "insert into newdb (fname,lname,email,job_role,address,city,pincode,file,date) values ('$fname','$lname','$email','$job_role','$address','$city','$pincode','$file','$date')");
        if (!$sql) echo "insert error";
    }
}
