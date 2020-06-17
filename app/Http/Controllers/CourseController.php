<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Repositories\CourseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Course;
use App\Models\Style;
use App\Role;
use App\User;

class CourseController extends AppBaseController
{
    /** @var  CourseRepository */
    private $courseRepository;

    public function __construct(CourseRepository $courseRepo)
    {
        $this->courseRepository = $courseRepo;
    }

    /**
     * Display a listing of the Course.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $courses = $this->courseRepository->all();
        // $courses = Course::all()->orderBy('','desc');
        $courses = Course::orderBy('created_at','desc')->paginate(10);

        return view('courses.index')
            ->with('courses', $courses);
    }

    /**
     * Show the form for creating a new Course.
     *
     * @return Response
     */
    public function create()
    {
        return view('courses.create')->with('styles', Style::all())->with('teachers', User::all())->with('students', User::all());
    }

    /**
     * Store a newly created Course in storage.
     *
     * @param CreateCourseRequest $request
     *
     * @return Response
     */
    public function store(CreateCourseRequest $request)
    {        

        $course = $this->courseRepository->create(
            $this->saveFieldsRequest($request)
        );

        if ($request->styles) {
            $course->styles()->attach($request->styles);            
        }

        if ($request->teachers) {
            $course->teachers()->attach($request->teachers, ['role'=>'instructor']);            
        }


        if ($request->students) {
            $course->students()->attach($request->students, ['role'=>'student']);            
        }

        if ($request->hasFile('cover_image')) {
            $course->update(['cover_image' => $request->cover_image->store('courses') ]);            
        }

        Flash::success('Course saved successfully.');

        return redirect(route('courses.index'));
    }

    /**
     * Display the specified Course.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $course = $this->courseRepository->find($id);

        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }

        return view('courses.show')->with('course', $course);
    }

    /**
     * Show the form for editing the specified Course.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $course = $this->courseRepository->find($id);

        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }

        return view('courses.edit')->with('course', $course)->with('styles', Style::all())->with('teachers', User::all())->with('students', User::all());;
    }

    /**
     * Update the specified Course in storage.
     *
     * @param int $id
     * @param UpdateCourseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourseRequest $request)
    {
        //dd($request->all());
        $course = $this->courseRepository->find($id);

        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }

        $course = $this->courseRepository->update($this->saveFieldsRequest($request), $id);

        if ($request->styles) {
            $course->styles()->sync($request->styles);            
        }

        if ($request->teachers) {
            $course->teachers()->sync($request->teachers, ['role'=>'instructor']);            
        }

        if ($request->students) {
            //dd($request->students);
            $course->students()->sync($request->students, ['role'=>'student']);            
        }

        Flash::success('Course updated successfully.');

        return redirect(route('courses.index'));
    }

    
    /**
     * Remove the specified Course from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $course = $this->courseRepository->find($id);

        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }

        $this->courseRepository->delete($id);

        Flash::success('Course deleted successfully.');

        return redirect(route('courses.index'));
    }

    public function saveFieldsRequest($request)
    {
        return [
            'name'          => $request->name,
            'description'   => $request->description,
            'excerpt'       => $request->excerpt,
            'tagline'       => $request->tagline,
            
            'start_date'    => $request->start_date,
            'end_date'      => $request->end_date,

            'monday'        => $request->monday,            
            'start_time_mon'=> $request->start_time_mon,
            'end_time_mon'  => $request->end_time_mon,
            
            'tuesday'       => $request->tuesday,                        
            'start_time_tue'=> $request->start_time_tue,
            'end_time_tue'  => $request->end_time_tue,            
            
            'wednesday'     => $request->wednesday,            
            'start_time_wed'=> $request->start_time_wed,
            'end_time_wed'  => $request->end_time_wed,        
            
            'thursday'      => $request->thursday,            
            'start_time_thu'=> $request->start_time_thu,
            'end_time_thu'  => $request->end_time_thu,

            'friday'        => $request->friday,
            'start_time_fri'=> $request->start_time_fri,
            'end_time_fri'  => $request->end_time_fri,            
            
            'saturday'      => $request->saturday,
            'start_time_sat'=> $request->start_time_sat,
            'end_time_sat'  => $request->end_time_sat,            
            
            'sunday'        => $request->sunday,
            'start_time_sun'=> $request->start_time_sun,
            'end_time_sun'  => $request->end_time_sun,
    
            'level'         => $request->level,
            'level_number'  => $request->level_number,
            
            'full_price'    => $request->full_price,
            'reduced_price' => $request->reduced_price,
            'promo_price'   => $request->promo_price,
            
            'teaser_video_1'=> $request->teaser_video_1,
            'teaser_video_2'=> $request->teaser_video_2,
            'teaser_video_3'=> $request->teaser_video_3,
            
            'focus'         => $request->focus,
            'type'          => $request->type,
            'limit'         => $request->limit,
            
            'online_link'   => $request->online_link,
            'online_id'     => $request->online_id,    
            'online_password'=> $request->online_password,
            
            'user_id'       => auth()->user()->id,                
        ];
    }
}
