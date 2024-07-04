<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiCheckController extends Controller
{
    public function check($user_id = null, $zone_id = null, $game = null)
    {
        $api_key = '9KXbuOnRBkxPDrStifZ7V0EwzAmoqTsQd81vJUMajc2yl5gCYIpFLhN3HGe6';
        
        $params = [
            'api_key' => $api_key,
            'game'    => $game,
            'user_id' => $user_id,
            'zone_id' => $zone_id
        ];
        
        $result = $this->connect($params);
        
        if($result['code'] == 200){
            return [
                'status' => ['code' => 200],
                'data' => ['userNameGame' => $result['result']['username']]
            ];
        }else{
            return [
                'status' => ['code' => 1],
                'data' => ['userNameGame' => 'Invalid User ID or Zone ID']
            ];
        }
    }
    
    public function connect($data = null)
    {
        info($data);
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, 'https://ruukastore.com/api/v1/check-game');
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        
        $response = curl_exec($ch);
        
        curl_close($ch);
        
        return json_decode($response, true);
    }
}
