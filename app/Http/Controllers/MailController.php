<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\MeiMail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $mail = MeiMail::all()->toArray();
        $from = 'dsdf';
        //$to = $mail->to;
        $subject = 'dsdf';
        $content = 'dsdf';

        return view('mail/box', compact('mail', 'to', 'from', 'subject', 'content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        
        // foreach($request->attachments as $file){
        //     $destinationPath = '../storage/uploads/mail/';
        //     $file = $request->attachment-[$file];
        //     $request->file($file)->move($destinationPath);
        // };
        

        dd($request->all()->toArray());

        $m = MeiMail::create([
            'recipient'             =>$request->recipient,
            'sender'                =>$request->sender,
            'from'                  =>$request->from,
            'subject'               =>$request->subject,
            'body_plain'            =>$request->body-plain,
            'stripped_text'         =>$request->stripped-text,
            'stripped_signature'    =>$request->stripped-signature,
            'body_html'             =>$request->body-html,
            'stripped_html'         =>$request->stripped-html,
            'attachments'           =>$request->attachments,
            'timestamp'             =>$request->message-url,
            'token'                 =>$request->content-id-map,
            'signature'             =>$request->message-headers,
            'message_headers'       =>$request->content-id-map,
            'content_id_map'        =>$request->content-id-map
        ]);
        return Response('OK');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
