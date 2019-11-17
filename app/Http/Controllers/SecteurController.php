<?php

namespace App\Http\Controllers;

use App\Secteur;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class SecteurController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list(Request $request)
    {
        $secteurs = Secteur::with('prestataire')->get();

        // $secteurs = Secteur::get();
        // $types = Type::all();
        // $prestataire = Prestataire::get();
        return Datatables::of($secteurs)->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('secteurs.index');
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

        return view('secteurs.createsecteur');
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
        $secteur = new Secteur();

        $secteur->id = $request->id;

        $secteur->libelle = $request->libelle;
        $secteur->save();

        return view('secteurs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Secteur $secteur
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Secteur $secteur)
    {
        echo 'libelle :'.$secteur->libelle.'<br>';

        // echo 'Date d\'agrement :'.$prestataire->created_at.'<br>';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Secteur $secteur
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $secteur = Secteur::find($id);

        $message = 'modifier'.$secteur->libelle.'Edition effectuée';

        return view('secteurs.edit')->with(compact('secteur', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Secteur             $secteur
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Secteur $secteur)
    {
        $secteur->update($request->all());

        return view('secteurs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Secteur $secteur
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $secteur = Secteur::find($id);
        $secteur->delete();
        $message = 'Le secteur d\'activité '.$secteur->libelle.' a été supprimé(e) avec succés !';

        return redirect()->route('secteurs.index')->with(compact('message'));
    }
}
