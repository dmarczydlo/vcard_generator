<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Person extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image', 'location','phone','email','nick','surname','firstname'
    ];

    public function display()
    {
        if($this->image == '' || $this->image == null)
            $this->image = 'no-image.png';
    }

}
