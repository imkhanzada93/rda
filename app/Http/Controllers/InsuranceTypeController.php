<?php

namespace App\Http\Controllers;

use App\Models\InsuranceType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class InsuranceTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Insurance Type List";
        return view('insurance-types.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'New Insurance Type';
        return view('insurance-types.create', compact('title'));
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
        
        $insurance_type = new InsuranceType;
        $insurance_type->name = $request->name;
        $request->file('image')->store('insurance_types', 'public');
        $insurance_type->image = 'insurance_types/' . $request->file('image')->hashName();
        $insurance_type->save();
        return redirect()->route('insurance-types.index')->with('success','Insurance Type created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\InsuranceType  $insurance_type
     * @return \Illuminate\Http\Response
     */
    public function show(InsuranceType $insurance_type)
    {
        $title ="Insurance Type";
        return view('insurance-types.show',compact('insurance_type', 'title'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InsuranceType  $insurance_type
     * @return \Illuminate\Http\Response
     */
    public function edit(InsuranceType $insurance_type)
    {
        $title ="Edit Insurance Type";
        return view('insurance-types.edit', compact('insurance_type', 'title'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InsuranceType  $insurance_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InsuranceType $insurance_type)
    {
        $this->formValidate($insurance_type->id);
        $insurance_type->name = $request->name;
        if($request->hasFile('image')){
            $request->file('image')->store('insurance_types', 'public');
            $insurance_type->image = 'insurance_types/' . $request->file('image')->hashName();
        }
        $insurance_type->update();
        return redirect()->route('insurance-types.index')->with('success','Insurance Type updated successfully');
    }

    public function getInsuranceTypes(Request $request)
    {
        $columns = array( 
                        0 =>'id', 
                        1 =>'name',
                        2 =>'image',
                        3=> 'created_at',
                        4=> 'updated_at',
                        5=> 'deleted_at',
                    );
  
        $totalData = InsuranceType::count();
            
        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
            
        if(empty($request->input('search.value')))
        {          
            $insurance_types = InsuranceType::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 
         
            $insurance_types =  InsuranceType::where('name', 'LIKE',"%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();

            $totalFiltered = InsuranceType::where('name', 'LIKE',"%{$search}%")
                ->count();
        }

        $data = array();
        if(!empty($insurance_types))
        {
            foreach ($insurance_types as $insurance_type)
            {
                $nestedData['id'] = $insurance_type->id;
                $nestedData['name'] = $insurance_type->name;
                $nestedData['image'] = '<img src="' . asset('storage/'.$insurance_type->image) . '" width="100">';
                $nestedData['created_at'] = $insurance_type->created_at;
                $nestedData['updated_at'] = $insurance_type->updated_at;
                $nestedData['deleted_at'] = $insurance_type->deleted_at;
                $nestedData['action'] = '<a class="btn btn-sm btn-outline-info btn-rounded" href="' . route('insurance-types.show', $insurance_type->id) .'"><i class="fa fa-eye"></i></a>';
                $edit_access = Auth::user()->can('insurance-type-edit');
                if($edit_access){
                    $nestedData['action'] .= ' <a class="btn btn-sm btn-outline-primary btn-rounded" href="' . route('insurance-types.edit', $insurance_type->id) .'"><i class="fa fa-edit"></i></a>';
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
                'name' => 'required|unique:insurance_types,name,' . $id,
                'image' => 'mimes:jpeg,bmp,png'
            ]);
        }else{
            request()->validate([
                'name' => 'required|unique:insurance_types',
                'image' => 'required|mimes:jpeg,bmp,png'
            ]);
        }
    }
}