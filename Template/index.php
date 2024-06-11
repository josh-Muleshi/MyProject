<?php

    require 'class/Autoloader.php'; 
    Autoloader::register(); 

    $form = new Form($_POST);

?>

<form action="#" method="post">
    <?php
        echo $form->input('username');
        echo $form->input('email');
        echo $form->input('password');
        echo $form->submit();
    ?>
</form>
