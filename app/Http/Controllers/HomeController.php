<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\InsuranceType;
use App\Models\Insurance;
use App\Models\Plan;
use App\Models\Account;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $insurance_type_count = InsuranceType::count();
        $insurance_count =  Insurance::count();
        $plan_count =  Plan::count();
        $account_count =  Account::count();
        $insurance_types = [];
        $account_by_insurance_types = [];
        $insurance_types_color = [];
        foreach(InsuranceType::all() as $insurance_type){
            $insurance_types[] = $insurance_type->name;
            $account_by_insurance_types[] = Account::where('insurance_type_id', $insurance_type->id)->count();
            $insurance_types_color[] = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        }

        $insurances = [];
        $account_by_insurances = [];
        $insurances_color = [];
        foreach(Insurance::all() as $insurance){
            $insurances[] = $insurance->name;
            $account_by_insurances[] = Account::where('insurance_id', $insurance->id)->count();
            $insurances_color[] = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        }

        $plans = [];
        $account_by_plans = [];
        $plans_color = [];
        foreach(Plan::all() as $plan){
            $plans[] = $plan->name;
            $account_by_plans[] = Account::where('plan_id', $plan->id)->count();
            $plans_color[] = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        }
        
        $accounts = DB::table('accounts')->select(DB::raw('COUNT(`created_at`) AS total, DATE_FORMAT(DATE(created_at), "%d-%m-%y") AS _date'))->groupBy('_date')->orderBy('_date', 'DESC')->skip(0)->take(30)->get();
        
        $account_data = [];
        $account_date = [];
        foreach($accounts as $account){
            $account_data[] = $account->total;
            $account_date[] = $account->_date;
        }
        $title = "Dashboard";
        return view('home', compact('title', 'insurance_type_count', 'insurance_count', 'plan_count', 'account_count', 'insurance_types', 'account_by_insurance_types', 'insurance_types_color', 'insurances', 'account_by_insurances', 'insurances_color', 'plans', 'account_by_plans', 'plans_color', 'account_data', 'account_date'));
    }
}
