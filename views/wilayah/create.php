<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wilayah */

$this->title = 'Create Wilayah';
$this->params['breadcrumbs'][] = ['label' => 'Wilayahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wilayah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
