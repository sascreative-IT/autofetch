<?php

namespace App\Repositories\Interfaces;

interface ITestimonialRepository
{
    public function getAllTestimonials($detail);

    public function getTestimonialById($id);

    public function deleteRecord($id);

    public function createOrUpdate($id = null, $data = null);

    public function getAllActiveTestimonials();
}
