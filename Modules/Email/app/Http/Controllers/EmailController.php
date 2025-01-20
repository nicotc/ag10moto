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

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('email::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('email::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('email::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('email::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }


    public function sendEmail($emailConfigId, $templateName, $to, $variables)
    {
        $this->emailService->setMailConfig($emailConfigId);
        $template = EmailTemplate::where('name', $templateName)->first();

        if ($template) {
            $processedBody = $template->processTemplate($variables);
            Mail::to($to)->send(new CustomEmail($template->subject, $processedBody));
            return 'Email sent successfully';
        }else{
            return 'Email template not found';
        }

    }
}
