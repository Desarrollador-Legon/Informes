<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CarteraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cartera-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'contrato_id') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?= $form->field($model, 'saldo') ?>

    <?= $form->field($model, 'valor_real_total') ?>

    <?php // echo $form->field($model, 'codigo_est_tot') ?>

    <?php // echo $form->field($model, 'cociente') ?>

    <?php // echo $form->field($model, 'cociente_t') ?>

    <?php // echo $form->field($model, 'distrito_id') ?>

    <?php // echo $form->field($model, 'sucursal_id') ?>

    <?php // echo $form->field($model, 'sucursal') ?>

    <?php // echo $form->field($model, 'oficina') ?>

    <?php // echo $form->field($model, 'oficina_id') ?>

    <?php // echo $form->field($model, 'desarrollista_id') ?>

    <?php // echo $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'identificacion_id') ?>

    <?php // echo $form->field($model, 'identificacion_numero') ?>

    <?php // echo $form->field($model, 'identificacion_codigo') ?>

    <?php // echo $form->field($model, 'referencia_pago') ?>

    <?php // echo $form->field($model, 'referencia') ?>

    <?php // echo $form->field($model, 'barrio_id') ?>

    <?php // echo $form->field($model, 'barrio_descri') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'cobrador_id') ?>

    <?php // echo $form->field($model, 'cobrador_nombre') ?>

    <?php // echo $form->field($model, 'jefe_id') ?>

    <?php // echo $form->field($model, 'jefe_descri') ?>

    <?php // echo $form->field($model, 'muncipio') ?>

    <?php // echo $form->field($model, 'departamento') ?>

    <?php // echo $form->field($model, 'dane') ?>

    <?php // echo $form->field($model, 'fijocasa') ?>

    <?php // echo $form->field($model, 'fijotrabajo') ?>

    <?php // echo $form->field($model, 'celularpersonal') ?>

    <?php // echo $form->field($model, 'celulartrabajo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
