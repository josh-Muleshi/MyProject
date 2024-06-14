<?php
use App\Classes\Select;
var_dump(new App\Classes\Select('country', ['us' => 'USA', 'ca' => 'Canada'], ['class' => 'dropdown']));

$select = new Select('country', ['us' => 'USA', 'ca' => 'Canada'], ['class' => 'dropdown']);


?>

<h1>Home page</h1>
<?php $select->render() ?>

