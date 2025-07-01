<?php
// Mengecek apakah data sudah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menyimpan data yang diterima dari form
    $nama = htmlspecialchars($_POST['nama']);
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']); // Pastikan menggunakan hashing untuk keamanan di dunia nyata

    // Menampilkan data yang diterima
    echo "<!DOCTYPE html>";
    echo "<html lang='id'>";
    echo "<head>";
    echo "<meta charset='UTF-8' />";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0' />";
    echo "<title>Konfirmasi Registrasi - BotShop</title>";
    echo "<style>";
    echo "body { font-family: Arial, sans-serif; background: #e0f7fa; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }";
    echo ".confirmation-container { background-color: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15); width: 100%; max-width: 500px; text-align: center; }";
    echo ".confirmation-container h2 { margin-bottom: 20px; color: #004d40; }";
    echo ".confirmation-container table { width: 100%; border-collapse: collapse; margin: 20px 0; }";
    echo ".confirmation-container th, td { padding: 10px; text-align: left; border: 1px solid #ccc; }";
    echo ".confirmation-container button { padding: 12px; background-color: #00796b; color: white; font-size: 16px; border: none; border-radius: 8px; cursor: pointer; }";
    echo ".confirmation-container button:hover { background-color: #004d40; }";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<div class='confirmation-container'>";
    echo "<h2>Konfirmasi Data Registrasi</h2>";
    echo "<table>";
    echo "<tr><th>Nama Lengkap</th><td>" . $nama . "</td></tr>";
    echo "<tr><th>Username</th><td>" . $username . "</td></tr>";
    echo "<tr><th>Email</th><td>" . $email . "</td></tr>";
    echo "<tr><th>Password</th><td>" . str_repeat('*', strlen($password)) . "</td></tr>"; // Sembunyikan password
    echo "</table>";
    echo "<form action='proses_register.php' method='post'>";
    echo "<button type='submit'>Konfirmasi</button>";
    echo "</form>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    echo "Tidak ada data yang diterima.";
}
?>
