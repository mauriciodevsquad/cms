<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Consult;
use App\User;

class ConsultsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title   = 'Requests';
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $consults = $user->consults;

        $clientsList = Client::all()->sortBy('full_name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('full_name', 'id');

        return view('/consults', ['title' => $title, 'consults' => $consults, 'clientsList' => $clientsList]);
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
        $this->validate($request, [
            'description' => 'required'
        ]);

        $consult = new Consult;
        $consult->description = $request->input('description');


        $consult->client_id = $request->input('client_id');
        $consult->save();

        return redirect('/requests');
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
        $this->validate($request, [
            'description' => 'required'
        ]);

        $consult = Consult::find($id);
        $consult->description = $request->input('description');

        $consult->client_id = $request->input('client_id');
        $consult->save();

        return redirect('/requests');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consult = Consult::find($id);
        $consult->delete();
        return redirect('/requests');
    }
}
