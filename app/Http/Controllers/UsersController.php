<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getAll(Request $request)
    {
        return 'Get All Users';
    }
    public function getById(Request $request, string $id)
    {
        return $id;
    }
    public function getByToken(Request $request, string $token)
    {
        return $token;
    }
    public function add(Request $request)
    {
        return 'User`s info added';
    }
    public function update(Request $request)
    {
        return 'User`s info updated';
    }
    public function delete(Request $request)
    {
        return 'User`s info deleted';
    }
}
