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
    $queryResult = $db->query(" SELECT * FROM orders
                                INNER JOIN customer ON orders.customer_id = customer.id
                                INNER JOIN detail_order ON orders.id = detail_order.order_id 
                                INNER JOIN product ON detail_order.product_id = product.id
                                INNER JOIN delivery ON delivery.detail_id = detail_order.id
                                INNER JOIN warehouse ON warehouse.id = delivery.warehouse_id
                                INNER JOIN users ON delivery.id = users.id");
    $result=array();

    while ($fetchData=$queryResult->fetch_assoc()) {
      $result[]=$fetchData;
    }

    if($result) {
      echo json_encode($result);
    } else {
      echo json_encode('gagal');
    }

?>
 
