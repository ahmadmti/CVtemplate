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
        li{
            margin-left: 20px;
        }
        /* style */
        h5{
            font-weight: bold;
        }
        .heading{
            text-align: left;
            position: relative;
            color: #103850;
        }
        .heading::after{
            content: '';
            display: block;
            height: 1px;
            background: rgb(168, 168, 168);
            position: absolute;
            right: 0;
            top: 70%;
            z-index: -2;
        }
        #headingPadding{
            padding-top: 20px; padding-bottom: 20px;
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
            <td>
                <center>
                    {{-- Profile Image --}}
                    <img src="{!! !empty($user->profile_photo_url) ? $user->profile_photo_url : 'https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8aHVtYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80'  !!}" style="width: 100px; height: 100px; border-radius: 50px; border: 2px solid white;"/>

                    {{-- Name --}}
                    <h5 style="margin-top: 20px">{!! !empty($user->name) ? $user->name :  ''  !!} {!! !empty($user->surname) ? $user->surname :  ''  !!}</h5>

                    {{-- Profile Title --}}
                    <p>{!! !empty($user->profile_name) ? $user->profile_name :  ''  !!}</p>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    {!! !empty($user->phone_number) ? $user->phone_number :  'No Number Yet'  !!} | {!! !empty($user->email) ? $user->email : 'No Email Yet'  !!} | {!! !empty($user->address) ? ($user->address . ',') :  ''  !!} {!! !empty($user->city) ? ($user->city . ',') :  ''  !!} {!! !empty($user->country) ? ($user->country . ',') :  ''  !!}
                    <hr style="margin-top: 2px">
                </center>
            </td>
        </tr>
        <tr>
            <td>
                {!! !empty($user->profile_description) ? $user->profile_description :  ''  !!}
            </td>
        </tr>
    </table>

    {{-- <table><tr><td><h5 id="headingPadding" class="heading">
            <span>PROF. COMPETENCIES</span>
            <hr style="width: 540px; margin-top: -6px; margin-left: 160px">
    </h5></td></tr></table>

    <table>
        <tr>
            <td style="width: 50%">
                <li>Competencies Competencies</li>
            </td>
            <td>
                <li>Competencies Competencies</li>
            </td>
        </tr>
        <tr>
            <td style="width: 50%">
                <li>Competencies Competencies Competencies Competencies</li>
            </td>
            <td>
                <li>Competencies Competencies Competencies Competencies</li>
            </td>
        </tr>
    </table> --}}

    <table><tr><td><h5 id="headingPadding" class="heading">
        <span>EMPLOYMENT HISTORY</span>
        <hr style="width: 525px; margin-top: -6px; margin-left: 175px">
    </h5></td></tr></table>

    <table>
        @foreach ($user->employments as $employment)
        <tr>
            <td>
                <b>{!! $employment->position  !!}</b> <span style="color: #878787">| {!! $employment->from  !!} – {!! $employment->to  !!}</span>
            </td>
        </tr>
        <tr>
            <td>
                {!! $employment->institute_name  !!} <span style="color: #878787">| {!! $employment->city  !!}, {!! $employment->country  !!}</span>
            </td>
        </tr>
        @endforeach
        <tr>
            <td style="color: #878787">
                @foreach ($user->employments as $employment)
                    @foreach ($employment->employmentResponsibilities as $employment_responsibility)
                         <li>{!! $employment_responsibility->name  !!}</li>
                    @endforeach
                @endforeach
                <br>
                @foreach ($user->employments as $employment)
                    @foreach ($employment->employmentAchievements as $employment_achievement)
                        <li>{!! $employment_achievement->name  !!}</li>
                    @endforeach
                @endforeach
            </td>
        </tr>
    </table>

    <table><tr><td><h5 id="headingPadding" class="heading">
        <span>EDUCATION AND ACADEMICAL ACTIVITY</span>
        <hr style="width: 420px; margin-top: -6px; margin-left: 280px">
    </h5></td></tr></table>

    <table>
        @foreach ($user->educations as $education)
            <tr>
                <td>
                    <b>{!! $education->specialty  !!} ({!! $education->degree  !!})</b> <span style="color: rgb(139, 139, 139)">| {!! $education->from  !!} – Till {!! $education->to  !!}</span>
                </td>
            </tr>
            <tr>
                <td>
                    {!! $education->faculty  !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! $education->institution  !!} 
                    <span style="color: rgb(139, 139, 139)">| 
                        {{-- City, Country --}}
                    </span>
                </td>
            </tr>
        @endforeach
        @foreach ($user->academics as $academic)
        <tr>
            <td style="padding-top: 20px">
                <b>{!! $academic->activity_name  !!}</b> <span style="color: rgb(139, 139, 139)"> | {!! $academic->from  !!} – Till {!! $academic->to  !!}</span>
            </td>
        </tr>
        <tr>
            <td>
                {!! $academic->organization  !!}
                {{-- <span style="color: rgb(139, 139, 139)">| City, Country</span> --}}
            </td>
        </tr>
        @endforeach
    </table>

    <table><tr><td><h5 id="headingPadding" class="heading">
        <span>SKILLLS AND COMPETENCIES</span>
        <hr style="width: 490px; margin-top: -6px; margin-left: 210px">
    </h5></td></tr></table>

    <table>
        @php
            $groupSkills = collect($user->skills)->groupBy('type');
        @endphp
        @foreach ($groupSkills as $key => $groupSkill)
        <tr>
            @foreach ($groupSkill as $skill)
                <td>
                    {!! $skill->name  !!} ({!! $skill->level  !!}) <br> 
                    {{-- ======= --}}
                </td>
            @endforeach
        </tr>
        @endforeach
        {{-- <tr>
            <td colspan="3">
                <li>Features Features Features Features Features Features Features Features</li>
                <li>Features Features Features Features</li>
            </td>
        </tr> --}}
    </table>

    <table><tr><td><h5 id="headingPadding" class="heading">
        <span>REFERENCE</span>
        <hr style="width: 610px; margin-top: -6px; margin-left: 90px">
    </h5></td></tr></table>

    <table>
        @foreach ($user->references as $reference)
            <td>
                {!! $reference->name  !!} {!! $reference->surname  !!}
            </td>
            <td>
                {!! $reference->organization  !!}
            </td>
            <td>
                {!! $reference->position  !!}
            </td>
            <td>
                {!! $reference->phone_number  !!}
            </td>
        @endforeach
    </table>
</div>

<br><br><br>

</body>
</html>
