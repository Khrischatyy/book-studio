<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Services\BookingService;
use Carbon\Carbon;
use Illuminate\Http\Client\Request;

class BookingController extends BaseController
{
    public function __construct(public BookingService $bookingService)
    {}

    public function getBookingByAddressId(BookingRequest $requestBooking)
    {
        $addressId = $requestBooking->input('address_id');
        $day = Carbon::create($requestBooking->input('day'));

        $bookings = $this->bookingService->getFreeSlots($addressId, $day);

        return $this->sendResponse($bookings, 'Free working time received');
    }
}
