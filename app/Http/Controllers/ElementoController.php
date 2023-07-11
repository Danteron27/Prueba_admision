<?php

namespace App\Http\Controllers;

use App\Http\Requests\Elemento\CreateElementoRequest;
use App\Http\Requests\Elemento\UpdateElementoRequest;
use App\Models\Elemento;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ElementoController extends Controller
{
    public function showHomeWithElements()
    {
        $elementos = $this->getAllElements()->original['elementos'];
        return view('index', compact('elementos'));
    }

    public function getAllElements()
    {
        $elementos = Elemento::with('categoria')->get();
        return response()->json(['elementos' => $elementos], 200);
    }
    public function showAllElements()
    {
        $elementos = $this->getAllElements()->original['elementos'];
        return view('elementos.index', compact('elementos'));
    }
    public function showCreateElement(Elemento $elemento)
    {
        $categorias = Categoria::pluck('nombre', 'id');
        return view('elementos.create-element', compact('categorias', 'elemento'));
    }
    public function showEditElement(Elemento $elemento)
    {
        $categorias = Categoria::pluck('nombre', 'id');
        return view('elementos.edit-element', compact('elemento', 'categorias'));
    }


    public function getAnElement(Elemento $elemento)
    {
        return response()->json(['elemento' => $elemento], 200);
    }
    public function createElement(CreateElementoRequest $request)
    {
        $elemento = new Elemento($request->all());
        $elemento->save();
        if ($request->ajax()) return response()->json(['elemento' => $elemento], 201);
        return back()->with('success', 'Elemento Creado Exitosamente');
    }

    public function updateElement(Elemento $elemento, UpdateElementoRequest $request)
    {
        $allRequest = $request->all();
        if (isset($allRequest['password'])) {
            if (!$allRequest['password']) unset($allRequest['password']);
        }
        $elemento->update($request->all());
        if ($request->ajax()) return response()->json(['elemento' => $elemento->refresh()], 201);
        return back()->with('success', 'Elemento Actualizado Exitosamente');
    }
    public function deleteElement(Elemento $elemento, Request $request)
    {
        $elemento->delete();
        if ($request->ajax()) response()->json([], 204);
        return back()->with('success', 'Elemento Eliminado');
    }
}
