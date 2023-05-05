<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id
 * @property string|null $kode
 * @property string|null $nama
 * @property string|null $deskripsi
 * @property float|null $harga
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'nama', 'harga'], 'required'],
            [['deskripsi'], 'string'],
            [['harga'], 'number'],
            [['kode'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 50],
            [['kode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'nama' => 'Nama',
            'deskripsi' => 'Deskripsi',
            'harga' => 'Harga',
        ];
    }
}
