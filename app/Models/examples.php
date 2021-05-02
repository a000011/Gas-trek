<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examples extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'examples';

    /**
    * this function spliting img string by ;
    *
    *@return array
    */
    static function parseImgs(string $str){
        $imgs = array();
        foreach (explode(';', $str) as $key => $value) {
            if(!empty($value)){
                array_push($imgs, $value);
            }
        }
        return $imgs;
    }

}
