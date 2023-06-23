<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Management;

class ManagementController extends Controller
{
    public function index()
    {
        $contacts = Management::Paginate(10);
        return view('management', ['contacts'=>$contacts]);
    }

    public function search(Request $request)
    {
        $contacts = Management::with('management')->Family_nameSearch($request->family_name)->Given_nameSearch($request->given_name)->EmailSearch($request->email)->GenderSearch($request->gender)->get();
        $management = Management::all();

        $contact = compact(
            'contacts'
        );

        return view('management', $contact);
    }

    public function destroy(Request $contacts)
    {
        Management::find($contacts->id)->delete();
        return redirect('management',$contacts);
    }
}