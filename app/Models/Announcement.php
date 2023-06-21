<?php

namespace App\Models;
use App\Models\Image;
use App\Models\Category;
use App\Models\Announcement;
use Laravel\Scout\Searchable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory,Searchable;
    protected $fillable=['name','body','distretto','price' ,'category_id', 'user_id'];
    protected $searchableUsing = 'tntsearch';

    public function toSearchableArray()
    {
        $category = $this->category;
        $array =[
            'id' =>$this-> id,
            'name' =>$this-> name,
            'body' =>$this-> body,
            'price' =>$this-> price,
            'category'=>$category,
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
    
    public function images(){
        return $this->hasMany(Image::class);
    }
}
