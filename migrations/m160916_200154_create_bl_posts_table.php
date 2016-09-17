<?php

use yii\db\Migration;

/**
 * Handles the creation for table `bl_posts`.
 */
class m160916_200154_create_bl_posts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('bl_posts', [
            'id' => $this->primaryKey(10)->unsigned(),
            'is_release' => $this->boolean()->unsigned(),
            'title' => $this->string(255)->notNull(),
            'img' => $this->string(255),
            'intro_text' => $this->text(),
            'full_text' => $this->text(),
            'date' => $this->integer(10)->unsigned(),
            'meta_desc' => $this->string(255),
            'meta_key' => $this->string(255),
            'hits' => $this->integer(10)->unsigned(),
            'hide' => $this->boolean()->unsigned(),
            'no_form' => $this->boolean()->unsigned()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('bl_posts');
    }
}
