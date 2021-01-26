<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <style>
        div {
            /* border: 1px solid #ff0000; */
            padding: 5px;
        }
        table, th, tr{
            width: 100%;
            /* border: 2px solid rgb(4, 0, 255); */
        }
        td{
            /* border: 2px solid rgb(4, 0, 255); */
            vertical-align: top;
            padding: 2px 0px 2px 0px;
        }
        *{
            font-size: 13px;
        }
        h5{
            font-weight: bold;
        }
        li{
            margin-left: 20px;
        }

        @font-face {
            font-family: 'Firefly';
            font-style: normal;
            font-weight: normal;
            src: url("../../public/fonts/firefly/Firefly Regular.ttf") format('truetype');
        }
        *{
            font-family: firefly, DejaVu Sans, sans-serif;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
    <table>
        <tr>
            <td style="width: 30%; padding-right: 10px;">
                {{-- <div style="margin-top: -60px;"> --}}
                    <center>
                        {{-- Profile Image --}}
                        <img src="{!! !empty($user->profile_photo_url) ? $user->profile_photo_url : 'https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8aHVtYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80'  !!}" style="width: 100px; height: 100px; border-radius: 50px; border: 2px solid white;"/>
                        {{-- Name --}}
                        <h5 style="margin-top: 20px">{!! !empty($user->name) ? $user->name :  ''  !!} {!! !empty($user->surname) ? $user->surname :  ''  !!}</h5>

                        {{-- Profile Title --}}
                        <p>{!! !empty($user->profile_name) ? $user->profile_name :  ''  !!}</p>
                            {!! !empty($user->phone_number) ? $user->phone_number :  'No Number Yet'  !!} <br>
                            email@gmail.com <br>
                            <span style="color: rgb(139, 139, 139)">
                                {!! !empty($user->address) ? ($user->address . ',') :  ''  !!} {!! !empty($user->city) ? ($user->city . ',') :  ''  !!} {!! !empty($user->country) ? ($user->country . ',') :  ''  !!}
                            </span>
                        </p>
                    </center>
                {{-- </div> --}}
                <table>
                    <tr>
                        <td>
                            <p style="margin-top: 40px;">
                                {!! !empty($user->profile_description) ? $user->profile_description :  ''  !!}
                            </p>
                        </td>
                    </tr>
                </table>

                <h5 style="margin-top: 40px">EDUCATION<hr style="margin-top: 0px"></h5>
                <table>
                    @foreach ($user->educations as $education)
                    <tr>
                        <td>
                            <b>{!! $education->specialty  !!} ({!! $education->degree  !!})</b>
                        </td>
                    </tr>
                    <tr>
                        <td>{!! $education->faculty  !!}</td>
                    </tr>
                    <tr>
                        <td>{!! $education->institution  !!}</td>
                    </tr>
                    <tr>
                        <td style="color: rgb(139, 139, 139)">
                            {!! $education->from  !!} – Till {!! $education->to  !!}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </td>
            <td style="width: 70%; padding-left: 15px !important; border-left: 1px solid gray !important;">
                {{-- //Profile text of the printing and typesetting industry. --}}

                <h5 style="margin-top: 40px">EMPLOYMENT HISTORY<hr style="margin-top: 0px"></h5>
                <table>
                    
                    @foreach ($user->employments as $employment)
                    <tr>
                        <td><b>{!! $employment->position  !!}</b></td>
                        <td rowspan="2" style="width: 150px; text-align: right; color: rgb(139, 139, 139)">{!! $employment->city  !!} <br>{!! $employment->country  !!}</td>
                    </tr>
                    <tr>
                        <td>
                            {!! $employment->institute_name  !!}
                            <span style="color: rgb(139, 139, 139)"> | {!! $employment->from  !!} – {!! $employment->to  !!}</span>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2" style="padding-top: 10px">
                            @foreach ($user->employments as $employment)
                                @foreach ($employment->employmentResponsibilities as $employment_responsibility)
                                    <li>{!! $employment_responsibility->name  !!}</li>
                                @endforeach
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-top: 10px">
                            @foreach ($user->employments as $employment)
                                @foreach ($employment->employmentAchievements as $employment_achievement)
                                    <li>{!! $employment_achievement->name  !!}</li>
                                @endforeach
                            @endforeach
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td style="width: 30%; padding-right: 10px;">
                <h5 style="margin-top: 40px">ACADEMICAL ACTIVITY<hr style="margin-top: 0px"></h5>
                <table>
                    @foreach ($user->academics as $academic)
                    <tr>
                        <td><b>{!! $academic->activity_name  !!}</b></td>
                    </tr>
                    <tr>
                        <td>{!! $academic->organization  !!}</td>
                    </tr>
                    <tr>
                        <td style="color: rgb(139, 139, 139)">{!! $academic->from  !!} – {!! $academic->to  !!}</td>
                    </tr>
                    @endforeach
                </table>
                <h5 style="margin-top: 40px">REFERENCE<hr style="margin-top: 0px"></h5>
                <table>
                    @foreach ($user->references as $reference)
                    <tr>
                        <td>
                            <b>{!! $reference->name  !!} {!! $reference->surname  !!}</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {!! $reference->organization  !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {!! $reference->position  !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {!! $reference->phone_number  !!}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </td>
            
            @php
                $groupSkills = collect($user->skills)->groupBy('type');
            @endphp
            <td style="width: 70%; padding-left: 15px !important; border-left: 1px solid gray !important;">
                <h5 style="margin-top: 40px">SKILLLS AND COMPETENCIES<hr style="margin-top: 0px"></h5>
                <table>
                    @foreach ($groupSkills as $key => $groupSkill)
                        @foreach ($groupSkill as $skill)
                        <tr>
                            <td>
                                <li>{!! $skill->name  !!} ({!! $skill->level  !!})</li>
                                <td style="width: 150px; text-align: right">
                                    {{-- =========== --}}
                                </td>
                            </td>
                        </tr>
                        @endforeach
                    @endforeach
                    {{-- <tr>
                        <td colspan="2">
                            <li>Feature Feature</li>
                            <li>Feature Feature Feature Feature</li>
                            <li>Feature Feature Feature Feature Feature Feature</li>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <li>Competencies Competencies</li>
                            <li>Competencies Competencies Competencies Competencies</li>
                            <li>Competencies Competencies Competencies</li>
                        </td>
                    </tr> --}}
                </table>
            </td>
        </tr>
    </table>





</body>
</html>
