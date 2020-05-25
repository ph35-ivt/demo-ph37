<?php

namespace Book;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'name', 'qty', 'category_id'
    ];

    public function category()
    {
    	return $this->belongsTo('Book\Category');
    }
}
