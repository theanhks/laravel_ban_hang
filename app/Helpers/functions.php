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
