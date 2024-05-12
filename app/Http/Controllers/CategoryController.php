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

class CategoryController extends Controller
{
    protected $frontendService;
    public function __construct(FrontendService $frontendService)
    {
        $this->frontendService = $frontendService;
    }

    public function index($slug = '')
    {
        $category = $this->frontendService->getCategoryBySlug($slug);

        if(!$category){
            return redirect()->route('index');
        }
        $productData = $this->frontendService->getProductByCategoryId($category->category_id);
        return view('frontend.category.index',compact('category','productData'));
    }
}
