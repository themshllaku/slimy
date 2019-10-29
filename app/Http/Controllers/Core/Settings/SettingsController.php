<?php

namespace App\Http\Controllers\Core\Settings;

use App\Http\Controllers\Controller;
use App\Models\Core\Organisations\Organisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function index()
    {
        return view('theme.app.settings.index');
    }

    public function updateGeneral(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'  =>  'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors(['Name field is required !']);
        }

        $org = Organisation::findOrFail(auth()->user()->organisation->id);
        $org->name = $request->name;
        $org->phone = $request->phone;
        $org->tax_number = $request->tax;
        $org->email = $request->email;
        $org->address = $request->address;
        $org->save();

        return redirect()->back()->with('success', 'Organisation is updated !');
    }
}
