<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Servicios;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ServiciosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Servicios';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicios-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Generar Excel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'distrito_id',
            //'distrito',
            //'departamento',
            //'municipio',
            //'tipo_suc',
            //'desarrollista_id',
            //'sucursal_id',
           
            //'servicio_id',
            //'oficina_id',
            //'cliente_id',
            //'contrato_id',
            //'contrato_producto_id',
            //'cantidad',
            //'producto_id',
            //'categoria',
            //'categoria_id',
            //'referencia_pago',
           //'solicitud_id',
            //'tipo',
            //'solicitado_at',
            //'causa_id',
            //'tecnico_id',
            //'barrio_id',
           //'created_by',
            //'username_crea',
            //'tipo_servicio',
            //'responsable_descri',
            //'jefe_descri',
            //'identificacion_id',
            'oficina',
            'sucursal',
            'barrio',
            'direccion',
            'identificacion_numero',
            'nombres',
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:d-m-Y']
            ],
           [
                'attribute' =>  'ejecutado_at',
                'value'=>function ($model, $index, $widget) { return Servicios::getFecha($model->ejecutado_at); },
                //'format' => ['date', 'php:d-m-Y']
            ],
            [
                'label' => 'Estado',
                'attribute' => 'estado',
                
                'value'=>function ($model, $index, $widget) { return Servicios::getEstado($model->estado); },
                'filter'=>['N'=>'Nuevo', 'P'=>'Pendiente'], 
            ],
            
            [
                'label' => 'TÃ©cnico',
                'attribute' => 'tecnico',
                
                'value'=>function ($model, $index, $widget) { return Servicios::getVacio($model->tecnico); },
                
            ],
            'solicitud_descri',
            //'causa_descri',

	     [
                'label' => 'Técnico',
                'attribute' => 'causa_descri',
                
                'value'=>function ($model, $index, $widget) { return Servicios::getVacio($model->causa_descri); },
                
            ],


            'producto',
            //'identificacion_codigo',
            //'update_by',
            //'username_act',
            //'vendedor_id',
            //'vendedor_nombre',
            /*[
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Servicios $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],*/
        ],
    ]); ?>


</div>
