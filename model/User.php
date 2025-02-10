<?php
function login($email, $password){
    global $conn;
    $sql = "SELECT id, username, email, role_id FROM user WHERE email = :email AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch();
    return $user;
}

function register($username, $email, $password){
    global $conn;
    $sql = "INSERT INTO user(username,email,password) VALUES(:username, :email, :password)";   
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':password',$password);
    $stmt->execute();
    return $conn->lastInsertId();
}

function checkExistUser($username, $email){
    global $conn;
    $sql = "SELECT * FROM user WHERE username = :username OR email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();
    return $user; 
}

function getPasswordByUserId($user_id) {
    global $conn;
    $stmt = $conn->prepare('SELECT password FROM users WHERE id = :id');
    $stmt->execute(['id' => $user_id]);
    return $stmt->fetchColumn();
}

function updatePasswordInDB($user_id, $new_password_hash) {
    global $conn;
    $stmt = $conn->prepare('UPDATE users SET password = :password WHERE id = :id');
    $stmt->execute(['password' => $new_password_hash, 'id' => $user_id]);
}