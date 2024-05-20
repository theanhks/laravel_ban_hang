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

class CartController extends Controller
{
    protected $frontendService;
    public function __construct(FrontendService $frontendService)
    {
        $this->frontendService = $frontendService;
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        $product_ids = [];
        foreach ($cart as $key => $value){
            $product_ids[] = $key;
        }
        $productData = $this->frontendService->getProductByIds($product_ids);
        return view('frontend.card.index',compact('cart','productData'));
    }

    public function add(Request $request)
    {
        $productId = $request->get('product_id');
        $quantity = $request->get('quantity', 1);

        $cart = session()->get('cart', []);

        if(isset($cart[$productId])) {
            $cart[$productId] += $quantity;
        } else {
            $cart[$productId] = $quantity;
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function remove(Request $request)
    {
        $data = $request->all();
        if($data['command'] == 'delete'){
            $productId = $request->get('product_id');
            $cart = session()->get('cart', []);

            if(isset($cart[$productId])) {
                unset($cart[$productId]);
            }

            session()->put('cart', $cart);
        }

        if($data['command'] == 'clear'){
            session()->put('cart', []);
        }

        return redirect()->route('cart.index');
    }

}
