<?php

namespace App\Http\Controllers\Api\User\OwnedMaker;

use App\Http\Controllers\Controller;
use App\Models\CorporationJoboffer;
use App\Models\Favorite;
use App\Models\FrikuJoboffer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritesController extends Controller
{
    public function omFavorites(Request $request, Favorite $favorite)
    {
        //既にfavoritesテーブルにログインユーザーとOM求人の組み合わせが存在していれば、お気に入り求人から削除
        if (Favorite::where('user_id', $request->user_id)->where('corporation_joboffer_id', $request->corporation_joboffer_id)->exists()) {
            $deleteFavorite =  Favorite::where('user_id', $request->user_id)->where('corporation_joboffer_id', $request->corporation_joboffer_id)->first();
            $deleteFavorite->delete();
        }
        $favorite->fill($request->all())->save();
        $favoriteAll = Favorite::where('user_id', $request->user_id)->get();


        return response()->json($favoriteAll, 201);
    }
    public function omUnFavorites(Request $request, Favorite $favorite)
    {
        //既にfavoritesテーブルにログインユーザーとOM求人の組み合わせが存在していれば、お気に入り求人から削除
        if (Favorite::where('user_id', $request->user_id)->where('corporation_joboffer_id', $request->corporation_joboffer_id)->exists()) {
            $deleteFavorite =  Favorite::where('user_id', $request->user_id)->where('corporation_joboffer_id', $request->corporation_joboffer_id)->first();
            $deleteFavorite->delete();
            $favoriteAll = Favorite::where('user_id', $request->user_id)->get();
            return response()->json($favoriteAll, 200);
        }
    }
    public function frikuFavorites(FrikuJoboffer $frikuJoboffer)    //既にfavoritesテ
    {
        $frikuJoboffer->frikuFavorited()->detach(auth()->guard('users')->id());
        $frikuJoboffer->frikuFavorited()->attach(auth()->guard('users')->id());
        $user = User::findOrFail(auth()->guard('users')->id());
        $favoriteAll = $user->frikuFavorites();


        return response()->json($favoriteAll, 201);
    }
    public function frikuUnfavorite(FrikuJoboffer $frikuJoboffer)
    {
        $frikuJoboffer->frikuFavorited()->detach(auth()->guard('users')->id());
        $user = User::findOrFail(auth()->guard('users')->id());
        $favoriteAll = $user->frikuFavorites();
        return response()->json($favoriteAll);
    }
}