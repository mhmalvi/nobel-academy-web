<?php
    namespace App\Http\Traits;

    use Illuminate\Support\Facades\Storage;

    trait Downloads{

        /**
         * Download course qualification file
         * pdf version
         */
        public function qualifications($file){
            $myFile = public_path("storage/pdf/".$file.'.pdf');
            $headers = ['Content-Type: application/pdf'];
            $newName = $file.time().'.pdf';
    
            return response()->download($myFile, $newName, $headers);
        }
    }