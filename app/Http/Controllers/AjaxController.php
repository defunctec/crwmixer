<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * @param Request    $request
     * @return json
     */
    public function index(Request $request)
	{
		$amount = $request->get('amount');
		$address = $request->get('address');

		$ip = ip2long($request->getClientIp());

		$response['error'] 			= true;
		$response['amount'] 		= $amount;
		$response['return_address'] = $address;
		$response['message'] 		= 'Something went wrong, try again...';

		if(!empty($amount) && !is_numeric($amount)) {
			$response['message'] = 'Please enter valid amount!';
		
		} elseif(empty($amount)){
			$response['message'] = 'Amount cannot be empty!';

		} else if($amount < 0.05) {
			$response['message'] = 'Enter amount greater than 0.05';

		} else if(empty($address)) {
			$response['message'] = 'Enter your Bitcoin address, where to send mixed Bitcoins';

		} else {
			$request_url 			= 	"http://bitcoin.dev/api/v1/?key=T3rNO5bU9U&ip={$ip}&amount={$amount}&address={$address}";
			$serve_response 		= 	json_decode(file_get_contents($request_url));
			$response['error'] 		= 	$serve_response->error;
			$response['order_key'] 	= 	!empty($serve_response->order_key) ? $serve_response->order_key : false;
			$response['message'] 	= 	$serve_response->message;
		}
        return response()->json($response);
	}
}
