<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    private $repository;

    public function __construct(Plan $plan)
    {
        $this->repository = $plan;
    }

    function index() {

        $plans = $this->repository::paginate(10);

        return view('admin.pages.plans.index', ['plans' => $plans]);
    }
}
