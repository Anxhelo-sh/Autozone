<?php

namespace App\Models\User;

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
