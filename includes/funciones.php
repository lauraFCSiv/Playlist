<?php
require_once 'funcionesBD.php';

/**
 * @param string $name
 * @return mysqli_result|boolean
 */
function getSongsByName($name){
    $conn = openConnectionDB("notabase");
    
    $sql = "select * from songs where name = \"" . $name."\"";
    
   $result = $conn->query($sql);
    
    closeConnection($conn);
    return $result;
    
}

/**
 * Este DockBlock documenta la funcion que recupera las todo los elementos de la tabla songs
 * @return mysqli_result|boolean
 */
function getAllSongs(){
    $conn = openConnectionDB("notabase");
    
    $sql = "select * from songs";
    
    $result = $conn->query($sql);
    
   
    
    closeConnection($conn);
    return $result;
    
}



/**
 * @return boolean
 */
function loginUser($email,$password){
    $conn = openConnectionDB("notabase");
    
    $sql = "select * from usuario where email= \"" . $email."\"";
    
    $result = $conn->query($sql);
  
    closeConnection($conn);
    
    return $result;
 
    
}

