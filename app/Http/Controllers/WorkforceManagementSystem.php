<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkforceManagementSystem extends Controller
{
    public function auth(Request $request){
        return '{
            "namespace": "wfm:user.auth:POST:v1.0.0",
            "error": false,
            "params": [   {
               "username": "sb_wfm_service@cestasoft.co.za",
               "password": "sb_wfm_service"
            }],
            "results":    {
               "success": true,
               "userid": 7,
               "username": "sb_wfm_service@cestasoft.co.za"
            },
            "options": {},
            "model": "ir.access",
            "action": "create"
          }';
    }
}
