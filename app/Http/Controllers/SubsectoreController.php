<?php

namespace App\Http\Controllers;

use App\Models\Subsectore;
use App\Models\Sectore;
use Illuminate\Http\Request;

/**
 * Class SubsectoreController
 * @package App\Http\Controllers
 */
class SubsectoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subsectores = Subsectore::paginate();

        return view('subsectore.index', compact('subsectores'))
            ->with('i', (request()->input('page', 1) - 1) * $subsectores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subsectore = new Subsectore();
        $sectores = Sectore::pluck('nombre','id');
        return view('subsectore.create', compact('subsectore' , 'sectores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Subsectore::$rules);

        $subsectore = Subsectore::create($request->all());

        return redirect()->route('subsectores.index')
            ->with('success', 'Subsectore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subsectore = Subsectore::find($id);

        return view('subsectore.show', compact('subsectore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subsectore = Subsectore::find($id);
        $sectores = Sectore::pluck('nombre','id');

        return view('subsectore.edit', compact('subsectore', 'sectores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Subsectore $subsectore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subsectore $subsectore)
    {
        request()->validate(Subsectore::$rules);

        $subsectore->update($request->all());

        return redirect()->route('subsectores.index')
            ->with('success', 'Subsectore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $subsectore = Subsectore::find($id)->delete();

        return redirect()->route('subsectores.index')
            ->with('success', 'Subsectore deleted successfully');
    }
}
