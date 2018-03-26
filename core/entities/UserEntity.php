<?php

namespace nbEditor\Core\Entities;

use nbEditor\Core\Entities\Entity;

class UserEntity extends Entity
{
    public function getID()
    {
        if ($this->has('id')) {
            return $this->get('id');    
        }
        return false;
    }
    
    public function getName()
    {
        return $this->get('name');
    }
    
    public function getEmail()
    {
        return $this->get('email');
    }
    
    public function getAccessToken()
    {
        return $this->get('access_token');
    }
    
    public function getRole()
    {
        return 'admin';
    }
}