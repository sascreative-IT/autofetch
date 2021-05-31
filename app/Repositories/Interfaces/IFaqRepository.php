<?php

namespace App\Repositories\Interfaces;

interface IFaqRepository
{

    public function getAllFaqs($faq_detail);

    public function getFaqById($id);

    public function deleteRecord($id);

    public function createOrUpdate($id = null, $data = null);

    public function getAllActiveFaqs();
}
