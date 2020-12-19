<div class="section-area section-sp3 ovpr-dark bg-fix appointment-box"
     style="background-image:url({{url('front/assets/images/background/bg1.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-bx style1 text-white text-center">
                <h2 class="title-head">عضویت سریع</h2>
                <p>
                    می توانید با عضویت در این سامانه از امکانات آن بهره مند گردید
                </p>
            </div>
        </div>
        <form class="contact-bx ajax-form" action="http://educhamp.themetrades.com/demo/{{url('front/assets/script/contact.php')}}">
            <div class="ajax-message"></div>
            <div class="row placeani">
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="input-group">
                            <label>نام</label>
                            <input name="name" type="text" required class="form-control valid-character">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="input-group">
                            <label>نام خانوادگی</label>
                            <input name="family" type="text" required class="form-control valid-character">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="input-group">
                            <label>پست‌الکترونیک</label>
                            <input name="email" type="email" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="input-group">
                            <label>شماره</label>
                            <input name="phone" type="text" required class="form-control int-value">
                        </div>
                    </div>
                </div>




                <div class="col-lg-12">
                    <div class="form-group">
                        <div class="input-group">
                            <label>اینجا بنویسید</label>
                            <textarea name="message" rows="4" class="form-control" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button name="submit" type="submit" value="Submit" class="btn button-md">ارسال پیام</button>
                </div>
            </div>
        </form>
    </div>
    <img src="{{url('front/assets/images/background/appointment-bg.png')}}" class="appoint-bg" alt="" />
</div>
