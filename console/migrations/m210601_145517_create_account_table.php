<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%account}}`.
 */
class m210601_145517_create_account_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%account}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'link' => $this->string()->notNull(),
            'icon' => $this->string()->defaultValue('fa fa-facebook'),
            'created_at' =>  $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' =>  $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%account}}');
    }
}
