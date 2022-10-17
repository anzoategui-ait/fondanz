<?php

namespace App\Http\Controllers;

use App\Models\Codigospostale;
use Illuminate\Http\Request;

/**
 * Class CodigospostaleController
 * @package App\Http\Controllers
 */
class CodigospostaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codigospostales = Codigospostale::paginate();

        return view('codigospostale.index', compact('codigospostales'))
            ->with('i', (request()->input('page', 1) - 1) * $codigospostales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $codigospostale = new Codigospostale();
        return view('codigospostale.create', compact('codigospostale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Codigospostale::$rules);

        $codigospostale = Codigospostale::create($request->all());

        return redirect()->route('codigospostales.index')
            ->with('success', 'Codigospostale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $codigospostale = Codigospostale::find($id);

        return view('codigospostale.show', compact('codigospostale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $codigospostale = Codigospostale::find($id);

        return view('codigospostale.edit', compact('codigospostale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Codigospostale $codigospostale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Codigospostale $codigospostale)
    {
        request()->validate(Codigospostale::$rules);

        $codigospostale->update($request->all());

        return redirect()->route('codigospostales.index')
            ->with('success', 'Codigospostale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $codigospostale = Codigospostale::find($id)->delete();

        return redirect()->route('codigospostales.index')
            ->with('success', 'Codigospostale deleted successfully');
    }
}
