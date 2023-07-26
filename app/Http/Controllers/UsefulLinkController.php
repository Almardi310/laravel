<?php

namespace App\Http\Controllers;

use App\Models\UsefulLink;
use App\Http\Requests\StoreUsefulLinkRequest;
use App\Http\Requests\UpdateUsefulLinkRequest;

class UsefulLinkController extends Controller
{


    public function index()
    {
        return view('usefulLink.index',[
            'links' => UsefulLink::all()
        ]);
    }


    public function create()
    {
        return view('usefulLink.create');
    }


    public function store(StoreUsefulLinkRequest $request)
    {
        $link = new UsefulLink();
        $link->name = $request->input('name');
        $link->description = $request->input('description');
        $link->link = $request->input('link');
        $link->save();
        return redirect()->route('usefulLink.display');
    }


    public function display()
    {
        return view('usefulLink.display',[
            'links' => UsefulLink::all()
        ]);
    }


    public function edit($id)
    {
        $link = UsefulLink::where('id', $id)->first();
        if($link){
            return view('usefulLink.edit', compact('link'));
        }
    }


    public function update(UpdateUsefulLinkRequest $request, $id)
    {
        $link = UsefulLink::where('id', $id)->first();
        $link->name = $request->input('name');
        $link->description = $request->input('description');
        $link->link = $request->input('link');
        $link->save();
        return redirect()->route('usefulLink.display');
    }


    public function destroy($id)
    {
        UsefulLink::findorFail($id)->delete();
        return redirect()->route('usefulLink.display');
    }


}
