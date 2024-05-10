<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BaseModel extends Model
{
    protected $guarded = [];

    protected $slugSourceField = 'name'; // Trường sử dụng để tạo slug mặc định
    protected $columnKey = 'id'; // Trường sử dụng để tạo slug mặc định

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->slug) {
                $slugSourceField = $model->getSlugSourceField();
                $baseSlug = Str::slug($model->$slugSourceField);
                $slug = $baseSlug;
                $temp_slug = $slug.'.html';
                $count = 1;

                // Kiểm tra xem slug đã tồn tại hay chưa
                while (static::where('slug', $temp_slug)->exists()) {
                    $slug = $baseSlug . '-' . $count++;
                    $temp_slug = $slug.'.html';
                }

                $model->slug = $slug.'.html';
            }
        });

        static::updating(function ($model) {
            $slugSourceField = $model->getSlugSourceField();
            $baseSlug = Str::slug($model->$slugSourceField);
            $slug = $baseSlug;
            $temp_slug = $slug.'.html';
            $count = 1;
            // Kiểm tra xem slug đã tồn tại hay chưa
            $columnKey = $model->columnKey;
            while (static::where('slug', $temp_slug)->where($columnKey, '<>', $model->$columnKey)->exists()) {
                $slug = $baseSlug . '-' . $count++;
                $temp_slug = $slug.'.html';
            }

            $model->slug = $slug.'.html';
        });
    }

    public function getSlugSourceField()
    {
        return $this->slugSourceField;
    }
}
