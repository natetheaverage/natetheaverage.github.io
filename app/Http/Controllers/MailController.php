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
        if($m['attachment-count'] >= 0){
        // foreach($request->attachments as $file){
            //$destinationPath = '../storage/uploads/mail/';
        //     $file = $request->attachment-[$file];
            //$request->file($file)->move($destinationPath);
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
