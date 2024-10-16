<?php

namespace App\Http\Controllers;
use App\Models\Transaction;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function showAllTrans (){

         $trans = Transaction::all();
        return view('trans',['trans'=>$trans]);

    }
    public function createTran(){

        return view('create-tran');
    }

    public function storeTran(Request $request){

        $validated = $request->validate([

            'transaction_title'=> 'required|string|max:255',
            'description'=> 'required|string|max:255',
            'status'=> 'required|string|max:10',
            'total_amount'=> 'required|string|max:255',
            'transaction_number'=> 'required|string|max:255',

        ]);

        $tran = new Transaction();

        $tran->transaction_title = $validated['transaction_title'];
        $tran->description= $validated['description'];
        $tran->status = $validated['status'];
        $tran->total_amount = $validated['total_amount'];
        $tran->transaction_number = $validated['transaction_number'];

        $tran->save();

        return redirect()->route('showAllTrans')->with('success','Create Successfully');
    }

    public function viewTran(Request $request){

        $tran = Transaction::find($request->id);
        return view('tran',['tran'=>$tran]);

    }
    public function editTran(Request $request){
        $tran = Transaction::find($request->id);
        return view('edit-tran',['tran'=>$tran]);

    }
    public function updateTran(Request $request){
        $validated = $request->validate([

            'transaction_title'=> 'required|string|max:255',
            'description'=> 'required|string|max:255',
            'status'=> 'required|string|max:10',
            'total_amount'=> 'required|string|max:255',
            'transaction_number'=> 'required|string|max:255',

        ]);

        $tran = Transaction::find($request->id);

        $tran->transaction_title = $validated['transaction_title'];
        $tran->description= $validated['description'];
        $tran->status = $validated['status'];
        $tran->total_amount = $validated['total_amount'];
        $tran->transaction_number = $validated['transaction_number'];

        $tran->save();

        return redirect()->route('viewTran',['id'=>$tran->id])->with('success','Update Successfuly');

    }

    public function deleteTran(Request $request){
        $tran = Transaction::find($request->id);
        if ($tran){
            $tran->delete();
        }
        return redirect()->route('showAllTrans')->with('success','Delete Successfully.');

    }


}
