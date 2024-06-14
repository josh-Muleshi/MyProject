<?php
require 'Select.php';
$select = new Select('country', ['us' => 'USA', 'ca' => 'Canada'], ['class' => 'dropdown']);
?>

<h1>Home page</h1>
<?= $select->render() ?>