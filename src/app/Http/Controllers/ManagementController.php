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
        $contacts = Management::with('management')->Family_nameSearch($contacts->family_name)->Given_nameSearch($contacts->given_name)->EmailSearch($contacts->email)->GenderSearch($contacts->gender)->paginate(10);
        $management = Management::all();

        return view('management', compact('contacts','management'));
    }

    public function reset(Request $contacts)
    {
        $contacts = Management::Paginate(10);
        return view('management', ['contacts' => $contacts]);
    }

    public function destroy(Request $contacts)
    {
        Management::find($contacts->id)->delete();
        return redirect('management');
    }
}