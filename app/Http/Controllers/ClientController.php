<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Auth;

class ClientController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Client List";
        return view('clients.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'New Client';
        return view('clients.create', compact('title'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->formValidate();
        $client = Client::create($request->all());
        return 1;
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $title ="Client";
        return view('clients.show',compact('client', 'title'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $title ="Edit Client";
        return view('clients.edit', compact('client', 'title'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $this->formValidate($client->id);
        $client->update($request->all());
        return redirect()->route('clients.index')->with('success','Client updated successfully');    
    }

    public function getClients(Request $request)
    {
        $columns = array( 
                        0 =>'id', 
                        1 =>'name',
                        2=> 'created_at',
                        3=> 'updated_at',
                        4=> 'deleted_at',
                    );
  
        $totalData = Client::count();
            
        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
            
        if(empty($request->input('search.value')))
        {          
            $clients = Client::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 
         
            $clients =  Client::where('name', 'LIKE',"%{$search}%")                            
                ->offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();

            $totalFiltered = Client::where('name', 'LIKE',"%{$search}%")->count();
        }

        $data = array();
        if(!empty($clients))
        {
            foreach ($clients as $client)
            {
                $nestedData['id'] = $client->id;
                $nestedData['full_name'] = $client->full_name;
                $nestedData['cnic'] = $client->cnic;
                $nestedData['rda_account_number'] = $client->rda_account_number;
                $nestedData['email'] = $client->email;
                $nestedData['created_at'] = $client->created_at;
                $nestedData['updated_at'] = $client->updated_at;
                $nestedData['deleted_at'] = $client->deleted_at;
                $data[] = $nestedData;
            }
        }
          
        $json_data = array(
                        "draw"            => intval($request->input('draw')),  
                        "recordsTotal"    => intval($totalData),  
                        "recordsFiltered" => intval($totalFiltered), 
                        "data"            => $data
                    );
            
        echo json_encode($json_data); 
    }

    public function formValidate($id = null)
    {
        if($id){
            request()->validate([
                'full_name' => 'required',
                'cnic' => 'required',
                'rda_account_number' => 'required',
                'email' => 'required',
            ]);
        }else{
            request()->validate([
                'full_name' => 'required',
                'cnic' => 'required',
                'rda_account_number' => 'required',
                'email' => 'required',
            ]);
        }
    }
}