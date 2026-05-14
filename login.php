<?php
// Formdan gelen e-posta ve şifreyi alıyoruz
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? ''; // Senin html'de şifre inputunun name="password" olduğunu varsayıyorum, name="sifre" ise burayı ona göre değiştir.

// Senin bilgilerin
$dogru_email = "mehmet.zengince@ogr.sakarya.edu.tr";
$dogru_sifre = "B251210557";

// Şifre kontrolü yapıyoruz
if ($email === $dogru_email && $password === $dogru_sifre) {
    // Bilgiler doğruysa
    echo "<div style='text-align: center; margin-top: 50px; font-family: Arial, sans-serif;'>";
    echo "<h1>Hoşgeldiniz Mehmet Zengince</h1>";
    echo "<p style='color: green;'>Giriş işlemi başarıyla tamamlandı.</p>";
    echo "<a href='index.html' style='padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;'>Ana Sayfaya Git</a>";
    echo "</div>";
} else {
    // Bilgiler yanlışsa veya boşsa JavaScript ile uyarı verip login sayfasına geri yolluyoruz
    echo "<script>
        alert('Hatalı veya boş bilgi girdiniz! Lütfen tekrar deneyin.');
 window.location.href = 'login.html?v=' + Date.now();
    </script>";
}
?>