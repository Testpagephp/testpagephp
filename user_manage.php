<?php require_once "db_connection/database_connection.php";
mb_internal_encoding("UTF-8");
?>
<?php
class User{
    var $id;
    var $link;
    function User($link){
        $this->link = $link;
    }
    function add($name,$lastname,$year,$bio){
//        if($name||$lastname=""||$year=""||$bio=""){
//            return 0;
//        }else{
        $query="INSERT INTO users(first_name, last_name, bd_year, bio) VALUES('{$name}', '{$lastname}', '{$year}', '{$bio}')";
        $result = $this->link->query($query)
        or die();
        return $result;
        }
//    }
    function delete($id){
        $query = "DELETE FROM users WHERE user_id=".$id."";
        $result = $this->link->query($query)
            or die();
        return $result;
    }
}
?>