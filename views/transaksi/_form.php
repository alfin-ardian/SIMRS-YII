<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Transaksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'tanggal')->textInput() ?> -->
    <?= $form->field($model, 'tanggal')->widget(\yii\jui\DatePicker::className(), [
        'dateFormat' => 'yyyy-MM-dd', // set date format to yyyy-mm-dd
        'options' => ['class' => 'form-control'],
        'clientOptions' => [
            'changeYear' => true, // allow changing year
            'changeMonth' => true, // allow changing month
        ],
    ]) ?>


    <?= $form->field($model, 'pasien_id')->dropDownList($listData['pasien'], ['prompt' => '- Pilih Pasien -']) ?>

    <?= $form->field($model, 'pegawai_id')->dropDownList($listData['pegawai'], ['prompt' => '- Pilih Pegawai -']) ?>

    <?= $form->field($model, 'wilayah_id')->dropDownList($listData['wilayah'], ['prompt' => '- Pilih Wilayah -']) ?>

    <?= $form->field($model, 'grand_total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>