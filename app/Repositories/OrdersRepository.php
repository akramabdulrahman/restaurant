<?php namespace App\Repositories;

use App\Order;
use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class OrdersRepository extends Repository
{

    public function model()
    {
        return Order::class;
    }
}