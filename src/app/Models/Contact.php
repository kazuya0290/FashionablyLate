<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tell1',
        'tell2',
        'tell3',
        'address',
        'building',
        'contact-form',
        'detail'
    ];
    public static $rules = array(
         'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'max:255'],
            'tell1' => ['required', 'max:5'],
            'tell2' => ['required', 'max:5'],
            'tell3' => ['required', 'max:5'],
            'address' => ['required', 'string', 'max:255'],
            'building' => ['string', 'max:255','nullable'],
            'contact-form' => ['required'],
            'detail' => ['required', 'string', 'max:120']
    );

    public function getDetail()
    {
        $txt = 'ID:' . $this->id . '' . $this-> first_name . $this-> last_name . $this-> gender . $this-> email . $this-> tell1 . $this-> tell2 . $this-> tell3 . $this-> address . $this-> building  . $this-> contact-form . $this-> detail;
        return $txt;
    }
    public function admin()
    {
        return $this->hasOne('App\Models\Admin');
    }
    
    public function admins()
    {
        return $this->hasMany('App\Models\Admin');
    }

     public function category()
     {
        return $this->belongsTo(Category::class);
     }
}
