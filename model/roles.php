<?php 
function addRole($name_role,$conn){
    $sql = "INSERT INTO `roles`(`id_role`, `name_role`) VALUES (NULL,'$name_role')";
    return execute($conn,$sql);
}
function getDataRole($table,$id,$conn){
    $sql = "SELECT * FROM $table WHERE id_role = '$id'";
    $query = execute($conn,$sql);
    if(num_rows($query) == 0){
        $data = 0;
    }else{
       $data = getData($query);
    }
    return $data;
}
function updateRoles($name_role,$id_role,$conn){
    $sql = "UPDATE `roles` SET `name_role`='$name_role' WHERE `id_role`='$id_role'";
    return execute($conn,$sql);
}
function deleteRole($table,$id,$conn){

    try {
        $sql = "DELETE FROM $table WHERE id_role = $id";
        execute($conn,$sql);
        return true;
    } catch (Exception $e) {
        return false;

    }
    
}
?>