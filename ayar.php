<?php
session_start();
ob_start();
try {
    $db = new PDO(
        "mysql:host=localhost;dbname=VERITABANIADI;charset=utf8","VERITABANIKULLANICIADI","VERITABANISIFRE");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    date_default_timezone_set("Europe/Istanbul");
} catch (PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}
?>  ?>
