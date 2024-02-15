<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;
    protected $primaryKey = '_id'; 
    protected $fillable = ['num', 'date', 'adresse_livraison'];

    public function lignesCmd()
    {
        return $this->hasMany(LigneCmd::class, 'num', 'num');
    }

    public static function createCommande($data)
    {
        return Commande::create($data);
    }

    public function updateCommande($data)
    {
        $this->update($data);
        return $this;
    }

    public function deleteCommande()
    {
        // Delete related lignesCmd before deleting the Commande
        $this->lignesCmd()->delete();

        // Delete the Commande
        $this->delete();

        return true;
    }

}
