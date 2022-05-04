<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Servicios */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Servicios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="servicios-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <!--p-->
        <!--?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?-->
     <!--/p-->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'distrito_id',
            'distrito',
            'departamento',
            'municipio',
            'tipo_suc',
            'desarrollista_id',
            'sucursal_id',
            'sucursal',
            'servicio_id',
            'oficina_id',
            'oficina',
            'cliente_id',
            'contrato_id',
            'contrato_producto_id',
            'cantidad',
            'producto',
            'producto_id',
            'categoria',
            'categoria_id',
            'referencia_pago',
            'nombres',
            'solicitud_id',
            'solicitud_descri',
            'tipo',
            'solicitado_at',
            'causa_id',
            'causa_descri',
            'estado',
            'tecnico_id',
            'tecnico',
            'ejecutado_at',
            'barrio_id',
            'barrio',
            'direccion',
            'created_by',
            'created_at',
            'username_crea',
            'tipo_servicio',
            'responsable_descri',
            'jefe_descri',
            'identificacion_id',
            'identificacion_numero',
            'identificacion_codigo',
            'update_by',
            'username_act',
            'vendedor_id',
            'vendedor_nombre',
        ],
    ]) ?>

</div>
