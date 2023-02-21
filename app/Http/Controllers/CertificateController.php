<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function allcertificate()

    {
        $certificate = Certificate::get();
        return view('Dashbord.certificate.allcertificate', compact('certificate'));
    }

    public function addcertficate()

    {
        $users=User::get();
        $courses=Course::get();
        return view('Dashbord.certificate.addcertificate' , compact('users', 'courses'));
    }


    public function uploadCertificate(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'course_id' => 'required|exists:courses,id',
            'file' => 'required|mimes:pdf|max:2048',
        ],
        [
            'user_id' => '  هذا الحقل مطلوب تاكد من اختيار الطالب بشكل صحيح',
            'course_id' => ' هذا الحقل مطلوب تاكد اختيار الكورس بشكل صحيح       ',
            'file'=>'هذا الحقل مطلوب',
        ]);



        $fileName = null;
        if($request->hasFile('file')){
            $File = $request->file('file');
            $fileName = $File->getClientOriginalName();
            Storage::putFileAs('public/certificate',$File, $fileName);
        }



        // Create a new certificate instance and set its properties
        $certificate = new Certificate;
        $certificate->file = $fileName;
        $certificate->user_id = $request->user_id;
        $certificate->course_id = $request->course_id;
        $certificate->file =   $fileName;

    // Save the certificate instance to the database
        $certificate->save();

    // Redirect the user back to the previous page with a success message
    return redirect()->back()->with('success', 'تم اضافه الشهاده بنجاح');

    }

    public function userCertificate()
        {
            $userId = auth()->id(); // get the ID of the authenticated user
            $certificates = Certificate::where('user_id', $userId)->get();
            return view('Front.certificate.certificate', compact('certificates'));
        }


}
