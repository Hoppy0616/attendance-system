<?php

namespace App\Http\Controllers;

use App\Models\attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function create()
    {
        return view('attendance');
    }

    public function attendanceStart()
    {
        DB::table('attendances')->insert([
            'user_id' => '名前',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 他の処理を追加...

        return view('attendance')->with('message', '出勤が登録されました');
    }

    public function attendanceEnd()
    {
        DB::table('attendances')->insert([
            'user_id' => '名前',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return view('attendance')->with('message', '退勤が登録されました');
    }
}


