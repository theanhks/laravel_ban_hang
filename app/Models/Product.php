<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'price',
        'product_code',
        'is_show',
        'quantity',
        'description',
        'content',
        'image',
        'position',
        'is_show_left_menu',
        'is_featured'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
//        $this->slugSourceField = 'category_name'; // Chỉ định trường dùng để tạo slug
//        $this->columnKey = 'category_id'; // Chỉ định trường để loại trừ khi update
    }
}
