<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Commandes;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    
    public function index()
    {
        $commandes = Commande::all();
        return view('commande.index',[
            'commandes' => $commandes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $commandes = new Commande();

        return view('commande.create',[
            'commandes' => $commandes
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'num' => 'required|integer',
            'date' => 'required|date',
            'adresse_livraison' => 'required|string',
        ]);

        Commande::createCommande($data);

        return redirect()->route('commande.index')->with('success', 'Commande created successfully');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($_id)
    {
        
        $commandes = Commande::findOrFail($_id);

        return view('commande.edit',[
            'commandes' => $commandes
        ]);
    }

    public function update(Request $request, $_id)
    {
        $data = $request->validate([
            'num' => 'required|integer',
            'date' => 'required|date',
            'adresse_livraison' => 'required|string',
        ]);

        $commande = Commande::findOrFail($_id);
        $commande->updateCommande($data);

        return redirect()->route('commande.index')->with('success', 'Commande updated successfully');
    }

    public function destroy($_id)
    {
        $commande = Commande::findOrFail($_id);
        $commande->delete();

        return redirect()->route('commande.index')->with('success', 'Commande deleted successfully');
    }
}
