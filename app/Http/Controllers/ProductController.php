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

class ProductController extends Controller
{
    protected $frontendService;
    public function __construct(FrontendService $frontendService)
    {
        $this->frontendService = $frontendService;
    }

    public function index($slug = '')
    {
        $product = $this->frontendService->getProductBySlug($slug);
        if(!$product){
            return redirect()->route('index');
        }
        $productRelated = $this->frontendService->getProductByCategoryId($product->category_id);
        return view('frontend.product.index',compact('product','productRelated'));
    }
}
