<?php

namespace App\Http\Controllers;

use App\Models\Tipoempresa;
use Illuminate\Http\Request;

/**
 * Class TipoempresaController
 * @package App\Http\Controllers
 */
class TipoempresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoempresas = Tipoempresa::paginate();

        return view('tipoempresa.index', compact('tipoempresas'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoempresas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoempresa = new Tipoempresa();
        return view('tipoempresa.create', compact('tipoempresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipoempresa::$rules);

        $tipoempresa = Tipoempresa::create($request->all());

        return redirect()->route('tipoempresas.index')
            ->with('success', 'Tipoempresa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoempresa = Tipoempresa::find($id);

        return view('tipoempresa.show', compact('tipoempresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoempresa = Tipoempresa::find($id);

        return view('tipoempresa.edit', compact('tipoempresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipoempresa $tipoempresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipoempresa $tipoempresa)
    {
        request()->validate(Tipoempresa::$rules);

        $tipoempresa->update($request->all());

        return redirect()->route('tipoempresas.index')
            ->with('success', 'Tipoempresa updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoempresa = Tipoempresa::find($id)->delete();

        return redirect()->route('tipoempresas.index')
            ->with('success', 'Tipoempresa deleted successfully');
    }
}
