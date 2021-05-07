<?php

namespace App\Http\Controllers;
use App\Models\SocialPackage;
use Illuminate\Http\Request;

class SocialchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social = SocialPackage::all();
        return view('social-groups.index', compact('social'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('social-groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
        $item = new SocialPackage;
        $item->create($input);
        return redirect()->route('socgroupes.index')->with('success','Հաջողությամբ ավելացվել է');
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
       $social = SocialPackage::find($id);
        return view('social-groups.edit', compact('social'));
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
        $input = $request->except('_token');
        $item = SocialPackage::findOrFail($id);
        $item->update($input);
        return redirect()->route('socgroupes.index')->with('updated','Հաջողությամբ փոփոխվել է');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       SocialPackage::findOrFail($id)->delete();
        return redirect()->route('socgroupes.index')->with('deleted','Հաջողությամբ ջնջվել է');
    }
}
