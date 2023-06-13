<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Management;

class ManagementController extends Controller
{
    public function index()
    {
        $contacts = Management::all();
        $contacts = Management::Paginate(5);
        return view('management',compact('contacts'),)->with('management',$contacts);
    }

    public function search(Request $request)
    {
        $contacts = Management::with('management')->Family_nameSearch($request->family_name)->Given_nameSearch($request->given_name)->EmailSearch($request->email)->GenderSearch($request->gender)->DateSearch($request->date)->get();
        $management = Management::all();

        $requestData = compact(
            'family_name',
            'given_name',
            'email',
            'gender',
            'date'
        );

        return view('management', $requestData);
    }
}