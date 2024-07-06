<?php

namespace App\JsonApi\V1\Doctors;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class DoctorRequest extends ResourceRequest
{

    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'license' => ['required', 'integer'],
            'person' => JsonApiRule::toOne()
        ];
    }

}
