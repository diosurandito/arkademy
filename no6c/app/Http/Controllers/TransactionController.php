<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use DB;


class TransactionController extends Controller
{
	public function index()
	{
		$trans = DB::table('product')
		->join('cashier', 'cashier.id', '=', 'product.id_cashier')
		->join('category', 'category.id', '=', 'product.id_category')
		->select('product.id','product.name as pname', 'product.price','product.id_cashier','product.id_category', 'cashier.name as casname', 'category.name as catname')
		->orderBy('product.id')
		->get();

		$cashier = DB::table('cashier')
		->select('cashier.*')
		->orderBy('cashier.id')
		->get();

		$category = DB::table('category')
		->select('category.*')
		->orderBy('category.id')
		->get();

		return view('pages.user.no6c', compact('trans', 'category', 'cashier'));
	}

	public function store(Request $request)
	{
		Transaction::create([
			'name' => $request->name,
			'price' => $request->price,
			'id_category' => $request->id_category,
			'id_cashier' => $request->id_cashier,

			]);
		return back()->with('success', 'Data berhasil ditambahkan');
	}

	public function update(Request $request, $id)
	{
		$trans = Transaction::find($id);
		$trans->update([
			'name' => $request->name,
			'price' => $request->price,
			'id_category' => $request->id_category,
			'id_cashier' => $request->id_cashier,

			]);
		return back()->with('success', 'Data berhasil diubah');
	}

	public function destroy($id)
	{
		$trans = Transaction::find($id);
		$trans->delete();
		return back()->with('success', 'Data berhasil dihapus');
	}


}
