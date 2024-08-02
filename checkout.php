<?php include 'header.php' ?>
<main class="main_area">

    <!--    breadcrumb-->
    <div class="breadcrumb_area" style="background-image: url(assets/img/breadcrumb/breadcrumb-bg.png)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_inner">
                        <p class="breadcrumb_inner_title">پرداخت</p>
                        <ul class="breadcrumb_inner_nav">
                            <li><a href="home.php">خانه</a></li>
                            <li>پرداخت</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    list content-->
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
                            <li><a href="">سبد خرید</a></li>
                            <li><a href="">خروج از حساب کاربری</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div>
                        <p class="account_form_title">سبد خرید</p>
                        <form action="">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">محصول</th>
                                    <th scope="col">قیمت</th>
                                    <th scope="col">تعداد</th>
                                    <th scope="col">جمع</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>لامپ</td>
                                    <td>۲۰۰ تومان</td>
                                    <td>۲</td>
                                    <td>۴۰۰ تومان</td>
                                </tr>
                                <tr>
                                    <td>لامپ</td>
                                    <td>۲۰۰ تومان</td>
                                    <td>۲</td>
                                    <td>۴۰۰ تومان</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th colspan="2">جمع کل</th>
                                    <th colspan="2">۱۰۰۰ تومان</th>
                                </tr>
                                </tfoot>
                            </table>
                            <div type="submit" class="account_form_content_btn validateCaptcha">
                                <a href="#">پرداخت</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<?php include 'footer.php' ?>
