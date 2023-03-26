<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'master_teams';
    protected $casts = ['join_date'=>'datetime'];

    // public function scopeFilter($query, array $filters)
    // {
    //     $query->when($filters['from'] ?? false, function ($query, $from) {
    //         return $query->where('reimbesement_date', '>=', $from);
    //     });

    //     $query->when($filters['to'] ?? false, function ($query, $to) {
    //         return $query->where('reimbesement_date', '<=', $to);
    //     });
    // }

    // public function outlets(){
    //     return $this->hasMany(ReimbesementOutlet::class,'reimbesement_id', 'id');
    // }
}
