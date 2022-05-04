<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ServiciosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servicios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'distrito_id') ?>

    <?= $form->field($model, 'distrito') ?>

    <?= $form->field($model, 'departamento') ?>

    <?= $form->field($model, 'municipio') ?>

    <?php // echo $form->field($model, 'tipo_suc') ?>

    <?php // echo $form->field($model, 'desarrollista_id') ?>

    <?php // echo $form->field($model, 'sucursal_id') ?>

    <?php // echo $form->field($model, 'sucursal') ?>

    <?php // echo $form->field($model, 'servicio_id') ?>

    <?php // echo $form->field($model, 'oficina_id') ?>

    <?php // echo $form->field($model, 'oficina') ?>

    <?php // echo $form->field($model, 'cliente_id') ?>

    <?php // echo $form->field($model, 'contrato_id') ?>

    <?php // echo $form->field($model, 'contrato_producto_id') ?>

    <?php // echo $form->field($model, 'cantidad') ?>

    <?php // echo $form->field($model, 'producto') ?>

    <?php // echo $form->field($model, 'producto_id') ?>

    <?php // echo $form->field($model, 'categoria') ?>

    <?php // echo $form->field($model, 'categoria_id') ?>

    <?php // echo $form->field($model, 'referencia_pago') ?>

    <?php // echo $form->field($model, 'nombres') ?>

    <?php // echo $form->field($model, 'solicitud_id') ?>

    <?php // echo $form->field($model, 'solicitud_descri') ?>

    <?php // echo $form->field($model, 'tipo') ?>

    <?php // echo $form->field($model, 'solicitado_at') ?>

    <?php // echo $form->field($model, 'causa_id') ?>

    <?php // echo $form->field($model, 'causa_descri') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'tecnico_id') ?>

    <?php // echo $form->field($model, 'tecnico') ?>

    <?php // echo $form->field($model, 'ejecutado_at') ?>

    <?php // echo $form->field($model, 'barrio_id') ?>

    <?php // echo $form->field($model, 'barrio') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'username_crea') ?>

    <?php // echo $form->field($model, 'tipo_servicio') ?>

    <?php // echo $form->field($model, 'responsable_descri') ?>

    <?php // echo $form->field($model, 'jefe_descri') ?>

    <?php // echo $form->field($model, 'identificacion_id') ?>

    <?php // echo $form->field($model, 'identificacion_numero') ?>

    <?php // echo $form->field($model, 'identificacion_codigo') ?>

    <?php // echo $form->field($model, 'update_by') ?>

    <?php // echo $form->field($model, 'username_act') ?>

    <?php // echo $form->field($model, 'vendedor_id') ?>

    <?php // echo $form->field($model, 'vendedor_nombre') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
