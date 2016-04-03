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
    protected $fillable = ['from', 'to', 'subject', 'content'];

}
