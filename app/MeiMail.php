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
			'body-plain',
			'stripped-text',
			'stripped-signature',
			'body-html',
			'stripped-html',
			'attachment-count',
			'timestamp',
			'token',
			'signature',
			'message-headers',
			'content-id-map',
    ];

}
