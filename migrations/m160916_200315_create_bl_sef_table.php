<?php

use yii\db\Migration;

/**
 * Handles the creation for table `bl_sef`.
 */
class m160916_200315_create_bl_sef_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('bl_sef', [
            'id' => $this->primaryKey(10)->unsigned(),
            'link' => $this->string(255),
            'link_sef' => $this->string(255)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('bl_sef');
    }
}
