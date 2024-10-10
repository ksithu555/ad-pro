<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementSurveyQuestionBlock extends Model
{
    protected $fillable = [
        'advertisement_survey_block_id',
        'question',
        'status'
    ];

    public function advertisementSurveyBlock() {
        return $this->belongsTo(AdvertisementSurveyBlock::class);
    }

    public function advertisementSurveyAnswerBlocks() {
        return $this->hasMany(AdvertisementSurveyAnswerBlock::class);
    }
}
