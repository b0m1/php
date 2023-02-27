<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Request;
use App\Models\Estado;
use App\Models\Genero;
use App\Models\Plataforma;
/**
 * Class JuegoController
 * @package App\Http\Controllers
 */
class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juegos = Juego::paginate();

        return view('juego.index', compact('juegos'))
            ->with('i', (request()->input('page', 1) - 1) * $juegos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function create(){
        $juego = new Juego();
        $plataformas =Plataforma::pluck('nombre', 'id');
        $generos =Genero::pluck('nombre', 'id');
        $estado =Estado::pluck('nombre', 'id');
        return view('juego.create', compact('juego','plataformas', 'generos', 'estado'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Juego::$rules);

        Juego::create($request->all());

        return redirect()->route('juegos.index')
            ->with('success', 'El juego ha sido creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $juego = Juego::find($id);

        return view('juego.show', compact('juego'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $juego = Juego::find($id);
        $plataformas =Plataforma::pluck('nombre', 'id');
        $generos =Genero::pluck('nombre', 'id');
        $estado =Estado::pluck('nombre', 'id');
        return view('juego.edit', compact('juego','plataformas', 'generos', 'estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Juego $juego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juego $juego)
    {
        request()->validate(Juego::$rules);

        $juego->update($request->all());

        return redirect()->route('juegos.index')
            ->with('success', 'El juego ha sido editado con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $juego = Juego::find($id)->delete();

        return redirect()->route('juegos.index')
            ->with('success', 'El juego se ha borrado con éxito');
    }
}
