<div class="form">
<?php echo CHtml::beginForm(); ?>

<div class="row">
        <?php echo CHtml::activeLabel($model,'username'); ?>
        <?php echo CHtml::activeTextArea($model,'username') ?>
    </div>
    <div class="row submit">
        <?php echo CHtml::submitButton('Enviar'); ?>
    </div>