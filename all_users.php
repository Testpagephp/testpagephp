<?php require 'db_connection/database_connection.php'; ?>
<?php
$y_query = "SELECT DISTINCT bd_year FROM users";
$y_list = $link->query($y_query);
$n_year = mysqli_fetch_all($y_list, MYSQLI_ASSOC)
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>List of users</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
if(isset($_REQUEST['year'])){
    $s_year = $_REQUEST['year'];
    $query = "SELECT first_name, last_name, user_id, bd_year
                FROM users WHERE bd_year = $s_year";
    $result = $link->query($query);
    if (!isset($result)) die("При запросе возникла ошибка");
}else {
    $query = "SELECT first_name, last_name, user_id, bd_year
                FROM users";
    $result = $link->query($query);
    if (!isset($result)) die("При запросе возникла ошибка");
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<div class="main-content white-body">
    <h1>Список пользователей</h1>
    <ul>
        <?php
        foreach ($data as $user)
            echo "<li><a href='user_account.php?user_id=". $user['user_id'] ."'>". $user['first_name'] ." ". $user['last_name'] ." - ". $user['bd_year'] ." гр</a></li>"
        ?>
    </ul>
    <p>Сортировать по годам:
        <?php
        foreach($n_year as $year)
            echo "<a href='/all_users.php?year={$year['bd_year']}'>{$year['bd_year']} </a> "
        ?>
    </p>
</div>
</body>
</html>