<?php

namespace Modules\Accounts\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Auth;
use Validator;
use Modules\Panels\Entities\Profile;
use Modules\Panels\Entities\EducationalBackground;
use Modules\Panels\Entities\WorkBackground;

use App;
use File;


class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        if(!Auth::check()){
            return redirect('/');
        }
        $data['profile'] = Profile::where('users_id',Auth::user()->id)->first();
        // return dd();
        // $data['profile']['education'] = json_decode($data['profile']['educational_background'], true);
        // $data['profile']['works'] = json_decode($data['profile']['work_background'], true);

        // $data['profile']['education'] = [
        //     0 => [
        //         'year_start' => 1998,
        //         'year_end' => 2004,
        //         'name' => "SDN Bojong Rawalumbu 6"
        //     ],
        //     1 => [
        //         'year_start' => 2004,
        //         'year_end' => 2007,
        //         'name' => "SMPN 16 Bekasi"
        //     ],
        //     2 => [
        //         'year_start' => 2007,
        //         'year_end' => 2010,
        //         'name' => "SMAN 1 Bekasi"
        //     ],
        //     3 => [
        //         'year_start' => 2010,
        //         'year_end' => 2017,
        //         'name' => "Universitas Brawijaya"
        //     ]
        // ];
        // $data['profile']['works'] = [
        //     0 => [
        //         'year_start' => 2010,
        //         'year_end' => 2017,
        //         'company_name' => "Universitas Brawijaya",
        //         'work_type' => "Tipe Kerja"

        //     ],
        //     1 => [
        //         'year_start' => 2011,
        //         'year_end' => 2018,
        //         'company_name' => "Universitas Brawijaya",
        //         'work_type' => "Tipe Kerja"

        //     ],
        //     2 => [
        //         'year_start' => 2012,
        //         'year_end' => 2019,
        //         'company_name' => "Universitas Brawijaya",
        //         'work_type' => "Tipe Kerja"

        //     ]
        //     ];
        // return $data['profile'];
        return view('accounts::index', $data);
    }
    public function indexID()
    {
        if(!Auth::check()){
            return redirect('/');
        }
        App::setLocale('id');
        $data['profile'] = Profile::where('users_id',Auth::user()->id)->first();
        return view('accounts::index',$data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $profile = new Profile;
        $profile->users_id = $user->id;
        $profile->gender = $data['gender'];
        $profile->date_of_birth = $data['date_of_birth'];
        $profile->address = NULL;
        $profile->phone_number = NULL;
        $profile->married = NULL;
        $profile->ktp_number = NULL;
        $profile->educational_background = NULL;
        $profile->work_background = NULL;
        $profile->family_background = NULL;
        $profile->hobbies = NULL;
        $profile->is_in_company = $data['is_in_company'];
        $profile->company_name = $data['company_name'];
        $profile->body_height = NULL;
        $profile->body_weight = NULL;
        $profile->blood_type = NULL;
        $profile->jlpt_score = NULL;
        $profile->epa_score = NULL;
        $profile->nat_score = NULL;
        $profile->is_ever_to_japan = NULL;
        $profile->experience_abroad = NULL;
        $profile->save();
        return view('accounts::create');
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
    public function show()
    {
        return view('accounts::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('accounts::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        
        // return $request->education[0];
        if(!Auth::check()) return redirect('/');

        $uid = Auth::user()->id;
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
    public function destroy()
    {
    }
}
