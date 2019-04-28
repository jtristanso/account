<?php

namespace Increment\Account\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\APIModel;
class AccountProfile extends APIModel
{
    protected $table = 'account_profiles';
    protected $fillable = ['account_id', 'url'];
}