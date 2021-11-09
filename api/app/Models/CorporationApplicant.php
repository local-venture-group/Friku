<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 use App\Models\CorporationApplicantschedule;
 use App\Models\User;
use Illuminate\Support\Str;

class CorporationApplicant extends Model
{
    use HasFactory;

    protected $connection = 'ats';
    protected $table = 'corporation_applicant';
    public $timestamps = false;
    public function corporationApplicantSchedules()
    {
        return $this->hasMany(CorporationApplicantschedule::class, 'applicant_id');
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
    //申し込み者情報を返す。
    public function getApplicant(User $user)
    {
        if($this->where('user_id', $user->id)){
            $applicant = $this::with('CorporationApplicantschedules')
                ->where('user_id', $user->id);
        } else {
            //初めての申し込みの場合、申込み者データを作成する。
            $applicantCollection = collect($user);
            $applicantCollection['user_id'] = $applicantCollection['id'];
            $applicantCollection->forget('id');
            $applicantCollection->forget('created_at');
            $applicantCollection->forget('modified_at');
            $applicantCollection['is_registered'] = true;
            $applicantCollection['applied_at'] = date('Y/m/d H:i:s');
            $applicantCollection['temp_id'] = Str::uuid()->toString();
            $applicant = $this::create($applicantCollection->toArray());
        }
        return $applicant;


    }
}
