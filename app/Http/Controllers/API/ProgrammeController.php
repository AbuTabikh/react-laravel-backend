<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Programme;
use App\Module;
use Validator;


class ProgrammeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmes = Programme::all();


        return $this->sendResponse($programmes->toArray(), 'Programmes retrieved successfully.');
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


        $programme = Programme::create($input);


        return $this->sendResponse($programme->toArray(), 'Programme created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programme = Programme::find($id);


        if (is_null($programme)) {
            return $this->sendError('Programme not found.');
        }


        return $this->sendResponse($programme->toArray(), 'Programme retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programme $programme)
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


        $programme->name = $input['name'];
        $programme->start_date = $input['start_date'];
        $programme->end_date = $input['end_date'];
        $programme->year = $input['year'];
        $programme->save();


        return $this->sendResponse($programme->toArray(), 'Programme updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programme $programme)
    {
        $programme->delete();


        return $this->sendResponse($programme->toArray(), 'Programme deleted successfully.');
    }


 
}