<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Guardian
 *
 * @property $id
 * @property $name
 * @property $phone
 * @property $email
 * @property $address
 * @property $relationship
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Guardian extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'phone', 'email', 'address', 'relationship'];


}
