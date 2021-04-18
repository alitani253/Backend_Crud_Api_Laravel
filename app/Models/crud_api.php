<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property int $id
 * @property string $nom
 * @property string $prenom
 */

class crud_api extends Model
{
    use HasFactory;
    protected $table = 'crud_apis';
    protected $fillable =['nom','prenom'];
}
