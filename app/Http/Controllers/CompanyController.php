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
}
