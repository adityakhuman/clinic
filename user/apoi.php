<?php 
    include('connn.php');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $Doctor = $_POST['Doctor'];
        $Date = $_POST['Date'];
        $disp = $_POST['disp'];
        $Time = $_POST['Time'];

        $insert = "insert into appointment(name,email,mobile,Doctor,Date,disp) value('$name','$email','$mobile','$Doctor','$Date','$disp','$Time')";
        mysqli_query($conn,$insert);
    }

?>

<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Appointment</p>
                    <h1 class="mb-4">Make An Appointment To Visit Our Doctor</h1>
                    <p class="mb-4">WeCare is an integrated medical center, comprising a group of various specialized diagnostic and therapeutic clinics in addition to an oncology clinic, which covers all steps of treatment using the latest treatment technologies. We are unique in owning a device to prevent hair loss in chemotherapy patients for the first time in Syria.</p>
                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Don't Call Us</p>
                            <h5 class="mb-0">+91 8160600313</h5>
                        </div>
                    </div>
                    <div class="bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Don't Mail Us</p>
                            <h5 class="mb-0">info@example.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form method="post">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="name" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" name="email" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="mobile" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;" name="Doctor">
                                        <option selected>Choose Doctor</option>
                                        <option value="Doctor 1">Doctor 1</option>
                                        <option value="Doctor 2">Doctor 2</option>
                                        <option value="Doctor 3">Doctor 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Choose Date" name="Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;" name="Time">
                                        <option selected>Choose Time</option>
                                        <option value="Doctor 1">9 to 11</option>
                                        <option value="Doctor 2">11 to 1</option>
                                        <option value="Doctor 3">1 to 3</option>
                                        <option value="Doctor 3">3 to 5</option>
                                        <option value="Doctor 3">5 to 7</option>
                                        <option value="Doctor 3">7 to 9</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="5" name="disp" placeholder="Describe your problem"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" name ="submit"type="submit">Book Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>