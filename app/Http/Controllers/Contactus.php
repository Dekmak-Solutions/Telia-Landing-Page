<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Mail;
class Contactus extends Controller
{

public function submitContact(Request $req){


    $postVars = $req->input();
	$validator = \Validator::make($req->all(), [
    'brand_logo' => ['required','mimes:pdf,docx,png,jpg,jpeg','max:2048'],
    'trade_license' => ['required','mimes:pdf,docx,png,jpg,jpeg','max:2048'],
    'email'=>'required|email',
    'full_name'=>'required|max:5',
    'acct_name'=>'required',
    'acct_number'=>'required',
    'iban'=>'required',
    'phone'=>'required',
    'location'=>'required',
    'operational_hours'=>'required'
    ]);

    if ($validator->fails()) {
        $errors = $validator->messages();
        $msg = '';
        foreach ($errors->all() as $message)
        {
            $msg .= '<p>'.$message.'</p>';
        }
        return response()->json(
        array(
            'result'=>false,
            'msg'=>$msg,	
            'Token'=>csrf_token()
        ), 200);
    }


$file = $req->file('brand_logo');
//Move Uploaded File
$destinationPath = './uploads';
$file->move($destinationPath,$file->getClientOriginalName());

$file2 = $req->file('trade_license');
//Move Uploaded File
$destinationPath = './uploads';
$file2->move($destinationPath,$file2->getClientOriginalName());

$html="";
$html .="Hi,<br>";
$html .='New vendor message sent <br><br>';
$html .='<table style="border-collapse:collapse">';
$html .='<tbody>';
$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Type:</th>';
$html .='<td style="border:1px solid black;padding:1rem">Vendor Form</td>';
$html .='</tr>'; 
$html .='<tr>';
$html .='<th style="border:1px solid black;padding:1rem">Trade License Copy:</th>';
$html .='<td style="border:1px solid black;padding:1rem"><a href="'.url('uploads/'.$file->getClientOriginalName()).'" target="_blank">Show file</a></td>';
$html .='</tr>';
$html .='<tr>';
$html .='<th style="border:1px solid black;padding:1rem">Brand Logo:</th>';
$html .='<td style="border:1px solid black;padding:1rem"><a href="'.url('uploads/'.$file2->getClientOriginalName()).'" target="_blank">Show file</a></td>';
$html .='</tr>';
$html .='<tr>';
$html .='<th style="border:1px solid black;padding:1rem">VAT Certificate (TRN Number):</th>';
$html .='<td style="border:1px solid black;padding:1rem">'.$req->input('trn_number').'</td>';
$html .='</tr>';
$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Bank Name:</th>';
$html .='<td style="border:1px solid black;padding:1rem">'.$req->input('bank_name').'</td>';
$html .='</tr>'; 
$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Account Name:</th>';
$html .='<td style="border:1px solid black;padding:1rem">'.$req->input('acct_name').'</td>';
$html .='</tr>'; 
$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Account Number:</th>';
$html .='<td style="border:1px solid black;padding:1rem">'.$req->input('acct_number').'</td>';
$html .='</tr>'; 

$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Iban:</th>';
$html .='<td style="border:1px solid black;padding:1rem">'.$req->input('iban').'</td>';
$html .='</tr>'; 
$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Fullname:</th>';
$html .='<td style="border:1px solid black;padding:1rem">'.$req->input('full_name').'</td>';
$html .='</tr>'; 
$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Email:</th>';
$html .='<td style="border:1px solid black;padding:1rem"><a href="mailto:'.$req->input('email').'" target="_blank">'.$req->input('email').'</a></td>';
$html .='</tr>'; 
$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Phone Number:</th>';
$html .='<td style="border:1px solid black;padding:1rem">'.$req->input('phone').'</td>';
$html .='</tr>'; 
$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Location:</th>';
$html .='<td style="border:1px solid black;padding:1rem">'.$req->input('location').'</td>';
$html .='</tr>'; 
$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Operational Hours:</th>';
$html .='<td style="border:1px solid black;padding:1rem">'.$req->input('operational_hours').'</td>';
$html .='</tr>'; 
$html .='</tbody></table>';


//////// Send Email
            $to_name="alaa zz";
            $to_email="alaa.zaklit27@gmail.com";
            $data=array('name'=>'alaa.zaklit27@gmail.com','body'=> $html);
            Mail::send('mail',$data,function($message) use ($to_name,$to_email){
            $message->to($to_email)->subject('Pawcuddlz - Vendor Form');
                });

                        /////////////////////////////////////////////////////////
                        return response()->json(
                            array(
                                'result'=>true,
                                'msg'=>'Your information has been submitted successfully.',
                            ), 200);

}

public function submitContactForm(Request $req){


    $postVars = $req->input();
	$validator = \Validator::make($req->all(), [
    'email'=>'required|email',
    'full_name'=>'required|max:5',
    'phone'=>'required',
    'interested'=>'required',
    'subject'=>'required',
    'message'=>'required'
    ]);

    if ($validator->fails()) {
        $errors = $validator->messages();
        $msg = '';
        foreach ($errors->all() as $message)
        {
            $msg .= '<p>'.$message.'</p>';
        }
        return response()->json(
        array(
            'result'=>false,
            'msg'=>$msg,	
            'Token'=>csrf_token()
        ), 200);
    }


$html="";
$html .="Hi,<br>";
$html .='New contact  message sent <br><br>';
$html .='<table style="border-collapse:collapse">';
$html .='<tbody>';

$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Type:</th>';
$html .='<td style="border:1px solid black;padding:1rem">'.$req->input('type').'</td>';
$html .='</tr>'; 
$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Email:</th>';
$html .='<td style="border:1px solid black;padding:1rem"><a href="mailto:'.$req->input('email').'" target="_blank">'.$req->input('email').'</a></td>';
$html .='</tr>'; 

$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Fullname:</th>';
$html .='<td style="border:1px solid black;padding:1rem">'.$req->input('full_name').'</td>';
$html .='</tr>'; 

if($req->input('type')=="corporate"){
$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Corporate:</th>';
$html .='<td style="border:1px solid black;padding:1rem">'.$req->input('corporate').'</td>';
$html .='</tr>'; }


$html .='<th style="border:1px solid black;padding:1rem">Phone Number:</th>';
$html .='<td style="border:1px solid black;padding:1rem">'.$req->input('phone').'</td>';
$html .='</tr>'; 
$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Interested:</th>';
$html .='<td style="border:1px solid black;padding:1rem">'.$req->input('interested').'</td>';
$html .='</tr>'; 
$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Subject:</th>';
$html .='<td style="border:1px solid black;padding:1rem">'.$req->input('subject').'</td>';
$html .='</tr>'; 
$html .='<tr> ';
$html .='<th style="border:1px solid black;padding:1rem">Message:</th>';
$html .='<td style="border:1px solid black;padding:1rem">'.$req->input('message').'</td>';
$html .='</tr>'; 
$html .='</tbody></table>';


//////// Send Email
            $to_name="Admin";
            $to_email="alaa.zaklit27@gmail.com";
            $type=$req->input('type');
            $subject='Pawcuddlz - '. $type .' Form';
            $data=array('name'=>'alaa.zaklit27@gmail.com','body'=> $html);
            Mail::send('mail',$data,function($message) use ($to_name,$to_email,$subject){
            $message->to($to_email)->subject($subject);
                });
                        /////////////////////////////////////////////////////////
                        return response()->json(
                            array(
                                'result'=>true,
                                'msg'=>'Your information has been submitted successfully.',
                            ), 200);
}
}
