<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        return view('admin.company.add-company');
    }
    public function create(){
        $companys = Company::all();
        return view('admin.company.view-info', ['companys'=>$companys]);
    }
    public function store(Request $request){
        $company = new Company();
        $company->company_name = $request->company_name;
        $company->company_email = $request->company_email;
        $company->company_address = $request->company_address;
        $company->save();

        return redirect('/add-company')->with('message', 'Company Info Save Successfully');
    }
    public function edit($id){
        $company = Company::find($id);
        return view('admin.company.edit', ['company'=>$company]);
    }
    public function update(Request $request){
        $company = Company::find($request->company_id);
        $company->company_name = $request->company_name;
        $company->company_email = $request->company_email;
        $company->company_address = $request->company_address;
        $company->save();

        return redirect('/new-info')->with('message', 'Company Info Updated Successfully');
    }
    public function delete($id){
        $company = Company::find($id);
        $company->delete();

        return redirect('/new-info')->with('message', 'Company Info Delete Sucessfully');
    }
}
