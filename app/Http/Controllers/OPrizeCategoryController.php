<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prize_category; // Zaimportuj model PrizeCategory

class OPrizeCategoryController extends Controller
{
    public function index()
    {
        // Pobierz liste kategorii (lista kategorii)
        $categories = Prize_category::all();
        return view('store.category.index', compact('categories'));
    }

    public function create()
    {
        // Wyswietl formularz do tworzenia nowej kategorii (Utworzenie kategorii)
        return view('store.category.create');
    }

    public function store(Request $request)
    {
        // Zapisz nową kategorię do tabeli (Wrzucanie do tabeli)
        // $request->input('title') - pobierz tytuł z formularza
        // $request->input('description') - pobierz opis z formularza
        Prize_category::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
        return redirect()->route('store.category.index');
    }

    public function show($id)
    {
        // Wyświetl szczegóły kategorii o podanym ID (pokazanie kategorii)
        $category = Prize_category::findOrFail($id);
        return view('store.category.show', compact('category'));
    }

    public function edit($id)
    {
        // Wyświetl formularz do edycji kategorii o podanym ID (formularz do edycji kategorii)
        $category = Prize_category::findOrFail($id);
        return view('store.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // Zaktualizuj dane kategorii o podanym ID (zmiana w tabeli)
        $category = Prize_category::findOrFail($id);
        $category->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
        return redirect()->route('store.category.index');
    }

    public function destroy($id)
    {
        // Usuń kategorię o podanym ID (usuwanie kategorii)
        $category = Prize_category::findOrFail($id);
        $category->delete();
        return redirect()->route('store.category.index');
    }
}
