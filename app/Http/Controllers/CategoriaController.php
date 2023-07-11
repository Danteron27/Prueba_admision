<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categoria\CreateCategoriaRequest;
use App\Http\Requests\Categoria\UpdateCategoriaRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function showAllCategories()
    {
        $categorias = $this->getAllCategories()->original['categorias'];
        return view('categorias.index', compact('categorias'));
    }
    public function showCreateCategory()
    {
        return view('categorias.create-category');
    }
    public function showEditCategory( Categoria $categoria)
    {

        return view('categorias.edit-category', compact('categoria'));
    }
    public function getAllCategories()
    {
        $categories = Categoria::get();
        return response()->json(['categorias' => $categories], 200);
    }
    public function getAnCategory(Categoria $categoria)
    {
        return response()->json(['categoria' => $categoria], 200);
    }
    public function createCategory(CreateCategoriaRequest $request)
    {
        $categoria = new Categoria($request->all());
        $categoria->save();
        if ($request->ajax())return response()->json(['categoria' => $categoria], 201);
        return back()->with('success', 'Categoria Creada Exitosamente');
    }
    public function updateCategory(Categoria $categoria, UpdateCategoriaRequest $request)
    {
        $allRequest = $request->all();
        if(isset($allRequest['password'])){
            if (!$allRequest['password']) unset($allRequest['password']);
        }
        $categoria->update($request->all());
        if ($request->ajax())return response()->json(['categoria' => $categoria->refresh()], 201);
        return back()->with('success', 'Categoria Actualizada Exitosamente');
    }
    public function deleteCategory(Categoria $categoria, Request $request)
    {
        $categoria->delete();
        if ($request->ajax()) response()->json([], 204);
        return back()->with('success', 'Categoria Eliminada');
    }
}
