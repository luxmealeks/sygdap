<?php

namespace App\Http\Controllers;

use App\Prestataire;
use Illuminate\Http\Request;
use App\Secteur;
use App\Piece;
use App\Type;
use Yajra\Datatables\Datatables;

class PrestataireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function lastrecords(Request $request)
    {
        $prestataires = Prestataire::orderBy('created_at')->get();
        //  $prestataires = Prestataire::all();

        return view('prestataires.lastrecords', ['prestataires' => $prestataires]);
    }

    public function details(Prestataire $prestataire)
    {
        //  $prestataire = Prestataire::find($id);

        return view('prestataires.details'->compact('prestataire'));
    }

    public function list(Request $request)
    {
        $type = Type::all();
        $prestataire = Prestataire::all()->load(['secteurs', 'type']);

        return Datatables::of($prestataire)->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestataires = Prestataire::orderBy('created_at')->get();
        $prestataire = Prestataire::all()->load(['type', 'secteurs']);

        return view('prestataires.index', compact('prestataire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $secteurs = Secteur::get();
        $type = Type::get();
        $types_id = $request->input('type'); //on recupere le prestataire
        $type = \App\Type::find($types_id);

        return view('prestataires.createprestataire', compact('type', 'secteurs'));
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
        // validatation

        $this->validate(
            $request, [
                'ninea' => 'required|string|max:50',
                'registreCommerce' => 'required|string|max:50',
                'raisonSociale' => 'required|string|max:50',
                'telephone' => 'required|max:30|unique:prestataires,telephone',
                ]);

        $types_id = $request->input('type');
        $type = \App\Type::find($types_id);

        $prestataire = new Prestataire();

        $prestataire->id = $request->get('id');
        $prestataire->uuid = $request->get('uuid');
        $prestataire->registreCommerce = $request->get('registreCommerce');
        $prestataire->telephone = $request->get('telephone');
        $prestataire->email = $request->get('email');
        $prestataire->adresse = $request->get('adresse');
        $prestataire->bp = $request->get('bp');
        $prestataire->ninea = $request->get('ninea');
        $prestataire->raisonSociale = $request->get('raisonSociale');
        $prestataire->dateAgrement = $request->get('dateAgrement');
        $type->libelle = $request->get('libelle');
        $prestataire->fax = $request->get('fax');
        //$prestataire->piece = $request->get('piece');

        $type->prestataires()->save($prestataire);

        $message = 'Le fournisseur '.$prestataire->raisonSociale.' propriétaire du NINEA '.$prestataire->ninea.' a été créé avec succés !';

        return view('prestataires.index')->with(compact('message'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Prestataire $prestataire
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Prestataire $prestataire)
    {
        $secteur = Secteur::get();
        $pieces = Piece::get();

        return view('prestataires.print', compact('prestataire', 'secteur', 'pieces'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Prestataire $prestataire
     *
     * @return \Illuminate\Http\Response
     */
    // public function edit(Prestataire $prestataire)
    public function edit($id)
    {
        // $piece = Piece::get();
        $secteur = Secteur::get();
        $prestataire = Prestataire::find($id);

        return view('prestataires.edit')->with(compact('secteur', 'prestataire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Prestataire         $prestataire
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestataire $prestataire)
    {
        $prestataire->update($request->all());

        // return 'Prestataire modifié !';
        return view('prestataires.index');
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param \App\Prestataire $prestataire
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestataire = Prestataire::find($id);
        $prestataire->delete();
        //$prestataire->forceDelete();

        $message = 'Le fournisseur '.$prestataire->raisonSociale.' propriétaire du NINEA '.$prestataire->ninea.' a été supprimé(e) avec succés !';

        return redirect()->route('prestataires.index')->with(compact('message'));
    }

    public function generateReportPDF(Request $request)
    {
        $data = Prestataire::find($request->id);  //******this is what I typically call 'table'
        $data = array('prestataire' => $data);

        if ($request->has('download')) {
            $html = view($request->view, $data)->render();

            $snappy = \App::make('snappy.pdf');

            return response(
                $snappy->getOutputFromHtml($html),
                200,
                array(
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'attachment; filename="agrement'.$request->printpdf.'.pdf"',
                )
            );
        }

        return view($request->printpdf, $data);
    }
}
