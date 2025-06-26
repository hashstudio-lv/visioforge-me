<?php

namespace App\Http\Controllers;

use App\Enums\Service;
use Symfony\Component\HttpFoundation\Response;

class ServiceController extends Controller
{
    public function show(string $slug)
    {
        $service = Service::tryFrom($slug);

        if (!$service) {
            abort(Response::HTTP_NOT_FOUND);
        }

        return view('pages.services.show', [
            'service' => $service
        ]);
    }
}
