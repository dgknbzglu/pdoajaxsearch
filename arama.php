<?php
include("ayar.php");
if($_POST){ 
        $gelenveri = $_POST['veri'];  
        $query = $db->prepare('SELECT * FROM TABLOADI WHERE SÜTUNADI LIKE ?');
        $query->execute(array('%'.$gelenveri.'%'));
        $say = $query->rowCount();
        
        if($say < 1) {
            echo '<div class="alert alert-danger" role="alert">Eşleşme bulunamadı.</div>';
        } else {
            echo '<div class="alert alert-success" role="alert">' . $say . ' eşleşme bulundu.</div>';

        while ($cikart = $query->fetch())
            {
                echo "<li>".$cikart['SÜTUNADI']."</li>";
            } 
        }
        
}
?>
