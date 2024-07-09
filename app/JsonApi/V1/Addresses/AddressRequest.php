<?php

namespace App\JsonApi\V1\Addresses;

use App\Models\Address;
use Illuminate\Contracts\Validation\Validator;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class AddressRequest extends ResourceRequest
{

    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'street' => ['required', 'string'],
            'number' => ['required', 'integer'],
            'locality' => JsonApiRule::toOne()
        ];
    }

    public function withValidator(Validator $validator)
    {
        // Validates if address already exists for that locality
        $validator->after(function ($validator) {
            $street = request()->input('data.attributes.street');
            $number = request()->input('data.attributes.number');
            $localityId = request()->input('data.relationships.locality.data.id');

            if(Address::alreadyExists($street, $number, $localityId)) {
                $validator->errors()->add('address_unique', 'Address already exists for that locality.');
            }
        });
    }

}
