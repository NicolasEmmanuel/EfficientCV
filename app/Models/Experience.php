<?php

namespace App\Models;

use App\Models\Company;
use App\Models\Profile;
use App\Models\JobTitle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;

    public function profile(): BelongsTo{

        return $this->belongsTo(Profile::class);

    }

    public function jobTitle(): BelongsTo{

        return $this->belongsTo(JobTitle::class);

    }
    
    public function company(): BelongsTo{

        return $this->belongsTo(Company::class);

    }
}
