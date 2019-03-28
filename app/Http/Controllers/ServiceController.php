<?php

namespace App\Http\Controllers;

use App\Client;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $services = Service::all();
        return view('services.index')->with('services', $services);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $client = Client::find($id);
        return view('services.addservice', compact('client', $client));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        // $this->validate($request, [
        //     'Title' => 'required|min:2',
        //     'Description' => 'required',
        //     'Type' => 'required',
        //     'Link' => 'required'
   
        // ]);
        
        // Add Service For Particular Client
        $client = Client::find($id);
        $service = new Service();
        $service->Client_id=$client->id;
        $service->Title = $request->input('stitle');
        $service->Description = $request->input('sdescription');
        $service->Type = $request->input('stype');
        $service->Link = $request->input('slink');
        $service->save();
        return redirect('/allservices');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('services.edit')->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        //$service->Client_id= Auth::user()->id;
        $service->Title = $request->input('stitleup');
        $service->Description = $request->input('sdescriptionup');
        $service->Type = $request->input('stypeup');
        $service->Link = $request->input('slinkup');
        $service->save();
        return redirect('/allservices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function delete(Service $id)
    {
        $id->delete();
        return redirect('allservices');
    }
}
