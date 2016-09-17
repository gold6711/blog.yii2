<?php

use yii\db\Migration;

/**
 * Handles the creation for table `bl_reviews`.
 */
class m160916_200239_create_bl_reviews_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('bl_reviews', [
            'id' => $this->primaryKey(10)->unsigned(),
            'address' => $this->string(255),
            'description' => $this->string(255),
            'active' => $this->boolean()->unsigned()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('bl_reviews');
    }
}
