<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Repositories\AddressRepository;

class AddressController extends BaseController
{
    public function __construct(public AddressRepository $addressRepository)
    {}

    public function getAddressByCityId(int $cityId): \Illuminate\Http\JsonResponse
    {
        $addresses = $this->addressRepository->getAddressByCityId($cityId)->get();

        return $this->sendResponse($addresses, 'Cities received');
    }
}
