<?php
/**
 * Created by PhpStorm.
 * User: tujailer
 * Date: 8/1/21
 * Time: 3:56 PM
 */

namespace App\Traits;


trait HashIds
{
    public function decode($id){
        $hashIds = new \Hashids\Hashids('capinvestmentfund', 32);
        return $hashIds->decode($id)[0];
    }
}