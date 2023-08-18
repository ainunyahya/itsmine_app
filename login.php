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

?>

<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    //$username = 'admin';
    //$password = '12345';

    $queryResult = $db->query("SELECT * FROM users
    WHERE username = '".$username."' AND password = '".$password."'");
    $result=array();

    while ($fetchData=$queryResult->fetch_assoc()) {
      $result[]=$fetchData;
    }

    if($result) {
      echo json_encode($result);
    } else {
      echo json_encode('');
    }

?>
