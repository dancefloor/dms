<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return view('users.index')->with('users', User::all());
    }


    // public function teachers(){
    //     $users = User::where();
    //     return view('users.index')->with('users', $users);
    // }
    
    // public function actives(){
    //     $users = User::where();
    //     return view('users.actives')->with('users', $users);
    // }
    
    // public function passive(){
    //     $users = User::where();
    //     return view('users.passive')->with('users', $users);
    // }
    
    // public function debtors(){
    //     $users = User::where();
    //     return view('users.debtors')->with('users', $users);
    // }

    // public function assistants(){
    //     $users = User::where();
    //     return view('users.assistants')->with('users', $users);
    // }

    public function male(){        
        $users = User::where('gender','male')->paginate(10);        
        return view('users.index')->with('users', $users);
    }

    public function females(){
        $users = User::where('gender','female')->paginate(10); 
        return view('users.index')->with('users', $users);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create')->with('roles',Role::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $user = User::create($this->createUpdateRequest($request));
        
        if ( $request->roles ) {
            $user->roles()->attach($request->roles);
        }
        
        session()->flash('success', 'You have created a new User successfully');
        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit')->with('user', $user)->with('roles',Role::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($this->createUpdateRequest($request));
        //dd($request->roles);
        if ( $request->roles ) {
            $user->roles()->sync($request->roles);
        }

        session()->flash('success', 'User updated successfully');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createUpdateRequest($request)
    {
        return [
            'firstname' => $request->firstname, 
            'lastname' => $request->lastname, 
            'email' => $request->email, 
            // 'password' => $request->password, 
            'password' => Hash::make('password'), 
            
            'birthday' => $request->birthday, 
            'gender' => $request->gender,
            'picture' => $request->picture,    
            
            'mobile' => $request->mobile,
            'phone' => $request->phone,
            'mobile_verified_at' => $request->mobile_verified_at,
            'phone_verified_at' => $request->phone_verified_at,
            
            'profession' => $request->profession,
            'biography' => $request->biography,
            'branch' => $request->branch,
            'how_heard_df' => $request->how_heard_df,
            'work_status' => $request->work_status,
            'price_hour' => $request->price_hour,
            
            'street' => $request->street,
            'street_number' => $request->street_number,
            'address_info' => $request->address_info,
            'postal_code' => $request->postal_code,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'lat' => $request->lat,
            'lng' => $request->lng,
            
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'tiktok' => $request->tiktok,
            'twitter' => $request->twitter,
            'skype' => $request->skype,
            'snapchat' => $request->snapchat,
            'pinterest' => $request->pinterest,
        ];
    }
}
