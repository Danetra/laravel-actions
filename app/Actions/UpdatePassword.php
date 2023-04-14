<?php

namespace App\Actions;
use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Hash;


class UpdatePassword
{

    use AsAction;

    public function handle(User $user, string $password)
    {
        logger("User {$user->name} wants to change Password");
        $user->password = Hash::make($password);
        $user->save();

        return $user;
    }
}

?>
