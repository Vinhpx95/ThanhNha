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
        'open_hours' => 'required',
        'phone1' => 'required|regex:/^\d{10}$/',
        'phone2' => 'required|regex:/^\d{10}$/',
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
