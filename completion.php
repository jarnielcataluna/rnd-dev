<?php
if (!isset($_POST)) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<div id="continue-header" class="blue lighten-2">

</div>


<div id="continue-wrapper" class="container">
    <div class="row">
        <div class="col l8 m8 s12 offset-l2 offset-m4">
            <h4 class="completion-text">Thank you for your interest in IBEX Global! </h4>

            <div class="card" id="" style="padding:10px 40px">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input value="" id="name" type="text" class="validate">
                        <label for="name">Full Name</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <input value="" id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <input value="" id="mobile" type="text" class="validate">
                        <label for="mobile">Mobile No.</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <select>
                            <option value="" disabled selected>Select Location</option>
                            <option value="Hanston Building, Ortigas Center">Hanston Building, Ortigas Center
                            </option>
                            <option value="Silver City, Pasig City">Silver City, Pasig City</option>
                            <option value="SM City BF Parañaque ">SM City BF Parañaque</option>
                            <option value="SM Lanang Premier, Davao">SM Lanang Premier, Davao</option>
                        </select>
                        <label>Location Preference</label>
                    </div>
                </div>
            </div>

            <div class="card" id="" style="padding:10px 40px">

                <p class="red-text text-lighten-2">Before we proceed, kindly take time to answer the following
                    questions.</p>

                <div class="row">
                    <form class="col s12">
                        <div class="row">

                            <div class="input-field col s12 m6">
                                <select id="experience" >
                                    <option value="" disabled selected>Select One</option>
                                    <option value="With Experience">With Call Center Experience</option>
                                    <option value="Without Experience">Without Call Center Experience</option>
                                </select>
                                <label>Do you have Call Center Experience?</label>
                            </div>

                            <div class="input-field col s12 m6" id="jobType" >
                                <select>
                                    <option value="" disabled selected>Select One</option>
                                    <option value="Agent">Agent</option>
                                    <option value="Non-Agent">Non-Agent</option>
                                </select>
                                <label>Are you applying for an agent or non-agent position?</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12" id="agentJobs" style="display:none;">
                                <select>
                                    <option value="" disabled selected>Select One</option>
                                    <option value="Inbound CSR/Sales - Telco">Inbound CSR/Sales - Telco</option>
                                    <option value="Inbound CSR/Sales - Satellite TV">Inbound CSR/Sales - Satellite
                                        TV
                                    </option>
                                    <option value="Inbound CSR/Sales - Travel">Inbound CSR/Sales - Travel</option>
                                    <option value="Inbound CSR - Financial">Inbound CSR - Financial</option>
                                    <option value="Service Desk Representative">Service Desk Representative</option>
                                    <option value="Outbound Sales - General">Outbound Sales - General</option>
                                    <option value="Inbound Sales - General">Inbound Sales - General</option>
                                    <option value="Email and/or Back Office Support">Email and/or Back Office
                                        Support
                                    </option>
                                </select>
                                <label>Which Agent Job are you Applying For?</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6 s12 nonagentJobs" id="position_level" style="display:none;">
                                <select id="position">
                                    <option value="" disabled selected>Select One</option>
                                    <option value="Entry">Entry</option>
                                    <option value="Supervisory">Supervisory</option>
                                    <option value="Managerial">Managerial</option>
                                    <option value="Director">Director</option>
                                </select>
                                <label>Which Non-Agent Job are you Applying For?</label>
                            </div>
                            <div class="input-field col m6 s12 nonagentJobs jobSelection" style="display:none;">
                                <div class="jobSelection1">

                                    <select >
                                        <option value="" disabled selected>Select Entry Level Job</option>
                                        <option value="HR Associate">HR Associate</option>
                                        <option value="Compensation and Benefits Associate">Compensation and Benefits
                                            Associate
                                        </option>
                                        <option value="Compensation and Benefits Specialist">Compensation and Benefits
                                            Specialist
                                        </option>
                                        <option value="Payroll Associate">Payroll Associate</option>
                                        <option value="Finance Assistant">Finance Assistant</option>
                                        <option value="Accounting Assistant">Accounting Assistant</option>
                                        <option value="HR Generalist">HR Generalist</option>
                                        <option value="Receptionist">Receptionist</option>
                                        <option value="Admin and Facilities Assistant">Admin and Facilities Assistant
                                        </option>
                                        <option value="Recruitment Associate">Recruitment Associate</option>
                                        <option value="Sourcing Associate">Sourcing Associate</option>
                                        <option value="Corporate Recruiter">Corporate Recruiter</option>
                                        <option value="US Recruiter">US Recruiter</option>
                                        <option value="SME">SME</option>
                                        <option value="Quality Analyst">Quality Analyst</option>
                                        <option value="Real-Time Analyst">Real-Time Analyst</option>
                                        <option value="Reports Analyst">Reports Analyst</option>
                                        <option value="IT Desktop Support Engineer">IT Desktop Support Engineer</option>
                                        <option value="Associate Trainer">Associate Trainer</option>
                                        <option value="Lead Generation Specialist">Lead Generation Specialist</option>
                                        <option value="Business Research Analyst">Business Research Analyst</option>
                                        <option value="Travel Associate">Travel Associate</option>
                                    </select>

                                </div>
                                <div class="jobSelection2">
                                    <select name="sv_jobs" class="sv_jobs">
                                        <option value="" disabled selected>Select Supervisory Job</option>
                                        <option value="Payroll Supervisor">Payroll Supervisor</option>
                                        <option value="Assistant Manager- HR">Assistant Manager- HR</option>
                                        <option value="Facilities Supervisor">Facilities Supervisor</option>
                                        <option value="Assistant Manager- Finance">Assistant Manager- Finance</option>
                                        <option value="Phonescreening Lead">Phonescreening Lead</option>
                                        <option value="Recruitment Assistant Manager">Recruitment Assistant Manager
                                        </option>
                                        <option value="US Recruitment Assistant Manager">US Recruitment Assistant
                                            Manager
                                        </option>
                                        <option value="Sourcing Lead">Sourcing Lead</option>
                                        <option value="Team Manager">Team Manager</option>
                                        <option value="Quality Supervisor">Quality Supervisor</option>
                                        <option value="Assistant Manager- Quality">Assistant Manager- Quality</option>
                                        <option value="Workforce Planner">Workforce Planner</option>
                                        <option value="Workforce Supervisor">Workforce Supervisor</option>
                                        <option value="IT Supervisor">IT Supervisor</option>
                                        <option value="Training Supervisor">Training Supervisor</option>
                                        <option value="Instructional Designer">Instructional Designer</option>
                                        <option value="Web Developer">Web Developer</option>
                                        <option value="Marketing Supervisor">Marketing Supervisor</option>
                                        <option value="Communication Supervisor">Communication Supervisor</option>
                                    </select>
                                </div>
                                <div class="jobSelection3">
                                    <select name="mgr_jobs" class="mgr_jobs">
                                        <option value="" disabled selected>Select Managerial Job</option>
                                        <option value="HR Manager">HR Manager</option>
                                        <option value="HR Business Partner">HR Business Partner</option>
                                        <option value="Senior Manager - Human Resource">Senior Manager - Human
                                            Resource
                                        </option>
                                        <option value="Payroll Manager">Payroll Manager</option>
                                        <option value="Finance Manager">Finance Manager</option>
                                        <option value="Tax and Corporate Compliance Manager">Tax and Corporate
                                            Compliance Manager
                                        </option>
                                        <option value="Compensation and Benefits Manager">Compensation and Benefits
                                            Manager
                                        </option>
                                        <option value="Facilities Manager">Facilities Manager</option>
                                        <option value="Recruitment Manager - Sourcing">Recruitment Manager - Sourcing
                                        </option>
                                        <option value="Recruitment Manager - Corporate">Recruitment Manager -
                                            Corporate
                                        </option>
                                        <option value="Recruitment Manager - Agent Hiring">Recruitment Manager - Agent
                                            Hiring
                                        </option>
                                        <option value="Operations Manager">Operations Manager</option>
                                        <option value="Senior Operations Manager">Senior Operations Manager</option>
                                        <option value="Client Services Manager">Client Services Manager</option>
                                        <option value="Senior Quality Manager">Senior Quality Manager</option>
                                        <option value="Quality Manager">Quality Manager</option>
                                        <option value="Workforce Manager">Workforce Manager</option>
                                        <option value="Senior Manager - Workforce">Senior Manager - Workforce</option>
                                        <option value="IT Manager">IT Manager</option>
                                        <option value="Training Manager">Training Manager</option>
                                        <option value="Sr. Training Manager">Sr. Training Manager</option>
                                        <option value="Global Brand Manager">Global Brand Manager</option>
                                        <option value="Travel Desk Manager">Travel Desk Manager</option>
                                    </select>
                                </div>
                                <div class="jobSelection4">
                                    <select name="dir_jobs" class="dir_jobs">
                                        <option value="" disabled selected>Select Director Level Job</option>
                                        <option value="HR Director">HR Director</option>
                                        <option value="Recruitment Director">Recruitment Director</option>
                                        <option value="Site Director">Site Director</option>
                                        <option value="Client Services Director">Client Services Director</option>
                                        <option value="Senior Director for Global Quality Management">Senior Director
                                            for Global Quality Management
                                        </option>
                                        <option value="Workforce Director">Workforce Director</option>
                                        <option value="Training Director">Training Director</option>
                                    </select>

                                </div>
                            </div>

                            <div class="input-field col s12 m6" style="display:none;">

                                <select name="degree" id="degree" class="form-control" >
                                    <option value="BS">Bachelor's Degree</option>
                                    <option value="MS">Master's Degree</option>
                                    <option value="PhD">Doctorate Degree</option>
                                    <option value="Certificate">Certificate Course</option>
                                    <option value="Diploma">Diploma Course</option>
                                    <option value="Vocational">Vocational Course</option>
                                    <option value="Undergraduate">Undergraduate</option>
                                </select>

                                <label>What is your highest educational attainment?</label>
                            </div>

                            <div class="input-field col s12 m6" style="display:none;">
                                <input value="" id="course" type="text" class="validate">
                                <label for="course">Course</label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-field col s12 ">
                                <input value="" id="course" type="text" class="validate">
                                <label for="course">Present/Last Position Title</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 ">

                                <select name="degree" id="degree" class="form-control">
                                    <option value="" disabled selected>Select One</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>

                                <label>Are you presently employed?</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 ">

                                <select name="degree" id="degree" class="form-control">
                                    <option value="" disabled selected>Select One</option>
                                    <option value="ASAP/Immediately">ASAP/Immediately</option>
                                    <option value="1 week from date of application">1 week from date of
                                        application
                                    </option>
                                    <option value="2 weeks from date of application">2 weeks from date of
                                        application
                                    </option>
                                    <option value="3 weeks from date of application">3 weeks from date of
                                        application
                                    </option>
                                    <option value="1 month from date of application">1 month from date of
                                        application
                                    </option>
                                    <option value="More than 1 month from date of application">More than 1 month
                                        from date of application
                                    </option>
                                </select>

                                <label>Employment Availability</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 ">
                                <input value="" id="city" type="text" class="validate">
                                <label for="city">City of Present Residence</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 ">
                                <select name="from" id="from" class="form-control required">
                                    <option value="" disabled selected>Select One</option>
                                    <option value="10:00AM - 11:00AM">10:00 am - 11:00 am</option>
                                    <option value="11:00AM - 12:00PM">11:00 am - 12:00 pm</option>
                                    <option value="12:00PM - 1:00PM">12:00 pm - 1:00 pm</option>
                                    <option value="1:00PM - 2:00PM">1:00 pm - 2:00 pm</option>
                                    <option value="2:00PM - 3:00PM">2:00 pm - 3:00 pm</option>
                                    <option value="3:00PM - 4:00PM">3:00 pm - 4:00 pm</option>
                                    <option value="4:00PM - 5:00PM">4:00 pm - 5:00 pm</option>
                                    <option value="5:00PM - 6:00PM">5:00 pm - 6:00 pm</option>
                                    <option value="6:00PM - 7:00PM">6:00 pm - 7:00 pm</option>
                                </select>
                                <label for="city">What is the best time to contact you?</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 " id="appliedBefore">
                                <select name="from" id="from" class="form-control required">
                                    <option value="" disabled selected>Select One</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <label for="city">Have you ever applied in IBEX before?</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 fromIbex">
                                <input type="date" class="datepicker" >
                                <label for="whenApplied">If yes: When?</label>
                            </div>
                        </div>



                        <div class="row">
                            <div class="input-field col s12 ">
                                <select name="shiftingSched" id="shiftingSched">
                                    <option value="" disabled selected>Select One</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <label for="shiftingSched">Are you willing to work on holidays and weekends?</label>
                            </div>
                        </div>

                        <div class="row">
                            <div id="formerEmp" class="input-field col s12 ">
                                <select name="formerEmployee" id="formerEmployee">
                                    <option value="" disabled selected>Select One</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <label for="formerEmployee">Are you a former TRG/IBEX Employee?</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6 " id="formerIbexEmployee">
                                <input value="" id="course" type="text" class="validate">
                                <label for="course">If yes: What Account?</label>
                            </div>
                            <div class="input-field col s12 m6 " id="formerIbexEmployee">
                                <input type="date" class="datepicker">
                                <label for="formerIbexEmployee">If yes: When?</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 " id="referralCheck">
                                <select name="referralCheck" >
                                    <option value="" disabled selected>Select One</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <label for="referralCheck">Are you an IBEX employee and referring somebody?</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 empDetails">
                                <input value="" id="course" type="text" class="validate">
                                <label for="course">Employee Name</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6 empDetails">
                                <input value="" id="course" type="text" class="validate">
                                <label for="course">Employee Number</label>
                            </div>

                            <div class="input-field col s12 m6 empDetails">
                                <input value="" id="course" type="text" class="validate">
                                <label for="course">Employee Position</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12  ">
                                <button class="btn red lighten-1 waves-effect waves-light btn-large right" type="submit"
                                        name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript" src="js/appform.js"></script>



</body>
</html>