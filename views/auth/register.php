<?php

use app\core\form\Form;
$form = new Form();
?>
<h1>Register</h1>
<?= Form::begin('',"post"); ?>
    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'password') ?>
    <?= $form->field($model, 'confirmPassword') ?>

    <button type="submit" class="btn btn-primary">Login</button>
<?= Form::end(); ?>
