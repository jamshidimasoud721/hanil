<?php include 'header.php' ?>
<main class="main_area">

    <!--    breadcrumb-->
    <div class="breadcrumb_area" style="background-image: url(assets/img/breadcrumb/breadcrumb-bg.png)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_inner">
                        <p class="breadcrumb_inner_title">ثبت نام</p>
                        <ul class="breadcrumb_inner_nav">
                            <li><a href="home.php">خانه</a></li>
                            <li>ثبت نام</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    register content-->
    <div class="account_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside class="sidebar_wrapper">
                        <div class="sidebar_wrapper_title"><span>داشبورد</span></div>
                        <ul class="sidebar_wrapper_category">
                            <li><a href="" class="active">ورود</a></li>
                            <li><a href="">ثبت نام</a></li>
                            <li><a href="">پروفایل</a></li>
                            <li><a href="">تغییر رمز عبور</a></li>
                            <li><a href="">تاریخجه سفارشات</a></li>
                            <li><a href="">خروج از حساب کاربری</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div>
                        <p class="account_form_title">ثبت نام حساب کاربری</p>
                        <div class="account_form_content">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group required">
                                    <label class="col-sm-2" for="input-firstname">نام</label>
                                    <div class="col-sm-10 pl-0">
                                        <input type="text" name="firstname" value="" placeholder="نام"
                                               id="input-firstname">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2" for="input-lastname">نام خانودگی</label>
                                    <div class="col-sm-10 pl-0">
                                        <input type="text" name="lastname" value="" placeholder="نام خانودگی"
                                               id="input-lastname">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2" for="input-email">ایمیل</label>
                                    <div class="col-sm-10 pl-0">
                                        <input type="email" name="email" value="" placeholder="ایمیل"
                                               id="input-email">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2" for="input-telephone">تلفن</label>
                                    <div class="col-sm-10 pl-0">
                                        <input type="tel" name="telephone" value="" placeholder="تلفن"
                                               id="input-telephone">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2" for="input-password">رمز عبور</label>
                                    <div class="col-sm-10 pl-0">
                                        <input type="password" name="password" value="" placeholder="رمز عبور"
                                               id="input-password">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2" for="input-confirm">تکرار رمز عبور</label>
                                    <div class="col-sm-10 pl-0">
                                        <input type="password" name="confirm" value="" placeholder="تکرار رمز عبور"
                                               id="input-confirm">
                                    </div>
                                </div>
                                <div type="submit" class="account_form_content_btn">
                                    <a href="#">ثبت نام</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
<?php include 'footer.php' ?>
