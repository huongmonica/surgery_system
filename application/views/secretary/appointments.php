<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Modal View Patient info -->
<div class="modal" id="newAppointmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="exampleModalLabel">New Appointment</h3>
            </div>

            <!-- TODO: trigger the display of EDIT or VIEW in JS and avoid Over complication with PHP views -->
            <div class="modal-body">
                <!-- inits the form and add the right class -->
                <?= form_open('secretary/secretaryappointments/newappointment',
                    array('class' => 'form-horizontal', 'id' => 'newAppointment')); ?>
                <div class="form-group">
                    <label for="patientNameNewAppointment" class="control-label col-md-3">Patient Name:</label>
                    <div class="col-md-9">
                        <select id="patientNameNewAppointment" name="pn" value="pn" class="selectpicker" data-live-search="true">
                            <!-- CK: pulling data form dummy data in the backend  -->
                            <!-- CK: looping over the data and creating the option element - values are just the
                                     indexes of the array for now, but could be replcaed by specfic patient IDs
                             -->
                            <?php for ($c = 0; $c < count($patients); $c++) {
                                echo '<option value="' . $c . '">' . $patients[$c]['PatName'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
				<div class="form-group">
                    <label for="doctorNameNewAppointment" class="control-label col-md-3">Doctor Name:</label>
                    <div class="col-md-9">
                        <select id="doctorNameNewAppointment" name="dn" value="dn" class="selectpicker" data-live-search="true">
                            <!-- CK: pulling data form dummy data in the backend  -->
                            <!-- CK: looping over the data and creating the option element - values are just the
                                     indexes of the array for now, but could be replcaed by specfic patient IDs
                             -->
                            <?php for ($c = 0; $c < count($doctors); $c++) {
                                echo '<option value="' . $c . '">' . $doctors[$c]['DocName'] . '</option>';
                            }
								form_hidden('doctorname', 'johndoe');
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="startslotNewAppointment" class="control-label col-md-3">Start Time:</label>
                    <div class="col-md-9">
                        <select id="startlotNewAppointment" name="startt" value="startt" class="selectpicker">
                            <option value="1">09:00</option>
                            <option value="1">09:30</option>
                            <option value="1">10:00</option>
                            <option value="1">10:30</option>
                            <option value="1">11:00</option>
                            <option value="1">11:30</option>
                            <option value="1">12:00</option>
                            <option value="1">12:30</option>
                            <option value="1">13:00</option>
                            <option value="1">13:30</option>
                            <option value="1">14:00</option>
                            <option value="1">14:30</option>
                            <option value="1">15:00</option>
                            <option value="1">15:30</option>
                            <option value="1">16:00</option>
                            <option value="1">16:30</option>
                            <option value="1">17:00</option>
                            <option value="1">17:30</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="finishSelectNewAppointment" class="control-label col-md-3">Finish time:</label>
                    <div class="col-md-9">
                        <select id="finishSelectNewAppointment" name="finisht" value="finisht" class="selectpicker">
                            <option value="1">09:00</option>
                            <option value="1">09:30</option>
                            <option value="1">10:00</option>
                            <option value="1">10:30</option>
                            <option value="1">11:00</option>
                            <option value="1">11:30</option>
                            <option value="1">12:00</option>
                            <option value="1">12:30</option>
                            <option value="1">13:00</option>
                            <option value="1">13:30</option>
                            <option value="1">14:00</option>
                            <option value="1">14:30</option>
                            <option value="1">15:00</option>
                            <option value="1">15:30</option>
                            <option value="1">16:00</option>
                            <option value="1">16:30</option>
                            <option value="1">17:00</option>
                            <option value="1">17:30</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label col-md-3">Date:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="dates" id="Date" placeholder="YYYY/MM/DD">
					</div>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="newAppointmentBtn" class="btn btn-primary">Submit</button>
		   </div>
        </div>
    </div>
</div>

<div class="modal" id="AppointmentPaymentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="exampleModalLabel">Payment</h3>
            </div>

            <!-- TODO: trigger the display of EDIT or VIEW in JS and avoid Over complication with PHP views -->
            <div class="modal-body">
                <!-- inits the form and add the right class -->
                <?= form_open('secretary/secretaryappointments/newappointment',
                    array('class' => 'form-horizontal', 'id' => 'newAppointment')); ?>
                <div class="form-group">
                    <label for="patientNamePayAppointment" class="control-label col-md-3">Patient Name:</label>
                    <div class="col-md-9">
                        <select id="patientNamePayAppointment" name="pn" value="pn" class="selectpicker" data-live-search="true">
                            <!-- CK: pulling data form dummy data in the backend  -->
                            <!-- CK: looping over the data and creating the option element - values are just the
                                     indexes of the array for now, but could be replcaed by specfic patient IDs
                             -->
                            <?php for ($c = 0; $c < count($patients); $c++) {
                                echo '<option value="' . $c . '">' . $patients[$c]['PatName'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
				<div class="form-group">
                    <label for="startslotAppointment" class="control-label col-md-3">Start Time:</label>
                    <div class="col-md-9">
                        <select id="startlotAppointment" name="startt" value="startt" class="selectpicker">
                            <option value="1">09:00</option>
                            <option value="1">09:30</option>
                            <option value="1">10:00</option>
                            <option value="1">10:30</option>
                            <option value="1">11:00</option>
                            <option value="1">11:30</option>
                            <option value="1">12:00</option>
                            <option value="1">12:30</option>
                            <option value="1">13:00</option>
                            <option value="1">13:30</option>
                            <option value="1">14:00</option>
                            <option value="1">14:30</option>
                            <option value="1">15:00</option>
                            <option value="1">15:30</option>
                            <option value="1">16:00</option>
                            <option value="1">16:30</option>
                            <option value="1">17:00</option>
                            <option value="1">17:30</option>
                        </select>
                    </div>
                </div>
				<div class="form-group">
                    <label for="message-text" class="control-label col-md-3">Appointment Date:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="dates" id="ADate" placeholder="YYYY/MM/DD">
					</div>
                </div>
				<div class="form-group">
                    <label for="message-text" class="control-label col-md-3">Payment Date:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="dates" id="PDate" placeholder="YYYY/MM/DD">
					</div>
                </div>
					<div class="form-group">
                    <label for="message-text" class="control-label col-md-3">Payment Type:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="dates" id="PayType" placeholder="Cash/Credit card">
					</div>
                </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="addPaymentBtn" class="btn btn-primary">Add</button>
		   </div>
        </div>
    </div>
</div>

<div class="modal" id="UpdateAppointmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="exampleModalLabel">Update Appointment</h3>
            </div>

            <!-- TODO: trigger the display of EDIT or VIEW in JS and avoid Over complication with PHP views -->
            <div class="modal-body">
                <!-- inits the form and add the right class -->
                <?= form_open('secretary/secretaryappointments/newappointment',
                    array('class' => 'form-horizontal', 'id' => 'newAppointment')); ?>
                <div class="form-group">
					<h4 class="modal-title" id="exampleModalLabel">Enter current details</h4>
                    <label for="patientNameUpAppointment" class="control-label col-md-3">Patient Name:</label>
                    <div class="col-md-9">
                        <select id="patientNameUpAppointment" name="pn" value="pn" class="selectpicker" data-live-search="true">
                            <!-- CK: pulling data form dummy data in the backend  -->
                            <!-- CK: looping over the data and creating the option element - values are just the
                                     indexes of the array for now, but could be replcaed by specfic patient IDs
                             -->
                            <?php for ($c = 0; $c < count($patients); $c++) {
                                echo '<option value="' . $c . '">' . $patients[$c]['PatName'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
				<div class="form-group">
                    <label for="oldstartlotDelAppointment" class="control-label col-md-3">Start Time:</label>
                    <div class="col-md-9">
                        <select id="oldstartlotDelAppointment" name="startt" value="startt" class="selectpicker">
                            <option value="1">09:00</option>
                            <option value="1">09:30</option>
                            <option value="1">10:00</option>
                            <option value="1">10:30</option>
                            <option value="1">11:00</option>
                            <option value="1">11:30</option>
                            <option value="1">12:00</option>
                            <option value="1">12:30</option>
                            <option value="1">13:00</option>
                            <option value="1">13:30</option>
                            <option value="1">14:00</option>
                            <option value="1">14:30</option>
                            <option value="1">15:00</option>
                            <option value="1">15:30</option>
                            <option value="1">16:00</option>
                            <option value="1">16:30</option>
                            <option value="1">17:00</option>
                            <option value="1">17:30</option>
                        </select>
                    </div>
                </div>
				<div class="form-group">
                    <label for="message-text" class="control-label col-md-3">Date:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="dates" id="oldDate" placeholder="YYYY/MM/DD">
					</div>
                </div>
				<div class="form-group">
					<h4 class="modal-title" id="exampleModalLabel">Enter updated details</h4>
					<label for="doctorNameUpAppointment" class="control-label col-md-3">Doctor Name:</label>
                    <div class="col-md-9">
                        <select id="doctorNameUpAppointment" name="dn" value="dn" class="selectpicker" data-live-search="true">
                            <?php for ($c = 0; $c < count($doctors); $c++) {
                                echo '<option value="' . $c . '">' . $doctors[$c]['DocName'] . '</option>';
                            }
								form_hidden('doctorname', 'johndoe');
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="newstartlotNewAppointment" class="control-label col-md-3">Start Time:</label>
                    <div class="col-md-9">
                        <select id="newstartlotNewAppointment" name="nstartt" value="nstartt" class="selectpicker">
                            <option value="1">09:00</option>
                            <option value="1">09:30</option>
                            <option value="1">10:00</option>
                            <option value="1">10:30</option>
                            <option value="1">11:00</option>
                            <option value="1">11:30</option>
                            <option value="1">12:00</option>
                            <option value="1">12:30</option>
                            <option value="1">13:00</option>
                            <option value="1">13:30</option>
                            <option value="1">14:00</option>
                            <option value="1">14:30</option>
                            <option value="1">15:00</option>
                            <option value="1">15:30</option>
                            <option value="1">16:00</option>
                            <option value="1">16:30</option>
                            <option value="1">17:00</option>
                            <option value="1">17:30</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="newfinishSelectNewAppointment" class="control-label col-md-3">Finish time:</label>
                    <div class="col-md-9">
                        <select id="newfinishSelectNewAppointment" name="nfinisht" value="nfinisht" class="selectpicker">
                            <option value="1">09:00</option>
                            <option value="1">09:30</option>
                            <option value="1">10:00</option>
                            <option value="1">10:30</option>
                            <option value="1">11:00</option>
                            <option value="1">11:30</option>
                            <option value="1">12:00</option>
                            <option value="1">12:30</option>
                            <option value="1">13:00</option>
                            <option value="1">13:30</option>
                            <option value="1">14:00</option>
                            <option value="1">14:30</option>
                            <option value="1">15:00</option>
                            <option value="1">15:30</option>
                            <option value="1">16:00</option>
                            <option value="1">16:30</option>
                            <option value="1">17:00</option>
                            <option value="1">17:30</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label col-md-3">Date:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="dates" id="newDate" placeholder="YYYY/MM/DD">
					</div>
                </div>
				
				</form>
            </div>
            <div class="modal-footer">
                 <div class="modal-footer">
                <button type="button" class=" pull-left btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="delAppointmentBtn2" class="btn btn-danger">Delete</button>
                <button type="button" id="upAppointmentBtn" style="width: 30%;" class="btn btn-primary">Update</button>
            </div>
		   </div>
        </div>
    </div>
</div>

<div class="container-fluid container-align">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-md-12">
            <h1> Scheduled Appointments </h1>
        </div>
        <div class="col-md-12">
            <div class="form-horizontal">
                <div class="page-functions form-group">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#newAppointmentModal" id="NewApp">New
                        Appointment
                    </button>
					<button class="btn btn-primary" data-toggle="modal" data-target="#AppointmentPaymentModal" id="NewApp">Add
                        Payment
                    </button>
                </div>
            </div>
        </div>
    </div>
	
    <!-- Main content -->
    <div class="row">
        <div class="col-md-12" style="height: 550px;">
            <div id="appointmentsCalender">
            </div>
        </div>
    </div>

</div>

<script>
	
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js";
	
    var appointments = <?php echo json_encode($appointments) ?>;
    var events = []
    // CK - refactor for the library events
    for (var app in appointments) {
        events.push({
            title: appointments[app]['PatName'],
            start: appointments[app]['SlotDate']+'T'+appointments[app]['start_time'],
            doctor: appointments[app]['DocName'],
			starttime: appointments[app]['start_time']
        })
    }
    //CK - Setup for the calender using specific library
    $(document).ready(function () {
        $('#appointmentsCalender').fullCalendar({
            height: 'auto',
            events: events,
            allDaySlot: false,
            defaultView: 'agendaWeek',
            businessHours: {
                dow: [1, 2, 3, 4, 5, 6],
                start: '08:00',
                end: '18:00',
            },
            minTime: '09:00:00',
            maxTime: '18:00:00',
            editable: true,
            nowIndicator: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            eventRender: function(eventObj, $el) {
                $el.popover({
                    title: "Patient: " + eventObj.title,
                    content: "Doctor: " + eventObj.doctor,
                    trigger: 'hover',
                    placement: 'top',
                    container: 'body'
                });
            },
			
			eventClick: function (event, element) {
                editingAppointmentData = event;
                $('#UpdateAppointmentModal').modal();
            }
        })
		
        $('#newAppointmentModal').on('show.bs.modal', function (event) {
            // do stuff
			//window.open("https://www.w3schools.com");
        })
		
        //CK: There might be a better PHP way of doing this
        $('#newAppointmentBtn').click(function () {
            // collect form data
			
			//var $inputs = $('#myForm :input');
			/*
			var pn = $('#DynamicValueAssignedHere').find('input[id="patientNameNewAppointment"]').val();
			var dn = $('#DynamicValueAssignedHere').find('input[id="doctorNameNewAppointment"]').val();
			var startt = $('#DynamicValueAssignedHere').find('input[id="startlotNewAppointment"]').val();
			var finisht = $find('input[id="finishSelectNewAppointment"]').val();
			var dates = $find('input[id="Date"]').val();
			*/
			
			/*
			var pn = $('#patientNameNewAppointment').val();
			var dn = $('#doctorNameNewAppointment').val();
			var startt = $('#startlotNewAppointment').val();
			var finisht = $('#finishSelectNewAppointment').val();
			var dates = $('#Date').val()
			*/
			//Used to get values from the selects
			//https://stackoverflow.com/questions/1085801/get-selected-value-in-dropdown-list-using-javascript
			var p = document.getElementById("patientNameNewAppointment");
			var pn = p.options[p.selectedIndex].text;
			
			var d = document.getElementById("doctorNameNewAppointment");
			var dn = d.options[d.selectedIndex].text;
			
			var s = document.getElementById("startlotDelAppointment");
			var startt = s.options[s.selectedIndex].text;
			
			var f = document.getElementById("finishSelectNewAppointment");
			var finisht = f.options[f.selectedIndex].text;
			
			var dates = document.getElementById("Date").value;
			/*
			var data = {
				Patientname: "Conor Bourke", 
				Doctorname: "David Kane", 
				Stattime: "9:00", 
				Finishtime: "9:30", 
				Date: "2018-04-30", 
				Cost: 60
			};
			*/
			
            $.post("http://localhost/surgery_system/index.php/secretary/SecretaryAppointments/newappointment", {patientNameNewAppointment: pn, doctorNameNewAppointment: dn, startlotNewAppointment: startt, finishSelectNewAppointment: finisht, Date: dates, Cost: 60})
                .done(function (resp) {
                    console.log(resp);
                    //CK: This  will allow us to rerender the appointments once it returns true.-->
                    //https://fullcalendar.io/docs/rerenderEvents

                });
        })
		
		$('#UpdateAppointmentModal').on('show.bs.modal', function (event) {
            // do stuff
			//window.open("https://www.w3schools.com");
        })
		
		$('#delAppointmentBtn2').click(function () {
			var p = document.getElementById("patientNameUpAppointment");
			var pn = p.options[p.selectedIndex].text;
			
			var s = document.getElementById("oldstartlotDelAppointment");
			var startt = s.options[s.selectedIndex].text;
			
			var dates = document.getElementById("oldDate").value;
			
			/*
			var pn = "Sarah Connor";
			var startt = "09:00";
			var dates = "2018-05-08";
			*/
            $.post("http://localhost/surgery_system/index.php/secretary/SecretaryAppointments/deleteappointment", {patientNameNewAppointment: pn, startlotNewAppointment: startt, Date: dates})
                .done(function (resp) {
                    console.log(resp);
                    //CK: This  will allow us to rerender the appointments once it returns true.-->
                    //https://fullcalendar.io/docs/rerenderEvents

                });
        })
		
		$('#upAppointmentBtn').click(function () {
			//Patients name
			var p = document.getElementById("patientNameUpAppointment");
			var pn = p.options[p.selectedIndex].text;
			
			//Old start time
			var s = document.getElementById("oldstartlotDelAppointment");
			var startt = s.options[s.selectedIndex].text;
			
			//Old date
			var dates = document.getElementById("oldDate").value;
			
			//Doctors name
			var d = document.getElementById("doctorNameUpAppointment");
			var dn = d.options[d.selectedIndex].text;
			
			//New start time
			var ns = document.getElementById("newstartlotNewAppointment");
			var nstartt = ns.options[ns.selectedIndex].text;
			
			//New finish time
			var f = document.getElementById("newfinishSelectNewAppointment");
			var nfinisht = f.options[f.selectedIndex].text;
			
			//New date
			var ndates = document.getElementById("newDate").value;
			
			
            $.post("http://localhost/surgery_system/index.php/secretary/SecretaryAppointments/updateappointment", {patientNameNewAppointment: pn, startlotNewAppointment: startt, Date: dates, doctorNameNewAppointment: dn, newstartlotNewAppointment: nstartt, newfinishSelectNewAppointment: nfinisht, newDate: ndates})
                .done(function (resp) {
                    console.log(resp);
                    //CK: This  will allow us to rerender the appointments once it returns true.-->
                    //https://fullcalendar.io/docs/rerenderEvents

                });
        })
		
		$('#AppointmentPaymentModal').on('show.bs.modal', function (event) {
            // do stuff
        })
		
		$('#addPaymentBtn').click(function () {
			var p = document.getElementById("patientNamePayAppointment");
			var pn = p.options[p.selectedIndex].text;
			
			var s = document.getElementById("oldstartlotDelAppointment");
			var startt = s.options[s.selectedIndex].text;
			
			var dates = document.getElementById("ADate").value;
			
			var pdate = document.getElementById("PDate").value;
			
			var ptype = document.getElementById("PayType").value;
			
			/*
			var pn = "Sarah Connor";
			var startt = "09:00";
			var dates = "2018-05-08";
			*/
            $.post("http://localhost/surgery_system/index.php/secretary/SecretaryAppointments/deleteappointment", {patientNamePayAppointment: pn, oldstartlotDelAppointment: startt, ADate: dates, PDate: pdate, PayType: ptype})
                .done(function (resp) {
                    console.log(resp);
                    //CK: This  will allow us to rerender the appointments once it returns true.-->
                    //https://fullcalendar.io/docs/rerenderEvents

                });
        })
    });
	
	
</script>