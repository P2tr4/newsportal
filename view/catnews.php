<?php
ob_start();
?>
<h1>Uudised (kategogrii)</h1>
<br>

<?php
ViewNews::NewsByCategory($arr);
$content = ob_get_clean();
include_once 'view/layout.php';

?>