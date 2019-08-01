<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use SoftDeletes;

    protected $table = 'settings';
    protected $fillable = ['api_key', 'website_name', 'website_favicon', 'company_logo', 'company_favicon', 'company_name', 
                            'google_analytics', 'google_recaptcha_sitekey', 'google_recaptcha_secret', 'data_privacy_title', 
                            'data_privacy_popup_content', 'data_privacy_content'];

}
