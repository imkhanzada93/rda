<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\PlanBenefit;
use Illuminate\Http\Request;
use Auth;

class PlanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Plan List";
        return view('plans.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'New Plan';
        return view('plans.create', compact('title'));
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
        $plan = Plan::create($request->all());
        foreach($request->amount as $key => $amount){
            if(($amount != null) || ($amount != null)){
                PlanBenefit::create([
                    'plan_id' => $plan->id,
                    'benefit_id' => $request->benefit_id[$key], 
                    'amount' => $amount
                ]);
            }
        }
        return redirect()->route('plans.index')->with('success','Plan created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        $title ="Plan";
        return view('plans.show',compact('plan', 'title'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        $title ="Edit Plan";
        $plan_benefit = PlanBenefit::find($plan->id);
        return view('plans.edit', compact('plan', 'plan_benefit', 'title'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        $this->formValidate($plan->id);
        $plan_benefit = PlanBenefit::where('plan_id', $plan->id);
        if($plan_benefit){
            $plan_benefit->forceDelete();
        }
        $plan->update($request->all());
        foreach($request->amount as $key => $amount){
            if(($amount != null) || ($amount != null)){
                PlanBenefit::create([
                    'plan_id' => $plan->id,
                    'benefit_id' => $request->benefit_id[$key],
                    'amount' => $amount
                ]);
            }
        }
        return redirect()->route('plans.index')->with('success','Plan updated successfully');    
    }

    public function getPlans(Request $request)
    {
        $columns = array( 
                        0 =>'id', 
                        1 =>'name',
                        2=> 'created_at',
                        3=> 'updated_at',
                        4=> 'deleted_at',
                    );
  
        $totalData = Plan::count();
            
        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
            
        if(empty($request->input('search.value')))
        {          
            $plans = Plan::with('plan_category')->offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 
         
            $plans =  Plan::with('plan_category')->where('name', 'LIKE',"%{$search}%")                            
                ->offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();

            $totalFiltered = Plan::with('plan_category')->where('name', 'LIKE',"%{$search}%")->count();
        }

        $data = array();
        if(!empty($plans))
        {
            foreach ($plans as $plan)
            {
                $nestedData['id'] = $plan->id;
                $nestedData['name'] = $plan->name;
                $nestedData['plan_category'] = $plan->plan_category->name;
                $nestedData['coverage_type'] = $plan->coverage_type;
                $nestedData['coverage_criteria'] = $plan->coverage_criteria;
                $nestedData['eligibility_dependent_includes'] = $plan->eligibility_dependent_includes;
                $nestedData['amount'] = $plan->amount;
                $nestedData['created_at'] = $plan->created_at;
                $nestedData['updated_at'] = $plan->updated_at;
                $nestedData['deleted_at'] = $plan->deleted_at;
                $nestedData['action'] = '<a class="btn btn-sm btn-outline-info btn-rounded" href="' . route('plans.show', $plan->id) .'"><i class="fa fa-eye"></i></a>';
                $edit_access = Auth::user()->can('plan-edit');
                if($edit_access){
                    $nestedData['action'] .= ' <a class="btn btn-sm btn-outline-primary btn-rounded" href="' . route('plans.edit', $plan->id) .'"><i class="fa fa-edit"></i></a>';
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
                'name' => 'required|unique:plans,name,' . $id,
                'plan_category_id' => 'required',
                'coverage_type' => 'required',
                'coverage_criteria' => 'required',
                'eligibility_dependent_includes' => 'required',
                'amount' => 'required|numeric',
            ]);
        }else{
            request()->validate([
                'name' => 'required|unique:plans',
                'plan_category_id' => 'required',
                'coverage_type' => 'required',
                'coverage_criteria' => 'required',
                'eligibility_dependent_includes' => 'required',
                'amount' => 'required|numeric',
            ]);
        }
    }
}