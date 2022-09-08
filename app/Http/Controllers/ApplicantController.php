<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//dd($request, $_FILES);
        $applicant = new Applicant;
        $applicant->job_id = $request->input('job_id');
        $applicant->name = htmlspecialchars($request->input('name'));
        $applicant->date = now();
        $applicant->job_title = htmlspecialchars($request->input('job_title'));
        $applicant->email = htmlspecialchars($request->input('email'));
        $applicant->description = htmlspecialchars($request->input('description'));


        if ($request->hasFile('file')) {
//            return "Has file";
            $filename = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];
            $extention = pathinfo($filename, PATHINFO_EXTENSION);
            if (!in_array($extention, ['doc', 'docx', 'pdf', 'rtf']) || $size > 200000) {

                return redirect()->back()->with('error', 'Wrong file type or size is greater that 200kb');
            } else {
//
                $pname = rand(1000, 10000) . '-' . $_FILES['file']['name'];
                $tname = $_FILES['file']['tmp_name'];

                $uploads_dir = 'storage/cv/';
//
                move_uploaded_file($tname, $uploads_dir . '/' . $pname);
                $applicant->resume = $pname;
//                dd($pname, $filename);
                $applicant->save();
                // send mail while attachment exist
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


                    //Attachments
                    $mail->AddAttachment($uploads_dir . '/' . $pname, $filename);
                    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                    //Content
                    $mail->WordWrap = 50;       // set word wrap to 50 characters
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = "New Applicantion from " . htmlspecialchars($request->input('name')) . " for \"" . htmlspecialchars($request->input('job_title')) . "\"";


                    $mail->Body = htmlspecialchars($request->input('description'));
                    $mail->AltBody = strip_tags(htmlspecialchars($request->input('description')));

                    $mail->send();
                } catch (Exception $e) {
                    return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

                }
                return redirect()->back()->with('status', 'You have Applied Successfully!');

            }

        }
//            return "No file";
        $applicant->save();
        // send mail while no attachment
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
            $mail->Subject = "New Applicantion from " . htmlspecialchars($request->input('name')) . " for \"" . htmlspecialchars($request->input('job_title')) . "\"";


            $mail->Body = htmlspecialchars($request->input('description'));
            $mail->AltBody = strip_tags(htmlspecialchars($request->input('description')));

            $mail->send();
        }
        catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

        }
        // add functionality ro send confirmation mail about applied success to the applicants! Create new phpmailer structure

        return redirect()->back()->with('status', 'You have Applied Successfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
