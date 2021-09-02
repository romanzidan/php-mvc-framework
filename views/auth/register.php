<?php

$this->title = 'Register';

use app\core\form\Form;
$form = new Form();
?>
<h1>Register User</h1>
<?= Form::begin('',"post"); ?>
    <?= $form->input($model, 'Name', 'name'); ?>
    <?= $form->input($model, 'Email Address', 'email')->emailField() ?>
    <?= $form->input($model, 'Password', 'password')->passwordField(); ?>
    <?= $form->input($model, 'Confirm Password', 'confirmPassword')->passwordField(); ?>

    <button type="submit" class="btn btn-primary">Login</button>
<?= Form::end(); ?>
