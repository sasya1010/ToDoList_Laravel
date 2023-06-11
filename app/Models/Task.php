<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
 
    //protected $fillable = ['title_act', 'desc_act', 'deadline', 'status_act', 'id_category '];
    protected $guarded = ['id'];
    protected $with = ['category'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title_act', 'like', '%' . $search . '%')
                 ->orWhere('desc_act', 'like', '%' . $search . '%')
                 ->orWhere('status_act', '=',$search);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
