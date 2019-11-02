<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	protected $guarded = [];
	protected $table = 'product';
	protected $fillable = ['name','price','id_cashier','id_category'];

	public $timestamps = false;
}
