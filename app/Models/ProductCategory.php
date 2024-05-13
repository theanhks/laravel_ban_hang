<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends BaseModel
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'category_id';
    protected $fillable = [
        'category_name',
        'slug',
        'image',
        'is_show',
        'is_show_left_menu',
        'is_show_home',
        'position',
        'parent'
    ];
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->slugSourceField = 'category_name'; // Chỉ định trường dùng để tạo slug
        $this->columnKey = 'category_id'; // Chỉ định trường để loại trừ khi update
    }

}
