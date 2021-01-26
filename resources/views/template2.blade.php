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
<div class="container-fluid">


    <table>
        <tr>
            <td style="width: 30%; padding-right: 10px;">
                {{-- <div style="margin-top: -60px;"> --}}
                    <center>
                        {{-- Profile Image --}}
                        <img src="{!! !empty($user->profile_photo_url) ? $user->profile_photo_url :  'https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8aHVtYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80'  !!}" style="width: 100px; height: 100px; border-radius: 50px; border: 2px solid white;"/>

                        {{-- Name --}}
                        <h5 style="margin-top: 20px">{!! !empty($user->name) ? $user->name :  ''  !!} {!! !empty($user->surname) ? $user->surname :  ''  !!}</h5>

                        {{-- Profile Title --}}
                        <p>{!! !empty($user->profile_name) ? $user->profile_name :  ''  !!}</p>
                        <p style="margin-top: 30px">
                            {!! !empty($user->phone_number) ? $user->phone_number :  'No Number Yet'  !!} <br>
                            {!! !empty($user->email) ? $user->email : 'No Email Yet'  !!} <br>
                            <span style="color: rgb(139, 139, 139)">
                                {!! !empty($user->address) ? ($user->address . ',') :  ''  !!} {!! !empty($user->city) ? ($user->city . ',') :  ''  !!} {!! !empty($user->country) ? ($user->country . ',') :  ''  !!}
                            </span>
                        </p>
                    </center>
                {{-- </div> --}}


                @php
                    $groupSkills = collect($user->skills)->groupBy('type');
                @endphp

                @foreach ($groupSkills as $key => $groupSkill)
                    <h5 style="margin-top: 20px">{!! str_replace('_', " ", $key)  !!}<hr style="margin-top: 0px"></h5>
                    <table style="display: table">
                        <tr>
                            @foreach ($groupSkill as $skill)
                                <td>
                                    {!! $skill->name  !!} ({!! $skill->level  !!}) <br>
                                    {{-- ============= --}}
                                </td>
                            @endforeach
                        </tr>
                    </table>
                @endforeach


                <h5 style="margin-top: 20px">REFERENCE<hr style="margin-top: 0px"></h5>
                <table style="display: table">
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


            </td>
            <td style="width: 70%; padding-left: 15px !important; border-left: 1px solid rgb(128, 128, 128) !important;">
                {{-- //Profile text of the printing and typesetting industry. --}}
                <p style="margin-top: 10px">
                    {!! !empty($user->profile_description) ? $user->profile_description :  ''  !!}
                </p>



                <h5 style="margin-top: 20px">EDUCATION <hr style="margin-top: 0px"></h5>
                @foreach ($user->educations as $education)
                <table>
                    <tr>
                        <td><b>
                            {!! $education->specialty  !!} <br>
                            {!! $education->specialty  !!} ({!! $education->degree  !!})
                        </b></td>
                        {{-- <td style="width: 150px; text-align: right; color: rgb(139, 139, 139)">City <br>Country</td> --}}
                    </tr>
                    <tr>
                        <td colspan="2">
                            {!! $education->faculty  !!} <br>
                            {!! $education->institution  !!}
                            <span style="color: rgb(139, 139, 139)">| {!! $education->from  !!} – {!! $education->to  !!}</span>
                        </td>
                    </tr>
                    @endforeach
                </table>


                <h5 style="margin-top: 20px">ACADEMICAL ACTIVITY<hr style="margin-top: 0px"></h5>
                <table>
                    @foreach ($user->academics as $academic)
                    <tr>
                        <td>
                            <b>{!! $academic->activity_name  !!}</b> <br>
                            {!! $academic->organization  !!}
                            <span style="color: rgb(139, 139, 139)"> | {!! $academic->from  !!} – {!! $academic->to  !!}</span>
                        </td>
                        {{-- <td style="width: 150px; text-align: right; color: rgb(139, 139, 139)">City <br>Country</td> --}}
                    </tr>
                    @endforeach
                </table>

                <h5 style="margin-top: 20px">EMPLOYMENT HISTORY<hr style="margin-top: 0px"></h5>
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

                {{-- <h5 style="margin-top: 20px">FEATURE AND PROF. COMPETENCIES<hr style="margin-top: 0px"></h5>
                <table>
                    <tr>
                        <td colspan="2">
                            <li>Feature Feature</li>
                            <li>Feature Feature Feature Feature</li>
                            <li>Feature Feature Feature Feature Feature Feature</li>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-top: 10px">
                            <li>Competencies Competencies</li>
                            <li>Competencies Competencies Competencies Competencies</li>
                            <li>Competencies Competencies Competencies</li>
                        </td>
                    </tr>
                </table> --}}
            </td>
        </tr>
    </table>

</div>

<br><br><br>
</body>
</html>
