<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStyleRequest;
use App\Http\Requests\UpdateStyleRequest;
use App\Repositories\StyleRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Style;
use Illuminate\Http\Request;
use Response;
use App\Exports\StylesExport;
use Maatwebsite\Excel\Facades\Excel;

class StyleController extends AppBaseController
{
    /** @var  StyleRepository */
    private $styleRepository;

    public function __construct(StyleRepository $styleRepo)
    {
        $this->styleRepository = $styleRepo;
    }

    /**
     * Display a listing of the Style.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $search = request()->query('search');
        if ($search) {            
            $styles = Style::search($search)->paginate(10);
            // $styles = Style::where('name', 'LIKE', "%{$search}%")->paginate(10);
        } else if( request()->family == 'cuban-salsa' ) {
            $styles = Style::cubanSalsa()->paginate(10);
        } else if( request()->family == 'line-salsa' ) {
            $styles = Style::lineSalsa()->paginate(10);
        } else if( request()->family == 'urban' ) {
            $styles = Style::urban()->paginate(10);
        } else if( request()->family == 'sensual' ) {
            $styles = Style::sensual()->paginate(10);
        } else if( request()->family == 'sport' ) {
            $styles = Style::sport()->paginate(10);
        } else if( request()->family == 'fusion' ) {
            $styles = Style::sport()->paginate(10);
        } else {
            $styles = Style::latest()->paginate(10);
        }

        return view('styles.index')->with('styles', $styles);
    }

    /**
     * Show the form for creating a new Style.
     *
     * @return Response
     */
    public function create()
    {
        return view('styles.create');
    }

    /**
     * Store a newly created Style in storage.
     *
     * @param CreateStyleRequest $request
     *
     * @return Response
     */
    public function store(CreateStyleRequest $request)
    {                
        // dd($request->all());
        $style = Style::create([
            'name'          => $request->name,
            'description'   => $request->description,
            'slug'          => $request->slug,
            'icon'          => $request->icon,
            'image'         => $request->image,
            'music'         => $request->music,
            'family'        => $request->family,
            'color'         => $request->color,
            'origin'        => $request->origin, 
            'music'         => $request->music,
            'year'          => $request->year,
        ]);

        if ($request->hasFile('image')) {
            $style->update(['image' => $request->image->store('styles') ]);            
        }

        session()->flash('success', 'Style added successfully');

        return redirect(route('styles.index'));
    }

    /**
     * Display the specified Style.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $style = $this->styleRepository->find($id);

        if (empty($style)) {
            session()->flash('error', 'Style not found');            

            return redirect(route('styles.index'));
        }

        return view('styles.show')->with('style', $style);
    }

    /**
     * Show the form for editing the specified Style.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $style = $this->styleRepository->find($id);

        if (empty($style)) {
            session()->flash('error', 'Style not found');                

            return redirect(route('styles.index'));
        }

        return view('styles.edit')->with('style', $style);
    }

    /**
     * Update the specified Style in storage.
     *
     * @param int $id
     * @param UpdateStyleRequest $request
     *
     * @return Response
     */
    public function update(Style $style, UpdateStyleRequest $request)
    {    
        //dd($request->all());
        if (empty($style)) {            
            session()->flash('error', 'Style not found');    
            return redirect(route('styles.index'));
        }

        $style->update([
            'name'          => $request->name,
            'description'   => $request->description,
            'slug'          => $request->slug,
            'icon'          => $request->icon,            
            'music'         => $request->music,
            'family'        => $request->family,
            'color'         => $request->color,
            'origin'        => $request->origin, 
            'music'         => $request->music,
            'year'          => $request->year,
        ]);

        if ($request->hasFile('image')) {
            $style->update(['image' => $request->image->store('styles') ]);            
        }

        session()->flash('success','Style updated successfully.');

        return redirect(route('styles.index'));
    }

    /**
     * Remove the specified Style from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy(Style $style)
    {
        //$style = $this->styleRepository->find($id);

        if (empty($style)) {            
            session()->flash('error', 'Style not found');    

            return redirect(route('styles.index'));
        }

        //$this->styleRepository->delete($id);
        $style->delete();

        session()->flash('success','Style deleted successfully.');

        return redirect(route('styles.index'));
    }

    public function export() 
    {             
        return Excel::download(new StylesExport, 'styles.xlsx');
    }
}
