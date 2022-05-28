<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class InsuranceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Insurance List";
        return view('insurances.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'New Insurance';
        return view('insurances.create', compact('title'));
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
        
        $insurance = new Insurance;
        $insurance->name = $request->name;
        $insurance->key = 'I' . Str::random(15) . date('dmyhis') . Str::random(15) . '==';
        $request->file('image')->store('insurances', 'public');
        $insurance->image = 'insurances/' . $request->file('image')->hashName();
        $insurance->save();
        return redirect()->route('insurances.index')->with('success','Insurance created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function show(Insurance $insurance)
    {
        $title ="Insurance";
        return view('insurances.show',compact('insurance', 'title'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function edit(Insurance $insurance)
    {
        $title ="Edit Insurance";
        return view('insurances.edit', compact('insurance', 'title'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insurance $insurance)
    {
        $this->formValidate($insurance->id);
        $insurance->name = $request->name;
        if($request->hasFile('image')){
            $request->file('image')->store('insurances', 'public');
            $insurance->image = 'insurances/' . $request->file('image')->hashName();
        }
        $insurance->update();
        return redirect()->route('insurances.index')->with('success','Insurance updated successfully');
    }

    public function getInsurances(Request $request)
    {
        $columns = array( 
                        0 =>'id', 
                        1 =>'name',
                        2 =>'image',
                        3=> 'created_at',
                        4=> 'updated_at',
                        5=> 'deleted_at',
                    );
  
        $totalData = Insurance::count();
            
        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
            
        if(empty($request->input('search.value')))
        {          
            $insurances = Insurance::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 
         
            $insurances =  Insurance::where('name', 'LIKE',"%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();

            $totalFiltered = Insurance::where('name', 'LIKE',"%{$search}%")
                ->count();
        }

        $data = array();
        if(!empty($insurances))
        {
            foreach ($insurances as $insurance)
            {
                $nestedData['id'] = $insurance->id;
                $nestedData['name'] = $insurance->name;
                $nestedData['key'] = $insurance->key;
                $nestedData['image'] = '<img src="' . asset('storage/'.$insurance->image) . '" width="100">';
                $nestedData['created_at'] = $insurance->created_at;
                $nestedData['updated_at'] = $insurance->updated_at;
                $nestedData['deleted_at'] = $insurance->deleted_at;
                $nestedData['action'] = '<a class="btn btn-sm btn-outline-info btn-rounded" href="' . route('insurances.show', $insurance->id) .'"><i class="fa fa-eye"></i></a>';
                $edit_access = Auth::user()->can('insurance-edit');
                if($edit_access){
                    $nestedData['action'] .= ' <a class="btn btn-sm btn-outline-primary btn-rounded" href="' . route('insurances.edit', $insurance->id) .'"><i class="fa fa-edit"></i></a>';
                }
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
                'name' => 'required|unique:insurances,name,' . $id,
                'image' => 'mimes:jpeg,bmp,png'
            ]);
        }else{
            request()->validate([
                'name' => 'required|unique:insurances',
                'image' => 'required|mimes:jpeg,bmp,png'
            ]);
        }
    }
}