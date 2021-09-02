<?php

use app\core\form\Form;

$this->title = 'Contact';

    $form = new Form;
?>
<h1>Contact Us</h1>
<?= Form::begin('', "post"); ?>
    <?= $form->input($model, 'Subject', 'subject'); ?>
    <?= $form->input($model, 'Email', 'email')->emailField(); ?>
    <?= $form->textArea($model, 'Body', 'body'); ?>

    <button type="submit" class="btn btn-primary">Submit</button>
<?= Form::end(); ?>