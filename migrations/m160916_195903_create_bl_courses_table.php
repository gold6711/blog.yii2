<?php

use yii\db\Migration;

/**
 * Handles the creation for table `bl_courses`.
 */
class m160916_195903_create_bl_courses_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('bl_courses', [
            'id' => 'pk',
            'did' => 'integer NULL',
            'srs_id' => 'integer NULL',
            'title' => 'string',
            'alias' =>'string',
            'description' => 'text',
            'price' => 'integer NULL',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('bl_courses');
    }
}
