<?php

namespace App\Http\Controllers;

use App\Models\PlanCategory;
use Illuminate\Http\Request;
use Auth;

class PlanCategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Plan Category List";
        return view('plan-categories.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'New Plan Category';
        return view('plan-categories.create', compact('title'));
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
        
        $plan_category = new PlanCategory;
        $plan_category->name = $request->name;
        $request->file('image')->store('plan-categories', 'public');
        $plan_category->image = 'plan-categories/' . $request->file('image')->hashName();
        $plan_category->save();
        return redirect()->route('plan-categories.index')->with('success','Plan Category created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Plan Category  $plan_category
     * @return \Illuminate\Http\Response
     */
    public function show(PlanCategory $plan_category)
    {
        $title ="Plan Category";
        return view('plan-categories.show',compact('plan_category', 'title'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plan Category  $plan_category
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanCategory $plan_category)
    {
        $title ="Edit Plan Category";
        return view('plan-categories.edit', compact('plan_category', 'title'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plan Category  $plan_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanCategory $plan_category)
    {
        $this->formValidate($plan_category->id);
        $plan_category->name = $request->name;
        if($request->hasFile('image')){
            $request->file('image')->store('plan_categories', 'public');
            $plan_category->image = 'plan_categories/' . $request->file('image')->hashName();
        }
        $plan_category->update();
        return redirect()->route('plan_categories.index')->with('success','Plan Category updated successfully');    
    }

    public function getPlanCategories(Request $request)
    {
        $columns = array( 
                        0 =>'id', 
                        1 =>'name',
                        2=> 'created_at',
                        3=> 'updated_at',
                        4=> 'deleted_at',
                    );
  
        $totalData = PlanCategory::count();
            
        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
            
        if(empty($request->input('search.value')))
        {          
            $plan_categories = PlanCategory::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 
         
            $plan_categories =  PlanCategory::where('name', 'LIKE',"%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();

            $totalFiltered = PlanCategory::where('name', 'LIKE',"%{$search}%")
                ->count();
        }

        $data = array();
        if(!empty($plan_categories))
        {
            foreach ($plan_categories as $plan_category)
            {
                $nestedData['id'] = $plan_category->id;
                $nestedData['name'] = $plan_category->name;
                $nestedData['image'] = '<img src="' . asset('storage/'.$plan_category->image) . '" width="100">';
                $nestedData['created_at'] = $plan_category->created_at;
                $nestedData['updated_at'] = $plan_category->updated_at;
                $nestedData['deleted_at'] = $plan_category->deleted_at;
                $nestedData['action'] = '<a class="btn btn-sm btn-outline-info btn-rounded" href="' . route('plan-categories.show', $plan_category->id) .'"><i class="fa fa-eye"></i></a>';
                $edit_access = Auth::user()->can('plan-category-edit');
                if($edit_access){
                    $nestedData['action'] .= ' <a class="btn btn-sm btn-outline-primary btn-rounded" href="' . route('plan-categories.edit', $plan_category->id) .'"><i class="fa fa-edit"></i></a>';
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
                'name' => 'required|unique:plan_categories,name,' . $id,
                'image' => 'mimes:jpeg,bmp,png'
            ]);
        }else{
            request()->validate([
                'name' => 'required',
                'image' => 'required|mimes:jpeg,bmp,png'
            ]);
        }
    }
}