<?php
/**
 * Created by PhpStorm.
 * User: tujailer
 * Date: 10/13/20
 * Time: 5:29 AM
 */

namespace App\Http\View\Composers;


use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class AdminStock
{
    public function compose(View $view){
        $response = Http::get('https://mboum.com/api/v1/tr/trending?apikey=mhHxdqTkLwqMLbuElqRdnTbUE1UTgjzhr8S1fbphNTLMGi2XM7q11xDSdW6d');
        $stocks = $response->json()['data'][0]['quotes'];
        return $view->with('stocks', $stocks);
    }

}
