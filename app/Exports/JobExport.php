<?php

namespace App\Exports;

use App\Models\Todolistnew;
// use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromArray;


class JobExport implements WithColumnFormatting, WithHeadings, FromArray
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Todolistnew::where('to_do_list_status', '>=', '0')->select("to_do_list_datetime", "to_do_list_target_days", "to_do_list_title", "to_do_list_priority", "to_do_list_reciepent", "to_do_list_status")->get();
    // }


    public function array(): array
    {
        $arr = [];
        $status = '';
        $receipent = '';
        $status_var = '';

        if($this->id == 'open') {
            $status_var = '0';
        } elseif($this->id == 'in-progress') {
            $status_var = "In Progress";
        } elseif($this->id == 'delay') {
            $status_var = "Delay";
        } else {
            $status_var = "1";
        }

        if($this->id == '') 
        {
            $datas = Todolistnew::where('to_do_list_status', '>=', '0')->select("to_do_list_datetime", "to_do_list_target_days", "to_do_list_title", "to_do_list_priority", "to_do_list_reciepent", "to_do_list_status", "proj_number", "to_do_list_image")->get();
        } 
        else 
        {
            $datas = Todolistnew::where('to_do_list_status', '=', $status_var)->select("to_do_list_datetime", "to_do_list_target_days", "to_do_list_title", "to_do_list_priority", "to_do_list_reciepent", "to_do_list_status", "proj_number", "to_do_list_image")->get();
        }

        foreach($datas as $data)
        {
            if($data->to_do_list_status == '0') {
                $status = "Open";
            } elseif($data->to_do_list_status == 'In Progress') {
                $status = "In-Progress";
            } elseif($data->to_do_list_status == 'Delay') {
                $status = "Delay";
            } else {
                $status = "Completed";
            }

            // Receipent
            $receipent = explode('|', $data->to_do_list_reciepent);

            $arr[] = [
                date('F j, Y', strtotime($data->to_do_list_datetime)),
                date('F j, Y', strtotime($data->to_do_list_target_days)),
                $data->proj_number,
                $data->to_do_list_title,
                $data->to_do_list_image,
                $data->to_do_list_priority,
                $receipent[0],
                $status,
            ];
        }

        return $arr;
    }

    public function headings(): array
    {
        return [
            'Start',
            'End',
            'Project No.',
            'Project',
            'Attachments',
            'Priority',
            'Reciepents',
            'Status'
        ];
    }

    public function columnFormats(): array
    {
        return [
            'A' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'B' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
}
