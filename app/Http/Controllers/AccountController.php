<?php



namespace App\Http\Controllers;



use App\Models\Account;

use App\Models\Beneficiary;

use App\Models\Bank;

use App\Models\Insurance;

use Illuminate\Http\Request;

use Auth;

use Mail;



class AccountController extends Controller

{



    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $title = "Account List";

        return view('accounts.index',compact('title'));

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

        $account = new Account();

        $account->insurance_type_id = $request->insurance_type;

        $account->insurance_id = $request->insurance;

        $account->plan_id = $request->plan;

        $account->full_name = $request->full_name;

        $account->cnic = $request->cnic;

        $account->phone_number = $request->phone_number;

        $account->email = $request->email;

        $request->file('cnic_image')->store('accounts', 'public');

        $account->cnic_image = 'accounts/' . $request->file('cnic_image')->hashName();

        $request->file('family_registration_certificate')->store('accounts', 'public');

        $account->family_registration_certificate = 'accounts/' . $request->file('family_registration_certificate')->hashName();

        $request->file('b_form')->store('accounts', 'public');

        $account->b_form = 'accounts/' . $request->file('b_form')->hashName();

        $request->file('marriage_certificate')->store('accounts', 'public');

        $account->marriage_certificate = 'accounts/' . $request->file('marriage_certificate')->hashName();

        $account->save();

        

        $beneficiary = new Beneficiary();

        $beneficiary->full_name = $request->b1_full_name;

        $beneficiary->dob = $request->b1_dob;

        $beneficiary->relation = $request->b1_relation;

        $beneficiary->cnic = $request->b1_cnic;

        $beneficiary->address = $request->address;

        $beneficiary->account_id = $account->id;

        $beneficiary->save();

        

        $beneficiary = new Beneficiary();

        $beneficiary->full_name = isset($request->b2_full_name) ? $request->b2_full_name : '' ;

        $beneficiary->dob = isset($request->b2_dob) ? $request->b2_dob : '' ;

        $beneficiary->relation = isset($request->b2_relation) ? $request->b2_relation : '' ;

        $beneficiary->cnic = isset($request->b2_cnic) ? $request->b2_cnic : '' ;

        $beneficiary->address = isset($request->address) ? $request->address : '' ;

        $beneficiary->account_id = $account->id;

        $beneficiary->save();



        Mail::send('email.rda_account', ['beneficiary' => $beneficiary, 'request' => $request], function ($m) use ($beneficiary, $request) {

            $m->from(env('MAIL_USER'), env('APP_NAME'));

            $m->to($request->email, $request->full_name)->subject('RDA ACCOUNTS');

        });

        return redirect()->route('accounts.index')->with('success','Account created successfully.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\Account  $account

     * @return \Illuminate\Http\Response

     */

    public function show(Account $account)

    {

        $title ="Account";

        return view('accounts.show',compact('account', 'title'));

    }

    

    public function getAccounts(Request $request)

    {

        $columns = array( 

                        0 =>'id', 

                        1 =>'name',

                        2=> 'created_at',

                        3=> 'updated_at',

                        4=> 'deleted_at',

                    );

  

        $totalData = Account::count();

            

        $totalFiltered = $totalData; 



        $limit = $request->input('length');

        $start = $request->input('start');

        $order = $columns[$request->input('order.0.column')];

        $dir = $request->input('order.0.dir');

            

        if(empty($request->input('search.value')))

        {          

            $accounts = Account::with(['insurance_type', 'plan', 'insurance'])->offset($start)

                         ->limit($limit)

                         ->orderBy($order,$dir)

                         ->get();

        }

        else {

            $search = $request->input('search.value'); 

         

            $accounts =  Account::with(['insurance_type', 'plan', 'insurance'])->where('name', 'LIKE',"%{$search}%")                            

                ->offset($start)

                ->limit($limit)

                ->orderBy($order,$dir)

                ->get();



            $totalFiltered = Account::with(['insurance_type', 'plan', 'insurance'])->where('name', 'LIKE',"%{$search}%")->count();

        }



        $data = array();

        if(!empty($accounts))

        {

            foreach ($accounts as $account)

            {

                $nestedData['id'] = $account->id;

                $nestedData['full_name'] = $account->full_name;

                $nestedData['cnic'] = $account->cnic;

                $nestedData['phone_number'] = $account->phone_number;

                $nestedData['email'] = $account->email;

                $nestedData['cnic_image'] = $account->cnic_image;

                $nestedData['family_registration_certificate'] = $account->family_registration_certificate;
                
                $nestedData['marriage_certificate'] = $account->marriage_certificate;

                $nestedData['b_form'] = $account->b_form;

                $nestedData['insurance_type'] = $account->insurance_type->name;

                $nestedData['insurance'] = $account->insurance->name;

                $nestedData['plan'] = $account->plan->name;

                $nestedData['created_at'] = $account->created_at;

                $nestedData['updated_at'] = $account->updated_at;

                $nestedData['deleted_at'] = $account->deleted_at;

                $nestedData['action'] = '<a class="btn btn-sm btn-outline-info btn-rounded" href="' . route('accounts.show', $account->id) .'"><i class="fa fa-eye"></i></a>';

                $edit_access = Auth::user()->can('account-edit');

                if($edit_access){

                    $nestedData['action'] .= ' <a class="btn btn-sm btn-outline-primary btn-rounded" href="' . route('accounts.edit', $account->id) .'"><i class="fa fa-edit"></i></a>';

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



    public function formValidate()

    {

        return request()->validate([

            'insurance_type' => 'required',

            'insurance' => 'required',

            'plan' => 'required',

            'full_name' => 'required|regex:/^[\pL\s\-]+$/u',

            'cnic' => 'required|numeric',

            'phone_number' => 'required',

            'email' => 'required',

            'b1_full_name' => 'required|regex:/^[\pL\s\-]+$/u',

            'b1_dob' => 'required|date',

            'b1_relation' => 'required',

            'b1_cnic' => 'required|numeric',

            'b2_full_name' => 'required|regex:/^[\pL\s\-]+$/u',

            'b2_dob' => 'required|date',

            'b2_relation' => 'required',

            'b2_cnic' => 'required|numeric',

            'cnic_image' => 'required',

            'family_registration_certificate' => 'required',

            'marriage_certificate' => 'required',

            'b_form' => 'required',

            'agree_check' => 'required',

        ]);

        

    }



    public function getBankdata(Request $request)

    {

        $insurance_type_id = 0;

        if(isset($request->key)){

            $insurance_type_id = Bank::where('key', $request->key)->first();

            if($insurance_type_id){

                $insurance_type_id = $insurance_type_id->id;

            }

        }



        $records = Account::with(['insurance_type', 'plan', 'insurance'])->where('insurance_type_id', $insurance_type_id);

        $totalData = $records;

        if($request->date){

            $records = $records->where('created_at', '>=', $request->date);

        }

        if($request->plan_id){

            $records = $records->where('plan_id', $request->plan_id);

        }

        if($request->insurance_id){

            $records = $records->where('insurance_id', $request->insurance_id);

        }

        

        $data = array();

        if(!empty($records->get()))

        {

            foreach ($records->get() as $key => $record) {

                $nestedData['id'] = $record->id;

                $nestedData['full_name'] = $record->full_name;

                $nestedData['cnic'] = $record->cnic;

                $nestedData['phone_number'] = $record->phone_number;

                $nestedData['email'] = $record->email;

                $nestedData['cnic_image'] = asset('storage/' . $record->cnic_image);

                $nestedData['family_registration_certificate'] = asset('storage/' . $record->family_registration_certificate);
                
                $nestedData['marriage_certificate'] = asset('storage/' . $record->marriage_certificate);

                $nestedData['b_form'] = asset('storage/' . $record->b_form);

                $nestedData['insurance'] = $record->insurance->name;

                $nestedData['plan'] = $record->plan->name;

                $beneficiaryRecords = Beneficiary::where('account_id', $record->id)->get();

                $beneficiaries = array();

                foreach ($beneficiaryRecords as $beneficiary) {

                    $nestedBeneficiary['id'] = $beneficiary->id;

                    $nestedBeneficiary['full_name'] = $beneficiary->full_name;

                    $nestedBeneficiary['dob'] = $beneficiary->dob;

                    $nestedBeneficiary['relation'] = $beneficiary->relation;

                    $nestedBeneficiary['cnic'] = $beneficiary->cnic;

                    $nestedBeneficiary['phone'] = $beneficiary->phone;

                    $nestedBeneficiary['email'] = $beneficiary->email;

                    $beneficiaries[] = $nestedBeneficiary;

                }

                $nestedData['beneficiaries'] = $beneficiaries;

                $data[] = $nestedData;

            }

        }

        $json_data = array(

                        "recordsTotal"    => intval($totalData->count()),  

                        "recordsFiltered" => intval($records->count()), 

                        "data"            => $data

                    );

            

        echo json_encode($json_data); 

    }



    public function getInsurancedata(Request $request)

    {

        $insurance_id = 0;

        if(isset($request->key)){

            $insurance_id = Insurance::where('key', $request->key)->first();

            if($insurance_id){

                $insurance_id = $insurance_id->id;

            }

        }



        $records = Account::with(['insurance_type', 'plan', 'insurance'])->where('insurance_id', $insurance_id);

        $totalData = $records;

        if($request->date){

            $records = $records->where('created_at', '>=', $request->date);

        }

        if($request->plan_id){

            $records = $records->where('plan_id', $request->plan_id);

        }

        if($request->insurance_id){

            $records = $records->where('insurance_id', $request->insurance_id);

        }

        

        $data = array();

        if(!empty($records->get()))

        {

            foreach ($records->get() as $key => $record) {

                $nestedData['id'] = $record->id;

                $nestedData['full_name'] = $record->full_name;

                $nestedData['cnic'] = $record->cnic;

                $nestedData['phone_number'] = $record->phone_number;

                $nestedData['email'] = $record->email;

                $nestedData['cnic_image'] = asset('storage/' . $record->cnic_image);

                $nestedData['family_registration_certificate'] = asset('storage/' . $record->family_registration_certificate);
                
                $nestedData['marriage_certificate'] = asset('storage/' . $record->marriage_certificate);

                $nestedData['b_form'] = asset('storage/' . $record->b_form);

                $nestedData['insurance_type'] = $record->insurance_type->name;

                $nestedData['plan'] = $record->plan->name;

                $beneficiaryRecords = Beneficiary::where('account_id', $record->id)->get();

                $beneficiaries = array();

                foreach ($beneficiaryRecords as $beneficiary) {

                    $nestedBeneficiary['id'] = $beneficiary->id;

                    $nestedBeneficiary['full_name'] = $beneficiary->full_name;

                    $nestedBeneficiary['dob'] = $beneficiary->dob;

                    $nestedBeneficiary['relation'] = $beneficiary->relation;

                    $nestedBeneficiary['cnic'] = $beneficiary->cnic;

                    $nestedBeneficiary['phone'] = $beneficiary->phone;

                    $nestedBeneficiary['email'] = $beneficiary->email;

                    $beneficiaries[] = $nestedBeneficiary;

                }

                $nestedData['beneficiaries'] = $beneficiaries;

                $data[] = $nestedData;

            }

        }

        $json_data = array(

                        "recordsTotal"    => intval($totalData->count()),  

                        "recordsFiltered" => intval($records->count()), 

                        "data"            => $data

                    );

            

        echo json_encode($json_data); 

    }

}