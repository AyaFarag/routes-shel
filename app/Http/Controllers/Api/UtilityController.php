<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\City;
use App\Models\Category;
use App\Models\User;
use App\Models\Page;
use App\Models\Setting;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CityResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PageResource;
use App\Http\Resources\ContactResource;


use Auth;

class UtilityController extends Controller
{
    /**
     * Display a listing of the country resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function countries()
    {
        return CountryResource::collection(Country::all());
    }

        /**
     * Display a listing of the city resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cities()
    {
        return CityResource::collection(City::all());
    }

        /**
     * Display a listing of the category resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        return CategoryResource::collection(Category::all());
    }

    public function page($slug){
        $page = Page::where('type',$slug)->first();
        return new PageResource($page);
    }


    public function contacts() {
        return new ContactResource(Setting::first());
    }
}
