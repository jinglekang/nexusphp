<?php

return [
    'sidebar' => [
        'exam_users' => 'Exam Users',
        'hit_and_runs' => 'Hit And Runs',
        'users_list' => 'Users',
        'tags_list' => 'Tags',
        'agent_allows' => 'Agent Allows',
        'agent_denies' => 'Agent Denies',
        'exams_list' => 'Exams & Tasks',
        'medals_list' => 'Medals',
        'settings' => 'Settings',
        'users_medals' => 'User medals',
        'claims' => 'User claims',
        'torrent_list' => 'Torrents',
        'torrent_state' => 'Free leach',
        'roles_list' => 'Roles',
        'ability_list' => 'Permissions',
        'seed_box_records' => 'SeedBox',
        'upload_speed' => 'Upload speed',
        'download_speed' => 'Download speed',
        'isp' => 'ISP',
        'menu' => 'Custom menu',
        'username_change_log' => 'Username change logs',
        'torrent_deny_reason' => 'Deny Reasons',
        'roles' => 'Role',
        'permissions' => 'Permissions',
        'section' => 'Search boxes',
        'icon' => 'Category icons',
        'plugin' => 'Plugins',
        'category' => 'Categories',
        'second_icon' => 'Second icons',
        'torrent_operation_log' => 'Torrent operation logs',
        'invite' => 'Invites',
        'user_props' => 'User props',
        'login_log' => 'Login logs',
        'bonus_log' => 'Bonus logs',
        'torrent_buy_log' => 'Torrent buy logs',
        'attendance_log' => 'Attendance logs',
        'oauth_client' => 'Client',
        'oauth_access_token' => 'Access tokens',
        'oauth_auth_code' => 'Auth codes',
        'oauth_refresh_token' => 'Refresh tokens',
    ],
    'resources' => [
        'agent_allow' => [
            'check_modal_btn' => 'Check',
            'check_modal_header' => 'Detect if the client is allowed',
            'check_pass_msg' => 'Congratulations, this client was passed by rule :id!',
        ],
        'user' => [
            'actions' => [
                'enable_modal_btn' => 'Enable',
                'enable_modal_title' => 'Enable user',
                'enable_disable_reason' => 'Reason',
                'enable_disable_reason_placeholder' => 'Optional',
                'disable_modal_btn' => 'Disable',
                'disable_modal_title' => 'Disable user',
                'disable_two_step_authentication' => 'Cancel two-step authentication',
                'change_bonus_etc_btn' => 'Change Uploaded etc.',
                'change_bonus_etc_action_increment' => 'Increment',
                'change_bonus_etc_action_decrement' => 'Decrement',
                'change_bonus_etc_field_label' => 'Field',
                'change_bonus_etc_action_label' => 'Action',
                'change_bonus_etc_value_label' => 'Value',
                'change_bonus_etc_value_help' => 'If the type is Uploaded/Download, the unit is: GB',
                'change_bonus_etc_reason_label' => 'Reason',
                'reset_password_btn' => 'Reset password',
                'reset_password_label' => 'New password',
                'reset_password_confirmation_label' => 'Confirm new password',
                'assign_exam_btn' => 'Assign exam',
                'assign_exam_exam_label' => 'Select exam',
                'assign_exam_begin_label' => 'Begin time',
                'assign_exam_end_label' => 'End time',
                'assign_exam_end_help' => 'If you do not specify a begin/end time, the time range set by the exam itself will be used',
                'grant_medal_btn' => 'Grant medal',
                'grant_medal_medal_label' => 'Select medal',
                'grant_medal_duration_label' => 'Duration',
                'grant_medal_duration_help' => 'Unit: days. If left blank, the user has permanent possession',
                'confirm_btn' => 'Confirm',
                'disable_download_privileges_btn' => 'Enable download',
                'enable_download_privileges_btn' => 'Disable download',
                'grant_prop_btn' => 'Grant prop',
                'grant_prop_form_prop' => 'Select prop',
                'grant_prop_form_duration' => 'Duration',
                'grant_prop_form_duration_help' => 'Unit: days. If left blank, the user has it permanently. Note: There is no time limit for Name Change Card, ignore this value.' ,
                'confirm_bulk' => 'Bulk confirm',
                'change_bonus_etc_duration_label' => 'Duration',
                'change_bonus_etc_duration_help' => 'Required when adding temporary invitation, in days',
                'change_class_btn' => 'Change class',
            ]
        ],
        'exam_user' => [
            'bulk_action_avoid_label' => 'Bulk avoid',
            'bulk_action_update_end_label' => 'Bulk modify end time',
            'action_avoid' => 'Avoid',
            'action_update_end' => 'Modify end time',
            'result_passed' => 'Passed!',
            'result_not_passed' => 'Not passed!',
        ],
        'exam' => [
            'index_duplicate' => 'Index：:index duplicate !',
        ],
        'hit_and_run' => [
            'bulk_action_pardon' => 'Bulk pardon',
            'action_pardon' => 'Pardon',
        ],
        'torrent' => [
            'bulk_action_pos_state' => 'Sticky',
            'bulk_action_remove_tag' => 'Remove tag',
            'bulk_action_attach_tag' => 'Attach tag',
            'action_approval' => 'Approval',
            'bulk_action_attach_tag_remove_old' => 'Also delete old tags',
            'bulk_action_recommend' => 'Recommend',
            'bulk_action_sp_state' => 'Promotion',
            'bulk_action_hr' => 'H&R',
        ],
        'seed_box_record' => [
            'toggle_status' => 'Change status',
        ],
        'tag' => [
            'detach_torrents' => 'Detach all torrents',
        ],
    ]
];
