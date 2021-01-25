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


    <table>
        <tr>
            <td style="width: 30%; padding-right: 10px;">
                {{-- <div style="margin-top: -60px;"> --}}
                    <center>
                        {{-- Profile Image --}}
                        <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8aHVtYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80" style="width: 100px; height: 100px; border-radius: 50px; border: 2px solid white;"/>

                        {{-- Name --}}
                        <h5 style="margin-top: 20px">NAME SURNAME</h5>

                        {{-- Profile Title --}}
                        <p>PROFILE TITLE</p>
                        <p style="margin-top: 30px">
                            55577898741 <br>
                            email@gmail.com <br>
                            <span style="color: rgb(139, 139, 139)">
                                Address, City, Country
                            </span>
                        </p>
                    </center>
                {{-- </div> --}}


                <h5 style="margin-top: 20px">LANGUAGE<hr style="margin-top: 0px"></h5>
                <table style="display: table">
                    <tr><td>
                        English (Nat.) <br>
                        =============
                    </td></tr>
                    <tr><td>
                        German (C2) <br>
                        ==========
                    </td></tr>
                </table>

                <h5 style="margin-top: 20px">OFFICE SOFTWARE<hr style="margin-top: 0px"></h5>
                <table style="display: table">
                    <tr><td>
                        MS Office (Proficient)<br>
                        ==============
                    </td></tr>
                    <tr><td>
                        MS Excel (Advanced)<br>
                        ===========
                    </td></tr>
                </table>


                <h5 style="margin-top: 20px">OTHER SOFTWARE<hr style="margin-top: 0px"></h5>
                <table style="display: table">
                    <tr><td>
                        Adobe Aftereffects (Proficient)<br>
                        ==================
                    </td></tr>
                    <tr><td>
                        CorelDraw (Advanced)<br>
                        ============
                    </td></tr>
                </table>


                <h5 style="margin-top: 20px">REFERENCE<hr style="margin-top: 0px"></h5>
                <table style="display: table">
                    <tr><td>
                        <b>Name Surname</b>
                    </td></tr>
                    <tr><td>
                        Organization Name
                    </td></tr>
                    <tr><td>
                        Position
                    </td></tr>
                    <tr><td>
                        77889987747
                    </td></tr>
                </table>
            </td>


            </td>
            <td style="width: 70%; padding-left: 15px !important; border-left: 1px solid rgb(128, 128, 128) !important;">
                {{-- //Profile text of the printing and typesetting industry. --}}
                <p style="margin-top: 10px">
                    Profile text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </p>



                <h5 style="margin-top: 20px">EDUCATION <hr style="margin-top: 0px"></h5>
                <table>
                    <tr>
                        <td><b>
                            Specialty Name Specialty Specialty Name <br>
                            Specialty Name (Degree)
                        </b></td>
                        <td style="width: 150px; text-align: right; color: rgb(139, 139, 139)">City <br>Country</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Faculty Name Faculty <br>
                            Institution Name Institution Name Institution
                            <span style="color: rgb(139, 139, 139)">| Sept. 2017 – Jun. 2020</span>
                        </td>
                    </tr>
                    <tr>
                        <td><b>
                            Specialty Name Specialty Name (Degree)
                        </b></td>
                        <td style="width: 150px; text-align: right; color: rgb(139, 139, 139)">City <br>Country</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Faculty Name Faculty <br>
                            Institution Name Institution Name
                            <span style="color: rgb(139, 139, 139)">| Sept. 2020 – Till Now</span>
                        </td>
                    </tr>
                </table>


                <h5 style="margin-top: 20px">ACADEMICAL ACTIVITY<hr style="margin-top: 0px"></h5>
                <table>
                    <tr>
                        <td>
                            <b>Activity Name Activity Name</b> <br>
                            Organization Name
                            <span style="color: rgb(139, 139, 139)"> | Oct. 2020 – Nov. 2020</span>
                        </td>
                        <td style="width: 150px; text-align: right; color: rgb(139, 139, 139)">City <br>Country</td>
                    </tr>
                    <tr>
                        <td style="padding-top: 10px">
                            <b>Activity Name Activity Name</b> <br>
                            Organization Name
                            <span style="color: rgb(139, 139, 139)"> | Jan. 2021 – Jan. 2021</span>
                        </td>
                        <td style="width: 150px; text-align: right; color: rgb(139, 139, 139)">City <br>Country</td>
                    </tr>
                </table>

                <h5 style="margin-top: 20px">EMPLOYMENT HISTORY<hr style="margin-top: 0px"></h5>
                <table>
                    <tr>
                        <td><b>Position Position Position Name</b></td>
                        <td rowspan="2" style="width: 150px; text-align: right; color: rgb(139, 139, 139)">City <br>Country</td>
                    </tr>
                    <tr>
                        <td>
                            Organization Name
                            <span style="color: rgb(139, 139, 139)"> | Jan. 2021 – Jan. 2021</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-top: 10px">
                            <li>Responsibilities Responsibilities Responsibilities</li>
                            <li>Responsibilities Responsibilities</li>
                            <li>Responsibilities Responsibilities Responsibilities Responsibilities</li>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-top: 10px">
                            <li>Achievements Achievements</li>
                            <li>Achievements Achievements Achievements Achievements</li>
                            <li>Achievements Achievements Achievements</li>
                        </td>
                    </tr>
                </table>

                <h5 style="margin-top: 20px">FEATURE AND PROF. COMPETENCIES<hr style="margin-top: 0px"></h5>
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
                </table>
            </td>
        </tr>
    </table>

</div>

<br><br><br>
</body>
</html>
