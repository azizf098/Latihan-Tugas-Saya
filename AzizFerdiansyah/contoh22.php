<html>
    <head><title>Pengolahan Form</title></head>
    <body>
        <form action="" method="POST" name="input">
            Nama Anda : <input type="text" name="nama" required><br>
            <input type="submit" name="Kirim" value="Kirim">
        </form>
    </body>
</html>
<?php
if (isset($_POST['Kirim'])) {
    $nami = $_POST['nama'];
    echo "Nama Anda : <b>$nami</b>";
}
?>