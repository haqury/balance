<?php

namespace App\Http\Controllers;


use App\Models\BalanceHistory;

class BalanceController extends Controller
{
    public function userBalance($user_id)
    {
        return BalanceHistory::where('user_id', $user_id)
            ->orderBy('id', 'desc')
            ->first();
    }

    public function history($limit = 50)
    {
        return BalanceHistory::limit($limit)
            ->orderBy('id', 'desc')
            ->get();
    }
}
