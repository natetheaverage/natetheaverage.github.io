<?php

namespace App\Http\Controllers;

use Mail;
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

        Mail::send('mail.test', ['$mail' => $mail], function ($returned) use ($mail)  {
            $returned->to($mail['sender']);

            $returned->from($mail->recipient, $mail['from']);

            $returned->subject('Re:'.$mail['subject']);

            $returned->body('Re:'.$mail['body-html']);
        });


        return view('mail/box', compact('mail'));
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
        $m = $request->all();

        $attachments = json_decode ($m['content-id-map']);

        // dd($map);
        $count = $m['attachment-count'];
        if($count >= 0){
            foreach ($attachments as $key=>$file) {
                $destinationPath = '../storage/uploads/mail/'
                    .$m['recipient'].'/'
                    .$key.'/';

                $upload = $m[$file];

                $upload->move($destinationPath, $upload->getClientOriginalName());

            };
        };
        Mail::send('mail.test', ['m' => $m], function ($returned) use ($m)  {
            $returned->to($m['sender']);

            $returned->from($m->recipient, $m['from']);

            $returned->subject('Re:'.$m['subject']);

            $returned->body('Re:'.$m['body-html']);
        });

        $mail = MeiMail::create( $m );

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
