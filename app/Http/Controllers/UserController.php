<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepositoryInterface;
use App\Services\UserMoodService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $users = null;

    public function __construct(
        UserRepositoryInterface $users,
        UserMoodService $userMoodService
    ){
        $this->users = $users;
        $this->userMoodService = $userMoodService;
    }

    public function updateMood($id, Request $request)
    {
        $this->userMoodService->updateMood($id, $request->mood);
    }

    public function getUsers()
    {
        return $this->users->all();
    }
}
