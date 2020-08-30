<?php

// if(!function_exists('weekdays')) {
//   function weekdays() {
//     return [
//       'Mon' => 'Monday',
//       'Tus' => 'Tuesday',
//       'Wed' => 'Wednesday',
//       'Thu' => 'Thursday',
//       'Fri' => 'Friday',
//       'Sat' => 'Saturday',
//       'Sun' => 'Sunday'
//     ];
//   }
// } 

    function UserActivity($activity)

{
   date_default_timezone_set("Asia/Dhaka");
    $browser = Request::header('user-agent');
    $ip=$_SERVER['REMOTE_ADDR'];
    $user_id = session('ses_id');
    $session_id = session('ses_session_id');
   $data = [
      'user_id'=> $user_id ,
      'activity'=> $activity ,
      'session_id'=> $session_id ,
      'activity_datetime'=> now(),
      'ip'=> $ip,
      'browser'=> $browser 
   ];

    DB::table('activity_log')->insert($data);


}

