<?php

namespace App\Services\Auth;

use App\Enums\RoleEnum;
use Illuminate\Support\Str;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Validation\ValidationException;
use App\Contracts\Interfaces\RegisterInterface;
use App\Http\Requests\RegisterRequest;

class RegisterService
{
    public function __construct()
    {

    }

    /**
     * Handle a login request to the application.
     *
     * @param LoginRequest $request
     * @return void
     *
     * @throws ValidationException
     */

    public function handleRegister(RegisterRequest $request, RegisterInterface $register): void
    {
        $data = $request->validated();
        $password = bcrypt($data['password']);
        $data['password'] = $password;
        $slug = Str::slug($data['name']);
        $data['slug'] = $slug;
        $user = $register->store($data);
        $user->assignRole(RoleEnum::USER);
        return;
    }
}
