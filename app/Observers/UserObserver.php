<?php

namespace App\Observers;

use App\User;

class UserObserver{

    public function creating(User $user){
        var_dump('Estou enviando uma imagem');
    }

}