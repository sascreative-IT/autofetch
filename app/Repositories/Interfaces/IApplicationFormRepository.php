<?php

namespace App\Repositories\Interfaces;

interface IApplicationFormRepository
{
    public function create(array $data, array $dat2);

    public function create_api();

    public function finance_quote();

    public function connect_api(array $data, array $dat2);

    public function store_findmy_cars();

}
