<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserCreateRequest;
use App\Http\Resources\Admin\UsersCollection;
use App\Models\User;
use Illuminate\Http\Request;

class ManageUsersController extends Controller
{
    public function index()
    {
        return view('admin.manage_users.index');
    }

    public function getPaginatedList()
    {
        $users = User::latest()->paginate(request('items'));

        return new UsersCollection($users);
    }

    public function create()
    {
        return view('admin.manage_users.create');
    }

    public function store(UserCreateRequest $request)
    {
        try {
            $request->save();
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong. The user probably was not be created!',
                'error_message' => $e->getMessage(),
            ], 500);
        }

        return response()->json([
            'message' => "Successfully created the user",
        ], 200);
    }
}
