<?php

namespace App\Models\Role;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait RelationshipsTrait
{
    /**
     * Returns the users belonging to specified role
     *
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
