<?php require_once "db_connection/database_connection.php";
mb_internal_encoding("UTF-8");
?>
<?php
class User{
    var $link;
    function User($link){
        $this->link = $link;
    }
    function add($name,$lastname,$year,$bio,$photo){
        if($name==""||$lastname==""||$year==""||$bio==""){
            return 0;
        }else{


            $uploaddir = '/uploads/';
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);


        $query="INSERT INTO users(first_name, last_name, bd_year, bio, photo) VALUES('{$name}', '{$lastname}', '{$year}', '{$bio}', '{$photo}')";
        $result = $this->link->query($query)
        or die();
        return $result;
        }
    }
    function delete($id){
        $query = "DELETE FROM users WHERE user_id=".$id."";
        $result = $this->link->query($query)
            or die();
        return $result;
    }
    function show(array $array){
        foreach( $array as $id => $user ){
        $query = "SELECT * FROM users WHERE ".$user."=".$id;
        $result = $this->link->query($query)
            or die();
        return $result->fetch_array(MYSQLI_ASSOC);
        }
    }
    function update($id,$name,$last_name,$year,$bio){
        $query = "UPDATE users
            SET first_name =  '{$name}',
                last_name = '{$last_name}',
                bd_year = '{$year}',
                bio = '{$bio}'
            WHERE user_id = ". $id ."";
        $result = $this->link->query($query)
            or die();
        return $result;
    }
}
?>