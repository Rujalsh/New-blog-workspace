<?php

use App\Http\Middleware\MustBeAdministrator;

return [
    'admin' => MustBeAdministrator::class,
];


