<?php

namespace Modules\Panels\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Auth;
use Modules\Panels\Entities\Profile;
use Modules\Panels\Entities\EducationalBackground;
use Modules\Panels\Entities\WorkBackground;

use App\User;
use File;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('panels::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('panels::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($uid)
    {
        if(!Auth::check()) return redirect('/');
        if(!Auth::user()->hasAnyRole(['superadmin','admin'])) return redirect('/');

        $data['profile'] = Profile::where('users_id',$uid)->first();

        return view('panels::profile.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($uid)
    {
        if(!Auth::check()) return redirect('/');
        if(!Auth::user()->hasAnyRole(['superadmin','admin'])) return redirect('/');

        $data['profile'] = Profile::where('users_id',$uid)->first();
        $data['profile']['educational_background'] = json_decode($data['profile']['educational_background'], true);
        $data['profile']['work_background'] = json_decode($data['profile']['work_background'], true);

        return view('panels::profile.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $uid)
    {
        if(!Auth::check()) return redirect('/');
        if(!Auth::user()->hasAnyRole(['super-admin','admin'])) return redirect('/');

        $profile = Profile::where('users_id', $uid)->first();

        if($request->hasFile('avatar')){
            $photoName = '';
            $avatar = Profile::where('users_id',$uid)->first()->photo;
            if(File::exists(public_path('/avatars/').$avatar)) File::delete(public_path('/avatars/').$avatar);
            $photoName = time().'.'.$request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->move(public_path('avatars'), $photoName);
            $profile->update([
                'photo' => $photoName
            ]);
        }
        if($request->avatar_is_removed){
            $avatar = Profile::where('users_id',$uid)->first()->photo;
            if(File::exists(public_path('/avatars/').$avatar)) File::delete(public_path('/avatars/').$avatar);
            $profile->update([
                'photo' => null
            ]);
        }

        if($request->educations){
            // return $request->educations;
            $profile->education_backgrounds()->delete();
            
            foreach (json_decode($request->educations) as $key => $value) {
                # code...
                $eb = new EducationalBackground;
                $eb->level = $value->level;
                $eb->profile_id = $profile->id;
                $eb->start = $value->start;
                $eb->end = $value->end;
                $eb->name = $value->name;
                $eb->save();
            }
            $profile->save();
            
        }
        if($request->works){
            // return $request->works;
            $profile->work_backgrounds()->delete();
            
            foreach (json_decode($request->works) as $key => $value) {
                # code...
                $wb = new WorkBackground;
                $wb->company = $value->company;
                $wb->profile_id = $profile->id;
                $wb->start = $value->start;
                $wb->end = $value->end;
                $wb->work_type = $value->work_type;
                $wb->description = $value->description;
                $wb->save();
            }
            $profile->save();
            
        }
        $profile->jlpt_score = $request->jlpt_score;
        $profile->update(
            $request->only([
                'first_name',
                'last_name',
                'date_of_birth',
                'gender',
                'address',
                'phone_number',
                'ktp_number',
                'married',
                'family_background',
                'hobbies',
                'is_in_company',
                'company_name',
                'body_height',
                'body_weight',
                'blood_type',
                'epa_score',
                'nat_score',
                'is_ever_to_japan',
                'experience_abroad'
            ])
        );
        
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($uid)
    {
        $user = User::find($uid);
        $user->delete();
        return "";
    }
}
