<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App\Models
 */
class Post extends Model
{

    /**
     * @var string[]
     */
    protected $fillable = ['nome', 'email', 'telefone', 'image'];
}