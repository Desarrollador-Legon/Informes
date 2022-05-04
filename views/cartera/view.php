<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cartera */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Carteras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cartera-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'contrato_id',
            'cantidad',
            'saldo',
            'valor_real_total',
            'codigo_est_tot',
            'cociente',
            'cociente_t',
            'distrito_id',
            'sucursal_id',
            'sucursal',
            'oficina',
            'oficina_id',
            'desarrollista_id',
            'nombre',
            'identificacion_id',
            'identificacion_numero',
            'identificacion_codigo',
            'referencia_pago',
            'referencia',
            'barrio_id',
            'barrio_descri',
            'direccion',
            'cobrador_id',
            'cobrador_nombre',
            'jefe_id',
            'jefe_descri',
            'muncipio',
            'departamento',
            'dane',
            'fijocasa',
            'fijotrabajo',
            'celularpersonal',
            'celulartrabajo',
        ],
    ]) ?>

</div>
