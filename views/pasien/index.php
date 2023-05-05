<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// $this->title = 'Pasien';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pasien', ['create'], ['class' => 'btn btn-success']) ?>
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
            'no_hp',
            'alamat:ntext',
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width: 100px;'],
                'template' => '{view} {update} {delete}',
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>