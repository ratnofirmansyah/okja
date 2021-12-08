<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Repositories\Report\DailyTransaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use TCG\Voyager\Facades\Voyager;

class Report extends Controller
{
    public function dailyTransaction(Request $request)
    {
        $user = Auth::user();
        $selectedColumns = [
            'outlets.name',
            DB::raw('sum(user_transaction_histories.qty) as total')
        ];
        $query = DB::table('user_transaction_histories')
            ->select($selectedColumns)
            ->join('outlets', 'outlets.id', '=', 'user_transaction_histories.outlet_id')
            ->whereNull('user_transaction_histories.deleted_at')
            ->groupBy('outlets.name')
            ->get();

        $data['labels'] = $query->pluck('name')->toArray();
        $data['asd'] = $query->pluck('name')->toArray();

        return Voyager::view('vendor.voyager.report.daily_transaction', $data);

    }
}
