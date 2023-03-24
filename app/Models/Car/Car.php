<?php

namespace App\Models\Car;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int id
 * @property int make_id
 * @property string model
 * @property float price
 * @property string engine_size
 * @property Carbon first_registration
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Car extends Model
{
    use HasFactory, RelationshipsTrait, AttributesTrait, ScopesTrait;

    /**
     * @var string[]
     */
    protected $fillable = [
        'make_id',
        'model',
        'price',
        'engine_size',
        'first_registration',
    ];
}
