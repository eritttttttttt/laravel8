<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    // 因為 news 沒有單複數 所以需要自行 overwrite 掉 
    // 預設會直接找他的 複數
    protected $table = 'news';

    // 可寫入
    protected $fillable = ['title', 'date', 'content', 'image_url'];

    // 不可以被寫入
    protected $guarded = ['title'];

}
