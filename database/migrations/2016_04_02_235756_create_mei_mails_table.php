<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeiMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mei_mails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recipient');          
            $table->string('sender');             
            $table->string('from');               
            $table->text('subject');            
            $table->longText('body_plain');         
            $table->longText('stripped_text');      
            $table->string('stripped_signature'); 
            $table->longText('body_html');          
            $table->longText('stripped_html');      
            $table->text('attachments');        
            $table->string('timestamp');          
            $table->string('token');              
            $table->text('signature');          
            $table->text('message_headers');    
            $table->text('content_id_map');     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mei_mails');
    }
}
