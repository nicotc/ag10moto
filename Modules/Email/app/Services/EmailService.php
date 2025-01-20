<?php

namespace Modules\Email\Services;

use Modules\Email\Models\EmailConfiguration;
use Illuminate\Support\Facades\Config;

class EmailService
{
    public function setMailConfig($configId)
    {
        $emailConfig = EmailConfiguration::find($configId);

        if ($emailConfig) {
            Config::set('mail.default', 'smtp');
            Config::set('mail.mailers.smtp.host', $emailConfig->mail_host);
            Config::set('mail.mailers.smtp.port', $emailConfig->mail_port);
            Config::set('mail.mailers.smtp.username', $emailConfig->mail_username);
            Config::set('mail.mailers.smtp.password', $emailConfig->mail_password);
            Config::set('mail.mailers.smtp.encryption', $emailConfig->mail_encryption);
            Config::set('mail.from.address', $emailConfig->mail_from_address);
            Config::set('mail.from.name', $emailConfig->mail_from_name);
        }
    }

}
