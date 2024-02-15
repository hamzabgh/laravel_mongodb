<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articles extends Model
{
    use HasFactory;
    protected $primaryKey = '_id'; // Assuming 'code' is the primary key

    protected $fillable = ['code', 'designation', 'prix_u', 'rayon', 'ss_rayon'];

     /**
     * Create a new article.
     *
     * @param array $data
     * @return Article
     */
    public static function createArticle(array $data): Articles
    {
        return self::create($data);
    }

    /**
     * Update the article.
     *
     * @param array $data
     * @return bool
     */
    public function updateArticle(array $data): bool
    {
        return $this->update($data);
    }

    /**
     * Delete the article.
     *
     * @return bool|null
     * @throws \Exception
     */
    public function deleteArticle(): ?bool
    {
        return $this->delete();
    }

}
