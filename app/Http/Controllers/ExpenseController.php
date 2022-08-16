<?php

namespace App\Http\Controllers;

use in;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
        $total_makanan = DB::table('expenses')
            ->where('category', '=', 'Makanan/Minuman')
            ->where('user_id','=',Auth::id())
            ->sum('total');
        $expenseT = DB::table('expenses')
            ->where('category', '=', 'Transportasi')
            ->where('user_id','=',Auth::id())
            ->get();
        $total_transportasi = DB::table('expenses')
            ->where('category', '=', 'Transportasi')
            ->where('user_id','=',Auth::id())
            ->sum('total');
        $expenseH = DB::table('expenses')
            ->where('category', '=', 'Hiburan')
            ->where('user_id','=',Auth::id())
            ->get();
        $total_hiburan = DB::table('expenses')
            ->where('category', '=', 'Hiburan')
            ->where('user_id','=',Auth::id())
            ->sum('total');
        $expenseI = DB::table('expenses')
            ->where('category', '=', 'Internet')
            ->where('user_id','=',Auth::id())
            ->get();
        $total_internet = DB::table('expenses')
            ->where('category', '=', 'Internet')
            ->where('user_id','=',Auth::id())
            ->sum('total');

        return view('all', compact('expense','expenseT','expenseH','expenseI','total_makanan','total_transportasi','total_hiburan','total_internet'),['title' => 'All Expenses']);
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
        $expense = DB::table('expenses')
            ->where('category', '=', 'Makanan/Minuman')
            ->where('user_id','=',Auth::id())
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->get();
        $total_makanan = DB::table('expenses')
            ->where('category', '=', 'Makanan/Minuman')
            ->where('user_id','=',Auth::id())
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->sum('total');
        $total_transportasi = DB::table('expenses')
            ->where('category', '=', 'Transportasi')
            ->where('user_id','=',Auth::id())
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->sum('total');
        $total_hiburan = DB::table('expenses')
            ->where('category', '=', 'Hiburan')
            ->where('user_id','=',Auth::id())
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->sum('total');
        $total_internet = DB::table('expenses')
            ->where('category', '=', 'Internet')
            ->where('user_id','=',Auth::id())
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->sum('total');
        $expenseT = DB::table('expenses')
            ->where('category', '=', 'Transportasi')
            ->where('user_id','=',Auth::id())
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->get();
        $expenseH = DB::table('expenses')
            ->where('category', '=', 'Hiburan')
            ->where('user_id','=',Auth::id())
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->get();
        $expenseI = DB::table('expenses')
            ->where('category', '=', 'Internet')
            ->where('user_id','=',Auth::id())
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->get();
            return view('all', compact('expense','expenseT','expenseH','expenseI','total_makanan','total_transportasi','total_hiburan','total_internet'),['title' => 'This Month Expenses']);
    }
    public function showCurrentYear()
    {
        $currentYear = date('Y');
        $total_makanan = DB::table('expenses')
            ->where('category', '=', 'Makanan/Minuman')
            ->where('user_id','=',Auth::id())
            ->whereYear('created_at', $currentYear)
            ->sum('total');
        $total_transportasi = DB::table('expenses')
            ->where('category', '=', 'Transportasi')
            ->where('user_id','=',Auth::id())
            ->whereYear('created_at', $currentYear)
            ->sum('total');
        $total_hiburan = DB::table('expenses')
            ->where('category', '=', 'Hiburan')
            ->where('user_id','=',Auth::id())
            ->whereYear('created_at', $currentYear)
            ->sum('total');
        $total_internet = DB::table('expenses')
            ->where('category', '=', 'Internet')
            ->where('user_id','=',Auth::id())
            ->whereYear('created_at', $currentYear)
            ->sum('total');
        $expense = DB::table('expenses')
            ->where('user_id','=',Auth::id())
            ->where('category', '=', 'Makanan/Minuman')
            ->whereYear('created_at', $currentYear)
            ->get();
        $expenseT = DB::table('expenses')
            ->where('user_id','=',Auth::id())
            ->where('category', '=', 'Transportasi')
            ->whereYear('created_at', $currentYear)
            ->get();
        $expenseH = DB::table('expenses')
            ->where('category', '=', 'Hiburan')
            ->where('user_id','=',Auth::id())
            ->whereYear('created_at', $currentYear)
            ->get();
        $expenseI = DB::table('expenses')
            ->where('category', '=', 'Internet')
            ->where('user_id','=',Auth::id())
            ->whereYear('created_at', $currentYear)
            ->get();
            return view('all', compact('expense','expenseT','expenseH','expenseI','total_makanan','total_transportasi','total_hiburan','total_internet'),['title' => 'This Year Expenses']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expense.create',['title' => 'Create Expenses']); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $total = $request->price * $request->amount;
        // validate data before storing to database
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'amount' => 'required|numeric|min:0',
            'category' => 'required',
            'description' => 'required|string|max:255',
        ]);
        // if validation fails, redirect back to form with errors
        if ($validator->fails()) {
            return redirect('expense/create')
                ->withErrors($validator)
                ->withInput();
        }
        // store data to database
        Expense::create([
            'name' => $request->name,
            'price' => $request->price,
            'amount' => $request->amount,
            'category' => $request->category,
            'description' => $request->description,
            'total' => $total,
            'user_id' => $user_id,
        ]);
        // redirect to home page with success message
        return redirect('/thisMonth')->with('success', 'Expense created successfully');
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
        // delete specific expense
        $expense->delete();
    
    }
}
