<?php

namespace App\Models\Samples;

use App\Contracts\Models\Approvable as ApprovableContract;
use App\Traits\Approvable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Traits\HasUserId;
use App\Traits\FormatsDateFields;

class Microscopy extends Model implements ApprovableContract

{
    use LogsActivity, HasUserId, Approvable, FormatsDateFields;

    protected static $logName = 'microscopy';

    protected static $logAttributes = ['*'];
    protected static $logAttributesToIgnore = ['updated_at'];

    protected $fillable = [
        'user_id',
        'patient_id',
        'attending_doctor_id',
        'flat',
        'transient',
        'renal',
        'leukocytes',
        'erythrocytes',
        'resume',
        'changed',
        'cylinders',
        'hyaline',
        'candle',
        'granular',
        'epithelial',
        'leukocyte',
        'erythrocyte',
        'pigment',
        'mucus',
        'salt',
        'bacteria',
        'analisis_date',
    ];

    /**
     * Relation to the patient
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo("App\Models\Patient");
    }


     /**
     * Relation to the attending_doctor (Բուժող բժիշկ)
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function attending_doctor(): BelongsTo
    {
        return $this->belongsTo("App\Models\User");
    }

}
