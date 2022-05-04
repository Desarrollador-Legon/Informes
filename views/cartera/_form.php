<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cartera */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cartera-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'contrato_id')->textInput() ?>

    <?= $form->field($model, 'cantidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saldo')->textInput() ?>

    <?= $form->field($model, 'valor_real_total')->textInput() ?>

    <?= $form->field($model, 'codigo_est_tot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cociente')->textInput() ?>

    <?= $form->field($model, 'cociente_t')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'distrito_id')->textInput() ?>

    <?= $form->field($model, 'sucursal_id')->textInput() ?>

    <?= $form->field($model, 'sucursal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oficina')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oficina_id')->textInput() ?>

    <?= $form->field($model, 'desarrollista_id')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'identificacion_id')->textInput() ?>

    <?= $form->field($model, 'identificacion_numero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'identificacion_codigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referencia_pago')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'barrio_id')->textInput() ?>

    <?= $form->field($model, 'barrio_descri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cobrador_id')->textInput() ?>

    <?= $form->field($model, 'cobrador_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jefe_id')->textInput() ?>

    <?= $form->field($model, 'jefe_descri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'muncipio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departamento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dane')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fijocasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fijotrabajo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'celularpersonal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'celulartrabajo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
