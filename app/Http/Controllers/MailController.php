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
                $destinationPath = '../storage/uploads/mail/';
                //     .$m['recipient'].'/'
                //     .$m['content-id-map']->toJson();
                $upload = $m[$file];//->originalName;
                $request->file($upload)->move($destinationPath);
            };
        };
               //$request = $request->all();

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
