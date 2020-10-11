<?php

namespace Justijndepover\InterceptEmails\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = ['from_email', 'from_name', 'to_email', 'to_name', 'cc', 'bcc', 'subject', 'body'];

    public function getCcAttribute($cc)
    {
        return json_decode($cc);
    }

    public function getBccAttribute($bcc)
    {
        return json_decode($bcc);
    }
}