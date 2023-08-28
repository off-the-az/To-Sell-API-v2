<?php

namespace App\Http\Controllers;

use App\Models\Users;

class UsersController extends Controller
{
    public function getAll()
    {
        return Users::all();
    }
    public function getById(string $id)
    {
        return Users::findOrFail($id)->firstOrFail();
    }
    public function getByToken(string $token)
    {
        return Users::where('token', '=', '%'.$token.'%')->firstOrFail();
    }
    public function update()
    {
        return null;
    }
    public function delete()
    {
        return null;
    }
}
