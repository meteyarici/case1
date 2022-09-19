<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Users extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'surname',
    ];


    /**
     *
     * @return string
     */
    public function getBirthday()
    {

        return date("Y", strtotime("-" . $this->attributes['age'] . " year"));

    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function positions(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(Positions::class, 'position');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function competences(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(Competences::class, 'competence');
    }

}
