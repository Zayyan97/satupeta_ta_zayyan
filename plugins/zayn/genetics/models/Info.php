<?php namespace Zayn\Genetics\Models;

use Model;

/**
 * Model
 */
class Info extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zayn_genetics_info';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
