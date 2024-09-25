<?php

namespace Modules\Panels\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Panels\Entities\Profile;
use App\User;
use Auth;

class PanelsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        if(!Auth::check()) return redirect('/');
        if(!Auth::user()->hasAnyRole(['superadmin','admin'])) return redirect('/');

        $data['users'] = Profile::where('users_id', '!=', 1)->where('users_id', '!=', 2)->get();
        // if(count($data['users'])) return $data['users'];
        $data['users'] = $data['users']->map(function($item,$key){
            $_user = User::find($item->users_id);
            $item->email = $_user->email;
            $item->id = $_user->id;
            
            $item->photo = $item->photo ? "<img class='img-fluid' src='/avatars/".$item->photo."'/>" : "-";
            $item->gender = $item->gender != NULL ? ($item->gender == 1 ? "Pria" : "Wanita") : "-";
            $item->date_of_birth = $item->date_of_birth != NULL ? $item->date_of_birth : "-";
            $item->is_in_company = $item->is_in_company != NULL ? "Sudah terdaftar" : "Belum terdaftar";
            $item->company_name = $item->company_name != NULL ? $item->company_name : "-";

            $item->actions = "<a href=".route('panels.users.show',['id'=>$item->id])." class='btn btn-primary'>"."<i class='material-icons'>remove_red_eye</i>"."</a>";
            $item->actions .= "<a href=".route('panels.users.edit',['id'=>$item->id])." class='btn btn-secondary'>"."<i class='material-icons'>edit</i>"."</a>";
            $item->actions .= "<button data-type='delete-button' data-id=".$item->id." data-url=".route('panels.users.destroy',['id'=>$item->id])." class='btn btn-danger'>"."<i class='material-icons'>delete</i>"."</button>";
            
            return $item;
        });
        
        return view('panels::index', $data);
    }

    public function users_in()
    {
        if(!Auth::check()) return redirect('/');
        if(!Auth::user()->hasAnyRole(['superadmin','admin'])) return redirect('/');

        // $data['users'] = Profile::all(
        //     'users_id',
        //     'gender',
        //     'date_of_birth',
        //     'is_in_company',
        //     'company_name'
        // )->except(Auth::id());
        $data['users'] = Profile::where('users_id', '!=', Auth::id())->get();

        $data['users'] = $data['users']->map(function($item,$key){
            $_user = User::find($item->users_id);
            $item->email = $_user->email;
            $item->id = $_user->id;
            $item->gender = $item->gender != NULL ? ($item->gender == 1 ? "Man" : "Woman") : "-";
            $item->date_of_birth = $item->date_of_birth != NULL ? $item->date_of_birth : "-";
            $item->is_in_company = $item->is_in_company != NULL ? $item->is_in_company : "-";
            $item->company_name = $item->company_name != NULL ? $item->company_name : "-";
            $item->actions = 
                "<button class='btn btn-primary'><i class='material-icons'>remove_red_eye</i></button>"
                ."<button class='btn btn-primary'><i class='material-icons'>remove_red_eye</i></button>"
                ."<button class='btn btn-primary'><i class='material-icons'>remove_red_eye</i></button>";
            return $item;
        });

        
        $data['users_in_company'] = $data['users']->filter(function($item,$key){
            return $item->is_in_company != "-";
        })->values();
        $data['users_not_in_company'] = $data['users']->filter(function($item,$key){
            return $item->is_in_company == "-";
        })->values();
        return view('panels::profiles_in_company', $data);

    }

    public function users_not_in()
    {
        if(!Auth::check()) return redirect('/');
        if(!Auth::user()->hasAnyRole(['superadmin','admin'])) return redirect('/');

        // $data['users'] = Profile::all(
        //     'users_id',
        //     'gender',
        //     'date_of_birth',
        //     'is_in_company',
        //     'company_name'
        // )->except(Auth::id());
        $data['users'] = Profile::where('users_id', '!=', Auth::id())->get();

        $data['users'] = $data['users']->map(function($item,$key){
            $_user = User::find($item->users_id);
            $item->email = $_user->email;
            $item->id = $_user->id;
            $item->gender = $item->gender != NULL ? ($item->gender == 1 ? "Man" : "Woman") : "-";
            $item->date_of_birth = $item->date_of_birth != NULL ? $item->date_of_birth : "-";
            $item->is_in_company = $item->is_in_company != NULL ? $item->is_in_company : "-";
            $item->company_name = $item->company_name != NULL ? $item->company_name : "-";
            $item->actions = "<button class='btn btn-primary'>"."<i class='material-icons'>remove_red_eye</i>"."</button>";

            return $item;
        });

        
        $data['users_in_company'] = $data['users']->filter(function($item,$key){
            return $item->is_in_company != "-";
        })->values();
        $data['users_not_in_company'] = $data['users']->filter(function($item,$key){
            return $item->is_in_company == "-";
        })->values();
        return view('panels::profiles_not_in_company', $data);
    }

    public function user_show($uid)
    {
        if(!Auth::check()) return redirect('/');
        if(!Auth::user()->hasAnyRole(['superadmin','admin'])) return redirect('/');

        $data['profile'] = Profile::where('users_id',$uid)->first();
        $data['profile']['educational_background'] = json_decode($data['profile']['educational_background'], true);
        $data['profile']['work_background'] = json_decode($data['profile']['work_background'], true);

        return view('panels::profile.show', $data);

    }
    public function user_edit($uid)
    {
        if(!Auth::check()) return redirect('/');
        if(!Auth::user()->hasAnyRole(['superadmin','admin'])) return redirect('/');

        $data['profile'] = Profile::where('users_id',$uid)->first();
        $data['profile']['educational_background'] = json_decode($data['profile']['educational_background'], true);
        $data['profile']['work_background'] = json_decode($data['profile']['work_background'], true);

        return view('panels::profile.edit', $data);
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
    public function show()
    {
        return view('panels::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('panels::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
