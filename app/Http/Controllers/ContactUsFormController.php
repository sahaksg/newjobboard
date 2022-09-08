<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class ContactUsFormController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request) {
        return view('pages.contact');
    }
    // Store Contact Form data
    public function ContactUsForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'sometimes|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
        ]);
        //  Store data in database
        Contact::create($request->all());
        //Send mail with PHPmailer
        $mail = new PHPMailer(true);
        try {
            //Server settings
            //$mail->SMTPDebug = 1;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host = 'mail.globalgoals.pro';                     //Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   //Enable SMTP authentication
            $mail->Username = 'info@globalgoals.pro';                     //SMTP username
            $mail->Password = 'ZB{pE!!SZyTo';                               //SMTP password

            //Recipients
            $mail->setFrom('info@globalgoals.pro', 'Info');
            $mail->addAddress('hr@globalgoals.pro', 'Kristina Hambardzumyan');     //Add a recipient




            //Content
            $mail->WordWrap = 50;       // set word wrap to 50 characters
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "New Contact from " . htmlspecialchars($request->get('name')).", " .$request->get('email');


            $mail->Body = "Subject: ".$request->get('subject')."<br>".$request->get('message');
            $mail->AltBody = strip_tags(htmlspecialchars($request->get('message')));

            $mail->send();
        }
        catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
