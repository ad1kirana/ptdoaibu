<?php

namespace App\Http\Controllers;

use App\Transactions;
use Illuminate\Support\Facades\DB;
use View;
use Illuminate\Http\Request;
use Auth;

class TransactionsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         $transactions = DB::table('transactions')
                            ->join('users', 'user_id', '=', 'users.id')
                            ->select('transactions.*', 'users.name')
                            ->get();

        return view('transaction.index', ['transactions' => $transactions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('transaction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//$transactions = new Transactions;



        $items=$request->input('items');
        $qty=$request->input('qty');
        $price=$request->input('price');
        $user_id=Auth::id();
        $data = array('items'=>$items,'qty'=>$qty, 'price'=>$price, 'user_id'=>$user_id );

        DB::table('transactions')->insert($data);
       
         return view('transaction.create');
    }

        
    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
