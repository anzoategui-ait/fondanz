<?php

namespace App\Http\Controllers;

use App\Models\Subproyecto;
use Illuminate\Http\Request;

/**
 * Class SubproyectoController
 * @package App\Http\Controllers
 */
class SubproyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subproyectos = Subproyecto::paginate();

        return view('subproyecto.index', compact('subproyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $subproyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subproyecto = new Subproyecto();
        return view('subproyecto.create', compact('subproyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Subproyecto::$rules);

        $subproyecto = Subproyecto::create($request->all());

        return redirect()->route('subproyectos.index')
            ->with('success', 'Subproyecto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subproyecto = Subproyecto::find($id);

        return view('subproyecto.show', compact('subproyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subproyecto = Subproyecto::find($id);

        return view('subproyecto.edit', compact('subproyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Subproyecto $subproyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subproyecto $subproyecto)
    {
        request()->validate(Subproyecto::$rules);

        $subproyecto->update($request->all());

        return redirect()->route('subproyectos.index')
            ->with('success', 'Subproyecto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $subproyecto = Subproyecto::find($id)->delete();

        return redirect()->route('subproyectos.index')
            ->with('success', 'Subproyecto deleted successfully');
    }
}
