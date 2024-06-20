<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function showLeaderboard() {
        // Fetch all users and calculate exp
        $users = User::all();
        $k = 10;

        // Create a collection with user data and calculated exp
        $usersWithExp = $users->map(function ($user) use ($k) {
            $user->exp = log($user->saldo + 1) * $k;
            return $user;
        });

        // Sort users by exp in descending order
        $sortedUsers = $usersWithExp->sortByDesc('exp')->values();

        // Convert sorted collection to a data array
        $data = $sortedUsers->map(function ($user, $index) {
            return [
                'rank' => $index + 1,
                'username' => $user->username,
                'exp' => $user->exp,
            ];
        });

        // Return data as DataTable response
        return datatables()->of($data)->toJson();
    }
}
