<?php

namespace App\Http\Controllers\Core\More;

use App\Http\Controllers\Controller;
use App\Models\Core\More\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CurrenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currencies = Currency::all();
        return view('theme.app.more.currencies.index', compact('currencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theme.app.more.currencies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'rate' => 'required',
                'code' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors(['Please fill required fields !']);
            }

            $currency = new Currency;

            $currency->organisation_id = auth()->user()->organisation->id;
            $currency->name = $request->name;
            $currency->rate = (float) $request->rate;
            $currency->code = $request->code;
            if ($request->enabled) {
                $currency->enabled = $request->enabled;
            }
            $currency->save();

            return redirect()->back()->with('success', 'Currency is created !');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors([$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
