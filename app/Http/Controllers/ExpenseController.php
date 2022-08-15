<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $expense = DB::table('expenses')
        ->where('category', '=', 'Makanan/Minuman')
        ->where('user_id','=',Auth::id())
        ->get();
    $expenseT = DB::table('expenses')
        ->where('category', '=', 'Transportasi')
        ->where('user_id','=',Auth::id())
        ->get();
    $expenseH = DB::table('expenses')
        ->where('category', '=', 'Hiburan')
        ->where('user_id','=',Auth::id())
        ->get();
    $expenseI = DB::table('expenses')
        ->where('category', '=', 'Internet')
        ->where('user_id','=',Auth::id())
        ->get();

    return view('all', compact('expense','expenseT','expenseH','expenseI'),['title' => 'All Expenses']);
    }    
    
        /**
     * Show data from databse per Month
     *
     * @return \Illuminate\Http\Response
     */
    public function showCurrentMonth()
    {
        $currentMonth = date('m');
        $currentYear = date('Y');
        $expenseM = DB::table('expenses')
            ->where('category', '=', 'Makanan/Minuman')
            ->where('user_id','=',Auth::id())
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->get();
        $expense = DB::table('expenses')
            ->where('category', '=', 'Transportasi')
            ->where('user_id','=',Auth::id())
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->get();
        $expense = DB::table('expenses')
            ->where('category', '=', 'Hiburan')
            ->where('user_id','=',Auth::id())
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->get();
        $expense = DB::table('expenses')
            ->where('category', '=', 'Internet')
            ->where('user_id','=',Auth::id())
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->get();
        return view('thisMonth', compact('expense','expenseT','expenseH','expenseI'),['title' => 'All Expenses']);
    }
    public function showCurrentYear()
    {
        $currentYear = date('Y');
        $expenseM = DB::table('expenses')
            ->where('user_id','=',Auth::id())
            ->where('category', '=', 'Makanan/Minuman')
            ->whereYear('created_at', $currentYear)
            ->get();
        $expense = DB::table('expenses')
            ->where('user_id','=',Auth::id())
            ->where('category', '=', 'Transportasi')
            ->whereYear('created_at', $currentYear)
            ->get();
        $expense = DB::table('expenses')
            ->where('category', '=', 'Hiburan')
            ->where('user_id','=',Auth::id())
            ->whereYear('created_at', $currentYear)
            ->get();
        $expense = DB::table('expenses')
            ->where('category', '=', 'Internet')
            ->where('user_id','=',Auth::id())
            ->whereYear('created_at', $currentYear)
            ->get();
        return view('thisYear', compact('expense','expenseT','expenseH','expenseI'),['title' => 'All Expenses']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store data from Form request to database


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
