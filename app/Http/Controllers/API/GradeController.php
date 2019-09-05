<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Course;
use Validator;
use App\Http\Resources\CourseResource;

class GradeController extends BaseController
{
  
      /**
     * Show the profile for the given user.
     *
     * @param  Request $request
     * @return json
     */

    public function __invoke(Request $request)
    {
        $courses = Course::where('semester_id',$request->semester)
                            ->where('module_id',$request->module)
                            ->with(['module', 'semester','student'])->get();


        return $this->sendResponse(CourseResource::collection($courses), 'Courses retrieved successfully.');
    }

 
}