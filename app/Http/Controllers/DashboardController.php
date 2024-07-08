<?php
declare (strict_types = 1);
namespace App\Http\Controllers;

use App\Models\Visitor;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $visitorCount = Visitor::count();
        $visitors = Visitor::orderBy('visited_at', 'desc')->take(10)->get(); // Get last 10 visitors

        // Calculate monthly visits
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $monthlyVisitorCount = Visitor::whereBetween('visited_at', [$startOfMonth, $endOfMonth])->count();

        return view('admin.layouts.index', compact('visitorCount', 'visitors', 'monthlyVisitorCount'));
    }

}
