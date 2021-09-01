<?php

/** @var $model app\models\User; */

use app\core\form\Form;
$form = new Form();
?>
<h1>Login User</h1>
<?= Form::begin('',"post"); ?>
    <?= $form->field($model, 'Email', 'email')->emailField() ?>
    <?= $form->field($model, 'Password', 'password')->passwordField(); ?>

    <button type="submit" class="btn btn-primary">Login</button>
<?= Form::end(); ?>
