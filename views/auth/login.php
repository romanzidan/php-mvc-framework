<?php

$this->title = 'Login';

use app\core\form\Form;
$form = new Form();
?>
<h1>Login User</h1>
<?= Form::begin('',"post"); ?>
    <?= $form->input($model, 'Email', 'email')->emailField() ?>
    <?= $form->input($model, 'Password', 'password')->passwordField(); ?>

    <button type="submit" class="btn btn-primary">Login</button>
<?= Form::end(); ?>
