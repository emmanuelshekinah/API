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

    public function employee(Request $request){
        return '{
            "namespace": "wfm:hr.employee.search:POST:v1.0.0",
            "error": false,
            "params": [   {
               "field": "department_id",
               "operator": "in",
               "value": "Operations"
            }],
            "results": [{
                "search_read":    [
                     {
                  "write_date": "2019-08-22 13:29:14",
                  "notes": false,
                  "message_partner_ids": [3],
                  "child_all_count": 0,
                  "message_main_attachment_id": false,
                  "tz": "Africa/Johannesburg",
                  "address_home_id": false,
                  "work_phone": "0115664321",
                  "spouse_birthdate": false,
                  "activity_date_deadline": false,
                  "message_channel_ids": [],
                  "work_location": false,
                  "passport_id": false,
                  "activity_state": false,
                  "message_has_error_counter": 0,
                  "activity_ids": [],
                  "children": 0,
                  "identification_id": false,
                  "id": 4,
                  "category_ids": [],
                  "create_date": "2019-08-22 13:29:14",
                  "job_title": "Manager",
                  "is_absent_totay": false,
                  "image": "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",
                  "message_attachment_count": 0,
                  "ssnid": false,
                  "__last_update": "2019-08-22 13:29:14",
                  "address_id":          [
                     3,
                     "Malini"
                  ],
                  "active": true,
                  "activity_user_id": false,
                  "message_follower_ids": [168],
                  "leave_date_from": false,
                  "create_uid":          [
                     2,
                     "Malini"
                  ],
                  "display_name": "Malini",
                  "spouse_complete_name": false,
                  "permit_no": "000000",
                  "visa_no": "000000",
                  "image_small": false,
                  "user_id": false,
                  "parent_id": false,
                  "name": "Malini",
                  "website_message_ids": [],
                  "country_id": false,
                  "leaves_count": 0,
                  "current_leave_state": false,
                  "birthday": false,
                  "bank_account_id": false,
                  "work_email": "sb_wfm_service@cestasoft.co.za",
                  "write_uid":          [
                     2,
                     "Malini"
                  ],
                  "message_is_follower": true,
                  "gender": "male",
                  "color": 0,
                  "image_medium": false,
                  "certificate": "master",
                  "google_drive_link": false,
                  "child_ids": [],
                  "emergency_phone": "0110820911",
                  "timesheet_manager_id":          [
                     2,
                     "Malini"
                  ],
                  "message_unread": false,
                  "remaining_leaves": 0,
                  "leave_date_to": false,
                  "study_school": false,
                  "mobile_phone": "0605885895",
                  "timesheet_cost": 0,
                  "country_of_birth": false,
                  "timesheet_validated": false,
                  "resource_calendar_id":          [
                     1,
                     "Standard 40 Hours/Week"
                  ],
                  "company_id":          [
                     1,
                     "cestasoft"
                  ],
                  "department_id":          [
                     4,
                     "Operations"
                  ],
                  "visa_expire": false,
                  "place_of_birth": false,
                  "message_unread_counter": 0,
                  "marital": "single",
                  "coach_id": false,
                  "activity_type_id": false,
                  "message_has_error": false,
                  "is_address_home_a_company": false,
                  "current_leave_id": false,
                  "sinid": false,
                  "job_id":          [
                     2,
                     "Manager"
                  ],
                  "message_needaction": false,
                  "km_home_work": 0,
                  "activity_summary": false,
                  "study_field": false,
                  "message_needaction_counter": 0,
                  "resource_id":          [
                     7,
                     "Malini"
                  ],
                  "message_ids":          [
                     300,
                     299
                  ],
                  "show_leaves": true,
                  "currency_id":          [
                     1,
                     "EUR"
                  ],
                  "additional_note": "Automated entry",
                  "emergency_contact": "Peter Pan"
               },
                     {
                  "write_date": "2019-08-19 23:28:15",
                  "notes": false,
                  "message_partner_ids": [2],
                  "child_all_count": 1,
                  "message_main_attachment_id": false,
                  "tz": "Africa/Johannesburg",
                  "address_home_id":          [
                     3,
                     "Malini"
                  ],
                  "work_phone": false,
                  "spouse_birthdate": false,
                  "activity_date_deadline": false,
                  "message_channel_ids": [],
                  "work_location": false,
                  "passport_id": false,
                  "activity_state": false,
                  "message_has_error_counter": 0,
                  "activity_ids": [],
                  "children": 0,
                  "identification_id": false,
                  "id": 1,
                  "category_ids": [],
                  "create_date": "2019-08-15 20:56:00",
                  "job_title": "Manager",
                  "is_absent_totay": false,
                  "image": "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",
                  "message_attachment_count": 0,
                  "ssnid": false,
                  "__last_update": "2019-08-19 23:28:15",
                  "address_id":          [
                     3,
                     "Malini"
                  ],
                  "active": true,
                  "activity_user_id": false,
                  "message_follower_ids": [31],
                  "leave_date_from": false,
                  "create_uid":          [
                     1,
                     "OdooBot"
                  ],
                  "display_name": "Malini",
                  "spouse_complete_name": false,
                  "permit_no": false,
                  "visa_no": false,
                  "image_small": "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",
                  "user_id":          [
                     2,
                     "Malini"
                  ],
                  "parent_id": false,
                  "name": "Malini",
                  "website_message_ids": [],
                  "country_id": false,
                  "leaves_count": 0,
                  "current_leave_state": false,
                  "birthday": false,
                  "bank_account_id": false,
                  "work_email": "malini@cestasoft.co.za",
                  "write_uid":          [
                     2,
                     "Malini"
                  ],
                  "message_is_follower": false,
                  "gender": "male",
                  "color": 0,
                  "image_medium": "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",
                  "certificate": "master",
                  "google_drive_link": false,
                  "child_ids": [2],
                  "emergency_phone": false,
                  "timesheet_manager_id": false,
                  "message_unread": false,
                  "remaining_leaves": 0,
                  "leave_date_to": false,
                  "study_school": false,
                  "mobile_phone": false,
                  "timesheet_cost": 0,
                  "country_of_birth": false,
                  "timesheet_validated": false,
                  "resource_calendar_id":          [
                     1,
                     "Standard 40 Hours/Week"
                  ],
                  "company_id":          [
                     1,
                     "cestasoft"
                  ],
                  "department_id":          [
                     4,
                     "Operations"
                  ],
                  "visa_expire": false,
                  "place_of_birth": false,
                  "message_unread_counter": 0,
                  "marital": "single",
                  "coach_id": false,
                  "activity_type_id": false,
                  "message_has_error": false,
                  "is_address_home_a_company": false,
                  "current_leave_id": false,
                  "sinid": false,
                  "job_id":          [
                     2,
                     "Manager"
                  ],
                  "message_needaction": false,
                  "km_home_work": 0,
                  "activity_summary": false,
                  "study_field": false,
                  "message_needaction_counter": 0,
                  "resource_id":          [
                     1,
                     "Malini"
                  ],
                  "message_ids":          [
                     64,
                     63
                  ],
                  "show_leaves": true,
                  "currency_id":          [
                     1,
                     "EUR"
                  ],
                  "additional_note": false,
                  "emergency_contact": false
               },
                     {
                  "write_date": "2019-08-21 13:06:31",
                  "notes": false,
                  "message_partner_ids": [3],
                  "child_all_count": 0,
                  "message_main_attachment_id": false,
                  "tz": "Africa/Johannesburg",
                  "address_home_id": false,
                  "work_phone": "0115664321",
                  "spouse_birthdate": false,
                  "activity_date_deadline": false,
                  "message_channel_ids": [],
                  "work_location": false,
                  "passport_id": false,
                  "activity_state": false,
                  "message_has_error_counter": 0,
                  "activity_ids": [],
                  "children": 0,
                  "identification_id": false,
                  "id": 3,
                  "category_ids": [],
                  "create_date": "2019-08-21 13:06:31",
                  "job_title": "Manager",
                  "is_absent_totay": false,
                  "image": "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",
                  "message_attachment_count": 0,
                  "ssnid": false,
                  "__last_update": "2019-08-21 13:06:31",
                  "address_id":          [
                     3,
                     "Malini"
                  ],
                  "active": true,
                  "activity_user_id": false,
                  "message_follower_ids": [166],
                  "leave_date_from": false,
                  "create_uid":          [
                     2,
                     "Malini"
                  ],
                  "display_name": "Malini",
                  "spouse_complete_name": false,
                  "permit_no": "000000",
                  "visa_no": "000000",
                  "image_small": false,
                  "user_id": false,
                  "parent_id": false,
                  "name": "Malini",
                  "website_message_ids": [],
                  "country_id": false,
                  "leaves_count": 0,
                  "current_leave_state": false,
                  "birthday": false,
                  "bank_account_id": false,
                  "work_email": "sb_wfm_service@cestasoft.co.za",
                  "write_uid":          [
                     2,
                     "Malini"
                  ],
                  "message_is_follower": true,
                  "gender": "male",
                  "color": 0,
                  "image_medium": false,
                  "certificate": "master",
                  "google_drive_link": false,
                  "child_ids": [],
                  "emergency_phone": "0110820911",
                  "timesheet_manager_id":          [
                     2,
                     "Malini"
                  ],
                  "message_unread": false,
                  "remaining_leaves": 0,
                  "leave_date_to": false,
                  "study_school": false,
                  "mobile_phone": "0605885895",
                  "timesheet_cost": 0,
                  "country_of_birth": false,
                  "timesheet_validated": false,
                  "resource_calendar_id":          [
                     1,
                     "Standard 40 Hours/Week"
                  ],
                  "company_id":          [
                     1,
                     "cestasoft"
                  ],
                  "department_id":          [
                     4,
                     "Operations"
                  ],
                  "visa_expire": false,
                  "place_of_birth": false,
                  "message_unread_counter": 0,
                  "marital": "single",
                  "coach_id": false,
                  "activity_type_id": false,
                  "message_has_error": false,
                  "is_address_home_a_company": false,
                  "current_leave_id": false,
                  "sinid": false,
                  "job_id":          [
                     2,
                     "Manager"
                  ],
                  "message_needaction": false,
                  "km_home_work": 0,
                  "activity_summary": false,
                  "study_field": false,
                  "message_needaction_counter": 0,
                  "resource_id":          [
                     6,
                     "Malini"
                  ],
                  "message_ids":          [
                     296,
                     295
                  ],
                  "show_leaves": true,
                  "currency_id":          [
                     1,
                     "EUR"
                  ],
                  "additional_note": "Automated entry",
                  "emergency_contact": "Peter Pan"
               },
                     {
                  "write_date": "2019-08-19 23:15:27",
                  "notes": false,
                  "message_partner_ids": [3],
                  "child_all_count": 0,
                  "message_main_attachment_id": false,
                  "tz": "Africa/Johannesburg",
                  "address_home_id":          [
                     3,
                     "Malini"
                  ],
                  "work_phone": "605885895",
                  "spouse_birthdate": false,
                  "activity_date_deadline": false,
                  "message_channel_ids": [],
                  "work_location": "Randburg",
                  "passport_id": false,
                  "activity_state": false,
                  "message_has_error_counter": 0,
                  "activity_ids": [],
                  "children": 0,
                  "identification_id": false,
                  "id": 2,
                  "category_ids": [],
                  "create_date": "2019-08-16 13:03:12",
                  "job_title": "Security Guard",
                  "is_absent_totay": false,
                  "image": "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",
                  "message_attachment_count": 0,
                  "ssnid": false,
                  "__last_update": "2019-08-19 23:15:27",
                  "address_id":          [
                     8,
                     "Wancy"
                  ],
                  "active": true,
                  "activity_user_id": false,
                  "message_follower_ids": [103],
                  "leave_date_from": false,
                  "create_uid":          [
                     2,
                     "Malini"
                  ],
                  "display_name": "Wancy",
                  "spouse_complete_name": false,
                  "permit_no": false,
                  "visa_no": false,
                  "image_small": "iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAADP0lEQVR4nO2aW1PbQAxGj+04aUm5pO309v9/Gi+lUyZAoSE390FR7LgOxV7JNtRnJoOZwHr3W61WqxUMDAwMDAwMDAwM/JdEPXp/1lkvekhrE9OVBcTAGDgBUmAJLIBHYNtmR9oWYAJcAFMg4e8lsEJEeEBEcRekTQHeAzNk4FnhU+yLfpQF8B0RwoU2BEiAT8ApMptZjffGiCVcAmuPznkLkABfkbXe1JQjxAKuEIswxVOACPhCPvOhbW2R5fArsK0DYsvGSpxjM3iQZRMDnxFHaoaXACni9Cw9eIYsqZlhm+YC6JI6A0bGbYMIeoIIYYK1AOrhp/iFtgkSRJngsQQmSAc9BFCB1bqCnbilANqZMXmw03s8LMB7awXY7H4Gi+y5DXqxQaJDEzwE2FAv3K2DRoVmYbGlAGqOj+Qmak0E3BWeg/GwgBUyQ9YWEO3avd/9buJkPQR4g2xTHrvAGuNTocc2eIrfNphgPGkeFqDJC68lYJoh8nKC1mksbds8KeJhAa0mNUPxEGCNZG48TprLwrMJHgJkwE/EEqw6GiOi3hbeYYJn3D5F8oGh6Mxf4hBgeZ4F7pGgKFRkDX9dosu+H4b0TGG+9hVvARaEdTpCRFABzIMrbwHuCO/0BseboTYsIMQPROSHKxe8BdgiF50hAvzGMb3WhhOc0yw61Nj/xrQ3JdoQYEwzC2glqeotwBS5GW6KXq6aXYSU8YoEY+Rq7IJ8Kwtp6wG5HTZLhirWAiTAO2TgE+xOhhGyHd4g54FV6TtoKLKVAClyH3i2ey5Xf1ig1SNrRIQ5BttjyPY0QmZ5uvtoHtDTeWloHJMnSPWcsKZBzFBXgDEyy1rdpc6piyRIuZ4oQ4RYIUUUtzzjAFWnVmeGrO0Rea1PH9B+6Fh0Z1sC1+Q5hEqeI0CKlLq8pX6RU5eohcyBHxyZsH8NJAW+YevR2yZGdo8rKkR4KhCKyGtyXurgQfp+Dnyo+vIpAWaElbf1iS35eA44JkC6+4e+ODorPlJa9scE8Lze6ooMWc4HVlAlQISEs69p8IqObU+VAGP8ipy6Rq1gT5UA5jewPSJD/Nu+hrE40GKVl/7xayTmiADKiJcR6ZnwB6Zyqzx8+J9yAAAAAElFTkSuQmCC",
                  "user_id": false,
                  "parent_id":          [
                     1,
                     "Malini"
                  ],
                  "name": "Wancy",
                  "website_message_ids": [],
                  "country_id": false,
                  "leaves_count": 0,
                  "current_leave_state": false,
                  "birthday": false,
                  "bank_account_id": false,
                  "work_email": "wancy@cestasoft.co.za",
                  "write_uid":          [
                     2,
                     "Malini"
                  ],
                  "message_is_follower": true,
                  "gender": "male",
                  "color": 0,
                  "image_medium": "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",
                  "certificate": "master",
                  "google_drive_link": false,
                  "child_ids": [],
                  "emergency_phone": false,
                  "timesheet_manager_id":          [
                     2,
                     "Malini"
                  ],
                  "message_unread": false,
                  "remaining_leaves": 0,
                  "leave_date_to": false,
                  "study_school": false,
                  "mobile_phone": false,
                  "timesheet_cost": 0,
                  "country_of_birth": false,
                  "timesheet_validated": false,
                  "resource_calendar_id":          [
                     1,
                     "Standard 40 Hours/Week"
                  ],
                  "company_id":          [
                     1,
                     "cestasoft"
                  ],
                  "department_id":          [
                     4,
                     "Operations"
                  ],
                  "visa_expire": false,
                  "place_of_birth": false,
                  "message_unread_counter": 0,
                  "marital": "single",
                  "coach_id": false,
                  "activity_type_id": false,
                  "message_has_error": false,
                  "is_address_home_a_company": false,
                  "current_leave_id": false,
                  "sinid": false,
                  "job_id":          [
                     1,
                     "Employee"
                  ],
                  "message_needaction": false,
                  "km_home_work": 0,
                  "activity_summary": false,
                  "study_field": false,
                  "message_needaction_counter": 0,
                  "resource_id":          [
                     2,
                     "Wancy"
                  ],
                  "message_ids":          [
                     165,
                     164
                  ],
                  "show_leaves": true,
                  "currency_id":          [
                     1,
                     "EUR"
                  ],
                  "additional_note": false,
                  "emergency_contact": false
               }
            ]}
            ],
            "options": {},
            "model": "hr.employee",
            "action": "search_read"
         }';
    }
}
