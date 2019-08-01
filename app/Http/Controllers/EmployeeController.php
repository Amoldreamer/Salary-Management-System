<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Validator;

class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('employee');
    }

    public function index(){
        return view('employee');
    }

    public function viewEmployees(){
        $data = DB::table('users')
                ->join('roles','users.role_id','=','roles.id')
                ->select('users.*','roles.*')
                ->get();
                
        return view('auth.newRegisterFinal',compact('data'));
    }

    public function editEmployees(Request $request){
        $data = DB::table('users')->where(['Register'=>$request->register])
            ->join('roles','users.role_id','=','roles.id')
            ->select('users.*','roles.*')
            ->get();

            foreach($data as $key=>$value){
                $s = DB::table('states')->where(['states'=>$value->state])
                        ->get();
            }
            foreach($s as $key=>$value){
                $states = DB::table('states')
                        ->whereNotIn('states.id',[$value->id])
                        ->get();
            }
        
        return view('editEmployees',compact('data','states'));
    }

    public function editEmployeeFinal(Request $request){
            if($request->hasfile('photo')){
                $file = $request->file('photo');
                $extension = $file->getClientOriginalExtension();
                $fileName = time().'.'.$extension;
                $file->move('public/uploads/highlights/',$fileName);
            }
            if($request->role == 'admin'){
                $role_id = 1;
            }
            elseif($request->role == 'employee'){
                $role_id = 2;
            }

                DB::table('users')->where(['Register'=>$request->register])->update(['name'=>$request->name,'email'=>$request->email,'password'=>Hash::make($request->password),
                'mobile'=>$request->mobile,'date_of_birth'=>$request->date_of_birth,'address'=>$request->address,'city'=>$request->city,'state'=>$request->state,
                'photo'=>$fileName,'role_id'=>$role_id]);
                $info = DB::table('users')->where(['Register'=>$request->register])->get();
                if($request->role == 'admin'){
                    $role_id = 1;
                }
                elseif($request->role == 'employee'){
                    $role_id = 2;
                }

                DB::table('role_users')->where(['user_id'=>$info->id])->update(['role_id'=>$role_id]);
    }

    public function deleteEmployees(Request $request){
        
        $data = DB::table('users')->where(['users.Register'=>$request->register])->get();
        foreach($data as $key=>$value){
         $imgName = $value->photo;
         $imgFile = "public/uploads/highlights/$imgName";
        unlink($imgFile);
        DB::table('role_users')->where(['user_id'=>$value->id])->delete();
     };
        
        DB::table('users')->where(['Register'=>$request->register])->delete();
        

        $data = DB::table('users')
                ->join('roles','users.role_id','=','roles.id')
                ->select('users.*','roles.*')
                ->get();
        return view('auth.newRegisterFinal',compact('data'));
    }

    public function addSalary(Request $request){
        $register = $request->register;
        return view('addSalary',compact('register'));
    }

    public function addSalaryFinal(Request $request){
        $month = $request->month;
        $workingDays = $request->workingDays;
        $basicPay = $request->basicPay;
        $medicalClaim = $request->medicalClaim;
        $travelAllowance = $request->travelAllowance;
        $dearnessAllowance = $request->dearnessAllowance;
        $others = $request->others;
        $providentFund = $request->providentFund;
        $monthlyTax = $request->monthlyTax;
        $total = $basicPay+$medicalClaim+$travelAllowance+$dearnessAllowance+$others-$providentFund-$monthlyTax;
        
        DB::table('salaries')->insert(['Register'=>$request->register,'Department'=>$request->department,'Designation'=>$request->designation,'Month'=>$request->month,
        'Year'=>$request->salaryYear,'Working_days'=>$request->workingDays,'Basic_pay'=>$request->basicPay,'Medical_claim'=>$request->medicalClaim,
        'Travel_allowance'=>$request->travelAllowance,'Dearness_allowance'=>$request->dearnessAllowance,'Salary_act_no'=>$request->account,
        'Others'=>$request->others,'Provident_fund'=>$request->providentFund,'Monthly_tax'=>$request->monthlyTax,'Total'=>$total,'Salary_notes'=>$request->salaryNotes]);

        $salary = DB::table('salaries')->latest('created_at')->first();

        DB::table('users')->where(['Register'=>$request->register])->update(['salary_id'=>$salary->id]);
        $data = DB::table('salaries')
                ->join('users','salaries.id','=','users.salary_id')
                ->select('users.*','salaries.*')
                ->get();
        return view('showSalaries',compact('data'));
    }

    public function viewSalaries(){
        $data = DB::table('salaries')
                ->join('users','salaries.id','=','users.salary_id')
                ->select('users.*','salaries.*')
                ->get();
        return view('showSalaries',compact('data'));
    }

    public function salarySlip(Request $request){
        $register = $request->register;
        return view('salarySlip',compact('register'));
    }

    public function displaySalarySlips(Request $request){
        $year = $request->year;
        $month = $request->month;
        $register = $request->register;
        
        $data = DB::table('salaries')
            ->where(['Register'=>$register])
            ->where(['Year'=>$year])
            ->where(['Month'=>$month])
            ->get();
        $person = DB::table('users')->where(['Register'=>$request->register])->get();
        
        return view('displaySalarySlips',compact('year','month','data','person'));
    }
}
