<?php

namespace App\Http\Controllers;

use App\Models\Fait;
use Illuminate\Http\Request;

class FaitController extends Controller
{

    /**
     * Retourne la vue de la page d'accueil
     *
     * @return view
     */
    public function index(){
        return view('accueil', [
            "faits" => Fait::all()->random()
        ]);
    }

    /**
     * Retourne la vue qui montre tous les faits avec les options modifier et supprimer
     *
     * @return view
     */
    public function show(){
        return view('faits', [
            "faits" => Fait::all()
        ]);
    }

    /**
     * Retourne la vue qui permets d'ajouter un nouveau fait
     *
     * @return view
     */
    public function create(){
        return view('faits/ajouter', [
            "faits" => Fait::all()
        ]);
    }

    /**
     * Ajoute les informations du nouveau Fait à la BDD
     *
     * @param Request $request
     * @return view
     */
    public function store(Request $request) {
        // Validation
        $request->validate([
            "fait" => 'required'
        ], [
            'fait.required' => "Le champ « fait » est requis",
        ]);

        // Envoyer les infos au modèle
        $fait = new Fait();
        $fait->texte = $request->fait;

        $fait->save();

        // Redirection
        return redirect()
                ->route('faits')
                ->with('ajout-fait', 'Le fait a été ajouté!');
    }

    /**
     * Supprime un fait et redirige
     *
     * @param int $id
     * @return view
     */
    public function destroy($id){
        $fait = Fait::findOrFail($id);

        $fait->delete();

        return redirect()
                ->route('faits')
                ->with('suppression-fait', 'Le fait a été supprimé!');
    }

    /**
     * Retourne la vue avec le formulaire pour modifier un fait
     *
     * @param int $id
     * @return view
     */
    public function edit($id){
        return view('modifier', [
            "fait" => Fait::findOrFail($id),
        ]);
    }

    /**
     * Enregistre les modifications et redirige vers vers la route faits
     *
     * @param Request $request
     * @param int $id
     * @return view
     */
    public function update(Request $request, $id){

        $fait = Fait::findOrFail($id);

        $fait->texte = $request->texte;

        $fait->save();

        return redirect()
                ->route('faits')
                ->with('modification-fait', 'Le fait a été modifié!');
    }
}
