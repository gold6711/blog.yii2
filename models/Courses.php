<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 17.09.16
 * Time: 10:02
 */

namespace app\models;

use yii\db\ActiveRecord;


class Courses extends ActiveRecord
{
    public $img;
    public $order;
    public $link;

    public function afterFind() {
        $this->img = "web/images/courses".$this->alias.".png";
        $this->order = "http://srs.myrusakov.ru/order?product_ids=".$this->srs_id;
        $this->link = "http://srs.myrusakov.ru/".$this->alias;
    }


} 