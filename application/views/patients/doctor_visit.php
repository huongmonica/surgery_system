<!DOCTYPE html>
<html>
<style>
h1{margin-bottom: 50px;}
nav{ background-color: black; color:gray;}
#button{margin-left: 10px;}
a.btn.btn-primary.side-menu-button{width:110px; margin-bottom: 50px;}
label{color:#006699; margin-right: 20px; width:33px;}
.modal-body th{padding:0px 10px 0px 10px; background-color:#66ccff; color:white;}

</style>

<!--//1.visitdetail modal -->
<div class="modal" id="visitView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel"><strong>View Visit Detail</strong></h4>
            </div>

            <!--CK:  TODO: trigger the display of EDIT or VIEW in JS and avoid Over complication with PHP views -->
            <div class="modal-body">
<!-- 1.1 visitdetail modal- visit appinfo and patient info-->
                <div class="form-horizontal">
                    <div class="w3-container">
                      <table class="table table-condensed table-bordered " style="border-radius:50px;"  id="visit_info">
                        <tr>
                           <th class="col-md-2"  style="color:white; background-color:#66ccff;text-align:center;">Appointment</th>
                           <td class="col-md-2"><label for="appid" >ID</label>1</td>
                            <td class="col-md-3"><label for="appdate">Date</label>2018.5.3</td>
                            <td class="col-md-3"><label class="apptime">Time</label>3:30~4:30</td>
                        </tr>
                        <tr>
                          <th class="col-md-2" style="color:white;background-color:#66ccff;text-align:center;">Patient</th>
                            <td class="col-md-2"><label class="patid">ID</label>1</td>
                            <td class="col-md-3"><label class="patname">Name</label>Paul</td>
                            <td class="col-md-3"><label class="patbirth">Birth</label>1885.3.4</td>
                        </tr>
                      </table>
<!--1.2 visitdetail modal- visit procedure-->
                        <table class="table table-condensed "  id="visit_procedure">
                        <thead>  <th class="col-md-3" style="text-align:center;">Procedure</th> </thead>
                            <td class="col-md-8">
                              <table class="table">

                                <tr>
                                    <th  style="background:#f2f2f2; color:#006699;">patient note</th>
                                    <td>stomache,vomit,fever since last night</td>
                                </tr>
                                <tr>
                                      <th  style="background:#f2f2f2; color:#006699;">consultation</th>
                                      <td>Suspected food poisoning enteritis</td>
                                </tr>
                      </table>
                      </table>
<!-- 1.3 visitdetail modal- visit Prescription-->
                      <table class="table"  id="visit_prescription">
                      <thead>  <th  style="text-align:center;">Prescription</th> </thead>
                          <td class="col-md-8">
                            <table class="table">
                    <tr>
                        <th  class="col-md-3" style="background:#f2f2f2; color:#006699;">test,treatment</th>
                        <td>bloodtest</td>
                        <td> €10</td>
                    </tr>
                    <tr>
                        <th style="background:#f2f2f2; color:#006699;">medication</th>
                        <td>Bio gaiga</td>
                        <td> 3*(5/day)</td>
                    </tr>

                    </table>

                </table>

                <table class="table table-condensed table-bordered "  id="visit_app">
                  <th class="col-md-2" style="text-align:center;">Summary</th>
                    <td class="col-md-8">Suspected gastroenteritis due to food poisoning. Try to take the medicine for 3 days and observe the symptoms until the blood test result .</td>
                </tr>
<!-- 1.3 visitdetail modal- Summary-->
              </table>
                    </div>
                    <div class="form-group">
                        <label for="patientModelAge" class="control-label col-md-3"></label>
                        <div class="col-md-9">
                            <span id="patientModelAge"></span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" style="width: 40%" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<body>
<!--2.top black navbar-->
  <header class="main-header">
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
          <div class="container-fluid">
            <span class="navbar-left navbar-brand"><span class="text-white-50 bg-dark"><small>Surgery Management System(Doctor)</small></span></span>
              <a type="button" class="btn btn-primary navbar-btn navbar-right"
                 href="<?= base_url('/index.php/login/logout/') ?>"
                 style="margin-right: 0;">Logout</a>
          </div>
      </nav>
  </header>
<!--2.1 title and left 3buttons-->

    <div class="container"style="text-align:center;">
        <h1><strong>Visits</strong></h1>
      </div>
      <div class="container" id="button">
          <div class="col-md-2">
                        <aside class="main-sidebar">
                          <div class="btn-group-ck">
                            <div><a class="btn btn-primary side-menu-button" href="<?= base_url('index.php/patients/doctor_app') ?>">Appointments</a> </div>
                            <div><a class="btn btn-primary side-menu-button" href="<?= base_url('index.php/patients/doctor_visit') ?>">Visits</a> </div>
                            <div> <a class="btn btn-primary side-menu-button" href="<?= base_url('index.php/patients/doctor_patient') ?>">Patients</a> </div>
                          </div>
                        </aside>
          </div>
<!--2.2 main contents-->
<div class="col-md-10">
        <div class="container content-wrapper">
            <!-- date picker and view detail button -->
            <div class="container">
                <div class="appointment-search"> Date: <input type="date">
                  <button class="btn btn-info btn-primary" style="float: right; margin-right: 40px; "data-toggle="modal" data-target="#visitView"                                 data-viewpatient='<?php echo json_encode($patients[$c]) ?>'>Visit detail   </button>
                </div>

            </div>
            <!-- visit table -->
                    <div class="box" style="margin-top:30px;">
                        <div class="box-body">

                                  <table id="visit" class="table table-bordered table-hover">
                                      <thead>
                                        <tr>
                                          <th>Visit#</th>
                                          <th>Date</th>
                                          <th>Time</th>
                                          <th>Patient</th>
                                          <th>Visit Summary</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>1</td>
                                          <td><time>2018-04-29</time></td>
                                          <td><time>9:00~10:00</time></td>
                                          <td>Homas Came</td>
                                          <td>cough itchy throat</td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                          <td><time>2018-04-29</time></td>
                                          <td><time>10:00~11:00</time></td>
                                          <td>George Victoria</td>
                                          <td>fever,stomache</td>
                                        </tr>
                                        <tr>
                                          <td>3</td>
                                          <td><time>2018-04-29</time></td>
                                          <td>  <time>13:00~16</time></td>
                                          <td>File Holder</td>
                                          <td>Vaccination</td>
                                        </tr>
                                      </tbody>
                                    </table>
                            </div>
                        </div>
             </div>
          </div>
</div>
</body>
</html>