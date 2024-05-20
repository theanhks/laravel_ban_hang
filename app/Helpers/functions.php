<?php
use App\Services\FrontendService;
if (!function_exists('getCategory')) {
    function getCategory()
    {
        $service = app(\App\Services\FrontendService::class);
        $category = $service->getCategory();
        return $category;
    }

}

if (!function_exists('getCategoryLeftMenu')) {
    function getCategoryLeftMenu()
    {
        $service = app(\App\Services\FrontendService::class);
        $category = $service->getCategoryLeftMenu();
        return $category;
    }
}

if (!function_exists('getParentCategoryLeftMenu')) {
    function getParentCategoryLeftMenu()
    {
        $service = app(\App\Services\FrontendService::class);
        $category = $service->getParentCategoryLeftMenu();
        return $category;
    }
}

if (!function_exists('getCategoryByParentId')) {
    function getCategoryByParentId($parent_id = -1)
    {
        $service = app(\App\Services\FrontendService::class);
        $category = $service->getCategoryByParentId($parent_id);
        return $category;
    }
}

if (!function_exists('getProductLeftMenu')) {
    function getProductLeftMenu()
    {
        $service = app(\App\Services\FrontendService::class);
        $product = $service->getProductLeftMenu();
        return $product;
    }
}

if (!function_exists('cart_total')) {
    function cart_total()
    {
        $cart = session()->get('cart', []);
        return count($cart);
    }

}
