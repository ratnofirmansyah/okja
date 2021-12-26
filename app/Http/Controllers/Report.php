<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Repositories\Report\DailyTransaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use TCG\Voyager\Facades\Voyager;
use App\Models\Outlet;

class Report extends Controller
{
    public function dailyTransaction(Request $request)
    {
        $user = Auth::user();
        if ($user->role_id == 3) {
            $data['outlets'] = Outlet::where('brand_id', $user->brand_id)->get();
        } elseif ($user->role_id == 2){
            $data['outlets'] = Outlet::where('id', $user->outlet_id)->get();
        }else{
            $data['outlets'] = Outlet::all();
        }

        $data['type'] = $request->get('type', 'out');
        $data['outlet_id'] = $request->get('outlet_id', 'all');
        $daterange = explode(' - ', $request->get('daterange', date('Y-m-d', strtotime('-30 days')).' - '.date('Y-m-d')));
        $data['daterangeori'] = date('m/d/Y', strtotime($daterange[0])).' - '.date('m/d/Y', strtotime($daterange[1]));

        // --- Get by daily ---
            $selectedColumns = [
                DB::raw('date_format(user_transaction_histories.created_at, "%Y-%m-%d") as date'),
                DB::raw('sum(user_transaction_histories.qty) as total')
            ];
            $transactionDaily = DB::table('user_transaction_histories')
                ->select($selectedColumns)
                ->join('outlets', 'outlets.id', '=', 'user_transaction_histories.outlet_id')
                ->whereBetween(DB::raw('date_format(user_transaction_histories.created_at, "%Y-%m-%d")'), [date('Y-m-d', strtotime($daterange[0])), date('Y-m-d', strtotime($daterange[1]))])
                ->where('user_transaction_histories.action', $data['type'])
                ->whereNull('user_transaction_histories.deleted_at');

            if ($user->role_id == 3 || $user->role_id == 2) {
                $outletIds = $data['outlets']->pluck('id')->toArray();
                $transactionDaily = $transactionDaily->whereIn('user_transaction_histories.outlet_id', $outletIds);
            }

            if ($data['outlet_id'] != 'all') {
                $transactionDaily = $transactionDaily->where('user_transaction_histories.outlet_id', $data['outlet_id']);
            }

            $transactionDaily = $transactionDaily->groupBy(DB::raw('date_format(user_transaction_histories.created_at, "%Y-%m-%d")'))->get();

        // --- Get by Outlet ---
            $selectedColumns = [
                'outlets.name',
                'outlets.id'
            ];
            $transactionOutlets = DB::table('user_transaction_histories')
                ->select($selectedColumns)
                ->join('outlets', 'outlets.id', '=', 'user_transaction_histories.outlet_id')
                ->whereBetween(DB::raw('date_format(user_transaction_histories.created_at, "%Y-%m-%d")'), [date('Y-m-d', strtotime($daterange[0])), date('Y-m-d', strtotime($daterange[1]))])
                ->where('user_transaction_histories.action', $data['type'])
                ->whereNull('user_transaction_histories.deleted_at');

            if ($user->role_id == 3 || $user->role_id == 2) {
                $outletIds = $data['outlets']->pluck('id')->toArray();
                $transactionOutlets = $transactionOutlets->whereIn('user_transaction_histories.outlet_id', $outletIds);
            }

            if ($data['outlet_id'] != 'all') {
                $transactionOutlets = $transactionOutlets->where('user_transaction_histories.outlet_id', $data['outlet_id']);
            }

            $transactionOutlets = $transactionOutlets->groupBy('outlets.name')->groupBy('outlets.id')->get();

        $dataTransactions = array();
        foreach ($transactionOutlets as $key => $outlet) {
            $dataTransactions[$key] = (object) array();
            $dataTransactions[$key]->label = $outlet->name;
            $dataTransactions[$key]->data = array();
            foreach ($transactionDaily as $index => $daily) {
                // --- Get by Outlet daily ---
                    $selectedColumns = [
                        DB::raw('sum(user_transaction_histories.qty) as total')
                    ];
                    $transactionDailyByOutlet = DB::table('user_transaction_histories')
                        ->select($selectedColumns)
                        ->join('outlets', 'outlets.id', '=', 'user_transaction_histories.outlet_id')
                        ->where('outlets.id', $outlet->id)
                        ->where('user_transaction_histories.action', $data['type'])
                        ->where(DB::raw('date_format(user_transaction_histories.created_at, "%Y-%m-%d")'), $daily->date)
                        ->whereNull('user_transaction_histories.deleted_at');

                    if ($data['outlet_id'] != 'all') {
                        $transactionDailyByOutlet = $transactionDailyByOutlet->where('user_transaction_histories.outlet_id', $data['outlet_id']);
                    }

                    $transactionDailyByOutlet = $transactionDailyByOutlet->first();
                if ($transactionDailyByOutlet) {
                    array_push($dataTransactions[$key]->data, $transactionDailyByOutlet->total);
                }else{
                    array_push($dataTransactions[$key]->data, 0);
                }
            }
        }

        $data['labels'] = $transactionDaily->pluck('date')->toArray();
        $data['transactions'] = $dataTransactions;

        return Voyager::view('vendor.voyager.report.daily_transaction', $data);
    }

    public function monthlyTransaction(Request $request)
    {
        $user = Auth::user();
        if ($user->role_id == 3) {
            $data['outlets'] = Outlet::where('brand_id', $user->brand_id)->get();
        } elseif ($user->role_id == 2){
            $data['outlets'] = Outlet::where('id', $user->outlet_id)->get();
        }else{
            $data['outlets'] = Outlet::all();
        }

        $data['type'] = $request->get('type', 'out');
        $data['outlet_id'] = $request->get('outlet_id', 'all');
        $daterange = explode(' - ', $request->get('daterange', date('Y-m', strtotime('-12 months')).' - '.date('Y-m')));
        $data['daterangeori'] = date('m/01/Y', strtotime($daterange[0])).' - '.date('m/t/Y', strtotime($daterange[1]));

        // --- Get by daily ---
            $selectedColumns = [
                DB::raw('date_format(user_transaction_histories.created_at, "%Y-%m") as date'),
                DB::raw('sum(user_transaction_histories.qty) as total')
            ];
            $transactionDaily = DB::table('user_transaction_histories')
                ->select($selectedColumns)
                ->join('outlets', 'outlets.id', '=', 'user_transaction_histories.outlet_id')
                ->whereBetween(DB::raw('date_format(user_transaction_histories.created_at, "%Y-%m")'), [date('Y-m', strtotime($daterange[0])), date('Y-m', strtotime($daterange[1]))])
                ->where('user_transaction_histories.action', $data['type'])
                ->whereNull('user_transaction_histories.deleted_at');

            if ($user->role_id == 3 || $user->role_id == 2) {
                $outletIds = $data['outlets']->pluck('id')->toArray();
                $transactionDaily = $transactionDaily->whereIn('user_transaction_histories.outlet_id', $outletIds);
            }

            if ($data['outlet_id'] != 'all') {
                $transactionDaily = $transactionDaily->where('user_transaction_histories.outlet_id', $data['outlet_id']);
            }

            $transactionDaily = $transactionDaily->groupBy(DB::raw('date_format(user_transaction_histories.created_at, "%Y-%m")'))->get();

        // --- Get by Outlet ---
            $selectedColumns = [
                'outlets.name',
                'outlets.id'
            ];
            $transactionOutlets = DB::table('user_transaction_histories')
                ->select($selectedColumns)
                ->join('outlets', 'outlets.id', '=', 'user_transaction_histories.outlet_id')
                ->whereBetween(DB::raw('date_format(user_transaction_histories.created_at, "%Y-%m")'), [date('Y-m', strtotime($daterange[0])), date('Y-m', strtotime($daterange[1]))])
                ->where('user_transaction_histories.action', $data['type'])
                ->whereNull('user_transaction_histories.deleted_at');

            if ($user->role_id == 3 || $user->role_id == 2) {
                $outletIds = $data['outlets']->pluck('id')->toArray();
                $transactionOutlets = $transactionOutlets->whereIn('user_transaction_histories.outlet_id', $outletIds);
            }

            if ($data['outlet_id'] != 'all') {
                $transactionOutlets = $transactionOutlets->where('user_transaction_histories.outlet_id', $data['outlet_id']);
            }

            $transactionOutlets = $transactionOutlets->groupBy('outlets.name')->groupBy('outlets.id')->get();

        $dataTransactions = array();
        foreach ($transactionOutlets as $key => $outlet) {
            $dataTransactions[$key] = (object) array();
            $dataTransactions[$key]->label = $outlet->name;
            $dataTransactions[$key]->data = array();
            foreach ($transactionDaily as $index => $daily) {
                // --- Get by Outlet daily ---
                    $selectedColumns = [
                        DB::raw('sum(user_transaction_histories.qty) as total')
                    ];
                    $transactionDailyByOutlet = DB::table('user_transaction_histories')
                        ->select($selectedColumns)
                        ->join('outlets', 'outlets.id', '=', 'user_transaction_histories.outlet_id')
                        ->where('outlets.id', $outlet->id)
                        ->where('user_transaction_histories.action', $data['type'])
                        ->where(DB::raw('date_format(user_transaction_histories.created_at, "%Y-%m")'), $daily->date)
                        ->whereNull('user_transaction_histories.deleted_at');

                    $transactionDailyByOutlet = $transactionDailyByOutlet->first();
                if ($transactionDailyByOutlet) {
                    array_push($dataTransactions[$key]->data, $transactionDailyByOutlet->total);
                }else{
                    array_push($dataTransactions[$key]->data, 0);
                }
            }
        }

        $data['labels'] = $transactionDaily->pluck('date')->toArray();
        $data['transactions'] = $dataTransactions;

        return Voyager::view('vendor.voyager.report.monthly_transaction', $data);
    }
}
