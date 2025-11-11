<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\GuardianRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $guardians = Guardian::paginate();

        return view('guardian.index', compact('guardians'))
            ->with('i', ($request->input('page', 1) - 1) * $guardians->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $guardian = new Guardian();

        return view('guardian.create', compact('guardian'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardianRequest $request): RedirectResponse
    {
        Guardian::create($request->validated());

        return Redirect::route('guardians.index')
            ->with('success', 'Guardian created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $guardian = Guardian::find($id);

        return view('guardian.show', compact('guardian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $guardian = Guardian::find($id);

        return view('guardian.edit', compact('guardian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GuardianRequest $request, Guardian $guardian): RedirectResponse
    {
        $guardian->update($request->validated());

        return Redirect::route('guardians.index')
            ->with('success', 'Guardian updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Guardian::find($id)->delete();

        return Redirect::route('guardians.index')
            ->with('success', 'Guardian deleted successfully');
    }
}
