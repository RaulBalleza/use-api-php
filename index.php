<?php
$url_users = "http://157.245.137.87:3000/users";
$json = file_get_contents($url);
$data = json_decode($json);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Document</title>
</head>

<body>
    <h1>
        USE API REST WITH PHP!
    </h1>
    <form action="" method="GET">
        <input type="text" name="id">
        <button type="submit">Get user data</button>
    </form>
    <div class="api">
    </div>
</body>
<script src="./assets/js/script.js"></script>

</html>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $url = "http://157.245.137.87:3000/user/" . $id;
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    var_dump($data);
}
?>