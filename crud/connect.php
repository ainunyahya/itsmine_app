<?php
     define('HOST', 'localhost', '127.0.0.1');
     define('USER', 'root');
     define('PASS', '');
     define('DB', 'itsmine_app');
     $db =  mysqli_connect(HOST, USER, PASS, DB) or die('not connect');

    // if ($db->connect_error) {
    //   $response["status"] = "error";
    //   $response["message"] = "Connection failed: " . $db->connect_error;
    // } else {
    //   $response["status"] = "success";
    //   $response["message"] = "Connected to the database!";
    // }

    // $db->close();
    // header('Content-Type: application/json');
    // echo json_encode($response);
?>