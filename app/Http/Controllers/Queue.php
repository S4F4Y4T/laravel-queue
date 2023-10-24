<?php

namespace App\Http\Controllers;

use App\Jobs\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Queue extends Controller
{
    public function exec()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users?_start=0&_limit=10'); // Replace with the API URL

        if ($response->successful()) {
            $data = $response->json();

            if(!empty($data)){
                foreach ($data as $res){
                    if(!empty($res['email'])){
                        SendMail::dispatch($res['email']);
                    }
                }
            }

            // Process and use the $data as needed
            return "Queue Jobs Completed";
        } else {
            // Handle the API request error
            return response()->json(['error' => 'Failed to fetch data from the API'], 500);
        }


    }
}
