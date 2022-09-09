<?php

namespace App\Http\Controllers;

use App\Models\Company;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
class CompanyController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $companies=Company::query();

        return JsonResource::collection($companies);
    }
}
