<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = DB::table('profiles')->get();
        return View('profiles.show',['profile'=>$profile]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $profile =  DB::table('profiles')->where('user_id',$id)->first();
        if(!$profile){
            $profile=(object)[];
            $profile->full_name = "N/A";
            $profile->address = "N/A";
            $profile->birthday = "N/A";
        }
        return View('profiles.show',['profile'=>$profile]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $profile =  DB::table('profiles')->where('user_id',$id)->first();
        return View('profiles.edit',['profile'=>$profile]);
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
        $profile = DB::table('profiles')->find($id);
        $profile->full_name = $request->input('full_name');
        $profile->address = $request->input('address');
        $profile->birthday = $request->input('birthday');
        $affected = DB::table('profiles')
            ->where('id', $id)
            ->update(['full_name' =>  $profile->full_name,
                'address' =>  $profile->address,
                'birthday' =>  $profile->birthday
            ]);
        return redirect('/users');
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
}
