<?php 

require_once 'connectionDb.php';

function updatecustomer($uname, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE customer SET name = ?, email = ?, gender = ?, phoneNumber = ?, dob = ?, address = ?, postalCode = ?, division = ?, state = ?,  WHERE uname = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$data['name'], $data['email'], $data['gender'], $data['phoneNumber'], $data['address'], $data['postalCode'], $data['division'], $data['state'], $uname]);
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
    $selectQuery = "UPDATE customer SET image = ? WHERE uname = ?";
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
    $selectQuery = "UPDATE customer SET password = ? WHERE uname = ?";
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

function addcustomer($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT INTO customer (name, email, uname, password, gender, phoneNumber, dob, address, postalCode, division, state, image)
    VALUES (:name, :email, :uname, :password, :gender, :phoneNumber, :dob, :address, :postalCode, :division, :state, :image)";
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
			':address' => $data['address'],
			':postalCode' => $data['postalCode'],
			':division' => $data['division'],
			':state' => $data['state'],
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
?>