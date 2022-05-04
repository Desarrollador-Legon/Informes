<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cartera */

$this->title = 'Create Cartera';
$this->params['breadcrumbs'][] = ['label' => 'Carteras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cartera-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
