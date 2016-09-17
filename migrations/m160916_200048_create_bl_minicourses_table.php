<?php

use yii\db\Migration;

/**
 * Handles the creation for table `bl_minicourses`.
 */
class m160916_200048_create_bl_minicourses_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('bl_minicourses', [
            'id' => $this->primaryKey(10)->unsigned(),
            'did' => $this->integer(10)->unsigned(),
            'title' => $this->string(255),
            'img' => $this->string(255),
            'default' => $this->boolean()->unsigned()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('bl_minicourses');
    }
}
