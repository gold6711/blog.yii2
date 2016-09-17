<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 17.09.16
 * Time: 10:06
 */

namespace app\models;

use yii\db\ActiveRecord;


class Minicourses extends ActiveRecord
{
    public function afterFind() {
        $this->img = "web/images/minicourses".$this->img;
    }

} 