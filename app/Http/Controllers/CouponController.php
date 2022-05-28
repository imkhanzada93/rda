<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Auth;

class CouponController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Coupon List";
        return view('coupons.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'New Coupon';
        return view('coupons.create', compact('title'));
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
        $coupon = Coupon::create($request->all());
        return redirect()->route('coupons.index')->with('success','Coupon created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        $title ="Coupon";
        return view('coupons.show',compact('coupon', 'title'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        $title ="Edit Coupon";
        return view('coupons.edit', compact('coupon', 'title'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        $this->formValidate($coupon->id);
        $coupon->update($request->all());
        return redirect()->route('coupons.index')->with('success','Coupon updated successfully');    
    }

    public function getCoupons(Request $request)
    {
        $columns = array( 
                        0 =>'id', 
                        1 =>'name',
                        2=> 'created_at',
                        3=> 'updated_at',
                        4=> 'deleted_at',
                    );
  
        $totalData = Coupon::count();
            
        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
            
        if(empty($request->input('search.value')))
        {          
            $coupons = Coupon::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 
         
            $coupons =  Coupon::where('name', 'LIKE',"%{$search}%")                            
                ->offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();

            $totalFiltered = Coupon::where('name', 'LIKE',"%{$search}%")->count();
        }

        $data = array();
        if(!empty($coupons))
        {
            foreach ($coupons as $coupon)
            {
                $nestedData['id'] = $coupon->id;
                $nestedData['name '] = $coupon->name ;
                $nestedData['code '] = $coupon->code ;
                $nestedData['is_expiry '] = ($coupon->is_expiry) ? 'Yes' : 'No' ;
                $nestedData['expiry_date '] = $coupon->expiry_date ;
                $nestedData['multi_use '] = ($coupon->multi_use) ? 'Yes' : 'No' ;
                $nestedData['discount_amount '] = $coupon->discount_amount ;
                $nestedData['discount_type'] = $coupon->discount_type;
                $nestedData['is_active'] = ($coupon->is_active) ? 'Active' : 'In Active';
                $nestedData['created_at'] = $coupon->created_at;
                $nestedData['updated_at'] = $coupon->updated_at;
                $nestedData['deleted_at'] = $coupon->deleted_at;
                $nestedData['action'] = '<a class="btn btn-sm btn-outline-info btn-rounded" href="' . route('coupons.show', $coupon->id) .'"><i class="fa fa-eye"></i></a>';
                $edit_access = Auth::user()->can('coupon-edit');
                if($edit_access){
                    $nestedData['action'] .= ' <a class="btn btn-sm btn-outline-primary btn-rounded" href="' . route('coupons.edit', $coupon->id) .'"><i class="fa fa-edit"></i></a>';
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
                'name' => 'required',
                'code' => 'required|unique:coupons,code,' . $id,
                'is_expiry' => 'required', 
                'expiry_date' => 'required_if:is_expiry,1', 
                'multi_use' => 'required', 
                'discount_amount' => 'required', 
                'discount_type' => 'required', 
                'is_active' => 'required', 
            ]);
        }else{
            request()->validate([
                'name' => 'required',
                'code' => 'required|unique:coupons',
                'is_expiry' => 'required', 
                'expiry_date' => 'required_if:is_expiry,1', 
                'multi_use' => 'required', 
                'discount_amount' => 'required', 
                'discount_type' => 'required', 
                'is_active' => 'required', 
            ]);
        }
    }
}