<?php
include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];


    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE){
        echo "Berhasil update data user!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<br>
<a href='read.php'>Daftar User</a>
<br><br>
<form method="POST">
    <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
    <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
    <button type="submit">Update User</button>
</form>

