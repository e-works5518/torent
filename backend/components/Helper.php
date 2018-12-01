<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/21/2018
 * Time: 12:40 PM
 */

namespace backend\components;


class Helper
{

    public static function DDD($x)
    {
        echo '<pre>';
        print_r($x);
        echo '</pre>';
        die;
    }

    public static function GetDate($date)
    {
        return date("d-m-Y", strtotime($date));
    }

    public static function GetDateFoSql($date)
    {
        return date("Y-m-d", strtotime($date));

    }
}