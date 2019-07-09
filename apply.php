<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Agent</title>
        <!--     css    -->
        <!--font-fontawesome-->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--  -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="parsley.css">
    </head>
    <body>
        <!--     agent area -->
        <form class="mt-4" id="agent_form" action="agent_form.inc.php" method="POST" enctype="multipart/form-data">
            <section class="fromarea">
                <div class="container py-5 bg-white" style="width: 100%; padding-right: 5%; padding-left: 5%; margin-top: -20px">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <img class="" src="image/logo.png" alt="satt itlogo" style="width: 180px; height: 50px;">
                            <address class="mt-2">
                                <span>524, Manik Mia Road </span> <br>
                                <span> Talaimari, Rajshahi-6204</span> <br>
                                <span> +8801850054500</span> <br>
                                <span>info@sattit.com</span><br>
                                <span>www.sattit.com</span>
                            </address>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="" style="background: #52c234;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #061700, #52c234);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #061700, #52c234); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
                                <p class="text-center h4 text-white py-2"> Agent Application Form </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="upload-btn-wrapper">
                                <img class="pic" src="image/upload.png" alt="" id="photo_preview"><br>
                                <span>Upload Image</span>
                                <input type="file" name="photo" id="photo" required="" />
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-sm-3 col-xs-12 mt-3">
                                    <label for="name"> Name: <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-xs-12 mt-3">
                                    <input class="from_area" type="text" name="name" placeholder="Your name " required id="name">
                                </div>
                                <div class="col-sm-3 col-xs-12 mt-3">
                                    <label for="father_name"> Father's name: <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-xs-12 mt-3">
                                    <input class="from_area" type="text" name="father_name" placeholder="Father's name" id="father_name" required="">
                                </div>
                                <div class="col-sm-3 col-xs-12 mt-3">
                                    <label for="mother_name"> Mother's name <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-xs-12 mt-3">
                                    <input class="from_area" type="text" name="mother_name" placeholder="Mother's name" id="mother_name" required="">
                                </div>
                                <div class="col-sm-3 col-xs-12 mt-3">
                                    <label for="occupation"> Occupation: <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-xs-12 mt-3">
                                    <input class="from_area" type="text" name="occupation" placeholder="Occupation " id="occupation" required="">
                                </div>
                                <div class="col-sm-3 col-xs-12 mt-3">
                                    <label for="education_qualification"> Eduactional qualification: <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-xs-12 mt-3">
                                    <input class="from_area" type="text" name="education_qualification" placeholder="Education qualification  " id="education_qualification" required="">
                                </div>
                                <div class="mt-5">

                                </div>
                                <div class="col-sm-3 col-xs-12">
                                    <p> <span class="text-danger"></span></p>
                                </div>
                                <div class="col-sm-9 col-xs-12 mb-5">
                                    <div class="row mt-5" id="address_area">
                                        <div class="col-lg-6">
                                            <p class="font-weight-bold"> Permanent address: </p> <br>
                                            <div class="mt-1">
                                                <label for="permanent_house"> House no: </label>
                                                <input contenteditable="py-2 px-1" type="text" class="" placeholder="if available" id="permanent_house" name="permanent_house">
                                            </div>
                                            <div class="mt-3">
                                                <label for="permanent_road"> Road no:  </label>
                                                <input contenteditable="py-2 px-1" type="text" class="" placeholder="Road no" id="permanent_road" name="permanent_road">
                                            </div>
                                            <div class="mt-3">
                                                <label for="permanent_village"> Village: <span class="text-danger">*</span></label>
                                                <input contenteditable="py-2 px-1" type="text" placeholder="Village" class="" id="permanent_village" name="permanent_village" required="">
                                            </div>
                                            <div class="mt-3">
                                                <label for="permanent_post"> Post:  <span class="text-danger">*</span></label>
                                                <input contenteditable="py-2 px-1" type="text" placeholder="post" class="" id="permanent_post" name="permanent_post" required="">
                                            </div>
                                            <div class="mt-3">
                                                <label for="permanent_up"> Thana: <span class="text-danger">*</span></label>
                                                <input contenteditable="py-2 px-1" type="text" placeholder="Thana" class="" name="permanent_up" id="permanent_up" required="">
                                            </div>
                                            <div class="mt-3">
                                                <label for="permanent_dist"> District: <span class="text-danger">*</span></label>
                                                <input contenteditable="py-2 px-1" type="text" placeholder="District" class="" id="permanent_dist" name="permanent_dist" required="">
                                            </div>
                                            <div class="mt-3">
                                                <label for="permanent_post_code"> Postal code:  <span class="text-danger">*</span> </label>
                                                <input contenteditable="py-2 px-1" type="text" placeholder="Postal code " class="" id="permanent_post_code" name="permanent_post_code" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6" id="presend">
                                            <p class="font-weight-bold"> Current address <br>
                                            <input type="checkbox" name="same_as" id="same_as"> <span style="font-size: 12px">Same As Permanent Address</span>
                                            </p>
                                            <div class="mt-3">
                                                <label for="present_house"> House no: </label>
                                                <input contenteditable="py-2 px-1" type="text" class="" placeholder="if available" id="present_house"  name="present_house">
                                            </div>
                                            <div class="mt-3">
                                                <label for="present_road"> Road no:  </label>
                                                <input contenteditable="py-2 px-1" type="text" class="" placeholder="Road no" id="present_road" name="present_road">
                                            </div>
                                            <div class="mt-3">
                                                <label for="present_village"> Village: <span class="text-danger">*</span></label>
                                                <input contenteditable="py-2 px-1" type="text" placeholder="Village" class="" id="present_village" name="present_village" required="">
                                            </div>
                                            <div class="mt-3">
                                                <label for="present_post"> Post:  <span class="text-danger">*</span></label>
                                                <input contenteditable="py-2 px-1" type="text" placeholder="Post" class="" name="present_post" id="present_post" required="">
                                            </div>
                                            <div class="mt-3">
                                                <label for="present_up"> Thana: <span class="text-danger">*</span></label>
                                                <input contenteditable="py-2 px-1" type="text" placeholder="Thana" name="present_up" id="present_up" required="">
                                            </div>
                                            <div class="mt-3">
                                                <label for="present_dist"> District <span class="text-danger">*</span></label>
                                                <input contenteditable="py-2 px-1" type="text" placeholder="District " class="" id="present_dist" name="present_dist" required="">
                                            </div>
                                            <div class="mt-3">
                                                <label for="present_post_code"> Postal code:   <span class="text-danger">*</span> </label>
                                                <input contenteditable="py-2 px-1" type="text" placeholder="Postal code" class="" id="present_post_code" name="present_post_code" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-12 mt-2">
                                    <label for="mobile_no"> Mobile No: <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-xs-12 mt-2">
                                    <input class="from_area" type="text" placeholder="01*********" name="mobile_no" id="mobile_no" required="">
                                </div>
                                <div class="col-sm-3 col-xs-12 mt-2">
                                    <label for="alternate_mobile"> Alternate mobile no: </label>
                                </div>
                                <div class="col-sm-9 col-xs-12 mt-2">
                                    <input class="from_area" type="text" placeholder="01********* " name="alternate_mobile" id="alternate_mobile">
                                </div>
                                <div class="col-sm-3 col-xs-12 mt-2">
                                    <label for="email"> E-mail: <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-xs-12 mt-2">
                                    <input class="from_area" type="email" placeholder="name@mail.com  " name="email" id="email" required="">
                                </div>
                                <div class="col-sm-3 col-xs-12 mt-2">
                                    <label for="interested_dist"> Working district: <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-xs-12 mt-2">
                                    <input class="from_area" type="text" name="interested_dist" placeholder="Working district" id="interested_dist" required="">
                                </div>
                                <div class="col-sm-3 col-xs-12 mt-2">
                                    <label for="interested_up"> Working thana: <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-xs-12 mt-2">
                                    <input class="from_area" type="text" name="interested_up" placeholder="Working thana" id="interested_up" required="">
                                </div>
                                <div class="col-lg-3 col-md-3"></div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="custom-control custom-checkbox mt-5">
                                        <input type="checkbox" class="custom-control-input" id="terms_agree" name="terms_agree" required="" data-parsley-errors-container="#terms_agree_error">
                                        <label class="custom-control-label ml-4 mt-2" for="terms_agree">I promise all the information given above is correct </label>
                                        <span id="terms_agree_error"></span>
                                    </div>
                                    <div class="col-lg-3 col-md-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container py-3 bg-white" style="width: 100%; padding-right: 10%; padding-left: 10%">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <p class="document">Upload document:</p>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <select class="" name="document_type" id="select_another" required=""> Select one
                            <option value=""> select one </option>
                            <option value="Passport"> Passport </option>
                            <option value="Birth_Certificate"> Birth certificate</option>
                            <option value="NID"> NID card </option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="" id="front_end" style="display: none">
<br>
                            <input class="form-control-file" type="file" name="document_fornt" id="document_fornt">
                            <span class="text-muted" id="document_fornt_end_help">Upload Your Nid's Frontend Image</span>

                    </div>
                    <div  id="backend" style="display: none;">
                        <div class="col-9 px-0">
                          <br>
                            <input class="form-control-file" type="file" name="document_back" id="document_fornt">
                            <span class="text-muted" id="document_back_end_help">Upload Your Nid's Backend Image</span>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3">
                        <p class="prothisthan_name mt-2">Organization name </p>
                    </div>
                    <div class="col-lg-3">
                        <input type="text" class="protgisthan" placeholder="if available" name="bussiness_name">
                    </div>
                    <div class="col-lg-2">
                        <p class="treand"> Trade lisence</p>
                    </div>
                    <div class="col-lg-4" style="margin-top: 10px">
                            <input type="file" class="form-control-file" id="tread_license" name="tread_license">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 my-3">
                        <input type="text" class="name protgisthan py-2" placeholder="E-signatuire (your full name):" name="signature" id="signature" required="">
                    </div>
                </div>
                <div class="row">
                <div class="col-8 mx-auto mt-2 mt-3 mb-5">
                    <button class="btn bg-success text-white" style="width: 100%;" type="submit" id="submit" disabled=""> Submit</button>
                    <button class="btn bg-info text-white" style="width: 100%; display: none; " id="submiting" disabled="" > Submitting</button>
                </div>
                </div>
            </div>
        </form>
        <!--     js  -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="js/parsley.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
