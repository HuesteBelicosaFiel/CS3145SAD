<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;
    public $timestamps = false;
    
     public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false) {
            $query->where('id','like', '%'. request('search').'%')
            ->orWhere('emp_id','like', '%'. request('search').'%')
            ->orWhere('sup_id','like', '%'. request('search').'%')
            ->orWhere('item_name','like', '%'. request('search').'%')
            ->orWhere('date_today','like', '%'. request('search').'%')
            ->orWhere('purchase_status','like', '%'. request('search').'%');
        }
    }
}
