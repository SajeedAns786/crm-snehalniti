<?php
// Session Start
session_start();

// code for showing error
// ini_set('display_errors', 0);
// ini_set('log_errors', 0);
// error_reporting(E_ALL);

// connecting database by including connect page
include("../inc/connect.php");

//Fetching Data From Form Of Agent Sign In Page

if (isset($_POST['submit'])) {
  $userId = $_POST['admin_email'];
  $password = $_POST['admin_pass'];
  //Comparing Data With Agencies Table's Data
  $sql = "select * from user where email='$userId' and password='$password'";
  //die($sql);
  $qry = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($qry);
  if ($row) {

    //If Input Data Is Same To Agencies Table Data Then Head To Agent Dashboard Page
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_role'] = $row['type'];
    header('location:../dashboard.php');
  } else {
    //If Input Data Is Not Same To Agencies Table Data Then Head To Agent Register Page
    header('location:../index.php?message=Invalid Username Or Password');
  }
}