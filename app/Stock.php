<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|null|string article_no
 * @property array|null|string colour
 * @property array|null|string quantity
 * @property array|null|string location
 * @property array|null|string collection
 */
class Stock extends Model
{
    //Table name
    protected  $table= 'stocks';

    public  $primaryKey = 'article_no';

    public $timestamps = true;

}
