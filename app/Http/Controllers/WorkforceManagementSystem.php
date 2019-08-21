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
    

    public function new_employee(Request $request){

        return '
        {
            "namespace": "wfm:employee.create:POST:v1.0.0",
            "error": false,
            "params": [   {
               "tz": "Africa/Johannesburg",
               "work_phone": "0115664321",
               "identification_id": false,
               "job_title": "Manager",
               "address_id": 3,
               "active": true,
               "display_name": "TestEmployee001",
               "permit_no": "000000",
               "visa_no": "000000",
               "name": "Malini",
               "work_email": "sb_wfm_service@cestasoft.co.za",
               "gender": "male",
               "emergency_phone": "0110820911",
               "timesheet_manager_id": 2,
               "mobile_phone": "0605885895",
               "resource_calendar_id": 1,
               "company_id": 1,
               "department_id": 4,
               "job_id": 2,
               "additional_note": "Automated entry",
               "emergency_contact": "Peter Pan"
            }],
            "results": {"create": [{"id": 3}]},
            "options": {},
            "model": "hr.employee",
            "action": "create"
          }';
    }
}
