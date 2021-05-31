<?php

namespace App\Repositories\Interfaces;

interface INewsLetterRepository
{
    public function create(array $data);

    public function connect_api(array $data);

}
