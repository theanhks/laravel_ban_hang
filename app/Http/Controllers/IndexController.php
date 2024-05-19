<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Services\FrontendService;

class IndexController extends Controller
{
    protected $frontendService;
    public function __construct(FrontendService $frontendService)
    {
        $this->frontendService = $frontendService;
    }

    public function index()
    {
        $productGroupCategory = $this->frontendService->getProductGroupCategory();
        $categoryData = $this->frontendService->getCategory();
        return view('frontend/index',compact('productGroupCategory','categoryData'));
    }

    public function search(Request $request)
    {
        $keyword = $request->get('keyword');
        $productData = $this->frontendService->getProductByKeyWord($keyword);
        return view('frontend/search',compact('productData'));
    }
}
