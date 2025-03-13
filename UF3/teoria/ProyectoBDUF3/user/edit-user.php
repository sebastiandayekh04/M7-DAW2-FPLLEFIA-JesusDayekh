<?php
require_once('config.php');

if (!isset($_GET['id'])) {
    header("location: index.php");
    exit();
}

//Corregir la asignacion del id
$id = (int) $_GET['id'];
$result = $mysqli->query("SELECT * FROM USERS WHERE id = $id");

$user = $result->fetch_assoc();

print_r($user);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $mysqli->$_POST['name'];
    $surname = $mysqli->$_POST['surname'];
    $email = $mysqli->$_POST['email'];
    $avatar = $mysqli->$_POST['avatar'];
    $age = $mysqli->$_POST['age'];
    $rol = $mysqli->$_POST['rol'];
    $job = $mysqli->$_POST['job'];
}
$query = "UPDATE USERS SET name = ?, surname = ?, email = ?, avatar = ?, age = ?, rol = ?, job = ? WHERE id";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ssssissi",  $name, $surname, $email, $avatar, $age, $rol, $job);
$stmt->execute();

header("Location:../adminPanel.php");
exit();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit usuario</title>
</head>

<body>
    <form method="POST">

        <label for="Name">Name: </label><br>
        <input type="Name" name="Name" id="Name" value="<?= $user['name'] ?>" required><br>

        <label for="Surname">Surname: </label><br>
        <input type="Surname" name="Surname" id="Surname" value="<?= $user['surname'] ?>" required><br><br>

        <label for="email">Correo electrónico</label><br>
        <input type="email" name="email" id="email" value="<?= $user['email'] ?>" required><br><br>

        <label for="avatar">avatar</label><br>
        <input type="avatar" name="avatar" id="avatar" value="<?= $user['avatar'] ?>" required><br><br>

        <label for="age">Edad </label><br>
        <input type="age" name="age" id="age" value="<?= $user['age'] ?>" required><br><br>

        <label for="rol">rol</label><br>
        <input type="rol" name="rol" id="rol" value="<?= $user['rol'] ?>" required><br><br>

        <label for="job">Trabajo </label><br>
        <input type="job" name="job" id="job" value="<?= $user['job'] ?>" required><br><br>

    </form>
</body>

</html>