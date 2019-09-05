<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Semester;
use App\Module;
use Validator;


class SemesterController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semesters = Semester::all();


        return $this->sendResponse($semesters->toArray(), 'Semesters retrieved successfully.');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();


         $validator = Validator::make($input, [
            'name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'year' => 'required'
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $semester = Semester::create($input);


        return $this->sendResponse($semester->toArray(), 'Semester created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $semester = Semester::find($id);


        if (is_null($semester)) {
            return $this->sendError('Semester not found.');
        }


        return $this->sendResponse($semester->toArray(), 'Semester retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Semester $semester)
    {
        $input = $request->all();


        $validator = Validator::make($input, [
            'name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'year' => 'required'
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $semester->name = $input['name'];
        $semester->start_date = $input['start_date'];
        $semester->end_date = $input['end_date'];
        $semester->year = $input['year'];
        $semester->save();


        return $this->sendResponse($semester->toArray(), 'Semester updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semester $semester)
    {
        $semester->delete();


        return $this->sendResponse($semester->toArray(), 'Semester deleted successfully.');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function modules($id)
    {
        $modules = Module::whereHas('semesters', function ($query) use ($id) {
                        $query->where('semester_id', $id);
                    })->get();

        if ($modules->count() == 0) {
            return $this->sendError('Semester not found.');
        }

        return $this->sendResponse($modules->toArray(), 'Modules retrieved successfully.');
    }
}