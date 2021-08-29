<?php

use app\core\form\Form;
$form = new Form();
?>
<h1>Register</h1>
<?= Form::begin('',"post"); ?>
    <?= $form->field($model, 'Nama', 'name') ?>
    <?= $form->field($model, 'Email Address', 'email')->emailField() ?>
    <?= $form->field($model, 'Password', 'password')->passwordField(); ?>
    <?= $form->field($model, 'Confirm Password', 'confirmPassword')->passwordField(); ?>

    <button type="submit" class="btn btn-primary">Login</button>
<?= Form::end(); ?>
