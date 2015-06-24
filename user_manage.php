<?php require_once "db_connection/database_connection.php"; ?>
<?php
class User{
    var $id;
    var $link;
    function User($user_id, $link){
        $this->id = $user_id;
        $this->link = $link;
    }
    function delete(){
        $query = "DELETE FROM users WHERE user_id={$this->id}";
        $result = $this->link->query($query)
            or die();
        return $result;
    }
}
?>