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
    </style>
</head>
<body>
<div class="container-fluid">
    <table>
        <tr>
            <td>
                <center>
                    {{-- Profile Image --}}
                    <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8aHVtYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80" style="width: 100px; height: 100px; border-radius: 50px; border: 2px solid white;"/>

                    {{-- Name --}}
                    <h5 style="margin-top: 20px">NAME SURNAME</h5>

                    {{-- Profile Title --}}
                    <p>PROFILE TITLE</p>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    55577898741 | email@gmail.com | Address, City, Country
                    <hr style="margin-top: 2px">
                </center>
            </td>
        </tr>
        <tr>
            <td>
                Profile text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.padding: 10px 20px 10px 10px;
            </td>
        </tr>
    </table>

    <table><tr><td><h5 id="headingPadding" class="heading">
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
    </table>

    <table><tr><td><h5 id="headingPadding" class="heading">
        <span>EMPLOYMENT HOSTORY</span>
        <hr style="width: 525px; margin-top: -6px; margin-left: 175px">
    </h5></td></tr></table>

    <table>
        <tr>
            <td>
                <b>Position Position Position Name</b> <span style="color: #878787">| Feb. 2020 – Oct. 2020</span>
            </td>
        </tr>
        <tr>
            <td>
                Organization Name <span style="color: #878787">| City, Country</span>
            </td>
        </tr>
        <tr>
            <td style="color: #878787">
                <li>Responsibilities Responsibilities Responsibilities, Responsibilities Responsibilities Responsibilities</li>
                <li>Responsibilities Responsibilities Responsibilities, Responsibilities </li>
                <br>
                <li> Achievements Achievements, Achievements Achievements Achievements</li>
                <li>Achievements Achievements Achievements Achievements</li>
            </td>
        </tr>
    </table>

    <table><tr><td><h5 id="headingPadding" class="heading">
        <span>EDUCATION AND ACADEMICAL ACTIVITY</span>
        <hr style="width: 420px; margin-top: -6px; margin-left: 280px">
    </h5></td></tr></table>

    <table>
        <tr>
            <td>
                <b>Specialty Name Specialty Specialty Name Specialty Name (Degree)</b> <span style="color: #878787">| Feb. 2020 – Till Now</span>
            </td>
        </tr>
        <tr>
            <td>
                Faculty Name Faculty
            </td>
        </tr>
        <tr>
            <td>
                Institution Name Institution Name Institution Name <span style="color: #878787">| City, Country</span>
            </td>
        </tr>
        <tr>
            <td style="padding-top: 20px">
                <b>Activity Name Activity Name</b> <span style="color: #878787"> | Feb. 2020 – Till Now</span>
            </td>
        </tr>
        <tr>
            <td>
                Organization Name <span style="color: #878787">| City, Country</span>
            </td>
        </tr>
    </table>

    <table><tr><td><h5 id="headingPadding" class="heading">
        <span>SKILLLS AND COMPETENCIES</span>
        <hr style="width: 490px; margin-top: -6px; margin-left: 210px">
    </h5></td></tr></table>

    <table>
        <tr>
            <td>English (Nat.) <br> =======</td>
            <td>German (C2)<br> =======</td>
            <td>French (C2) <br> =======</td>
        </tr>
        <tr>
            <td>MS Office (Proficient) <br> =======</td>
            <td>MS Excel (Advanced)<br> =======</td>
            <td>MS PowerPoint (Advanced) <br> =======</td>
        </tr>
        <tr>
            <td>Adobe Photoshop (Proficient) <br> =======</td>
            <td>Oris Accounting (Advanced)<br> =======</td>
            <td>Corel (Advanced) <br> =======</td>
        </tr>
        <tr>
            <td colspan="3">
                <li>Features Features Features Features Features Features Features Features</li>
                <li>Features Features Features Features</li>
            </td>
        </tr>
    </table>

    <table><tr><td><h5 id="headingPadding" class="heading">
        <span>REFERENCE</span>
        <hr style="width: 610px; margin-top: -6px; margin-left: 90px">
    </h5></td></tr></table>

    <table>
        <tr>
            <td>Name Surname</td>
            <td>Organization Name</td>
            <td>Position</td>
            <td>77889987747</td>
        </tr>
    </table>
</div>

<br><br><br>

</body>
</html>
