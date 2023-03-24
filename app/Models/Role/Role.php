<?php

namespace App\Models\Role;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 */
class Role extends Model
{
    use HasFactory, RelationshipsTrait, ScopesTrait, AttributesTrait;

    protected $fillable = [
        'name',
    ];
}
