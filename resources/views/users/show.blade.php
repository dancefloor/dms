@extends('layouts.back')

@section('content')
<section class="bg-gray-800 pt-10 pb-24">
    <br>
</section>
<div class="max-w-3xl mx-auto -mt-24 bg-white rounded-lg shadow">
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="flex items-center border-b border-gray-200 py-3">
            <img src="{{ asset($user->avatar) }}" alt="{{ $user->firstname }}" class="h-20 w-20 rounded-full mx-3">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ $user->firstname }}'s Information
                </h3>
                <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                    Personal details.
                </p>
            </div>
        </div>
        <div>
            <dl>
                <div class="bg-gray-100 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Full name
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->firstname }} {{ $user->lastname }}
                    </dd>
                </div>

                <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Email
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->email }}
                    </dd>
                </div>

                <div class="bg-gray-100 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Mobile
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->mobile }}
                        @if ($user->mobile_verified_at)
                        (verified at: {{ $user->mobile_verified_at }})
                        @endif
                    </dd>
                </div>

                <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Phone
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->phone }}
                        @if ($user->phone_verified_at)
                        (verified at: {{ $user->phone_verified_at }})
                        @endif
                    </dd>
                </div>

                <div class="bg-gray-100 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Birthday
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->birthday }}
                    </dd>
                </div>

                <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Gender
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->gender }}
                    </dd>
                </div>


                <div class="bg-gray-100 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Work Status
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->work_status }}
                    </dd>
                </div>


                <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Profession
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->profession }}
                    </dd>
                </div>

                <div class="bg-gray-100 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Professional Branch
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->branch }}
                    </dd>
                </div>


                <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Heard of dancefloor
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->how_heard_df }}
                    </dd>
                </div>

                @if ($user->price_hour)
                <div class="bg-gray-100 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Price hour
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->price_hour }}
                    </dd>
                </div>
                @endif


                <div class="bg-gray-100 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        About
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->biography }}
                    </dd>
                </div>

                <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Address
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->street }} {{ $user->street_number }} <br>
                        @if ( $user->address_info )
                        {{ $user->address_info }} <br>
                        @endif
                        {{ $user->postal_code }} {{ $user->city }} <br>
                        {{ $user->state }} {{ $user->country }}
                    </dd>
                </div>

                {{-- Social --}}

                <h3 class="text-gray-700 uppercase text-sm px-6 py-1 font-semibold">Social</h3>
                <div class="bg-gray-100 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Facebook
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->facebook }}
                    </dd>
                </div>

                <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Linkedin
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->linkedin }}
                    </dd>
                </div>

                <div class="bg-gray-100 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Instagram
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->instagram }}
                    </dd>
                </div>

                <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Youtube
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->youtube }}
                    </dd>
                </div>

                <div class="bg-gray-100 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Tiktok
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->tiktok }}
                    </dd>
                </div>

                <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Twitter
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->twitter }}
                    </dd>
                </div>

                <div class="bg-gray-100 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Skype
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->skype }}
                    </dd>
                </div>

                <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Snapchat
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->snapchat }}
                    </dd>
                </div>

                <div class="bg-gray-100 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Pinterest
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->pinterest }}
                    </dd>
                </div>

                <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Roles & Permissions
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                        @if ($user->roles->count() > 0)
                        <ul class="border border-gray-200 rounded-md">
                            @foreach ($user->roles as $role)
                            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                                <div class="w-0 flex-1 flex items-center text-gray-700">
                                    @include('icons.user-access')
                                    <span class="ml-2 flex-1 w-0 truncate">
                                        {{$role->name}}
                                    </span>
                                </div>
                                <div class="ml-4 flex-shrink-0">
                                    <a href="#"
                                        class="font-medium text-red-700 hover:text-red-800 transition duration-150 ease-in-out">
                                        details
                                    </a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>

<div class="max-w-3xl mx-auto">
    <div class="flex justify-between my-5">
        <div>
            <a href="{{ route('users.index') }}"
                class="bg-gray-300 hover:bg-gray-400 py-2 px-4 rounded-lg mr-2 inline-flex text-gray-800">
                @include('icons.chevron-left', ['style' => 'w-4 mr-2'])
                Back
            </a>
        </div>
        <div class="inline-flex">
            <a href="{{ route('users.edit', $user) }}" class="bg-gray-300 hover:bg-gray-400 py-2 px-4 rounded-lg mr-2">
                Edit User
            </a>
            <form action="{{ route('users.destroy', $user) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="bg-red-700 hover:bg-red-800 py-2 px-4 rounded-lg text-white">Delete</button>
            </form>
        </div>
    </div>
</div>


@endsection