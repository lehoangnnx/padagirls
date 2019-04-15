<?php

namespace App\Repositories\Contracts;

interface ModelRepositoryInterface
{
    public function all();
    public function getModelIsShow();
    public function findById($id);
}