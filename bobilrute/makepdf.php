<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';


//Variables from form

$avdeling = $_POST['avdeling'];
$regnummer = $_POST['regnummer'];
$skadetrute = $_POST['skadetrute'];
$bilmodell = $_POST['bilmodell'];
$merke = $_POST['merke'];
$årsmodel = $_POST['årsmodel'];
$oppvarmet = $_POST['oppvarmet'];
$festet = $_POST['festet'];
$breddetopp = $_POST['breddetopp'];
$breddebunn = $_POST['breddebunn'];
$melding = $_POST['melding'];

//Create new pdf instance
$mpdf = new \Mpdf\Mpdf();

//Creater pdf
$data = '';
$data .= '<h1>Skjema</h1>';

//Add data
$data .= '<strong>Avdeling      </strong>' . $avdeling . '<br />';
$data .= '<strong>Regnummer     </strong>' . $regnummer . '<br />';
$data .= '<strong>skadetrute     </strong>' . $skadetrute . '<br />';
$data .= '<strong>bilmodell      </strong>' . $bilmodell . '<br />';
$data .= '<strong>Merke     </strong>' . $merke . '<br />';
$data .= '<strong>årsmodel     </strong>' . $årsmodel . '<br />';
$data .= '<strong>oppvarmet     </strong>' . $oppvarmet . '<br />';
$data .= '<strong>festet      </strong>' . $festet . '<br />';
$data .= '<strong>Bredde i toppen       </strong>' . $breddetopp . '<br />';
$data .= '<strong>Bredde i bunn     </strong>' . $breddebunn . '<br />';

if($melding)
{
    $data .= '<br /><strong>Melding     </strong><br />' .$melding;
}


//Write pdf
$mpdf->WriteHTML($data);


//Outoput to browser
$pdf = $mpdf->Output('', 'S');


//Grab enquiry data
$enquirydata = [
    'avdeling' => $avdeling,
    'regnummer' => $regnummer,
    'skadetrute' => $skadetrute,
    'bilmodell' => $bilmodell,
    'merke' => $merke,
    'årsmodel' => $årsmodel,
    'oppvarmet' => $oppvarmet,
    'festet' => $festet,
    'breddetopp' => $breddetopp,
    'breddebunn' => $breddebunn,
    'melding' => $melding
];

//Runs the function
sendEmail($pdf, $enquirydata);


function sendEmail($pdf, $enquirydata) {



    $emailbody = '';

    $emailbody .= '<p> ' . $enquirydata['melding'] .  '</p>';

    $mail = new PHPMailer(true);

try {
    //Recipients
    $mail->setFrom('');
    $mail->addAddress('');   

    // Attachments
    $mail->addStringAttachment($pdf, 'skjema.pdf');  
       $mail->addAttachment($_FILES['fileone']['tmp_name'], $_FILES['fileone']['name']); 
       $mail->addAttachment($_FILES['filetwo']['tmp_name'], $_FILES['filetwo']['name']); 
       $mail->addAttachment($_FILES['filethree']['tmp_name'], $_FILES['filethree']['name']); 


    // Content
    $mail->isHTML(true);                               
    $mail->Subject = 'Sendt fra ' . $enquirydata['avdeling'];
    $mail->Body    = $emailbody;
    $mail->AltBody = strip_tags($emailbody);

    $mail->send();
    

    header('Location:thanks.php?avdeling=' . $enquirydata['avdeling']);

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


}