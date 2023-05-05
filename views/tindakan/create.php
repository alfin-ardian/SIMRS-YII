<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tindakan */

$this->title = 'Create Tindakan';
$this->params['breadcrumbs'][] = ['label' => 'Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
