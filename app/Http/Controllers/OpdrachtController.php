<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opdracht;

class OpdrachtController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cateraar_id' => 'required',
            'naam' => 'required',
            'omschrijving' => 'required',
            'oplever_datum' => 'required'
        ]);
        Opdracht::create($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opdracht = Opdracht::findOrFail($id);
        $opdracht->delete();
        return back();
    }
}
