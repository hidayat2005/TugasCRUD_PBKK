<br>
<a href='read.php'>Daftar User</a>
<br><br>
<?php
include 'db.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE){
        echo "Berhasil hapus data user!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>