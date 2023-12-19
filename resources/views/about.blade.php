@extends('layouts.master')


@section('style')
    <link href="css/style-about.css" rel="stylesheet" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
@endsection

@section('body')
<div style="width:100%;display: flex;justify-content: space-evenly;align-items: center;">
    <div>کارخانه تولید لوله و پروفیل ستاره فولاد آسیا</div>
    <!-- slider -->



    <div x-data="carouselAbout" style="position:relative;width:30%;" x-init="setInterval(() => ActiveSlide = ActiveSlide === slides.length ? 1 : ActiveSlide + 1 , 5000)">
        <div class="right" @click="next">
            <span class="icon-arrow-right"></span>
        </div>
        <div style="height:20vw;">
            <template x-for="(slide ,index) in slides" :key="index">
                <section  class="sliderabout" x-show="ActiveSlide === index + 1" x-transition>
                    <img :src="slide.image" style="border-radius: 15px;width:100%;">
                    <!-- <section>
                        <p>rtgwhrth</p>
                        <p>wrthwrthw</p>
                    </section> -->
                </section>
            </template>
        </div>
        <div>
            <section>
                <template x-for="(slide ,index) in slides" :key="index">
                    <span class="icon-dot-circle-o " :class="{'ActiveDot icon-circle' : ActiveSlide === index + 1 }" @click="ActiveSlide = index + 1"></span>
                </template>
            </section>
        </div>
        <div class="left" @click="prev">
            <span class="icon-arrow-left"></span>
        </div>
    </div>



    <!-- slider -->
</div>







<div style="width: 70%;margin: auto;text-align: center;">
    <h1>
        درباره ما
    </h1>
    <p>
    برادران نیک باف در سال1380  با تاسیس شرکت بازرگانی بنام تجاری نیک باف ,در زمینه صادرات کالاهای ساختمانی به کشورهای cis  فعالیت خود را آغاز کرد و با کمک تجربه چندین ساله مدیران این شرکت در زمینه بازرگانی و صادرات , موفق به کسب رتبه اول در میان صادرکنندگان استان خراسان رضوی در سال 1395 گردیدند.در امتداد راه این شرکت به لطف تلاش گروهی و انگیره پیشرفت روز افزون و بهره گیری از نیروهای جوان و تحصیل کرده و با هدف تامین نیاز بازار داخلی در سال 1399  اقدام به تاسیس شرکت تولیدی و بازرگانی ستاره فولاد آسیا در زمینه تولید لوله و پروفیل در شهرک صنعتی بینالود استان خراسان رضوی گردید.
    </p>
</div>



<div class="body genealogy-body genealogy-scroll" style="direction:ltr;">
    <div class="genealogy-tree">
        <ul>
            <li>
                <a href="javascript:void(0);">
                    <div class="member-view-box">
                        <div class="member-image">
                            <img src="img/person/alinikbaf.jpg" alt="Member">
                            <div class="member-details">
                                <h3>آقای نیکباف</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <ul class="active">
                    <li>
                        <a href="javascript:void(0);">
                            <div class="member-view-box">
                                <div class="member-image">
                                    <img src="img/person/ghadamgahi.jpg" alt="Member">
                                    <div class="member-details">
                                        <h3>خانم قدمگاهی</h3>
                                        <p>مدیر حسابداری</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="img/person/zarabi.jpg" alt="Member">
                                            <div class="member-details">
                                                <h3>آقای ضرابی</h3>
                                                <p>حسابدار</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="img/person/oliai.jpg" alt="Member">
                                            <div class="member-details">
                                                <h3>خانم علیایی</h3>
                                                <p>حسابدار</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="https://static.vecteezy.com/system/resources/previews/002/275/847/non_2x/male-avatar-profile-icon-of-smiling-caucasian-man-vector.jpg" alt="Member">
                                            <div class="member-details">
                                                <h3>خانم عاملیان</h3>
                                                <p>حسابدار</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="https://static.vecteezy.com/system/resources/previews/002/275/847/non_2x/male-avatar-profile-icon-of-smiling-caucasian-man-vector.jpg" alt="Member">
                                            <div class="member-details">
                                                <h3>خانم حاجی بیگلو</h3>
                                                <p>حسابدار</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <div class="member-view-box">
                                <div class="member-image">
                                    <img src="img/person/rajabzadeh.jpg" alt="Member">
                                    <div class="member-details">
                                        <h3>آقای رجب زاده</h3>
                                        <p>مدیر تولید</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="https://static.vecteezy.com/system/resources/previews/002/275/847/non_2x/male-avatar-profile-icon-of-smiling-caucasian-man-vector.jpg" alt="Member">
                                            <div class="member-details">
                                                <h3>آقای خانی</h3>
                                                <p>مسئول انبار</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="https://static.vecteezy.com/system/resources/previews/002/275/847/non_2x/male-avatar-profile-icon-of-smiling-caucasian-man-vector.jpg" alt="Member">
                                            <div class="member-details">
                                                <h3>آقای دالاشانی</h3>
                                                <p>مسئول کنترل کیفیت</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="https://static.vecteezy.com/system/resources/previews/002/275/847/non_2x/male-avatar-profile-icon-of-smiling-caucasian-man-vector.jpg" alt="Member">
                                            <div class="member-details">
                                                <h3>آقای براتی</h3>
                                                <p>مسئول تاسیسات</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <div class="member-view-box">
                                <div class="member-image">
                                    <img src="img/person/haghani.jpg" alt="Member">
                                    <div class="member-details">
                                        <h3>آقای حقانی</h3>
                                        <p>مدیر فروش</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="img/person/abas.jpg" alt="Member">
                                            <div class="member-details">
                                                <h3>آقای عباسپور</h3>
                                                <p>کارشناس فروش</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="img/person/zarvandy.jpg" alt="Member">
                                            <div class="member-details">
                                                <h3>آقای زروندی</h3>
                                                <p>کارشناس فروش</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="img/person/faramrzy.jpg" alt="Member">
                                            <div class="member-details">
                                                <h3>خانم فرامرزی</h3>
                                                <p>کارشناس فروش</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">
    $(function () {
    $('.genealogy-tree ul').hide();
    $('.genealogy-tree>ul').show();
    $('.genealogy-tree ul.active').show();
    $('.genealogy-tree li').on('click', function (e) {
        var children = $(this).find('> ul');
        if (children.is(":visible")) children.hide('fast').removeClass('active');
        else children.show('fast').addClass('active');
        e.stopPropagation();
        });
    });
</script>

<h1>
    جوایز و افتخارات
</h1>
<div class="content">
    <div>
        <img src="img/iso/iso.jpg" />
        <p>عکس اول</p>
    </div>
    <div>
        <img src="img/iso/iso.jpg" />
        <p>عکس دوم</p>
    </div>
    <div>
        <img src="img/iso/iso.jpg" />
        <p>عکس سوم</p>
    </div>
    <div>
        <img src="img/iso/iso.jpg" />
        <p>عکس چهارم</p>
    </div>
    <div>
        <img src="img/iso/iso.jpg" />
        <p>عکس پنجم</p>
    </div>
</div>


<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1689.996618663625!2d59.34238111550925!3d35.96985979413016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfa!2s!4v1698914925654!5m2!1sfa!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>






@endsection