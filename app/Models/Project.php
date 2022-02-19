<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable= ['project_title','project_image','project_category_id','project_description','playstore_link','appstore_link','project_tag','banner_title','banner_image','usecase_title','services','availability','why_to_use_description','navigation_description','navigation_image','project_story','project_story_image','project_month','project_team_member','active_user','average_rating','what_next'];
    use HasFactory;

    
    public function category(){

        return $this->belongsTo(ProjectCategory::class, 'project_category_id');

    }
}
