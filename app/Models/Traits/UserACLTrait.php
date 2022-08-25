<?php

namespace App\Models\Traits;

trait UserACLTrait {

    public function is_admin():bool {
        return in_array(  $this->username, config('acl.admins') );
    }

}
