<?php

namespace App\Repositories\Interfaces;

interface IPageRepository
{

    public function getAllPages($faq_detail);

    public function getPageById($id);

    public function deleteRecord($id);

    public function createOrUpdate($id = null, $data = null);

    public function getPageByUrl($url);
}
