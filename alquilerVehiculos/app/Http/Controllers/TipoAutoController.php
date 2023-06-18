<?php

namespace App\Http\Controllers;

use App\Models\TipoAuto;
use Illuminate\Http\Request;

/**
 * Class TipoAutoController
 * @package App\Http\Controllers
 */
class TipoAutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoAutos = TipoAuto::paginate();

        return view('tipo-auto.index', compact('tipoAutos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoAutos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoAuto = new TipoAuto();
        return view('tipo-auto.create', compact('tipoAuto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoAuto::$rules);

        $tipoAuto = TipoAuto::create($request->all());

        return redirect()->route('tipo-autos.index')
            ->with('success', 'TipoAuto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoAuto = TipoAuto::find($id);

        return view('tipo-auto.show', compact('tipoAuto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoAuto = TipoAuto::find($id);

        return view('tipo-auto.edit', compact('tipoAuto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoAuto $tipoAuto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoAuto $tipoAuto)
    {
        request()->validate(TipoAuto::$rules);

        $tipoAuto->update($request->all());

        return redirect()->route('tipo-autos.index')
            ->with('success', 'TipoAuto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoAuto = TipoAuto::find($id)->delete();

        return redirect()->route('tipo-autos.index')
            ->with('success', 'TipoAuto deleted successfully');
    }
}
