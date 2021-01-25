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

    </style>
</head>
<body>
<div class="container-fluid">

    <table style="margin-top: 20px">
        <tr>
            <td style="width: 75%">
                {{-- //Profile text of the printing and typesetting industry. --}}
                <p>
                    <br>
                    Profile text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<hr style="margin-top: -10px">
                </p>

                {{-- Phone No., & Email --}}
                <p>55577898741 &nbsp;&nbsp;&nbsp; <span>xyz@gmail.com</span></p>

                {{-- Address City, Country --}}
                <p style="color: rgb(139, 139, 139)">Address, City, Country</p>
            </td>
            <td style="width: 25%">
                {{-- <div style="margin-top: -60px;"> --}}
                    <center>
                        {{-- Profile Image --}}
                        <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8aHVtYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80" style="width: 100px; height: 100px; border-radius: 50px; border: 2px solid white;"/>

                        {{-- Name --}}
                        <h5 style="margin-top: 20px">NAME SURNAME</h5>

                        {{-- Profile Title --}}
                        <p>PROFILE TITLE</p>
                    </center>
                {{-- </div> --}}
            </td>
        </tr>
    </table>

    <br><br>

    <h5>Education<hr style="margin-top: 0px"></h5>

    <table>
        {{-- 1st table row --}}
        <tr>
            <td style="width: 170px">
                <p style="color: rgb(139, 139, 139)">
                    2017 - Till Now
                </p>
            </td>
            <td>
                <p>
                    <b>Specialty Name Specialty Specialty Name Specialty Name (Degree)</b>
                    <br>
                    Faculty Name Faculty Institution Name Institution Name Institution Name
                </p>
            </td>
            <td style="width: 170px">
                <p style="text-align: right;">City <br> Country</p>
            </td>
        </tr>
        {{-- 1st table row --}}
        <tr>
            <td>
                <p style="color: rgb(139, 139, 139)">
                    2017 - Till Now
                </p>
            </td>
            <td>
                <p>
                    <b>Specialty Name Specialty Specialty Name Specialty Name (Degree)</b>
                    <br>
                    Faculty Name Faculty Institution Name Institution Name Institution Name
                </p>
            </td>
            <td>
                <p style="text-align: right;">City <br> Country</p>
            </td>
        </tr>
    </table>


    {{-- ACADEMICAL ACTIVITY --}}
    <br><br>
    <h5>ACADEMICAL ACTIVITY<hr style="margin-top: 0px"></h5>

    <table>
        {{-- 1st table row --}}
        <tr>
            <td style="width: 170px">
                <p style="color: rgb(139, 139, 139)">
                    Oct. 2020 – May. 2021
                </p>
            </td>
            <td>
                <p>
                    <b>Activity Name Activity Name</b>
                    <br>
                    Organization Name
                </p>
            </td>
            <td style="width: 170px">
                <p style="text-align: right;">City <br> Country</p>
            </td>
        </tr>

    </table>


    {{-- EMPLOYMENT HISTORY --}}
    <br><br>
    <h5>EMPLOYMENT HISTORY<hr style="margin-top: 0px"></h5>

    <table>
        {{-- 1st table row --}}
        <tr>
            <td style="width: 170px">
                <p style="color: rgb(139, 139, 139)">
                    2020 - 2021
                </p>
            </td>
            <td>
                <p>
                    <b>Position Position Position Name</b>
                    <br>
                    Organization Name
                </p>
            </td>
            <td style="width: 170px">
                <p style="text-align: right;">City <br> Country</p>
            </td>
        </tr>

        {{-- Second table row --}}
        <tr>
            <td>
                <p style="color: rgb(139, 139, 139)">
                    2016 - 2019
                </p>
            </td>
            <td>
                <p>
                    <b>Position Position Position Name</b>
                    <br>
                    Organization Name
                </p>
            </td>
            <td>
                <p style="text-align: right;">City <br> Country</p>
            </td>
        </tr>

        {{-- third table row --}}
        <tr>
            <td>
                <p style="color: rgb(139, 139, 139)">
                    Responsibilities
                </p>
            </td>
            <td>
                <p>
                    <li>Responsibilities Responsibilities Responsibilities</li>
                    <li>Responsibilities Responsibilities </li>
                    <li>Responsibilities Responsibilities Responsibilities Responsibilities</li>
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
                    <li>Achievements Achievements Achievements</li>
                    <li>Achievements Achievements </li>
                    <li>Achievements Achievements Achievements Achievements</li>
                </p>
            </td>
            <td>

            </td>
        </tr>
    </table>


    {{-- SKILLLS AND COMPETENCIES --}}
    <br><br>
    <h5>SKILLLS AND COMPETENCIES<hr style="margin-top: 0px"></h5>

    <table>
        {{-- 1st table row --}}
        <tr>
            <td style="width: 170px">
                <p style="color: rgb(139, 139, 139)">
                    Languages
                </p>
            </td>
            <td>
                <p>
                    <li>Language 1</li>
                    <li>Language 2</li>
                    <li>Language 3</li>
                </p>
            </td>
            <td>
                <p>Native <br>C2 Proficient <br>B2 Up. Intermediate</p>
            </td>
            <td style="width: 170px">
                <p style="text-align: right;">============ <br>============ <br>============</p>
            </td>
        </tr>
        {{-- 2dn row --}}
        <tr>
            <td>
                <p style="color: rgb(139, 139, 139)">
                    Office Software
                </p>
            </td>
            <td>
                <p>
                    <li>MS Word</li>
                    <li>MS Excel</li>
                    <li>PowerPoint</li>
                </p>
            </td>
            <td>
                <p>Proficient <br>Advanced <br>Intermediate</p>
            </td>
            <td>
                <p style="text-align: right;">============ <br>============ <br>============</p>
            </td>
        </tr>
        {{-- 3rd row --}}
        <tr>
            <td>
                <p style="color: rgb(139, 139, 139)">
                    Other Software
                </p>
            </td>
            <td>
                <p>
                    <li>Adobe Aftereffects</li>
                    <li>Adobe Photoshop</li>
                    <li>CorelDraw</li>
                </p>
            </td>
            <td>
                <p>Proficient <br>Advanced <br>Intermediate</p>
            </td>
            <td>
                <p style="text-align: right;">============ <br>============ <br>============</p>
            </td>
        </tr>
        {{-- 3rd row --}}
        <tr>
            <td>
                <p style="color: rgb(139, 139, 139)">
                    Features
                </p>
            </td>
            <td colspan="3">
                <p>
                    <li>Feature Feature</li>
                    <li>Feature Feature Feature Feature</li>
                    <li>Feature Feature Feature Feature Feature Feature</li>
                </p>
            </td>
        </tr>
        {{-- 4th row --}}
        <tr>
            <td>
                <p style="color: rgb(139, 139, 139)">
                    Prof. Competencies
                </p>
            </td>
            <td colspan="3">
                <p>
                    <li>Competencies Competencies</li>
                    <li>Competencies Competencies Competencies Competencies</li>
                    <li>Competencies Competencies Competencies</li>
                </p>
            </td>
        </tr>
    </table>


    {{-- REFERENCE --}}
    <br><br>
    <h5>REFERENCE<hr style="margin-top: 0px"></h5>

    <table>
        {{-- 1st table row --}}
        <tr>
            <td style="width: 170px">
                <p style="color: rgb(139, 139, 139)">
                    Name
                </p>
            </td>
            <td>
                <p>
                    <b>Name Surname</b>
                </p>
            </td>
        </tr>
        {{-- 2st table row --}}
        <tr>
            <td>
                <p style="color: rgb(139, 139, 139)">
                    Organization Name
                </p>
            </td>
            <td>
                <p>
                    Organization Name
                </p>
            </td>
        </tr>
        {{-- 3rd table row --}}
        <tr>
            <td>
                <p style="color: rgb(139, 139, 139)">
                    Position
                </p>
            </td>
            <td>
                <p>
                    Position
                </p>
            </td>
        </tr>
        {{-- 4rd table row --}}
        <tr>
            <td>
                <p style="color: rgb(139, 139, 139)">
                    Numb
                </p>
            </td>
            <td>
                <p>
                    77889987747
                </p>
            </td>
        </tr>
        {{-- 5th table row --}}
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
        {{-- 1st table row --}}
        <tr>
            <td style="width: 170px">
                <p style="color: rgb(139, 139, 139)">
                    Name
                </p>
            </td>
            <td>
                <p>
                    <b>Name Surname</b>
                </p>
            </td>
        </tr>
        {{-- 2st table row --}}
        <tr>
            <td>
                <p style="color: rgb(139, 139, 139)">
                    Organization Name
                </p>
            </td>
            <td>
                <p>
                    Organization Name
                </p>
            </td>
        </tr>
        {{-- 3rd table row --}}
        <tr>
            <td>
                <p style="color: rgb(139, 139, 139)">
                    Position
                </p>
            </td>
            <td>
                <p>
                    Position
                </p>
            </td>
        </tr>
        {{-- 4rd table row --}}
        <tr>
            <td>
                <p style="color: rgb(139, 139, 139)">
                    Numb
                </p>
            </td>
            <td>
                <p>
                    77889987747
                </p>
            </td>
        </tr>
    </table>


    <br><br>
    <h3>PORTFOLIO</h3>
    <br><br>

    {{-- PROJECT NAME --}}
    <br><br>
    <h5>PROJECT NAME<hr style="margin-top: 0px"></h5>
    <table>
        <tr>
            <td style="width: 400px">
                <span style="color: rgb(139, 139, 139)">City, Country <br>
                Month 2020</span> <br>
                gocv.ge <br><br>
                Project description of the printing and typesetting industry. Lorem Ipsum has been the industry's dummy ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </td>
            <td>
                <img src="https://images.unsplash.com/photo-1517433456452-f9633a875f6f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80" width="300px" style="padding: 5px">
            </td>
        </tr>
    </table>

    {{-- PROJECT NAME --}}
    <br><br>
    <h5>PROJECT NAME<hr style="margin-top: 0px"></h5>
    <table>
        <tr>
            <td style="width: 400px">
                <span style="color: rgb(139, 139, 139)">City, Country <br>
                Month 2020</span> <br>
                gocv.ge <br><br>
                Project description of the printing and typesetting industry. Lorem Ipsum has been the industry's dummy ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </td>
            <td>
                <img src="https://images.unsplash.com/photo-1517433456452-f9633a875f6f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80" width="300px" style="padding: 5px">
            </td>
        </tr>
    </table>

    {{-- PROJECT NAME --}}
    <br><br>
    <h5>PROJECT NAME<hr style="margin-top: 0px"></h5>
    <table>
        <tr>
            <td style="width: 400px">
                <span style="color: rgb(139, 139, 139)">City, Country <br>
                Month 2020</span> <br>
                gocv.ge <br><br>
                Project description of the printing and typesetting industry. Lorem Ipsum has been the industry's dummy ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </td>
            <td>
                <img src="https://images.unsplash.com/photo-1517433456452-f9633a875f6f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80" width="300px" style="padding: 5px">
            </td>
        </tr>
    </table>

    {{-- PROJECT NAME --}}
    <br><br>
    <h5>PROJECT NAME<hr style="margin-top: 0px"></h5>
    <table>
        <tr>
            <td style="width: 400px">
                <span style="color: rgb(139, 139, 139)">City, Country <br>
                Month 2020</span> <br>
                gocv.ge <br><br>
                Project description of the printing and typesetting industry. Lorem Ipsum has been the industry's dummy ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </td>
            <td>
                <img src="https://images.unsplash.com/photo-1517433456452-f9633a875f6f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80" width="300px" style="padding: 5px">
            </td>
        </tr>
    </table>

    <br><br>
    <h3>MOTIVATION LETTER</h3>
    <br><br>

    <p><b>Letter Recipient</b></p>
<p style="color: rgb(139, 139, 139)">Company Name <br>Position </p>
<br><br><br><br><br><b><b></b></b>
<hr>
<p>
    Letter text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Profile text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Profile text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
</p>


<table style="margin-top: 100px">
<tr>
    <td style="width: 300px"><b>Name Surname</b></td>
    <td rowspan="2">Address</td>
</tr>
<tr>
    <td>January 2021</td>
</tr>
</table>


</div>

<br><br><br>
</body>
</html>
