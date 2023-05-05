<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%obat}}`.
 */
class m230505_014814_create_obat_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%obat}}', [
            'id' => $this->primaryKey(),
            'kode' => $this->string(10)->notNull()->unique(),
            'nama' => $this->string(50)->notNull(),
            'deskripsi' => $this->text(),
            'harga' => $this->decimal(19, 2)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%obat}}');
    }
}
