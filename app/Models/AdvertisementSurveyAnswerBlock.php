<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementSurveyAnswerBlock extends Model
{
    protected $fillable = [
        'advertisement_survey_question_block_id',
        'answer',
        'status'
    ];

    public function advertisementSurveyQuestionBlock() {
        return $this->belongsTo(AdvertisementSurveyQuestionBlock::class);
    }
}
