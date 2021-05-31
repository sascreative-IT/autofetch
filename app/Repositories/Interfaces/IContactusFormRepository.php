<?php

namespace App\Repositories\Interfaces;

interface IContactusFormRepository
{
    public function create(array $data);

    public function connect_api(array $data);

}
