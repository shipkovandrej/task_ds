<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\ListRequest;
use App\Http\Resources\Api\Order\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(ListRequest $request)
    {
        $request->validated();
        $date_from = $request->input('dateFrom');
        $date_to = $request->input('dateTo');
        $limit = $request->input('limit');

        $query = Order::query();

        if ($date_from) {
            $query->whereBetween('datetime', [$date_from, $date_to ?? now()]);
        }

        $orders = $query->paginate($limit ?? 500);

        return OrderResource::collection($orders);
    }
}
