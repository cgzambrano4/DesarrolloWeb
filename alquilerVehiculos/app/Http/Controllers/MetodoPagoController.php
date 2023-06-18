<?php

namespace App\Http\Controllers;

use App\Models\MetodoPago;
use Illuminate\Http\Request;

/**
 * Class MetodoPagoController
 * @package App\Http\Controllers
 */
class MetodoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metodoPagos = MetodoPago::paginate();

        return view('metodo-pago.index', compact('metodoPagos'))
            ->with('i', (request()->input('page', 1) - 1) * $metodoPagos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $metodoPago = new MetodoPago();
        return view('metodo-pago.create', compact('metodoPago'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MetodoPago::$rules);

        $metodoPago = MetodoPago::create($request->all());

        return redirect()->route('metodo-pagos.index')
            ->with('success', 'MetodoPago created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $metodoPago = MetodoPago::find($id);

        return view('metodo-pago.show', compact('metodoPago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $metodoPago = MetodoPago::find($id);

        return view('metodo-pago.edit', compact('metodoPago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MetodoPago $metodoPago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MetodoPago $metodoPago)
    {
        request()->validate(MetodoPago::$rules);

        $metodoPago->update($request->all());

        return redirect()->route('metodo-pagos.index')
            ->with('success', 'MetodoPago updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $metodoPago = MetodoPago::find($id)->delete();

        return redirect()->route('metodo-pagos.index')
            ->with('success', 'MetodoPago deleted successfully');
    }
}
