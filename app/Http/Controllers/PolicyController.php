<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\Downloads;

class PolicyController extends Controller
{
    use Downloads;

    /**
     * Download qualification file
     */
    public function downloadPolicy($code){
        return $this->qualifications($code);
    }
}
