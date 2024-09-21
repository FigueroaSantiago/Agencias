<?php

namespace App\Http\Controllers;

use App\Models\MetodoP;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MetodoPRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MetodoPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $metodoPs = MetodoP::paginate();

        return view('metodo-p.index', compact('metodoPs'))
            ->with('i', ($request->input('page', 1) - 1) * $metodoPs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $metodoP = new MetodoP();

        return view('metodo-p.create', compact('metodoP'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MetodoPRequest $request): RedirectResponse
    {
        MetodoP::create($request->validated());

        return Redirect::route('metodo-ps.index')
            ->with('success', 'MetodoP created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $metodoP = MetodoP::find($id);

        return view('metodo-p.show', compact('metodoP'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $metodoP = MetodoP::find($id);

        return view('metodo-p.edit', compact('metodoP'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MetodoPRequest $request, MetodoP $metodoP): RedirectResponse
    {
        $metodoP->update($request->validated());

        return Redirect::route('metodo-ps.index')
            ->with('success', 'MetodoP updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        MetodoP::find($id)->delete();

        return Redirect::route('metodo-ps.index')
            ->with('success', 'MetodoP deleted successfully');
    }
}
