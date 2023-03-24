<?php

namespace App\Models\User;

use App\Models\Role\Role;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait RelationshipsTrait
{
    /**
     * Returns the role belonging to specified user
     *
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }
}
