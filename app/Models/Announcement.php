<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Announcement;
use Laravel\scout\Searchable;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable=['name','body','distretto','price', 'category_id', 'user_id'];

    public function toSearchableArray(){
        $category =$this->category;
        $array =[
            'id' =>$this-> id,
            'name' =>$this-> name,
            'body' =>$this-> body,
            'price' =>$this-> price,
            'category'=>$category
        ];
         return $array;
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setAccepted($value){
        $this->is_accepted =$value;
        $this->save();
        return true;
    }
    public static function toBeRevisionedCount()
    {
        return Announcement::where('is_accepted', null)->count();
    }
}
