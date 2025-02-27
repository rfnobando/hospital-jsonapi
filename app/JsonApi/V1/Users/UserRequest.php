<?php

namespace App\JsonApi\V1\Users;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class UserRequest extends ResourceRequest
{

    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'string']
        ];
    }

}
