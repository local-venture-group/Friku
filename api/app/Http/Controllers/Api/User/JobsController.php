<?php

namespace App\Http\Controllers\Api\User;

use App\Consts\JobConditionConsts;
use App\Http\Controllers\Controller;
use App\Http\Resources\JobResource;
use App\Job\UseCase\SearchJoboffersUseCase;
use App\Job\UseCase\ShowPickUpJobUseCase;
use App\Models\CorporationJoboffer;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Services\JobService;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    private $limit;

    public function showJoboffer(CorporationJoboffer $corporationJoboffer)
    {

        return collect(new JobResource($corporationJoboffer));
    }
    public function searchJobOffers(Request $request)
    {
        $this->limit = 10;
        //ダイエット
        if(!(empty($request->query() || empty(Auth::guard('users'))))){
            //ここにユーザーの検索条件を保存する処理を書く(メソッドを作り呼び出す)
        }
        $useCase = new SearchJoboffersUseCase();

        $corporationJoboffers = $useCase->handle($request, $this->limit);

        return JobResource::collection($corporationJoboffers)->toJson();
    }
    public function getConditions(JobService $jobService)
    {
        return [
            'city' => $jobService->getJobConditions(),
            'work_type' => JobConditionConsts::WORK_TYPES,
        ];
    }
}
