<?php

namespace App\Http\Controllers;

use App\Models\Plataforma;
use Illuminate\Http\Request;

/**
 * Class PlataformaController
 * @package App\Http\Controllers
 */
class PlataformaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plataformas = Plataforma::paginate();

        return view('plataforma.index', compact('plataformas'))
            ->with('i', (request()->input('page', 1) - 1) * $plataformas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plataforma = new Plataforma();
        return view('plataforma.create', compact('plataforma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Plataforma::$rules);

        $plataforma = Plataforma::create($request->all());

        return redirect()->route('plataformas.index')
            ->with('success', 'La plataforma se ha creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plataforma = Plataforma::find($id);

        return view('plataforma.show', compact('plataforma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plataforma = Plataforma::find($id);

        return view('plataforma.edit', compact('plataforma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Plataforma $plataforma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plataforma $plataforma)
    {
        request()->validate(Plataforma::$rules);

        $plataforma->update($request->all());

        return redirect()->route('plataformas.index')
            ->with('success', 'La plataforma se ha editado con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $plataforma = Plataforma::find($id)->delete();

        return redirect()->route('plataformas.index')
            ->with('success', 'La plataforma se ha borrado con éxito');
    }
}
