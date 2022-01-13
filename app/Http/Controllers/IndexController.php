<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    function redirect($url){
        if($link = Link::where('simple_url', $url)->first()){
            return redirect($link->protocol . '://' . $link->url);
        }
        return redirect('/');
    }
}
