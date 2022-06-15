<?php

namespace App\Models\Admins\VideosonDemand;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admins\Webinar\CategoryEvent;

class VideosOnDemand extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'video_title',
        'video_description',
        'video_link',
        'post_add_video',
        'presented_by',
        'status',
        'category_id',
        'sponser_id'
    ];

    public function category(){
        return $this->belongsTo(CategoryEvent::class, 'category_id');
    }

    
}
