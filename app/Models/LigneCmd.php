<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCmd extends Model
{
    use HasFactory;
    protected $fillable = ['quantite', 'code', 'num'];

    /**
     * Create a new ligneCmd.
     *
     * @param array $data
     * @return LigneCmd
     */
    public static function createLigneCmd(array $data): LigneCmd
    {
        return self::create($data);
    }

    /**
     * Update the ligneCmd.
     *
     * @param array $data
     * @return bool
     */
    public function updateLigneCmd(array $data): bool
    {
        return $this->update($data);
    }

    /**
     * Delete the ligneCmd.
     *
     * @return bool|null
     * @throws \Exception
     */
    public function deleteLigneCmd(): ?bool
    {
        return $this->delete();
    }

}
