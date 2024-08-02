<?php include 'header.php' ?>
<main class="main_area">

    <!--    breadcrumb-->
    <div class="breadcrumb_area" style="background-image: url(assets/img/breadcrumb/breadcrumb-bg.png)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_inner">
                        <p class="breadcrumb_inner_title">حساب کاربری</p>
                        <ul class="breadcrumb_inner_nav">
                            <li><a href="home.php">خانه</a></li>
                            <li>حساب کاربری</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    profile content-->
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
                        <p class="account_form_title">حساب کاربری</p>
                        <div class="account_form_content">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group required">
                                    <label class="col-sm-2" for="input-firstname">نام</label>
                                    <div class="col-sm-10 pl-0">
                                        <input type="text" name="firstname" value="امیر"
                                               id="input-firstname" readonly>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2" for="input-lastname">نام خانودگی</label>
                                    <div class="col-sm-10 pl-0">
                                        <input type="text" name="lastname" value="سعیدی"
                                               id="input-lastname" readonly>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2" for="input-email">ایمیل</label>
                                    <div class="col-sm-10 pl-0">
                                        <input type="email" name="email" value="info@info.ccom"
                                               id="input-email" readonly>
                                    </div>
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
