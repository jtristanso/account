<?php

namespace Increment\Account\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\APIModel;
class Account extends APIModel
{
    protected $table = 'accounts';
    protected $hidden = array('password');
    protected $fillable = ['username', 'password', 'account_type', 'status'];
}