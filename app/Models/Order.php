<?php

namespace App\Models;

use App\Enums\ProductType;
use App\Enums\Service;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasUuid;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getUrlAttribute()
    {
        if ($this->product->type == ProductType::IMAGE) {
            return $this->product->getThumbnailUrl();
        }
//        if ($this->product->type == ProductType::TEXT_TO_IMAGE) {
//            return '';//$this->product->getThumbnailUrl();
//        }

        return url('storage/orders/' . $this->id . '/' . $this->product->path);
    }
}

