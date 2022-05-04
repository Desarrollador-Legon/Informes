<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CarteraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cartera Desconectados';
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
            ['class' => 'yii\grid\SerialColumn'],

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
            'codigo_est_tot',
            'nombre',
            'fijocasa',
            'valor_real_total',
            'saldo',
            'contrato_id',
            
            /*[
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Cartera $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],*/
        ],
    ]); ?>


</div>
