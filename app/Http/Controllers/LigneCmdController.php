<?php

namespace App\Http\Controllers;

use App\Models\LigneCmd;
use Illuminate\Http\Request;

class LigneCmdController extends Controller
{
    /**
     * Store a newly created ligneCmd in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'quantite' => 'required|integer',
            'code' => 'required|integer',
            'num' => 'required|integer',
        ]);

        $ligneCmd = LigneCmd::createLigneCmd($data);

        return redirect()->route('ligneCmds.index')->with('success', 'LigneCmd created successfully');
    }

    /**
     * Update the specified ligneCmd in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LigneCmd  $ligneCmd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LigneCmd $ligneCmd)
    {
        $data = $request->validate([
            'quantite' => 'integer',
            'code' => 'integer',
            'num' => 'integer',
        ]);

        $ligneCmd->updateLigneCmd($data);

        return redirect()->route('ligneCmds.index')->with('success', 'LigneCmd updated successfully');
    }

    /**
     * Remove the specified ligneCmd from the database.
     *
     * @param  \App\Models\LigneCmd  $ligneCmd
     * @return \Illuminate\Http\Response
     */
    public function destroy(LigneCmd $ligneCmd)
    {
        $ligneCmd->deleteLigneCmd();

        return redirect()->route('ligneCmds.index')->with('success', 'LigneCmd deleted successfully');
    }
}
