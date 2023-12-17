<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getType()
    {
        if($this->type == 1)
            return __('comment.proof-ownership');
        else if($this->type == 2)
            return __('comment.report-incorrect');
    }
}
