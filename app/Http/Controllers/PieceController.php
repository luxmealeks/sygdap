<?php

namespace App\Http\Controllers;

use App\Piece;
use App\Prestataire;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class PieceController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth')->except('index');
    }

    public function list(Request $request)
    {
        $piece = Piece::all();

        $prestataire = Prestataire::get();

        return Datatables::of($piece)->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $piece = Piece::filter($piece)->get();

        return view('pieces.index', compact('formateur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $piece = Piece::all();
        $prestataire = Prestataire::get();

        /*   $pieces_id = $request->input('prestataire'); //on recupere la piece
        $piece = \App\Piece::find($pieces_id); */

        $prestataires_id = $request->input('prestataire'); //on recupere le prestataire
        $prestataire = \App\Prestataire::find($prestataires_id);

        return view('pieces.create', compact('prestataire'));
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
        $request->validate([
            'img' => 'required|file|max:2048',
            'nompiece' => 'required',
            ]);

        $fileName = 'fileName'.time().'.'.request()->img->getClientOriginalExtension();

        //  $request->img->storeAs('agrements', $fileName);

        if ($request->hasFile('img')) {
            $path = $request->file('img')->storeAs('agrements', $fileName);
            $fileinfo = $request->file('img');

            $request->merge([
                    'img' => $path,
                    'img' => $fileinfo->getClientOriginalName(),
                    ]);
        }
        $prestataires_id = $request->input('prestataire'); //on recupere le prestataire
        $prestataire = \App\Prestataire::find($prestataires_id);

        $piece = new Piece();
        $piece->id = $request->get('id');
        $piece->nompiece = $request->get('nompiece');
        $piece->img = $request->get('img');

        $prestataire->pieces()->save($piece);

        $message = 'La pièce "'.$piece->nompiece.'" du prestataire '.$prestataire->raisonSociale.'  a été ajoutée avec succés !';

        return redirect()->route('prestataires.index')->with(compact('message'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Piece $piece)
    {
        return view('pieces.singlepiece', compact('piece'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Piece $piece)
    {
        return view('pieces.edit', compact('piece'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Piece $piece)
    {
        //$this->authorize('update', $piece);
        //validate
        $this->validate($request, [
                    'nompiece' => 'required|min:10',
                    ]);

        $piece->update($request->all());

        return redirect()->route('pieces.show', $piece->id)->withMessage('pieces Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $piece = Piece::find($id);
        $piece->delete();
        $message = 'La pièce "'.$piece->nompiece.'" a été supprimée avec succés !';

        return redirect()->route('pieces.index')->with(compact('message'));
    }
}
