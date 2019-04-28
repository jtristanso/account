<?php

namespace Increment\Account\Models;

use Illuminate\Database\Eloquent\Model;
use App\APIModel;
class BillingInformation extends APIModel
{
    protected $table = 'billing_informations';
    protected $fillable = ['account_id', 'company', 'address', 'postal_code', 'country', 'state'];
}
