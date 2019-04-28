<?php

namespace Increment\Account\Http;

use Illuminate\Http\Request;
use App\Http\Controllers\APIController;
use Increment\Account\Models\BillingInformation;
class BillingInformationController extends APIController
{
    function __construct(){
      $this->model = new BillingInformation();
      $this->notRequired = array(
        'company', 'address', 'city', 'posta_code', 'country', 'state'
      );
    }

   public function getBillingInformation($accountId){
    $result = BillingInformation::where('account_id', '=', $accountId)->get();
    return (sizeof($result) > 0) ? $result[0] : null;
  }
}
