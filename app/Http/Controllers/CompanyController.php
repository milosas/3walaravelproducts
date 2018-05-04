<?php

namespace App\Http\Controllers;
use App\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
  public function index(){ // atvaizduoti viska ekrane {SHOW- atvaizduoti 1} //
  $company = Company::all();
  return view ('companies.index', compact('company'));
  }

  public function show(Company $company){
  return view ('companies.company', compact('company'));
  }
  public function delete($id){
  $asd=Company::findOrFail($id);
  $asd->delete();
  return redirect()->route('companies.page')->with('ZINUTE','Sekmingai istrinta');
  }
}
