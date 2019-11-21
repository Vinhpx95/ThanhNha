<?php namespace Thanhnha\Shop\Models;

use Model;

/**
 * infor Model
 */
class Infor extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'infors';

    public $timestamps = false;
    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    protected $rules = [
        'address' => 'required',
        'opening_hours' => 'required',
        'phone1' => 'required',
        'phone2' => 'required',
        'mail' => 'required|email',
        'facebook' => 'required',
        'google_plus' => 'required',
    ];

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
