<style>
    .table {
        height: 100%;
    }
    .table tr td {
        font-size: 18px;
        font-weight: 600;


    }
    .work {
        background: #f0932b !important;
        color: #000 !important;
        border: 2px solid #000 !important;
    }

    .work-start {
        background: #f9ca24 !important;
        color: #000 !important;
        border: 2px solid #000 !important;
    }

    .no-work {
        background: #eb4d4b !important;
        color: #000 !important;
        border: 2px solid #000 !important;
    }

    .work-finishes {
        background: #6ab04c !important;
        color: #000 !important;
        border: 2px solid #000 !important;
    }

    .delay {
        background: #e84118 !important;
        color: #fff !important;
        border: 4px solid #000 !important;
    }

    .table .flex {
        display: flex;
        height: 100%;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: center;
        justify-content: center;
        align-items: center;
    }
</style>
<div class="row mt-4">
    <div class="col-md-12">
        <h4 class="fw-bold mb-3">Recipients Job Rating</h4>
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>{{ date('D j', strtotime($data[0]->to_do_list_datetime)) }}</th>
                    @foreach($date_range as $date)
                        <th>{{ $date }}</th>
                    @endforeach

                </tr>
            </thead>

            <tbody>
                <tr>
                    <td style="" class="work-start">
                        <div class="flex">Job is posted here on this date, but will only always start the following day to keep it simple. However, the user can start anytime. After they accept the project, but will only have their hours tracked from the <br>{{ date('D j', strtotime($job_rating_progress->datetime)) }}.</div>
                    </td>


                    @foreach($date_range as $date)
                        @php
                        $ex = explode(' ', $date);
                        @endphp
                        @if(date('D j', strtotime($job_rating_completed->datetime)) == $date)
                            <td class="work-finishes">
                                <div class="flex">{{ $company_settings->hours_day_work }} hours <br>(Job Completed.)</div>
                            </td>
                        @elseif($ex[0] == 'Sun')
                            <td class="no-work">
                                <div class="flex">No Work</div>
                            </td>
                        @else
                            <td class="work">
                                <div class="flex">{{ $company_settings->hours_day_work }} hours</div>
                            </td>
                        @endif

                    @endforeach


                    {{--                <td class="work">--}}
                    {{--                    <div class="flex">8 hours</div>--}}
                    {{--                </td>--}}
                    {{--                <td class="work">--}}
                    {{--                    <div class="flex">8 hours</div>--}}
                    {{--                </td>--}}
                    {{--                <td class="no-work">--}}
                    {{--                    <div class="flex">No Work</div>--}}
                    {{--                </td>--}}
                    {{--                <td class="work-finishes">--}}
                    {{--                    <div class="flex">8 hours (Job finishes here.)</div>--}}
                    {{--                </td>--}}

                    {{--                <td class="delay">--}}
                    {{--                    <div class="flex">Delay</div>--}}
                    {{--                </td>--}}

                </tr>
            </tbody>



        </table>
        </div>

        <div class="rating mt-4" style="font-size: 24px;">
            <h4>Time Taken</h4>
            @php 
            $holid = DB::table('job_rating_holidays')->where("company_id", "=", Crypt::decryptString($_COOKIE['UsersCompanyToDoSmarter']))->whereBetween("holidays", [$job_rating_progress->datetime, $job_rating_completed->datetime])->select('id')->get();
            
            $completed_user = count($holid);
            $completed_user = date('Y-m-d', strtotime('-' . $completed_user . ' days' . $job_rating_completed->datetime));
            @endphp

            @if($completed_user < $data[0]->to_do_list_target_days)
                ⭐⭐⭐⭐⭐
            @elseif($data[0]->to_do_list_target_days == $completed_user)
                ⭐⭐⭐⭐
            @elseif(date('Y-m-d', strtotime('+1 day' . $data[0]->to_do_list_target_days)) == $completed_user)
                ⭐⭐⭐
            @else
                ⭐⭐⭐
                

            @endif
        </div>

    </div>
</div>

