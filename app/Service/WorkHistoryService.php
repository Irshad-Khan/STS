<?php
namespace App\Service;
class WorkHistoryService
{
    public static function calculateTotalPrice($request)
    {
        $totalPrice = 0.0;
        $totalPrice = $totalPrice + ($request->suitqty * $request->suitprice) + ($request->shirtqty * $request->shirtprice) + ($request->pantqty * $request->pentprice);
        return $totalPrice;
    }
}
