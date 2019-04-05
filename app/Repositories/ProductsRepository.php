<?php
namespace App\Repositories;

use App\Contracts\RepositoryInterface;
use App\Repositories\Repository;
use App\Products;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class ProductsRepository extends Repository implements RepositoryInterface
{
    public function __construct(Products $model)
    {
        parent::__construct($model);
    }




}
