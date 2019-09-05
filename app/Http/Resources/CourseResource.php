<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
           return [
            'id' => $this->id,
            'grade' => $this->grade,
            'student' => is_null($this->student) ? "" : $this->student->user->name,
            'studentId' => is_null($this->student) ? "" : $this->student->identifier,
            'module' => is_null($this->module) ? "" : $this->module->name,
            'semester' => is_null($this->semester) ? "" : $this->semester->name,

        ];
    }
}
