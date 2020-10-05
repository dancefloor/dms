<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class StudentsPerCourseExport implements FromQuery, WithHeadings, WithMapping
{
    use Exportable;

    public function __construct(int $cid)
    {
        $this->cid = $cid;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Registration::query()->where('course_id', $this->cid);
    }

    public function map($registration): array
    {
        return [
            $registration->id,
            $registration->status,
            $registration->course_id,
            $registration->course->name,
            $registration->user_id,
            $registration->user->firstname .' '. $registration->user->lastname,
            $registration->user->email,
            $registration->role,
            $registration->option,
            $registration->order_id,
            $registration->created_at,                        
        ];
    }
    
    public function headings(): array
    {
        return [
            'id',
            'status',
            'course id',
            'course name',
            'user id',
            'user name',
            'email',
            'role',
            'option',
            'order_id',
            'created_at',
        ];
    }
}

