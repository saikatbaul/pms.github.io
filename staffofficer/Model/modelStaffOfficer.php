<?php 

require_once 'connectionDb.php';

function updateStaffOfficer($uname, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE `staffofficer` SET name = ?, email = ?, gender = ?, phoneNumber = ?, dob = ? WHERE uname = ?";
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
    $selectQuery = "UPDATE `staffofficer` SET image = ? WHERE uname = ?";
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
    $selectQuery = "UPDATE `staffofficer` SET password = ? WHERE uname = ?";
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

function addStaffOfficer($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT INTO `staffofficer` (name, email, uname, password, gender, phoneNumber, dob, image)
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
            ':image' => $data['image']
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    } 
    $conn = null;
    return true;
}

function showStaff($uname)
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `staffofficer` WHERE uname = ?';
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$uname]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
?>
