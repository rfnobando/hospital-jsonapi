<?php

namespace App\JsonApi\V1;

use Illuminate\Support\Facades\Auth;
use LaravelJsonApi\Core\Server\Server as BaseServer;

class Server extends BaseServer
{

    /**
     * The base URI namespace for this server.
     *
     * @var string
     */
    protected string $baseUri = '/api/v1';

    /**
     * Bootstrap the server when it is handling an HTTP request.
     *
     * @return void
     */
    public function serving(): void
    {
        Auth::shouldUse('sanctum');
    }

    /**
     * Get the server's list of schemas.
     *
     * @return array
     */
    protected function allSchemas(): array
    {
        return [
            Localities\LocalitySchema::class,
            Addresses\AddressSchema::class,
            Persons\PersonSchema::class,
            Users\UserSchema::class,
            Patients\PatientSchema::class,
            Doctors\DoctorSchema::class,
            Appointments\AppointmentSchema::class,
        ];
    }

}
