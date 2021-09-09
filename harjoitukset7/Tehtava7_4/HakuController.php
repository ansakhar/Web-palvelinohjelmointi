<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HakuController extends Controller
{
    public function search() {
        request()->validate([
            'haku' => 'regex:/^[a-zA-Z]{5,30}$/',
            'hakupalvelu' => 'regex:/^google$/',
           ],
           ['haku.regex' => 'Laravel: Vain [a-zA-Z]{5,30} ok',
           'hakupalvelu.regex' => 'Bing pois käytöstä, valitse Google!',
        ]);
        $haku=request('haku');
        $hakupalvelu=request('hakupalvelu');

        if ($hakupalvelu=='google')
        return redirect('https://www.google.com/search?q='.urlencode($haku));
        if ($hakupalvelu=='bing')
        return redirect('https://www.bing.com/search?q='.urlencode($haku));
     }
}
//