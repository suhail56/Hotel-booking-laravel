<?php

namespace App\Http\Controllers;
use App\MOdels\rooms;
use Illuminate\Http\Request;

class room extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ab=rooms::all();
        return view('admin',compact('ab'));
    }
    public function roomview()
    {
        $ab=rooms::all();
        return view('rooms',compact('ab'));
    }
    public function mgrview()
    {
        $ab=rooms::all();
        return view('mgrbookings',compact('ab'));
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
        $files=$request->file('image');
        $name=$files->getClientOriginalName();
        $files->move('images',$name);

        $files2=$request->file('image2');
        $name2=$files2->getClientOriginalName();
        $files2->move('images',$name2);

        $files3=$request->file('image3');
        $name3=$files3->getClientOriginalName();
        $files3->move('images',$name3);

        $ab=new rooms([
            'roomname'=>$request->get('room'),
            'noofbed'=>$request->get('noofbed'),
            'facilities'=>$request->get('facilities')
            ,'price'=>$request->get('price'),
            'image'=>$name,
            'image2'=>$name2,
            'image3'=>$name3
        ]);
        $ab->save();
        return redirect('/room'); 
        // echo "haa";
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
    public function edit($id)
    {
        $qw=rooms::find($id);
        // var_dump($qw);exit;
        return view('edroom',compact('qw'));
    }
    public function imgviws($id)
    {
        $qw=rooms::find($id);
        return view('imgs',compact('qw'));
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
        $qw=rooms::find($id);
        $qw->roomname=$request->get('room');
        $qw->noofbed=$request->get('noofbed');
        $qw->facilities=$request->get('facilities');
        $qw->price=$request->get('price');
        
        $files=$request->file('image');
        if($files != '')
        {
        $name=$files->getClientOriginalName();
        $files->move('images',$name);
        $qw->image=$name;
        } 

        $files2=$request->file('image2');
        if($files2 != '')
        {
        $name2=$files2->getClientOriginalName();
        $files2->move('images',$name2);
        $qw->image2=$name2;
        }

        $files3=$request->file('image3');
        if($files3 != '')
        {
        $name3=$files3->getClientOriginalName();
        $files3->move('images',$name3);
        $qw->image3=$name3;
        }

        $qw->save();
        return redirect('/room');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qw=rooms::find($id);
        $qw->delete();
        return redirect('/room');
    }
}
