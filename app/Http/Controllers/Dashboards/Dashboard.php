<?php
/**
 * Created by PhpStorm.
 * User: akram
 * Date: 1/24/2018
 * Time: 2:22 AM
 */

namespace App\Http\Controllers\Dashboards;


use App\Http\Controllers\Controller;
use App\Repositories\OrdersRepository as OrderRepo;

class Dashboard extends Controller
{
    protected $order, $role = "";

    public function __construct(OrderRepo $order)
    {
        $this->order = $order;
        $this->middleware("check_role:$this->role");
    }
}