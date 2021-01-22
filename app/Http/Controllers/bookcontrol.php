<?php

namespace App\Http\Controllers;
use App\MOdels\booking;
use Illuminate\Http\Request;

class bookcontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ab=booking::all();
        return view('adbooking',compact('ab'));
    }
    public function mgrroomview()
    {
        $ab=booking::all();
        return view('mgrrroomviews',compact('ab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ab=new booking([
            'name'=>$request->get('name'),
            'address'=>$request->get('address'),
            'phone'=>$request->get('phone')
            ,'checkin'=>$request->get('checkin'),
            'checkout'=>$request->get('checkout'),
            'roomid'=>$request->get('roomid'),
            'roomname'=>$request->get('roomname')
        ]);
        $ab->save();
        return redirect('/hotelbk')->with('alert', 'Booking have been Successfully completed!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$roomname)
    {
        // $qw=rooms::find($id);
        //  var_dump($id);var_dump($roomname);
         return view('booking',compact('id','roomname'));
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
        $qw=booking::find($id);
        $qw->delete();
        return redirect('/bookviewad');
    }
}
