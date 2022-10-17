<?php

namespace App\Http\Controllers;

use App\Models\Tipodeclaracione;
use Illuminate\Http\Request;

/**
 * Class TipodeclaracioneController
 * @package App\Http\Controllers
 */
class TipodeclaracioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipodeclaraciones = Tipodeclaracione::paginate();

        return view('tipodeclaracione.index', compact('tipodeclaraciones'))
            ->with('i', (request()->input('page', 1) - 1) * $tipodeclaraciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipodeclaracione = new Tipodeclaracione();
        return view('tipodeclaracione.create', compact('tipodeclaracione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipodeclaracione::$rules);

        $tipodeclaracione = Tipodeclaracione::create($request->all());

        return redirect()->route('tipodeclaraciones.index')
            ->with('success', 'Tipodeclaracione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipodeclaracione = Tipodeclaracione::find($id);

        return view('tipodeclaracione.show', compact('tipodeclaracione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipodeclaracione = Tipodeclaracione::find($id);

        return view('tipodeclaracione.edit', compact('tipodeclaracione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipodeclaracione $tipodeclaracione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipodeclaracione $tipodeclaracione)
    {
        request()->validate(Tipodeclaracione::$rules);

        $tipodeclaracione->update($request->all());

        return redirect()->route('tipodeclaraciones.index')
            ->with('success', 'Tipodeclaracione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipodeclaracione = Tipodeclaracione::find($id)->delete();

        return redirect()->route('tipodeclaraciones.index')
            ->with('success', 'Tipodeclaracione deleted successfully');
    }
}
