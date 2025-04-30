<?php ob_start() ?>
<h2>404 Ошибка</h2>
<article>

    <h3>404 ошибка - это что такое?</h3>
<p>По завершению URL страница не найдена</p>

</article>
<?php $content = ob_get_clean();    ?>
<?php include "viewAdmin/templates/layout.php";