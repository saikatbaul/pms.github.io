<?php 

require_once 'connectionDb.php';




function showAllOrder()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `pendingorders` ORDER BY `orderId` ASC';
    try
    {
        $stmt = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showAllOrders()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `proceedorders` ORDER BY `orderId` ASC';
    try
    {
        $stmt = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}




function addorder($data)
{
	$conn = db_conn();
    $selectQuery = "INSERT INTO `proceedorders` (orderId, staffName, totalPrice, address, phoneNumber, paymentDate)
    VALUES (:orderId, :staffName, :totalPrice, :address, :phoneNumber, :paymentDate)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':orderId' => $data['orderId'],
            ':staffName' => $data['staffName'],
        	':totalPrice' => $data['totalPrice'],
        	':address' => $data['address'],
            ':phoneNumber' => $data['phoneNumber'],
            ':paymentDate' => $data['paymentDate']
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    } 
    $conn = null;
    return true;
}
function deleteOrder($orderId){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `pendingorders` WHERE `orderId` = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$orderId]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}


?>