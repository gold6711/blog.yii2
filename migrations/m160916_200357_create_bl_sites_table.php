<?php

use yii\db\Migration;

/**
 * Handles the creation for table `bl_sites`.
 */
class m160916_200357_create_bl_sites_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('bl_sites', [
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
        $this->dropTable('bl_sites');
    }
}
