<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'slug',
        'excerpt',
        'body',
        'status',
        'file',
        'views_numb',
        'highlight',
        'deleted'
    ];

    public function formattedCreated() {
        $months = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dic'];
        $dt = new DateTime($this->created_at);
        return $dt->format('d')." ". $months[(int)$dt->format('m') - 1] ." ". $dt->format('Y');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }
}
