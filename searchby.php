


















<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>List of users</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php require 'db_connection/database_connection.php'; ?>
<?php
$query = "SELECT first_name, last_name, user_id, bd_year
                FROM users";
$result = $link->query($query);
if(!isset($result)) die("��� ������� �������� ������");
//������� ������ ��� ��������
$users_count = array();
//���� ��� �������� ������ �� ��
//for($i=0; $i<$result->num_rows; $i++){
//    $result->data_seek($i);
//    $row = $result->fetch_row();
//    array_push($users_count, $row);
//}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<div class="main-content white-body">
    <h1>������ �������������</h1>
    <ul>
        <?php
        foreach ($data as $user)
            echo "<li><a href='user_account.php?user_id=". $user['user_id'] ."'>". $user['first_name'] ." ". $user['last_name'] ." - ". $user['bd_year'] ." ��</a></li>"
        ?>
    </ul>
    <p>����������� �� �����: <a href="#">1986</a> <a href="#">2001</a> <a href="#">2030</a> </p>
</div>
</body>
</html>