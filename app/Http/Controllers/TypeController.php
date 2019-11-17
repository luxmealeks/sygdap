<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class TypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list(Request $request)
    {
        $type = Type::with('prestataires')->get();

        // $type = Type::with('types')->get();
        // $type = Type::get();

        return Datatables::of($type)->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('types.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $type_id = $request->input('type');
        // $type = \App\Type::find($type_id);

        return view('types.createtype');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request, [
                'libelle' => 'required|string|max:50',
            ]);

        // store in the database
        $type = new Type();

        $type->id = $request->id;

        $type->libelle = $request->libelle;
        $type->save();

        return view('types.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Type $type
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Type $type
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Type                $type
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Type $type
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
    }
}
