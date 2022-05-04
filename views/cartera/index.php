<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Cartera;



/* @var $this yii\web\View */
/* @var $searchModel app\models\CarteraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cartera Conectados';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cartera-index">

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
            //'cantidad',
            //'cociente',
            //'cociente_t',
            //'distrito_id',
            //'sucursal_id',
            //'sucursal',
            //'oficina',
            //'oficina_id',
            //'desarrollista_id',
            //'identificacion_id',
            //'identificacion_numero',
            //'identificacion_codigo',
            //'referencia',
            //'barrio_id',
            //'cobrador_id',
            //'cobrador_nombre',
            //'jefe_id',
            //'jefe_descri',
            //'muncipio',
            //'departamento',
            //'dane',
            //'fijotrabajo',
            //'celularpersonal',
            //'celulartrabajo',
            'referencia_pago',
            'barrio_descri',
            'direccion',
            [
                'label' => 'Estado',
                'attribute' => 'codigo_est_tot',
                
                'value'=>function ($model, $index, $widget) { return Cartera::getEstado($model->codigo_est_tot); },
                //'filter'=>['CON'=>'Conectado', 'EMP'=>'Empleado'], 
            ],


            'nombre',
            
            [
                'label' => 'Teléfonos',
                'attribute' => 'fijocasa',
                'value'=>function ($model, $index, $widget) {
                    return Cartera::getTelefonos($model->celularpersonal ,$model->celulartrabajo,
                                    $model->fijocasa ,$model->fijotrabajo);},
                   // return "{$model->celularpersonal},{$model->celulartrabajo},{$model->fijocasa},{$model->fijotrabajo}";
                
            ],
            'valor_real_total',
            'saldo',
            
            [
                'label' => 'Edad',
                //'attribute' => 'saldo',
                
                'value'=>function ($model, $index, $widget) { return Cartera::getEdad($model->saldo , $model->valor_real_total); },
                
            ],

            [
                'label' => 'Último Pago',
                'attribute' =>  'contrato_id',
                'value' =>'fecha.fecha_pago',
                'format' => ['date', 'php:d-m-Y']
            ],
            /*[
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Cartera $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],*/
        ],
    ]); ?>


</div>
