<?php namespace Thanhnha\Shop\Models;

use Model;

/**
 * order Model
 */
class Order extends Model
{
    public $timestamps = true;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'orders';

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
