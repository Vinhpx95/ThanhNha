<?php namespace Thanhnha\Shop\Models;

use Model;

/**
 * orders_products Model
 */
class OrdersProducts extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'thanhnha_shop_orders_products';

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
}
