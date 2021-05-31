<?php

namespace App\Repositories\Interfaces;

interface ISliderRepository
{
    public function getAllSliders($slider_detail);

    public function getPages();

    public function getSliderById($id);

    public function deleteRecord($id);

    public function createOrUpdate($id = null, $data = null);

    public function getSliderByPageId($id);
}
