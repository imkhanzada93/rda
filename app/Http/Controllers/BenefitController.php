<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use Illuminate\Http\Request;
use Auth;

class BenefitController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Benefit List";
        return view('benefits.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'New Benefit';
        return view('benefits.create', compact('title'));
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
        $benefit = new Benefit;
        $benefit->name = $request->name;
        $benefit->save();
        return redirect()->route('benefits.index')->with('success','Benefit created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function show(Benefit $benefit)
    {
        $title ="Benefit";
        return view('benefits.show',compact('benefit', 'title'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function edit(Benefit $benefit)
    {
        $title ="Edit Benefit";
        return view('benefits.edit', compact('benefit', 'title'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Benefit $benefit)
    {
        $this->formValidate($benefit->id);
        $benefit->name = $request->name;
        $benefit->update();
        return redirect()->route('benefits.index')->with('success','Benefit updated successfully');
    }

    public function getBenefits(Request $request)
    {
        $columns = array( 
                        0 =>'id', 
                        1 =>'name',
                        2 =>'image',
                        3=> 'created_at',
                        4=> 'updated_at',
                        5=> 'deleted_at',
                    );
  
        $totalData = Benefit::count();
            
        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
            
        if(empty($request->input('search.value')))
        {          
            $benefits = Benefit::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 
         
            $benefits =  Benefit::where('name', 'LIKE',"%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();

            $totalFiltered = Benefit::where('name', 'LIKE',"%{$search}%")
                ->count();
        }

        $data = array();
        if(!empty($benefits))
        {
            foreach ($benefits as $benefit)
            {
                $nestedData['id'] = $benefit->id;
                $nestedData['name'] = $benefit->name;
                $nestedData['image'] = '<img src="' . asset('storage/'.$benefit->image) . '">';
                $nestedData['created_at'] = $benefit->created_at;
                $nestedData['updated_at'] = $benefit->updated_at;
                $nestedData['deleted_at'] = $benefit->deleted_at;
                $nestedData['action'] = '<a class="btn btn-sm btn-outline-info btn-rounded" href="' . route('benefits.show', $benefit->id) .'"><i class="fa fa-eye"></i></a>';
                $edit_access = Auth::user()->can('benefit-edit');
                if($edit_access){
                    $nestedData['action'] .= ' <a class="btn btn-sm btn-outline-primary btn-rounded" href="' . route('benefits.edit', $benefit->id) .'"><i class="fa fa-edit"></i></a>';
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
                'name' => 'required|unique:benefits,name,' . $id,
            ]);
        }else{
            request()->validate([
                'name' => 'required|unique:benefits',
            ]);
        }
    }
}