<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeiMail extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mei_mails';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'recipient',
			'sender',
			'from',
			'subject',
			'body_plain',
			'stripped_text',
			'stripped_signature',
			'body_html',
			'stripped_html',
			'attachments',
			'timestamp',
			'token',
			'signature',
			'message_headers',
			'content_id_map',
    ];

}
