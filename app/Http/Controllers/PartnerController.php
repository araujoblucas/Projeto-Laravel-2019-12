<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.PartnerCreator');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  {
        $dados = new Partner();
        $dados->name = $request->name;
        $dados->ocupation = $request->ocupation;
        $dados->image = $request->image;
        $dados->facebook = $request->facebook;
        $dados->linkedin = $request->linkedin;
        $dados->pinterest = $request->pinterest;
        $dados->twitter = $request->twitter;
        $dados->save();

        return redirect()->route('partner_show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        return view('admin.PartnerList');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::find($id);
        return view('admin.PartnerEditor')->withPartner($partner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados = Partner::findorfail($id);
        $dados->name = $request->name;
        $dados->ocupation = $request->ocupation;
        $dados->image = $request->image;
        $dados->facebook = $request->facebook;
        $dados->linkedin = $request->linkedin;
        $dados->pinterest = $request->pinterest;
        $dados->twitter = $request->twitter;
        $dados->save();

        return redirect()->route('partner_show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();
        return redirect()->route('partner_show');
    }
}
