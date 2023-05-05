<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pasien}}`.
 */
class m230505_014959_create_pasien_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pasien}}', [
            'id' => $this->primaryKey(),
            'kode' => $this->string(20)->notNull()->unique(),
            'nama' => $this->string(50)->notNull(),
            'alamat' => $this->text(),
            'no_hp' => $this->string(30)->notNull(),
            'alamat' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pasien}}');
    }
}
