<?php
  
  function createUser($name, $email, $gender, $password, $type) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO RegisteredUser(name, email, gender, passwordHash, type) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute(array($name, $email, $gender, password_hash($password), $type));
  }

  function isLoginCorrect($email, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM RegisteredUser 
                            WHERE email = ?");
    $stmt->execute(array($email));
    $result = $stmt->fetch();
    if (!$result)
    	return false;
    if (password_verify($password, $result['passwordhash']))
    	return $result;
    else return false;
  }
  
  function getUserInfo($userID) {
  	global $conn;
  	$stmt = $conn->prepare("SELECT * FROM RegisteredUser WHERE id = ?");
  	$stmt->execute(array($userID));
  	return $stmt->fetch();
  }
  
  function getUsers($start, $perPage) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM RegisteredUser LIMIT ? OFFSET ?");
    $stmt->execute(array($perPage, $start));
    return $stmt->fetchAll();
  }
  
  function getNumberOfUsers() {
    global $conn;
    $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM RegisteredUser");
    $stmt->execute();
    return $stmt->fetch()['total'];
  }

  function getNumberOfStudents(){
    global $conn;
    $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM RegisteredUser WHERE type = 2");
    $stmt->execute();
    return $stmt->fetch()['total'];
  }

    function getNumberOfTeachers(){
    global $conn;
    $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM RegisteredUser WHERE type = 1");
    $stmt->execute();
    return $stmt->fetch()['total'];
  }
  
  function deleteUser($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM RegisteredUser WHERE id = ?");
    $stmt->execute(array($id));
  }
  
  function searchUserFTS($data) {
    global $conn;
    $stmt = $conn->prepare("SELECT name FROM RegisteredUser WHERE to_tsvector('english', name) @@ to_tsquery('english', ?)");
    $stmt->execute(array($data));
    return $stmt->fetchAll();
  }
?>
