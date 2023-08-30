<?php
namespace App\Traits;

trait ValidForRange{
    public function scopeValidForRange($query, array $range = [])
    {
        return $query->where(function($q) use ($range){
            return $q->where(function($q) use ($range){
                    $q->where('start_date','>=',$range)->where('end_date','<=',$range);
                })
                ->orWhere(function($q) use ($range){
                    $q->whereBetween('start_date',$range)->orWhereBetween('end_date',$range);
                })
                ->orWhere(function($q) use ($range){
                    $q->where('start_date','<=',reset($range))
                    ->where('end_date','>=',reset($range));
                });
        });
    }
} 