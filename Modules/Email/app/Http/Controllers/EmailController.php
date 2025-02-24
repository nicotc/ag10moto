<?php

namespace Modules\Email\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Modules\Email\Emails\CustomEmail;
use Modules\Email\Models\EmailTemplate;
use Modules\Email\Services\EmailService;

class EmailController extends Controller
{

    protected $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function sendEmail($emailConfigId, $to, $subject, $body)
    {

        try{


       $this->emailService->setMailConfig($emailConfigId);

       $config = $this->emailService->getMailConfig();

            Mail::to($to)->send(new CustomEmail($subject, $body));
        }catch(\Exception $e){
            dd($e->getMessage());
        }

    }
}
