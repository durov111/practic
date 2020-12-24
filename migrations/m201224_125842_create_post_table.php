<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m201224_125842_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'post_id' => $this->primaryKey(),
            'title'=>$this->string(100)->notNull(),
            'text'=>$this->text()->notNull(),
            'date'=>$this->date()->notNull(),
            'author'=>$this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
