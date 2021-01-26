<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use PDF;
use Illuminate\Http\Request;
use App\Models\User;
use Mail;
use View;

class PdfController extends Controller
{
    public function sendTemplateEmail($user_id,$lang,$template_id,$to_email,$user){
        $pdf_name = "cv_".$template_id."_" . $user->id . ".pdf";
        $html = View::make('template'.$template_id, ['user' => $user]);
        $pdf = PDF::loadHTML($html);
        \Storage::disk('local')->put($pdf_name, $pdf->output());
        Mail::send('emails.cv_template_header', ['user' => $user], function ($message) use ($user, $to_email,$pdf_name) {
            $message->to($to_email, $user->name)
                ->subject("CV");
            $message->from(config('mail.from.address'), 'CV Template');
            $message->attach(public_path("storage/$pdf_name"), [
                'as' => $pdf_name,
                'mime' => 'application/pdf',
            ]);
        });
    }

    public function sendTemplate(Request $request){
        //Attributes that can used to fetch data
        //user_id, lang, template_id, email
        $user_id        =       $request->input('user_id');
        $lang           =       $request->input('lang');
        $template_id    =       $request->input('template_id');
        $email          =       $request->input('email');
        /**
         * First we have to fetch user complete data 
         */
        if(!empty($lang)){
            $user_id = $lang.$user_id;
        }
        $user = User::where('id',$user_id)->with([
                                                'skills',
                                                'references',
                                                'portfolios',
                                                'letters',
                                                'educations',
                                                'academics',
                                                'employments.employmentAchievements',
                                                'employments.employmentResponsibilities'
                                            ])->first();
        $response = response()->json(['status'=> FALSE,'message' => 'No User found with this id']);
        $is_template_id_valid = in_array($template_id,[1,2,3,4,5]);
        if(!$is_template_id_valid){
            $response = response()->json(['status'=> FALSE,'message' => 'Template id must be in this range [1,2,3,4,5]']);
        }
        if(!empty($user) && empty($email)){
            $email = $user->email;
        }
        if(!empty($user) && $is_template_id_valid){
            $this->sendTemplateEmail($user_id,$lang,$template_id,$email,$user);
            $response = response()->json(['status'=> True,'message' => 'Email Send Successfully']);
        }
        return $response;
    }
}
