<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Servicios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servicios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'distrito_id')->textInput() ?>

    <?= $form->field($model, 'distrito')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departamento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'municipio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_suc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desarrollista_id')->textInput() ?>

    <?= $form->field($model, 'sucursal_id')->textInput() ?>

    <?= $form->field($model, 'sucursal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'servicio_id')->textInput() ?>

    <?= $form->field($model, 'oficina_id')->textInput() ?>

    <?= $form->field($model, 'oficina')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cliente_id')->textInput() ?>

    <?= $form->field($model, 'contrato_id')->textInput() ?>

    <?= $form->field($model, 'contrato_producto_id')->textInput() ?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <?= $form->field($model, 'producto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'producto_id')->textInput() ?>

    <?= $form->field($model, 'categoria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoria_id')->textInput() ?>

    <?= $form->field($model, 'referencia_pago')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'solicitud_id')->textInput() ?>

    <?= $form->field($model, 'solicitud_descri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'solicitado_at')->textInput() ?>

    <?= $form->field($model, 'causa_id')->textInput() ?>

    <?= $form->field($model, 'causa_descri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tecnico_id')->textInput() ?>

    <?= $form->field($model, 'tecnico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ejecutado_at')->textInput() ?>

    <?= $form->field($model, 'barrio_id')->textInput() ?>

    <?= $form->field($model, 'barrio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'username_crea')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_servicio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'responsable_descri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jefe_descri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'identificacion_id')->textInput() ?>

    <?= $form->field($model, 'identificacion_numero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'identificacion_codigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'update_by')->textInput() ?>

    <?= $form->field($model, 'username_act')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendedor_id')->textInput() ?>

    <?= $form->field($model, 'vendedor_nombre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
