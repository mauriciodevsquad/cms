<?php

namespace App\Http\Controllers;

use App\User;
use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
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
        $title   = 'Clients';
        $user_id = auth()->user()->id;
        $user    = User::find($user_id);
        $consults = $user->consults;

        return view('clients', ['title' => $title, 'clients' => $user->clients, 'consults' => $consults]);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'address'   => 'required',
        ]);

        $client = new Client;
        $client->full_name = $request->input('full_name');
        $client->email = $request->input('email');
        $client->phone = $request->input('phone');
        $client->address = $request->input('address');
        $client->user_id = auth()->user()->id;
        $client->save();

        return redirect('/clients');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'address'   => 'required',
        ]);

        $client = Client::find($id);
        $client->full_name = $request->input('full_name');
        $client->email = $request->input('email');
        $client->phone = $request->input('phone');
        $client->address = $request->input('address');
        $client->user_id = auth()->user()->id;
        $client->save();

        return redirect('/clients');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients');
    }
}
