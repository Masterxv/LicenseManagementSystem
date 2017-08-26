<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{   
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projects';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'proj_name', 'proj_url', 'description','start_date','end_date','client_id'
    ];
}
