<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\listm;
class listc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 123;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.CreateListing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name'=>'required',
            'Address'=>'required',
            'Website'=>'required',
            'Email'=>'required',
            'Phone'=>'required',
            'Bio'=>'required'
        ]);

       $list = new listm();
       $list->name = $request->Name;
       $list->address = $request->Address;
       $list->website = $request->Website;
       $list->email = $request->Email;
       $list->phone = $request->Phone;
       $list->bio = $request->Bio;
       $list->user_id= auth()->user()->id;
       $list->save();
      return redirect('home')->with('success','success created list ');





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item=listm::find($id);
        return view('layouts.ShowListing')->with('item',$item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Listing=listm::find($id);
        return view('layouts.EditListing')->with('Listing',$Listing);
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
       $request->validate([
    'Name' => 'required',
    'Address' => 'required',
    'Website' => 'required',
    'Email' => 'required',
    'Phone' => 'required',
    'Bio' => 'required',
]);

$list = listm::find($id);
$list->name = $request->Name;
$list->address = $request->Address;
$list->website = $request->Website;
$list->email = $request->Email;
$list->phone = $request->Phone;
$list->bio = $request->Bio;
$list->user_id = auth()->user()->id;
$list->save();
return redirect('home')->with('success', 'success updated list ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $LISTING=listm::find($id);
        $LISTING->delete();
       return redirect('home')->with('success', 'success removed list ');

    }
}
