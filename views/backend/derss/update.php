<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\ders\models\Derss */

$this->title = 'Update Derss: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dersses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="derss-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
