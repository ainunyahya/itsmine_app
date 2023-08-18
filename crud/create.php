<?php
    define('HOST', 'localhost', '127.0.0.1');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'itsmine_app');
    $db =  mysqli_connect(HOST, USER, PASS, DB) or die('not connect');

    // cek --------- koneksi backend --------

    // $response = array();

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

    $name_product = $_POST["name_product"];
    $qty_product = $_POST["qty_product"];
    $data = mysqli_query($db, "insert into product set name_product='$name_product', qty_product='$qty_product' ");
    if ($data) {
        echo json_encode([
            'pesan' => 'sukses'
        ]);
    } else {
        echo json_encode([
            'pesan' => 'gagal'
        ]);
    }
    

?>