<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\backend\BranchModel;
use App\Models\backend\ProductModel;
class stock extends Model
{
    use HasFactory;

    public function br(){
        return $this->belongsTo(BranchModel::class, 'br_id');
    }
    public function pr(){
        return $this->belongsTo(ProductModel::class, 'pmodel');
    }
}
