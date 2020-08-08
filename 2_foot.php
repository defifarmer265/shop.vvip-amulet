<footer class="bg-darker text-white mb-4 mb-md-0" style="margin-top: 100px;">
    <div class="container-xl container-xl d-flex justify-content-center px-2 px-lg-0 px-sm-55">
        <div class="bg-secondary mx-1 mx-auto mx-sm-3 mx-xl-0 position-relative px-2 px-sm-5 py-2 row shadow-lg" style="top: -20px; max-width: 500px;">
            <div class="col-12">
                <p class="mb-0 text-center">
                    <span>©</span><span class="copyright-year">2020</span><span>&nbsp;</span><span>VVIP-Amulet.com</span><span>.&nbsp;</span><span>All Rights Reserved.</span></p>
            </div>
        </div>
    </div>
</footer>

<footer id="shopping-tab" class="position-fixed d-md-table" style="bottom: 0; box-shadow: 0 -5px 10px rgba(0,0,0,0.1);">
    <nav class="navbar py-0 bg-white">
        <ul class="navbar-nav flex-row row gx-0 flex-lg-column-reverse">
            <li class="nav-item col">
                <a href="#user-menu" data-toggle="modal" class="nav-link d-flex flex-column justify-content-center align-items-center link-dark py-md-2 py-lg-3 border-right" style="padding: 7.5px 15px 5px;">
                    <i class="fas fa-bars"></i>
                    <span class="text" style="margin-top: 2px; font-size: 10px;">Menu</span>
                </a>
            </li>
            <li class="nav-item col">
                <a href="#search-dialog" data-toggle="modal" class="nav-link d-flex flex-column justify-content-center align-items-center link-dark py-md-2 py-lg-3 border-right" style="padding: 7.5px 15px 5px;">
                    <i class="fas fa-search"></i>
                    <span class="text" style="margin-top: 2px; font-size: 10px;">Search</span>
                </a>
            </li>
            <li class="nav-item col">
                <a href="#" class="nav-link d-flex flex-column justify-content-center align-items-center link-dark py-md-2 py-lg-3 border-right" style="padding: 7.5px 15px 5px;">
                    <i class="fas fa-user"></i>
                    <span class="text" style="margin-top: 2px; font-size: 10px;">Profile</span>
                </a>
            </li>
            <li class="nav-item col">
                <a href="#cart-dialog" data-toggle="modal" class="nav-link d-flex flex-column justify-content-center align-items-center link-dark py-md-2 py-lg-3" style="padding: 7.5px 15px 5px;">
                    <i class="fas fa-shopping-bag"></i>
                    <span class="badge bg-danger ml-4 mt-1 position-absolute rounded-pill text-white" style="font-size: 9px; top: 0;">0</span>
                    <span class="text" style="margin-top: 2px; font-size: 10px;">Cart</span>
                </a>
            </li>
        </ul>
    </nav>
</footer>

<!-- Search -->
<div class="modal fade" id="search-dialog" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg [modal-dialog-centered]" role="document">
        <div class="modal-content bg-transparent border-0">
            <!-- <div class="modal-body">
                    <div class="container-xl">
                        Add rows here
                    </div>
                </div> -->
            <form id="search-tab">
                <div class="input-group input-group-lg">
                    <input id="search-input" type="search" name="search" class="form-control" placeholder="ระบุสิ่งที่ต้องการค้นหา" style="border-radius: 100px 0 0 100px;">
                    <button class="btn btn-dark" type="submit" style="border-radius: 0 100px 100px 0;"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Cart -->
<div class="modal fade" id="cart-dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark">ตะกร้าสินค้าของคุณ</h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
        </div>
    </div>
</div>

<!-- Lang -->
<div class="modal fade" id="select-lang-dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header align-items-center justify-content-center rounded-0">
                <h4 class="text-black-50 mb-0">Choose your language</h4>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-around py-3">
                    <a href="?lang=en" class="mx-1 d-inline-flex flex-column align-items-center text-decoration-none" title="English">
                        <span class="flag-icon flag-icon-gb" style="background-size: 50px; width: 50px; height: 37px;"></span>
                        <p class="text-center mb-1 mt-2 text-dark">English</p>
                        <p class="mb-0 text-black-50 text-center">English</p>
                    </a>
                    <a href="?lang=cn" class="mx-1 d-inline-flex flex-column align-items-center text-decoration-none" title="Chinese">
                        <span class="flag-icon flag-icon-cn" style="background-size: 50px; width: 50px; height: 37px;"></span>
                        <p class="text-center mb-1 mt-2 text-dark">中文</p>
                        <p class="mb-0 text-black-50 text-center">Chinese</p>
                    </a>
                    <a href="?lang=th" class="mx-1 d-inline-flex flex-column align-items-center text-decoration-none" title="Thai">
                        <span class="flag-icon flag-icon-th" style="background-size: 50px; width: 50px; height: 37px;"></span>
                        <p class="text-center mb-1 mt-2 text-dark">ภาษาไทย</p>
                        <p class="mb-0 text-black-50 text-center">Thai</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Login / Register -->
<div class="modal fade text-dark" id="welcome-dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div style="background-image: url(https://live.staticflickr.com/861/42789598015_bd5619758f_b.jpg); background-repeat: no-repeat; background-position: center; background-size: cover;">
                <div class="modal-header align-items-center justify-content-between py-4" style="background-color: rgba(255,255,255,0.5);">
                    <div style="visibility: hidden;">
                        <button class="btn btn-sm">
                            <span class="flag-icon flag-icon-gb rounded-circle shadow" style="background-size: 47px;width: 35px;height: 35px;"></span>
                        </button>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="//vvip-amulet.com/assets/img/logo_transparent.png" class="mr-2" style="width: 40px;" alt="VVIP-Amulet">
                        <h2 class="text-light font-weight-bold text-border font-italic mb-0">VVIP-Amulet</h2>
                    </div>
                    <div>
                        <a href="#lang" data-toggle="collapse" class="btn btn-sm">
                            <span class="flag-icon flag-icon-gb rounded-circle shadow" style="background-size: 47px;width: 35px;height: 35px;"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div id="LoginRegister" class="overflow-auto">
                <div class="collapse show" id="Intro" data-parent="#LoginRegister">
                    <div class="modal-body">
                        <h2 class="h5 my-4 text-center">เข้าสู่ระบบด้วยบัญชี Social</h2>

                        <div class="row m-0">
                            <div class="col-md-6"><a href="https://www.facebook.com/v3.1/dialog/oauth?client_id=710340632672316&amp;state=485154c29e69dc667508e8142e9299a0&amp;response_type=code&amp;sdk=php-sdk-5.6.1&amp;redirect_uri=https%3A%2F%2Fvvip-amulet.com%2FFB_Login_CallBack.php&amp;scope=email" style="font-size: 14px;" class="py-3 btn rounded-pill btn-primary btn-block my-2"><i class="fab fa-facebook fa-lg mr-3"></i>Sign in with Facebook</a></div>
                            <div class="col-md-6">
                                <a href="#" style="font-size: 14px;" class="py-3 btn rounded-pill btn-success btn-block my-2"><i class="fab fa-weixin fa-lg mr-3"></i>Sign in with WeChat</a>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mx-n3">
                            <div class="align-items-center d-flex justify-content-center my-5 text-center w-100" style="height: 1px; background: lightgray;">
                                <span class="bg-white px-3 h5 mb-0 text-muted">หรือ</span>
                            </div>
                        </div>

                        <div class="text-center mb-4">
                            <a class="btn btn-light rounded-pill btn-lg" data-toggle="collapse" href="#login">เข้าสู่ระบบ</a>
                            <a class="btn btn-light rounded-pill btn-lg" data-toggle="collapse" href="#register">สมัครสมาชิก</a>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="login" data-parent="#LoginRegister">
                    <div class="modal-header align-items-center justify-content-between rounded-0">
                        <button class="btn text-primary" data-toggle="collapse" data-target="#Intro"><i class="fas fa-angle-left fa-2x"></i></button>
                        <h3 class="text-black-50 mb-0">เข้าสู่ระบบ</h3>
                        <button class="btn" style="visibility: hidden;"><i class="fas fa-angle-left fa-2x"></i></button>
                    </div>
                    <div class="modal-body text-center py-5 overflow-hidden">
                        <form id="loginform">
                            <div class="row text-left justify-content-center">
                                <div class="col-sm-12 px-md-5">
                                    <div class="form-label-group">
                                        <input id="login-username" type="text" name="user" placeholder="ID / E-mail" class="form-control" required="">
                                        <label class="form-label" for="login-username">User ID / E-mail</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 px-md-5">
                                    <div class="form-label-group">
                                        <input id="login-password" type="password" name="pass" placeholder="Password" class="form-control" required="">
                                        <label class="form-label" for="login-password">Password</label>
                                    </div>
                                </div>
                                <div class="col-auto mb-4 px-md-5">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember" checked="">
                                        <label class="form-label custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 px-md-5">
                                <button type="submit" class="btn btn-success btn-lg rounded-pill btn-block"><i class="fas fa-sign-in-alt fa-1x mr-3 text-white-50"></i>เข้าสู่ระบบ</button>
                                <div class="mt-2 text-muted">Forgotten your password? <a href="#ForgotPassword" data-dismiss="modal" data-toggle="modal">Click here!</a></div>
                            </div>
                        </form>

                    </div>

                </div>
                <div class="collapse" id="register" data-parent="#LoginRegister">
                    <div class="modal-header align-items-center justify-content-between rounded-0">
                        <button class="btn text-primary" data-toggle="collapse" data-target="#Intro"><i class="fas fa-angle-left fa-2x"></i></button>
                        <h3 class="text-black-50 mb-0">สมัครสมาชิก</h3>
                        <button class="btn" style="visibility: hidden;"><i class="fas fa-angle-left fa-2x"></i></button>
                    </div>
                    <div class="modal-body py-5 overflow-hidden">
                        <form id="registerform">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-label-group">
                                        <input id="register-username" type="email" name="email" placeholder="Email" class="form-control" required="">
                                        <label class="form-label" for="register-username">Email <span class="small text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6 pr-sm-2">
                                    <div class="form-label-group">
                                        <input id="register-password" type="password" name="password" placeholder="Password" class="form-control" required="">
                                        <label class="form-label" for="register-password">Password <span class="small text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6 pl-sm-2">
                                    <div class="form-label-group">
                                        <input id="register-repassword" type="password" name="repassword" placeholder="Confirm Password" class="form-control" required="">
                                        <label class="form-label" for="register-repassword">Confirm Password <span class="small text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6 pr-sm-2">
                                    <div class="form-label-group">
                                        <input id="register-upline" maxlength="8" type="text" name="upline" onkeyup="checkUpline()" placeholder="Referral account" class="form-control text-uppercase">
                                        <label class="form-label" for="register-upline">Referral account</label>
                                    </div>
                                </div>
                                <script>
                                    var registerData;
                                    // fetch('action.php?action=LoadCountryUpline')
                                    //     .then((res) => {
                                    //         if (!res.ok) throw new Error(res.statusText);
                                    //         return res.json();
                                    //     }).then((data) => {
                                    //         if (data.success) {
                                    //             registerData = data.data;
                                    //         } else {
                                    //             console.error(data.log);
                                    //         }
                                    //     }).catch((err) => {
                                    //         console.error(err);
                                    //     })

                                    function checkUpline() {
                                        var input = $(event.target);
                                        if (input.val() !== '') {
                                            $('#upline_info').hide().find(':input').prop('disabled', true);
                                            var countryCode = input.val().toUpperCase().substring(0, 2);

                                            $('#register-payment').show();
                                            $('#bank-info').html(registerData[countryCode]['Payment_Detail']);
                                            $('#payment-qrcode').show().attr('src', `upload/upgrade/${registerData[countryCode]['QR_Code']}`);
                                        } else {
                                            $('#register-payment').hide();
                                            if ($('#register-account-type option:selected').val() !== '') {
                                                $('#upline_info').show().find(':input').prop('disabled', false);
                                            } else {
                                                $('#upline_info').show().find(':input').prop('disabled', true);
                                            }
                                        }
                                    }
                                </script>
                                <div class="col-sm-6 mb-3 pl-sm-2">
                                    <div class="form-label-group">
                                        <select name="type" id="register-account-type" class="form-select font-weight-bold py-2 px-4 rounded-pill" required="required" style="height: 40.7px;" onchange="chooseRegisterLevel()">
                                            <option value="normal" selected="">Normal account</option>
                                            <option value="silver">Silver level account</option>
                                            <option value="gold">Gold level account</option>
                                            <option value="diamond">Diamond level account</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="register-additional-form" style="display: none;">

                                <div class="table-responsive my-4 shadow-sm">
                                    <table class="table table-sm table-striped table-dark table-bordered mb-0 text-nowrap table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center align-middle" rowspan="2">Account level</th>
                                                <th class="text-center align-middle border-bottom-0" colspan="4">Access rights</th>
                                                <th class="text-center align-middle" rowspan="2">Service rate</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Create<br>threads</th>
                                                <th class="text-center">Join<br>auctions</th>
                                                <th class="text-center">Create<br>auctions</th>
                                                <th class="text-center">Open<br>shop</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="align-middle">Normal</th>
                                                <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                <td class="text-center align-middle"><i class="fas fa-times text-danger"></i></td>
                                                <td class="text-center align-middle"><i class="fas fa-times text-danger"></i></td>
                                                <td class="text-center align-middle"><i class="fas fa-times text-danger"></i></td>
                                                <td class="text-center align-middle">Free</td>
                                            </tr>
                                            <tr>
                                                <th class="align-middle">Silver</th>
                                                <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                <td class="text-center align-middle"><i class="fas fa-times text-danger"></i></td>
                                                <td class="text-center align-middle"><i class="fas fa-times text-danger"></i></td>
                                                <td class="text-center align-middle">1,500</td>
                                            </tr>
                                            <tr>
                                                <th class="align-middle">Gold</th>
                                                <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                <td class="text-center align-middle"><i class="fas fa-times text-danger"></i></td>
                                                <td class="text-center align-middle">2,000</td>
                                            </tr>
                                            <tr>
                                                <th class="align-middle">Diamond</th>
                                                <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                <td class="text-center align-middle">4,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row mt-5">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">First name</label>
                                        <input type="text" name="FirstName" class="form-control" placeholder="First Name" value="" required="" disabled="">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Last name</label>
                                        <input type="text" name="LastName" class="form-control" placeholder="Last name" value="" required="" disabled="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Gender</label>
                                        <select name="Sex" class="form-control" required="" disabled="">
                                            <option name="male">Male</option>
                                            <option name="female">Female</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Birthday</label>
                                        <input type="date" name="Birthday" class="form-control" placeholder="Birthday" value="" required="" disabled="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Phone number</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">+</span></div>
                                            <input type="text" onkeyup="$(this).val(this.value.replace(/[^0-9]+/g,''))" name="Tel" class="form-control" placeholder="Phone Number" value="" required="" disabled="">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea name="Address" class="form-control" placeholder="Address" rows="4" required="" disabled=""></textarea>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Payment information</label>
                                        <textarea name="Bank_Account" class="form-control" placeholder="Bank account, Paypal, Alipay" required="" disabled=""></textarea>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="mb-3 col-md-8">
                                        <label class="form-label">Selfie with ID card or passport</label>
                                        <input type="file" id="inputimage" name="image" class="form-control-file" accept="image/*" required="" disabled="">
                                        <small class="text-muted">Support only: .JPG .PNG .BMP .GIF</small>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                                        <figure>
                                            <img id="image_upload_preview" src="https://placehold.it/100x100" alt="Image preview" class="d-block mx-auto mw-100 img-thumbnail">
                                            <figcaption class="text-center mt-2">Image preview</figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <div class="row" id="upline_info">
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Country</label>
                                        <!-- <input type="text" maxlength="2" name="Country_Code" placeholder="Country Code" class="form-control" value="" required="" onkeyup="this.value = this.value.toLocaleUpperCase();" disabled> -->
                                        <select name="Country_Code" onchange="chooseUpline()" class="form-select" required="" disabled="">
                                            <option value="" selected="" disabled="">Please choose</option>
                                            <option value="TH">Thailand</option>
                                            <option value="CN">China</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="ML">Malaysia</option>
                                        </select>
                                        <script>
                                            function chooseUpline() {
                                                var country = event.target.value;
                                                var upline = $('#register_upgrade_upline');
                                                $('#register-payment').show();
                                                upline.empty();
                                                $.each(registerData[country]['Upline'], function(index, el) {
                                                    upline.append(
                                                        $('<option/>').val(el['Upline_Code']).text(country + el['Upline_Code'] + ' ' + el['Upline_Name'])
                                                    );
                                                });
                                                $('#bank-info').html(registerData[country]['Payment_Detail']);
                                                $('#payment-qrcode').show().attr('src', `upload/upgrade/${registerData[country]['QR_Code']}`);
                                            }
                                        </script>
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Header code</label>
                                        <!-- <input type="text" maxlength="2" name="Upline_Code" placeholder="Agent Code" class="form-control" required="" value="" onkeyup="this.value = this.value.toLocaleUpperCase();" disabled> -->
                                        <select id="register_upgrade_upline" name="Upline_Code" class="form-select" required="" disabled="">
                                            <option value="" selected="" disabled="">Please choose</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-4 align-self-end">
                                        <a href="contact-us.php" class="btn" target="_blank">Ask Webmaster</a>
                                    </div>
                                </div>

                                <figure id="register-payment" style="display: none;">
                                    <hr class="mx-n3 mt-5 mb-4">
                                    <figcaption class="text-center h4 mb-3">Transfer sign up fee to </figcaption>
                                    <div id="bank-info"></div>
                                    <img src="" style="display: none;" alt="Registration payment information" class="img-fluid rounded" id="payment-qrcode">
                                    <hr class="mx-n3 mb-5 mt-4">
                                </figure>

                                <div class="mb-3">
                                    <label class="form-label">Transfer slip</label>
                                    <input type="file" name="Slip" class="form-control-file" accept="image/*" required="" disabled="">
                                    <small class="text-muted">Support only: .JPG .PNG .BMP .GIF</small>
                                </div>
                            </div>

                            <div class="mb-3 text-center custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="terms" id="terms" required="">
                                <label class="form-label custom-control-label" for="terms">
                                    I agree to <a href="#termsdialog" data-toggle="modal">Terms and conditions.</a>
                                </label>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-lg btn-block rounded-pill">Create account</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="collapse" id="lang" data-parent="#LoginRegister">
                    <div class="modal-header align-items-center justify-content-between rounded-0">
                        <button class="btn text-primary" data-toggle="collapse" data-target="#Intro"><i class="fas fa-angle-left fa-2x"></i></button>
                        <h3 class="text-black-50 mb-0">Change language</h3>
                        <button class="btn" style="visibility: hidden;"><i class="fas fa-angle-left fa-2x"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-around py-3">
                            <a href="?welcome&amp;lang=en" class="mx-1 d-inline-flex flex-column align-items-center text-decoration-none" title="English">
                                <span class="flag-icon flag-icon-gb" style="background-size:  50px; width:  50px; height: 37px;"></span>
                                <p class="text-center mb-1 mt-2 text-dark">English</p>
                                <p class="mb-0 text-black-50 text-center">English</p>
                            </a>
                            <a href="?welcome&amp;lang=cn" class="mx-1 d-inline-flex flex-column align-items-center text-decoration-none" title="Chinese">
                                <span class="flag-icon flag-icon-cn" style="background-size:  50px; width:  50px; height: 37px;"></span>
                                <p class="text-center mb-1 mt-2 text-dark">中文</p>
                                <p class="mb-0 text-black-50 text-center">Chinese</p>
                            </a>
                            <a href="?welcome&amp;lang=th" class="mx-1 d-inline-flex flex-column align-items-center text-decoration-none" title="Thai">
                                <span class="flag-icon flag-icon-th" style="background-size:  50px; width:  50px; height: 37px;"></span>
                                <p class="text-center mb-1 mt-2 text-dark">ภาษาไทย</p>
                                <p class="mb-0 text-black-50 text-center">Thai</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="user-menu" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-sidebar">
        <div class="modal-content bg-dark border-left border-top-0 border-bottom-0 border-right-0 border-secondary">
            <div class="d-flex justify-content-center mt-4">
                <img src="//dummyimage.com/300x300" class="border border-secondary rounded-circle" alt="" style="height: 150px;width: 150px;margin-bottom: -40px;z-index: 1;/* filter: drop-shadow(0 0 0px black); */box-shadow: 0 0 0px 5px white;">
            </div>
            <div class="modal-body border-top border-secondary pt-5 flex-grow-0">
                <h4 class="text-center mt-3">Tommy Dettmar</h4>
                <h5 class="text-center"><span class="badge bg-warning text-body shadow-sm" style="background-image: linear-gradient(140deg, rgba(0,0,0,0.25), rgba(255,255,255,0.25));">Gold</span></h5>
            </div>
            <nav class="navbar flex-fill align-items-start p-0">
                <ul class="navbar-nav w-100 mb-auto">
                    <li class="nav-item"><a href="./" class="nav-link link-light mb-0 py-3 px-4 px-sm-5"><i class="fas fa-home mr-2"></i>หน้าแรก</a></li>
                    <li class="nav-item"><a href="./shop.php" class="nav-link link-light mb-0 py-3 px-4 px-sm-5"><i class="fas fa-store mr-2"></i>ร้านค้า</a></li>
                    <li class="nav-item"><a href="./news.php" class="nav-link link-light mb-0 py-3 px-4 px-sm-5"><i class="fas fa-newspaper mr-2"></i>ข่าวสาร</a></li>
                    <li class="nav-item"><a href="./rules.php" class="nav-link link-light mb-0 py-3 px-4 px-sm-5"><i class="fas fa-exclamation-circle mr-2"></i>กฎระเบียบ</a></li>
                    <li class="nav-item"><a href="./contact.php" class="nav-link link-light mb-0 py-3 px-4 px-sm-5"><i class="fas fa-phone mr-2"></i>ติดต่อ</a></li>
                </ul>
                <ul class="navbar-nav w-100 mt-auto">
                    <li class="nav-item"><a href="#" class="nav-link btn btn-danger mb-0 px-4 px-sm-5"><i class="fas fa-sign-out-alt mr-2"></i>ออกจากระบบ</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
<script>
    function chooseRegisterLevel() {
        const select = event.target;
        const level = select.querySelector('option:checked').value;
        const additionalForm = document.getElementById('register-additional-form');
        const tags = ['input', 'textarea', 'select'];
        additionalForm.style.display = level !== 'normal' ? 'block' : 'none';
        for (const input of tags) {
            additionalForm
                .querySelectorAll(input)
                .forEach((el, index, arr) => el.disabled = level !== 'normal' ? false : true);
        }
    }
</script>
<script>
    const mainNav = document.getElementById('main-nav');
    const mainNavCollapse = new bootstrap.Collapse(mainNav, { toggle: false });
    const closeNavMenu = e => !!e.target.closest('#main-nav') || mainNavCollapse.hide();
</script>