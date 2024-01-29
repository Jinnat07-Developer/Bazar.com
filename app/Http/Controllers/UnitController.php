<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        return view('admin.unit.index');
    }

    public function manage()
    {
        return view('admin.unit.manage',['units'=>Unit::all()]);
    }

    public function store(Request $request)
    {
        Unit::newAllUnit($request);
        return redirect('/unit/manage')->with('message','add new unit successfully.');
    }

    public function edit($id)
    {
        return view('admin.unit.edit',['unit'=>Unit::find($id)]);
    }

    public function update(Request $request,$id)
    {
        Unit::updateUnit($request,$id);
        return back()->with('message','update unit info successfully..........');
    }

    public function delete($id)
    {
        Unit::deleteUnit($id);
        return back()->with('message','delete unit  successfully..........');
    }

}
