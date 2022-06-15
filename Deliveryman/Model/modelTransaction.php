<?php 

require_once 'connectionDb.php';

function showAllPick()
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
function deletePick($orderId)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM `proceedorders` WHERE `orderId` = ?";
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
function addDelivered($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT INTO `transactions` (`orderId`, `staffName`, `totalPrice`, `paymentDate`) VALUES (:orderId, :staffName, :totalPrice, :paymentDate)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':orderId' => $data['orderId'],
            ':staffName' => $data['staffName'],
            ':totalPrice' => $data['totalPrice'],
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
function showAllPicks()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `transactions` ORDER BY `orderId` ASC';
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
?>