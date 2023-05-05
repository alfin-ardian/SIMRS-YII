<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tindakan}}`.
 */
class m230505_015026_create_tindakan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tindakan}}', [
            'id' => $this->primaryKey(),
            'kode' => $this->string(20)->notNull()->unique(),
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
        $this->dropTable('{{%tindakan}}');
    }
}
