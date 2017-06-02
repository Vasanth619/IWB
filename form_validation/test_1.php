<!-- <link rel="icon" type="image/x-icon" href="/asset/img/favicon.ico"> -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap/3.3.2/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/fontawesome/4.2.0/css/font-awesome.min.css"> -->
<!-- <link rel="stylesheet" href="form_validation.min.css"> -->
<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cardo:400,400italic,700"> -->
<!-- <link rel="stylesheet" href="github.css"> -->
<!-- <link rel="stylesheet" href="style.css"> -->

<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- <script src="//cdn.jsdelivr.net/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
<script src="bootstrap.min.js"></script>

<script src="form_validation.js"></script>
<script src="cust_bootstrap.min.js"></script>


<p class="text-center">
    <button class="btn btn-default" data-toggle="modal" data-target="#loginModal">Login</button>
</p>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Login</h5>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="loginForm" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Username</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="username" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Password</label>
                        <div class="col-xs-5">
                            <input type="password" class="form-control" name="password" />
                        </div>
                    </div>



    <div class="form-group">
        <label class="col-xs-3 control-label">Job position</label>
        <div class="col-xs-6">
            <div class="radio">
                <label>
                    <input type="radio" name="job" value="designer" /> Designer
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="job" value="frontend" /> Front-end Developer
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="job" value="backend" /> Back-end Developer
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="job" value="dba" /> Database Administrator
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="job" value="sys" /> System Engineer
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Programming Languages</label>
        <div class="col-xs-6">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="net" /> .Net
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="java" /> Java
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="c" /> C/C++
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="php" /> PHP
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="perl" /> Perl
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="ruby" /> Ruby
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="python" /> Python
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="javascript" /> Javascript
                </label>
            </div>
        </div>
    </div>



                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
$('#loginModal').on('hidden.bs.modal', function() {
    $('#loginForm').formValidation('resetForm', true);
});

    
    $('#loginForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        //message: 'The username is required'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            },
            job: {
                    validators: {
                        notEmpty: {
                            message: 'The job position is required'
                        }
                    }
                },
            'languages[]': {
                validators: {
                    choice: {
                        min: 2,
                        max: 4,
                        message: 'Please choose 2 - 4 programming languages you are good at'
                    }
                }
            }
        }
    });
});
</script>



<h1>Time Validation</h1>

<?php //http://formvalidation.io/examples/validating-start-end-datetimes/ ?>


<form id="meetingForm" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="col-xs-3 control-label">Start meeting time</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="start" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">End meeting time</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="end" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-5 col-xs-offset-3">
            <button type="submit" class="btn btn-default">Validate</button>
        </div>
    </div>
</form>

<script>
$(document).ready(function() {
    // The pattern of times that accepts moments between 09:00 to 17:59
//    var TIME_PATTERN = /^(09|1[0-7]{1}):[0-5]{1}[0-9]{1}$/;
//var TIME_PATTERN = /^(09|1[0-7]{1}):[0-5]{1}[0-9]{1}$/;
    var TIME_PATTERN = /^([01]?[0-9]|2[0-3]):[0-5]{1}[0-9]{1}$/;
    //([01]?[0-9]|2[0-3]):[0-5][0-9]

    $('#meetingForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            start: {
                verbose: false,
                validators: {
                    notEmpty: {
                        message: 'The start time is required'
                    },
                    regexp: {
                        regexp: TIME_PATTERN,
                        message: 'The start time must be between 09:00 and 17:59'
                    },
                    callback: {
                        message: 'The start time must be earlier then the end one',
                        callback: function(value, validator, $field) {
                            var endTime = validator.getFieldElements('end').val();
                            /*if (endTime === '' || !TIME_PATTERN.test(endTime)) {
                                return true;
                            }*/
                            //alert(endTime);
                            if (endTime === '') {
                                validator.updateStatus('start', validator.STATUS_VALID, 'callback');
                                return true;
                            }
                            //alert(endTime);
                            var startHour    = parseInt(value.split(':')[0], 10),
                                startMinutes = parseInt(value.split(':')[1], 10),
                                endHour      = parseInt(endTime.split(':')[0], 10),
                                endMinutes   = parseInt(endTime.split(':')[1], 10);

                                console.log("START >>>> "+startHour+"---"+startMinutes+"---"+endHour+"---"+endMinutes);

                            if (startHour < endHour || (startHour == endHour && startMinutes < endMinutes)) {
                                // The end time is also valid
                                // So, we need to update its status
                                validator.updateStatus('end', validator.STATUS_VALID, 'callback');
                                return true;
                            }

                            return false;
                        }
                    }
                }
            },
            end: {
                verbose: false,
                validators: {
                    notEmpty: {
                        message: 'The end time is required'
                    },
                    regexp: {
                        regexp: TIME_PATTERN,
                        message: 'The end time must be between 09:00 and 17:59'
                    },
                    callback: {
                        message: 'The end time must be later then the start one',
                        callback: function(value, validator, $field) {
                            var startTime = validator.getFieldElements('start').val();
                            //alert(startTime);
                            /*if (startTime == '' || !TIME_PATTERN.test(startTime)) {
                                return true;
                            }*/
                            if (startTime === '' ) {
                                return true;
                            }
                           //alert(startTime);
                            var startHour    = parseInt(startTime.split(':')[0], 10),
                                startMinutes = parseInt(startTime.split(':')[1], 10),
                                endHour      = parseInt(value.split(':')[0], 10),
                                endMinutes   = parseInt(value.split(':')[1], 10);
console.log("END >>>> "+startHour+"---"+startMinutes+"---"+endHour+"---"+endMinutes);
                            if (endHour > startHour || (endHour == startHour && endMinutes > startMinutes)) {
                                // The start time is also valid
                                // So, we need to update its status
                                validator.updateStatus('start', validator.STATUS_VALID, 'callback');
                                return true;
                            }

                            return false;
                        }
                    }
                }
            }
        }
    });
});
</script>