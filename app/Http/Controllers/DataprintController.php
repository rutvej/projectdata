<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datapost;
use PDF;


class DataprintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = New Datapost;
        $data->name = (!empty($request->name)) ? $request->name : "na";
        $data->email = (!empty($request->email)) ? $request->email : "na";
        $data->phone = (!empty($request->phone)) ? $request->phone : "na";
        $data->dateofbirth = (!empty($request->dateofbirth)) ? $request->dateofbirth : "na";
        $data->position = (!empty($request->position)) ? $request->position : "na";
        $data->degree = (!empty($request->degree)) ? $request->degree : "na";
        $data->save();
        return "<script> alert('success') ;window.location.replace('/registration');</script>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Datapost::all();
        return view('download' ,compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function download()
    {
        //
        $data = Datapost::all();
        $pdf = PDF::loadView('table',compact('data'));
        return $pdf->download('datainpdf.pdf');
    }
}
