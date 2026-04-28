<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PriceList;
use App\Models\Portfolio;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPrices = PriceList::count();
        $totalPortfolios = Portfolio::count();
        $latestPrices = PriceList::latest()->take(5)->get();
        $latestPortfolios = Portfolio::latest()->take(5)->get();

        return view('admin.dashboard', [
            'activeAdminPage' => 'dashboard',
            'totalPrices' => $totalPrices,
            'totalPortfolios' => $totalPortfolios,
            'latestPrices' => $latestPrices,
            'latestPortfolios' => $latestPortfolios,
        ]);
    }
}
