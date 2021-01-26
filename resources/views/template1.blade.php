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

    <table style="margin-top: 20px">
        <tr>
            <td style="width: 75%">
                {{-- //Profile text of the printing and typesetting industry. --}}
                <p>
                    <br>
                    {!! !empty($user->profile_description) ? $user->profile_description :  ''  !!}<hr style="margin-top: -10px">
                </p>

                {{-- Phone No., & Email --}}
                <p>{!! !empty($user->phone_number) ? $user->phone_number :  'No Number Yet'  !!} &nbsp;&nbsp;&nbsp; <span>{!! !empty($user->email) ? $user->email : 'No Email Yet'  !!}</span></p>

                {{-- Address City, Country --}}
                <p style="color: rgb(139, 139, 139)">{!! !empty($user->address) ? ($user->address . ',') :  ''  !!} {!! !empty($user->city) ? ($user->city . ',') :  ''  !!} {!! !empty($user->country) ? ($user->country . ',') :  ''  !!}</p>
            </td>
            <td style="width: 25%">
                {{-- <div style="margin-top: -60px;"> --}}
                    <center>
                        {{-- Profile Image --}}
                        <img src="{!! !empty($user->profile_photo_url) ? $user->profile_photo_url : 'https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8aHVtYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80'  !!}" style="width: 100px; height: 100px; border-radius: 50px; border: 2px solid white;"/>

                        {{-- Name --}}
                        <h5 style="margin-top: 20px">{!! !empty($user->name) ? $user->name :  ''  !!} {!! !empty($user->surname) ? $user->surname :  ''  !!}</h5>

                        {{-- Profile Title --}}
                        <p>{!! !empty($user->profile_name) ? $user->profile_name :  ''  !!}</p>
                    </center>
                {{-- </div> --}}
            </td>
        </tr>
    </table>

    <br><br>

    <h5>Education<hr style="margin-top: 0px"></h5>

    <table>
        @foreach ($user->educations as $education)
            <tr>
                <td style="width: 170px">
                    <p style="color: rgb(139, 139, 139)">
                        {!! $education->from  !!} - Till {!! $education->to  !!}
                    </p>
                </td>
                <td>
                    <p>
                        <b>{!! $education->specialty  !!} ({!! $education->degree  !!})</b>
                        <br>
                        {!! $education->faculty  !!} {!! $education->institution  !!}
                    </p>
                </td>
                <td style="width: 170px">
                    <p style="text-align: right;">{!! $education->city  !!} <br> {!! $education->country  !!}</p>
                </td>
            </tr>
        @endforeach
    </table>


    {{-- ACADEMICAL ACTIVITY --}}
    <br><br>
    <h5>ACADEMICAL ACTIVITY<hr style="margin-top: 0px"></h5>

    <table>
        @foreach ($user->academics as $academic)
            <tr>
                <td style="width: 170px">
                    <p style="color: rgb(139, 139, 139)">
                        {!! $academic->from  !!} – {!! $academic->to  !!}
                    </p>
                </td>
                <td>
                    <p>
                        <b>{!! $academic->activity_name  !!}</b>
                        <br>
                        {!! $academic->organization  !!}
                    </p>
                </td>
                <td style="width: 170px">
                    <p style="text-align: right;">{!! $academic->city  !!} <br> {!! $academic->country  !!}</p>
                </td>
            </tr>
        @endforeach
    </table>


    {{-- EMPLOYMENT HISTORY --}}
    <br><br>
    <h5>EMPLOYMENT HISTORY<hr style="margin-top: 0px"></h5>

    <table>
        
        @foreach ($user->employments as $employment)
            <tr>
                <td style="width: 170px">
                    <p style="color: rgb(139, 139, 139)">
                        {!! $employment->from  !!} - {!! $employment->to  !!}
                    </p>
                </td>
                <td>
                    <p>
                        <b>{!! $employment->position  !!}</b>
                        <br>
                        {!! $employment->institute_name  !!}
                    </p>
                </td>
                <td style="width: 170px">
                    <p style="text-align: right;">{!! $employment->city  !!} <br> {!! $employment->country  !!}</p>
                </td>
            </tr>
        @endforeach

        {{-- third table row --}}
        
            <tr>
                <td>
                    <p style="color: rgb(139, 139, 139)">
                        Responsibilities
                    </p>
                </td>
                <td>
                    <p>
                        @foreach ($user->employments as $employment)
                            @foreach ($employment->employmentResponsibilities as $employment_responsibility)
                                <li>{!! $employment_responsibility->name  !!}</li>
                            @endforeach
                        @endforeach
                    </p>
                </td>
                <td></td>
            </tr>

        {{-- forth table row --}}
        <tr>
            <td>
                <p style="color: rgb(139, 139, 139)">
                    Achievements
                </p>
            </td>
            <td>
                <p>
                    @foreach ($user->employments as $employment)
                        @foreach ($employment->employmentAchievements as $employment_achievement)
                            <li>{!! $employment_achievement->name  !!}</li>
                        @endforeach
                    @endforeach
                </p>
            </td>
            <td>

            </td>
        </tr>
    </table>


    {{-- SKILLLS AND COMPETENCIES --}}
    <br><br>
    <h5>SKILLLS AND COMPETENCIES<hr style="margin-top: 0px"></h5>

    @php
        $groupSkills = collect($user->skills)->groupBy('type');
    @endphp
    <table>
        @foreach ($groupSkills as $key => $groupSkill)
            <tr>
                <td style="width: 170px">
                    <p style="color: rgb(139, 139, 139)">
                        {!! str_replace('_', " ", $key)  !!}
                    </p>
                </td>
                <td>
                    <p>
                        @foreach ($groupSkill as $skill)
                            <li>{!! $skill->name  !!}</li>
                        @endforeach
                    </p>
                </td>
                <td>
                    <p>
                        @foreach ($groupSkill as $skill)
                            {!! $skill->level  !!} <br>
                        @endforeach
                    </p>
                </td>
                <td style="width: 170px">
                    <p style="text-align: right;">
                        @foreach ($groupSkill as $skill)
                         {{--  ============ <br>  --}}
                        @endforeach
                    </p>
                </td>
            </tr>
        @endforeach
    </table>


    {{-- REFERENCE --}}
    <br><br>
    <h5>REFERENCE<hr style="margin-top: 0px"></h5>

    <table>
        @foreach ($user->references as $reference)
            <tr>
                <td style="width: 170px">
                    <p style="color: rgb(139, 139, 139)">
                        Name
                    </p>
                </td>
                <td>
                    <p>
                        <b>{!! $reference->name  !!} {!! $reference->surname  !!}</b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="color: rgb(139, 139, 139)">
                        Organization Name
                    </p>
                </td>
                <td>
                    <p>
                        {!! $reference->organization  !!}
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="color: rgb(139, 139, 139)">
                        Position
                    </p>
                </td>
                <td>
                    <p>
                        {!! $reference->position  !!}
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="color: rgb(139, 139, 139)">
                        Numb
                    </p>
                </td>
                <td>
                    <p>
                        {!! $reference->phone_number  !!}
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="color: rgb(139, 139, 139)">

                    </p>
                </td>
                <td>
                    <p>

                    </p>
                </td>
            </tr>
        @endforeach
    </table>


    <br><br>
    <h3>PORTFOLIO</h3>
    <br><br>

    {{-- PROJECT NAME --}}
    <br><br>
    <h5>PROJECT NAME<hr style="margin-top: 0px"></h5>
    @foreach ($user->portfolios as $portfolio)
    <table>
        <tr>
            <td style="width: 400px">
                {{--  <span style="color: rgb(139, 139, 139)">City, Country <br>  --}}
                {!! $portfolio->date  !!}</span> <br>
                {!! $portfolio->link  !!} <br><br>
                {!! $portfolio->description  !!}
            </td>
            @if($portfolio->photo)
                <td>
                    <img src="{!! $portfolio->photo  !!}" width="300px" style="padding: 5px">
                </td>
            @endif
        </tr>
    </table>
    <br><br>
    @endforeach

    <br><br>
    <h3>MOTIVATION LETTER</h3>
    <br><br>

    @foreach ($user->letters as $letter)
        <p><b>Letter Recipient</b></p>
        <p style="color: rgb(139, 139, 139)">{!! $letter->company  !!} <br>{!! $letter->position  !!} </p>
        <br><br><br><br><br><b><b></b></b>
        <hr>
        <p>
            {!! $letter->text  !!}
        </p>
    @endforeach

    <table style="margin-top: 100px">
    <tr>
        <td style="width: 300px"><b>{!! $user->name  !!} {!! $user->surname  !!}</b></td>
        <td rowspan="2">{!! $user->address  !!}</td>
    </tr>
    <tr>
        <td>{!! $user->dob  !!}</td>
    </tr>
    </table>


</div>

<br><br><br>
</body>
</html>
