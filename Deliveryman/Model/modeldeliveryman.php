<?php 

require_once 'connectionDb.php';

function updatedeliveryman($uname, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE `deliveryman` SET name = ?, email = ?, gender = ?, phoneNumber = ?, dob = ? WHERE uname = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$data['name'], $data['email'], $data['gender'], $data['phoneNumber'], $data['dob'], $uname]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function updateImage($uname, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE `deliveryman` SET image = ? WHERE uname = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$data['image'],  $uname]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function updatePassword($uname, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE `deliveryman` SET password = ? WHERE uname = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$data['password'],  $uname]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function adddeliveryman($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT INTO `deliveryman` (name, email, uname, password, gender, phoneNumber, dob, image)
    VALUES (:name, :email, :uname, :password, :gender, :phoneNumber, :dob, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':uname' => $data['uname'],
            ':password' => $data['password'],
            ':gender' => $data['gender'],
            ':phoneNumber' => $data['phoneNumber'],
            ':dob' => $data['dob'],
            ':image' => null
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    } 
    $conn = null;
    return true;
}
?>