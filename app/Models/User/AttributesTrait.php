<?php

namespace App\Models\User;

trait AttributesTrait
{
    /**
     * Check if user is admin
     *
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->roles->where('name', 'admin')->first() != null;
    }
}
