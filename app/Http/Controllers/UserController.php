<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Role;
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
        $search =request()->query('search');
        if ($search) {
            $users = User::where('firstname','LIKE', "%{$search}%")
                        ->orWhere('lastname','LIKE', "%{$search}%")->paginate(10);
        } else if (request()->gender) {
            if (request()->gender == 'male') {
                $users = User::where('gender','male')->latest()->paginate(10);
            }else{
                $users = User::where('gender','female')->latest()->paginate(10);
            }        
        } else if (request()->role) {
            if (request()->role == 'instructor') {                                
                $users = User::whereHas('roles', function($query){
                    $query->where('slug', 'instructor');
                })->paginate(10);
                //dd($users);
            }else if(request()->role == 'assistant'){
                $users = User::whereHas( 'roles', function($query){
                    $query->where('slug','class-assistant');
                })->latest()->paginate(10); 
            }
        } else {
            $users = User::latest()->paginate(10);
        }
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
        // dd($request->all());
        $user = User::create($this->createUpdateRequest($request));
        
        if ( $request->roles ) {
            $user->roles()->attach($request->roles);
        }

        if ($request->hasFile('picture')) {            
            $user->update(['picture' => $request->picture->store('users') ]);            
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
        // dd($request->all());        
        $user->update($this->createUpdateRequest($request));
        
        if ( $request->roles ) {
            $user->roles()->sync($request->roles);
        }

        if ($request->hasFile('picture')) {            
            // dd('im inside');
            $user->update(['picture' => $request->picture->store('users') ]);            
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
    public function destroy(User $user)
    {
        $user->delete();

        session()->flash('success', 'User deleted successfully');
        return redirect(route('users.index'));
    }

    public function createUpdateRequest($request)
    {
        return [
            'firstname' => $request->firstname, 
            'lastname' => $request->lastname, 
            'email' => $request->email,             
            'password' => Hash::make($request->password), 
            
            'birthday' => $request->birthday, 
            'gender' => $request->gender,            
            
            'mobile' => $request->mobile,
            'phone' => $request->phone,
            'mobile_verified_at' => $request->mobile_verified_at,
            'phone_verified_at' => $request->phone_verified_at,
            
            'profession' => $request->profession,
            'biography' => $request->biography,
            'branch' => $request->branch,
            'aware_of_df' => $request->aware_of_df,
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
