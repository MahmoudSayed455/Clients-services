<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Auth;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::all();
        return view('clients.index')->with('clients',$clients);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.addclient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  $this->validate($request, [
        //     'Title' => 'required',
        //     'Description' => 'required',
        //     'Phone_Number' => 'required',
        //     'Status' => 'required',
        //     'Contract_Start_Date' => 'required',
        //     'Contract_End_Date' => 'required'
        // ]);
        
        // Add Client
        $client = new Client();
        $client->user_id= Auth::user()->id;
        $client->Title = $request->input('ctitle');
        $client->Description = $request->input('cdescription');
        $client->Phone_Number = $request->input('cphone');
        $client->Status = $request->input('cstatus');
        $client->Contract_Start_Date = $request->input('cstart');
        $client->Contract_End_Date = $request->input('cend');
        $client->save();
        return redirect('/allclients');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit')->with('client', $client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'Title' => 'required',
        //     'Description' => 'required',
        //     'Phone_Number' => 'required',
        //     'Status' => 'required',
        //     'Contract_Start_Date' => 'required',
        //     'Contract_End_Date' => 'required'
        // ]);

        $client = Client::find($id);
        $client->user_id= Auth::user()->id;
        $client->Title = $request->input('titleup');
        $client->Description = $request->input('descriptionup');
        $client->Phone_Number = $request->input('phoneup');
        $client->Status = $request->input('statusup');
        $client->Contract_Start_Date = $request->input('startup');
        $client->Contract_End_Date = $request->input('endup');
        $client->save();
        return redirect('/allclients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */

    public function delete(Client $id){

        $id->delete();
        return redirect('allclients');
    }

    public function search(){

        $q = \Illuminate\Support\Facades\Input::get('q');
        $clients = \App\Client::where('Title', 'LIKE', '%' . $q . '%')->get();
        if (count($clients) > 0)
            return view('clients.search')->withDetails($clients)->withQuery($q);
        else
            return view('clients.nodetailsfound');
    }
}
