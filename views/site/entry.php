<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>

<!-- Inicio do Form -->
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->label('Nome'); ?>

    <?= $form->field($model, 'email')->label('Email'); ?>

    <div class="form-group">
        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
    </div>

<!-- Fim do Form -->
<?php ActiveForm::end(); ?>