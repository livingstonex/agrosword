<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $with = ['project'];
    protected $guarded = [];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function roi()
    {
        return $this->number_of_stock * $this->project->amount_per_stock*($this->project->interest_rate+100)/100;
    }
}
