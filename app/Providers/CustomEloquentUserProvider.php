<?php

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider as AuthEloquentUserProvider;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Str;

class CustomEloquentUserProvider extends AuthEloquentUserProvider implements UserProvider
{
    /**
     * Retrieve a user by the given credentials.
     * Method is overwritten to return only users with active accounts (account_suspended = false)
     *
     * @param  array  $credentials
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByCredentials(array $credentials)
    {
        // Log::debug('Provider works');
        if (
            empty($credentials) ||
            (count($credentials) === 1 &&
                Str::contains($this->firstCredentialKey($credentials), 'password'))
        ) {
            return;
        }

        // First we will add each credential element to the query as a where clause.
        // Then we can execute the query and, if we found a user, return it in a
        // Eloquent User "model" that will be utilized by the Guard instances.
        $query = $this->newModelQuery();

        foreach ($credentials as $key => $value) {
            if (Str::contains($key, 'password')) {
                continue;
            }

            if (is_array($value) || $value instanceof Arrayable) {
                $query->whereIn($key, $value);
            } else {
                $query->where($key, $value);
            }
        }

        return $query->where("account_suspended", false)->first();
    }
}
