<?php

namespace App\JsonApi\V1\Persons;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class PersonRequest extends ResourceRequest
{

    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:1'],
            'surname' => ['required', 'string', 'min:1'],
            'age' => ['required', 'integer'],
            'phone' => ['required', 'integer'],
            'address' => JsonApiRule::toOne(),
            'user' => JsonApiRule::toOne()
        ];
    }

}
