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

    public function search(Request $contacts)
    {
        $contacts = Management::with('management')->Family_nameSearch($contacts->family_name)->Given_nameSearch($contacts->given_name)->EmailSearch($contacts->email)->GenderSearch($contacts->gender)->get();
        $management = Management::all();
        dd($contacts);

        return redirect('management')->with([$contacts->all()]);
    }

    public function destroy(Request $contacts)
    {
        Management::find($contacts->id)->delete();
        return redirect('management');
    }
}