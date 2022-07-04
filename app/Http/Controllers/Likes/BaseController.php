<?php

namespace App\Http\Controllers\Likes;

use App\Http\Controllers\Controller;
use App\Services\Likes\Service;

class BaseController extends Controller
{
public $service;

public function __construct(Service $service)
{
    $this->service = $service;
}
}
