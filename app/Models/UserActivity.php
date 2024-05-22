<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UserActivity extends Model
{
    protected $table = 'user_activity';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'last_activity',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCurrentlyOnline()
    {
        return User::where('user_activity.last_activity', '>', Carbon::now()->subMinutes(5))
            ->join('user_activity', 'user_activity.user_id', '=', 'users.id')
            ->select('users.*')
            ->count();
    }

    public function getWeeklyVisits()
    {
        return User::where('user_activity.created_at', '>', Carbon::now()->startOfWeek())
            ->join('user_activity', 'user_activity.user_id', '=', 'users.id')
            ->select('users.*')
            ->count();
    }

    public function getMonthlyVisits()
    {
        return User::where('user_activity.created_at', '>', Carbon::now()->startOfMonth())
            ->join('user_activity', 'user_activity.user_id', '=', 'users.id')
            ->select('users.*')
            ->count();
    }

    public function getTotallyVisits()
    {
        return User::whereNotNull('user_activity.created_at')
            ->join('user_activity', 'user_activity.user_id', '=', 'users.id')
            ->select('users.*')
            ->count();
    }
}
