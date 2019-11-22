<?php namespace Thanhnha\Shop\Models;

use Model;

/**
 * product Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;   
    /**
     * @var string The database table used by the model.
     */
    public $table = 'products';
    public $timestamps = false;

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    protected $rules = [
        'product_code' => 'required',
        'name' => 'required',
        'invest_price' => 'required|numeric',
        'wholesale_price' => 'required|numeric',
        'retail_price' => 'required|numeric',
        'quantity' => 'required|numeric',
    ];
}
