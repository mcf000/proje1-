<?php
echo "<div style='font-family: Arial, sans-serif; max-width: 600px; margin: 40px auto;'>";
echo "<h2>Gönderilen İletişim Formu Verileri</h2>";
echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 100%; text-align: left;'>";
echo "<tr style='background-color: #f8f9fa;'><th>Form Alanı</th><th>Girilen Veri</th></tr>";

// Formdan gelen tüm verileri döngüyle yakalayıp tabloya yazdırıyoruz
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $anahtar => $deger) {
        // Eğer birden fazla seçim yapılan bir checkbox geldiyse onu da düzgün yazdıralım
        if (is_array($deger)) {
            $deger = implode(", ", $deger);
        }
        echo "<tr>";
        echo "<td><strong>" . htmlspecialchars($anahtar) . "</strong></td>";
        echo "<td>" . htmlspecialchars($deger) . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='2'>Hiçbir veri gönderilmedi.</td></tr>";
}

echo "</table>";
echo "<br><br><a href='iletisim.html' style='padding: 10px 15px; background-color: #6c757d; color: white; text-decoration: none; border-radius: 5px;'>İletişim Sayfasına Geri Dön</a>";
echo "</div>";
?>