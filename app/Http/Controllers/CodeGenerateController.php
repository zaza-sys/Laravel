<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Code;

class CodeGenerateController extends Controller
{
    public function generateNextCode(){
        $current = code::count()+1;

        $code = 'B' . str_pad($currentCount, 3, '0', STR_PAD_LEFT);

        return $code;
    }

    public function show($code)
{
    $nextCode = $this->generateNextCode();
    
    return $nextCode;
}

}
