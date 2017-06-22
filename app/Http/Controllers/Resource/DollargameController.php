<?php

namespace App\Http\Controllers\Resource;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DollargameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$query = request()->query();
        $deposit =\DB::table('deposits')
        ->paginate(10);
        return view('dollargame.index', compact('deposit'));
        //return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dollargame.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $rules = [             
            'username'=> 'required',
            'balance'=> 'required',            
            'frombank'=> 'required',
            'fromaccountnumber'=> 'required',
            'fromaccontname'=> 'required',
            'datetime'=> 'required',
            'tobank'=> 'required',
            'toaccountnumber'=> 'required',
            'toaccountname'=> 'required',
            'channel'=> 'required',            
            'tel'=> 'required',
            'opinion'=> 'required',    
        ];
        $inputs = request()->except(['_token']);  

        $this->validate($request, $rules); 

        try{
        \DB::table('deposits')
            ->insert($inputs);

        return redirect('/dollargame');
        } catch (Exception $d) {
            abort(500);
        } 
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {         
        
       $deposit = \DB::table('deposits')
            ->where('id', $id)
            ->first();

        //dd($deposit);
        return view('dollargame.show', compact('deposit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
}
