<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transaksi}}`.
 */
class m230505_015105_create_transaksi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transaksi}}', [
            'id' => $this->primaryKey(),
            'tanggal' => $this->date()->notNull(),
            'pasien_id' => $this->integer()->notNull(),
            'pegawai_id' => $this->integer()->notNull(),
            'wilayah_id' => $this->integer()->notNull(),
            'grand_total' => $this->decimal(19, 2)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%transaksi}}');
    }
}
