<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Http\Requests\ContactUsRequest;

use App\Mail\ApplyNow;

use App\Mail\ContactUs;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Storage;

use App\Mail\RplEligibilityMail;

use App\Http\Requests\CheckEligibilityRequest;

use App\Models\RplEligibilityRequest;
use App\Services\GoogleSheetHandler;

class MailController extends Controller

{

    /**

     * Contact Us mail

     */

    public function contactUs(ContactUsRequest $request)

    {

        $body = [

            'name' => $request->name,

            'email' =>  $request->email,

            'message' => $request->message,

        ];



        $subject = $request->subject;



        Mail::to('enquiries@nta.nsw.edu.au')->cc('info@quadque.tech')->send(new ContactUs($subject, $body));



        $notification = [

            'message'   =>  'Thanks for you query!',

            'alert-type'    =>  'info'

        ];



        return redirect()->back()->with($notification);
    }





    /**

     * Apply For course

     */

    public function courseApply(Request $request)

    {

        $body = [

            'name' => $request->name,

            'email' =>  $request->email,

            'contact' =>  $request->contact,

            'nationality' =>  $request->nationality,

            'course' =>  $request->course,

            'msg' => $request->msg

        ];



        Mail::to('enquiries@nta.nsw.edu.au')->cc('tousif@quadque.tech')->send(new ApplyNow($body));



        $notification = [

            'message'   =>  'Thanks for your application',

            'alert-type'    =>  'info'

        ];



        return redirect()->back()->with($notification);
    }





    public function checkEligibility(CheckEligibilityRequest $request)

    {

        // return $request->all();
        $directory = "temp/" . uniqid() . "/";

        $filePath = [];



        try {

            $data = [

                'name' => $request->name,

                'email' => $request->email,

                'contact' => $request->contact,

                'location' => $request->location,

                'qualification' => $request->qualification,

                'experience' => $request->experience,

                'work_location' => $request->work_location,

                'remark' => $request->remark,
                'designation' => '',
                'industry' => '',
                'course' => '',

                'qus1' => $request->q1,
                'qus2' => $request->q2,
                'qus3' => $request->q3,
            ];



            // RplEligibilityRequest::create($data);


            if ($request->hasFile('files') && count($request->file('files')) > 0) {

                $files = $request->file('files');

                foreach ($files as $file) {

                    $fileName = $file->getClientOriginalName();

                    /**
                     * Check if derectory exist or not
                     * Create a new directory if not exist
                     */
                    if (!Storage::exists('public/' . $directory)) {
                        Storage::makeDirectory('public/' . $directory);
                    }


                    //store image into storage directory
                    Storage::putFileAs('public/' . $directory, $file, $fileName);

                    //store all the file name into the array
                    //so that we can pass it to mailable class
                    //mailable class will get the files and send it to mail

                    array_push($filePath, public_path('storage/' . $directory . $fileName));
                }
            }

            // Mail::to('dev.quadque@gmail.com')->send(new RplEligibilityMail($data, $filePath));

            $google_sheet_handler = new GoogleSheetHandler();

            // Mail::to('shere1895@gmail.com')->send(new RplEligibilityMail($data, $filePath));


            $google_sheet_handler->setData($data)->saveRPL();

            if ($request->hasFile('files') && count($request->file('files')) > 0) {

                Storage::deleteDirectory('public/' . $directory);
            }

            return response()->json(['success' => 'success'], 200);
        } catch (\Throwable $th) {

            return response()->json(['error' => $th->getMessage()], 500);
        }
    }
}
