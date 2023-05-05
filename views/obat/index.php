<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\i18n\Formatter;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ObatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$formatter = Yii::$app->formatter;
$formatter->locale = 'id-ID';
$formatter->currencyCode = 'Rp.';
?>
<div class="obat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Obat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => 'No.',
            ],
            'kode',
            'nama',
            'deskripsi:ntext',
            [
                'attribute' => 'harga',
                'value' => function ($model) use ($formatter) {
                    return $formatter->asCurrency($model->harga);
                },
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width: 100px;'],
                'template' => '{view} {update} {delete}',
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>