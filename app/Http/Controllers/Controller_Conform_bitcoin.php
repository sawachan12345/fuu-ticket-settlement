<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use Illuminate\Routing\Controller;
*/
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Controller_conform_bitcoin extends Controller
{
    public function postIndex(Request $request)
    {
        $amount = $request->input('amount');
        $buyerId = $request->input('buyerId');
        $merchantName = $request->input('merchantName');
        $id = $request->input('id');
        return view('conform_bitcoin', [
                                        'amount' => $amount,
                                        'buyerId' => $buyerId,
                                        'merchantName' => $merchantName,
                                        'id' => $id
      ]);
    }
}
?>
