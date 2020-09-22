<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLocationRequest;
use App\Http\Requests\UpdateLocationRequest;
use App\Repositories\LocationRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Location;
use Illuminate\Http\Request;
use Response;

class LocationController extends AppBaseController
{
    /** @var  LocationRepository */
    private $locationRepository;

    public function __construct(LocationRepository $locationRepo)
    {
        $this->locationRepository = $locationRepo;
    }

    /**
     * Display a listing of the Location.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $locations = Location::latest()->paginate(5);
        // $locations = $this->locationRepository->all();

        return view('locations.index')
            ->with('locations', $locations);
    }

    /**
     * Show the form for creating a new Location.
     *
     * @return Response
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created Location in storage.
     *
     * @param CreateLocationRequest $request
     *
     * @return Response
     */
    public function store(CreateLocationRequest $request)
    {        
        $location = Location::create([
            'name'          => $request->name,            
            'shortname'     => $request->shortname,
            'address'       => $request->address,
            'address_info'  => $request->address_info,
            'postal_code'   => $request->postal_code,
            'city'          => $request->city,
            'neighborhood'  => $request->neighborhood,
            'state'         => $request->state,
            'country'       => $request->country,
            'contact'       => $request->contact,
            'email'         => $request->email,
            'phone'         => $request->phone,            
            'video'         => $request->video,
            'entry_code'    => $request->entry_code,
            'comments'      => $request->comments,
            'google_maps'   => $request->google_maps,
            'google_maps_shortlink' => $request->google_maps_shortlink,
            'public_transportation' => $request->public_transportation,  
        ]);

        if ($request->hasFile('contract')) {
            $location->update(['contract' => $request->contract->store('locations')]);               
        }

        session()->flash('success','Location saved successfully.');

        return redirect(route('locations.index'));
    }

    /**
     * Display the specified Location.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $location = $this->locationRepository->find($id);

        if (empty($location)) {
            // Flash::error('Location not found');

            return redirect(route('locations.index'));
        }

        return view('locations.show')->with('location', $location);
    }

    /**
     * Show the form for editing the specified Location.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $location = $this->locationRepository->find($id);

        if (empty($location)) {
            Flash::error('Location not found');

            return redirect(route('locations.index'));
        }

        return view('locations.edit')->with('location', $location);
    }

    /**
     * Update the specified Location in storage.
     *
     * @param int $id
     * @param UpdateLocationRequest $request
     *
     * @return Response
     */
    public function update(Location $location, UpdateLocationRequest $request)
    {
        if (empty($location)) {            
            session()->flash('error','Location not found');
            return redirect(route('locations.index'));
        }

        $location->update([
            'name'          => $request->name,            
            'shortname'     => $request->shortname,
            'address'       => $request->address,
            'address_info'  => $request->address_info,
            'postal_code'   => $request->postal_code,
            'city'          => $request->city,
            'neighborhood'  => $request->neighborhood,
            'state'         => $request->state,
            'country'       => $request->country,
            'contact'       => $request->contact,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'contract'      => $request->contract,
            'video'         => $request->video,
            'entry_code'    => $request->entry_code,
            'comments'      => $request->comments,
            'google_maps'   => $request->google_maps,
            'google_maps_shortlink' => $request->google_maps_shortlink,
            'public_transportation' => $request->public_transportation,  
        ]);

        if ($request->hasFile('contract')) {
            $location->update(['contract' => $request->contract->store('locations')]);               
        }

        session()->flash('success','Location updated successfully.');

        return redirect(route('locations.index'));
    }

    /**
     * Remove the specified Location from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy(Location $location)
    {
            
        if (empty($location)) {            
            session()->flash('error','Location not found');
            return redirect(route('locations.index'));
        }

        $location->delete();

        session()->flash('success','Location deleted successfully.');

        return redirect(route('locations.index'));
    }
}

