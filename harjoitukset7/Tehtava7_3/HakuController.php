<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HakuController extends Controller
{
    public function search() {
        $haku=request('haku');
        $hakupalvelu=request('hakupalvelu');
        if ($hakupalvelu=='google')
        return redirect('https://www.google.com/search?q='.urlencode($haku));
        if ($hakupalvelu=='bing')
        return redirect('https://www.bing.com/search?q='.urlencode($haku));
     }
}
