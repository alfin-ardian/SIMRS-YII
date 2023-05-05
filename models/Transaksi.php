<?php

namespace app\models;

use Yii;
use app\models\Pasien;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id
 * @property string $tanggal
 * @property int $pasien_id
 * @property int $pegawai_id
 * @property int $wilayah_id
 * @property float $grand_total
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'pasien_id', 'pegawai_id', 'wilayah_id'], 'required'],
            [['tanggal'], 'safe'],
            [['pasien_id', 'pegawai_id', 'wilayah_id'], 'integer'],
            [['grand_total'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tanggal' => 'Tanggal',
            'pasien_id' => 'Pasien',
            'pegawai_id' => 'Pegawai',
            'wilayah_id' => 'Wilayah',
            'grand_total' => 'Grand Total',
        ];
    }

    public function getPasien()
    {
        return $this->hasOne(Pasien::className(), ['id' => 'pasien_id']);
    }
}
