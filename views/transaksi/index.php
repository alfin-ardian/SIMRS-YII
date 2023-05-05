<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\i18n\Formatter;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TransaksiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$formatter = Yii::$app->formatter;
$formatter->locale = 'id-ID';
$formatter->currencyCode = 'Rp.';

// $this->title = 'Transaksi';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transaksi', ['create'], ['class' => 'btn btn-success']) ?>
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
            [
                'attribute' => 'tanggal',
                'value' => function ($model) use ($formatter) {
                    return $formatter->asDate($model->tanggal, 'dd MMMM yyyy');
                },
            ],
            [
                'attribute' => 'pasien_id',
                'value' => function ($model) {
                    return $model->pasien->nama;
                },
            ],
            [
                'attribute' => 'pegawai_id',
                'value' => function ($model) {
                    return $model->pegawai->nama;
                },
            ],
            [
                'attribute' => 'wilayah_id',
                'value' => function ($model) {
                    return $model->wilayah->nama;
                },
            ],
            [
                'attribute' => 'grand_total',
                'value' => function ($model) use ($formatter) {
                    return $formatter->asCurrency($model->grand_total);
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