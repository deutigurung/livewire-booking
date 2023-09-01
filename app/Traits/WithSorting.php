<?php 
namespace App\Traits;

trait WithSorting{
    public $sortBy = 'id'; //sorting index ie name,email,id
    public $orderBy = 'asc'; // ascending or descending

    public function sortBy($value){
        $this->orderBy = $this->sortBy === $value ? $this->reserveSort() : 'asc';
        $this->sortBy = $value;
    }

    public function reserveSort(){
        return $this->orderBy === 'asc' ? 'desc' : 'asc';
    }
}