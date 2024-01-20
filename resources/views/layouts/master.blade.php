<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ستاره فولاد آسیا</title>

        <link href="css/style.css" rel="stylesheet" />
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
        <script src="js/alpine.js"></script>
        @yield('style')

    </head>
    <body class="antialiased">


        <div class="top-of-navbar">
            <div style="display: flex;width: 30%;align-items: center;">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 256.48 246.36" style="enable-background:new 0 0 256.48 246.36;width:30%;" xml:space="preserve">
                    <style type="text/css">
                        .st0hgfd{fill:#dc8828;}
                        .st1gjfjh{fill:#152035;stroke:#282D74;stroke-width:0.25;stroke-miterlimit:10;}
                    </style>
                    <path class="st0hgfd" d="M155.49,242.61l-71.71-61.99c-1.86-1.61-4.43-2.14-6.77-1.39l-66.77,21.29c-5.62,1.79-10.84-3.69-8.77-9.22
                        l22.02-58.89c0.61-1.63,0.6-3.43-0.04-5.06L2.9,72.48c-1.76-4.5,1.41-6.99,6.24-7.22l41.47-2.01c2.29-0.11,4.39-1.33,5.62-3.27
                        L91.38,4.79c3.11-4.88,10.43-4.17,12.55,1.21l23.5,59.75c1,2.55,3.39,4.29,6.12,4.47l115.53,7.51c7.3,0.47,9.16,10.36,2.54,13.46
                        l-101.01,47.37c-3.01,1.41-4.63,4.73-3.89,7.97l20.29,89.16C168.53,242.35,160.66,247.08,155.49,242.61z"/>
                    <path class="st1gjfjh" d="M181.94,94.98l-51.56,27.76c-1.41,0.76-2.22,2.3-2.04,3.89l7.37,66.34c0.39,3.55-3.78,5.74-6.48,3.4
                        l-46.67-40.47c-1.13-0.98-2.72-1.23-4.1-0.65l-59.93,25.35c-3.27,1.39-6.56-1.95-5.12-5.2l1.37-3.71l10.59-37.53
                        c0.69-2.56,0.94-4.35,0-7.41L5.67,73.31c-0.37-1.02,0.39-2.09,1.47-2.08h0l7.99,0.13l40.21,0.15c1.04-0.06,2.01-0.53,2.7-1.3
                        l32.1-35.82c1.98-2.21,5.59-1.51,6.61,1.27l16.4,44.73c0.53,1.45,1.86,2.45,3.4,2.56l63.82,4.65
                        C184.28,87.89,185.39,93.12,181.94,94.98z"/>
                </svg>
                <span style="font-size: 2vw;font-family: fantasy;">setare foolad</span>
            </div>
            <div style="    width: 30vw;">
                <input type="text" placeholder="جستجو ..." class="search-input">
            </div>
            <div class="icon">
                <span class="icon-whatsapp"></span>
                <span class="icon-telegram"></span>
                <span class="icon-instagram"></span>
            </div>
            
        </div>

        <div class="navbar">
            <ul>
                <li><a href="/">صفحه اصلی</a></li>
                <li><a href="#news">مقالات</a></li>
                <li><a href="/about">درباره ما</a></li>
                <li><a href="#about">تماس با ما</a></li>
                
            </ul>
            <div style="display:flex;" class="navbar-login">
                    @if (Route::has('login'))
                        @auth()
                            <div style="position: relative;" x-data="{open:false}">
                                
                                <span class="icon-basket"  x-on:click="open = ! open"></span>
                                <div x-text="$store.perorder.on" class="basket-num">
                                </div>
                                <div x-show="open && $store.perorder.Arraya.length != 0" x-transition class="tooltip-basket">
                                    <div>موارد انتخابی شما:</div>
                                        {{Auth::user()->email;}}
                                        <table>
                                            <tr>
                                                <th>کالا</th>
                                                <th>حذف</th>
                                            </tr>
                                            <template x-for="(name,index) in $store.perorder.Arraya" :key="index">
                                                <tr>
                                                    <td x-text="name" ></td>
                                                    <td class="icon-cancel" style="color:#955858;" @click="$store.perorder.on--;$store.perorder.Arraya.splice(index, 1)"></td>
                                                </tr>
                                            </template>
                                        </table>
                                    <div class="more" x-on:click="$store.perorder.sendRequest()" x-show="!$store.perorder.turn">تایید</div> 
                                    <a href="/sell" class="more" style="color: coral;"  x-show="$store.perorder.turn">
                                        ادامه خرید
                                    </a>

                                
                                </div>
                                <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
                            </div>
                            
                            <div>
                                <form method="post" action="/logout">
                                    @csrf
                                    <input type="hidden" name="name" value="value" /> 
                                    <a onclick="this.parentNode.submit();">
                                        <span class="icon-logout"></span>
                                    </a>
                                </form>
                            </div>
                        @else
                            <div>
                                <a href="{{ route('login') }}">
                                    <span class="icon-login"></span>
                                </a>
                            </div>
                            @if (Route::has('register'))
                                <div>
                                    <a href="{{ route('register') }}">
                                        <span class="icon-register"></span>
                                    </a>
                                </div>
                            @endif
                        @endauth
                    @endif
            </div>
        </div>






        
        @yield('body')
        <div class="up-footer">
            <div style="">
                <img src="/img/logo/st-logo2.png" style="width: 10vw;"/>
            </div>
            <div style="flex-grow:8;">
                <svg height="5" width="100%">
                    <line x1="0" y1="0" x2="100%" y2="0" style="stroke:#c1c1c1;stroke-width:1" />
                </svg>
            </div>
        </div>

        <div class="footer" >
            <div class="footer-div">
                <h3>درباره ستاره فولاد</h3>
                <p style="display:flex;">
                    برادران نیک باف در سال1380  با تاسیس شرکت بازرگانی بنام تجاری نیک باف ,در زمینه صادرات کالاهای ساختمانی به کشورهای cis  فعالیت خود را آغاز کرد و با کمک تجربه چندین ساله مدیران این شرکت در زمینه بازرگانی و صادرات , موفق به کسب رتبه اول در میان صادرکنندگان استان خراسان رضوی در سال 1395 گردیدند.در امتداد راه این شرکت به لطف تلاش گروهی و انگیره پیشرفت روز افزون و بهره گیری از نیروهای جوان و تحصیل کرده و با هدف تامین نیاز بازار داخلی در سال 1399  اقدام به تاسیس شرکت تولیدی و بازرگانی ستاره فولاد آسیا در زمینه تولید لوله و پروفیل در شهرک صنعتی بینالود استان خراسان رضوی گردید.
                    <img src="/img/logo/d-min.png" style="width: 5vw;height:5vw;float: left;">
                </p>
            </div>

            <div class="footer-div">
                <h3> بخش های سایت </h3> 
                <ul>
                    <li>درباره ما</li>
                    <li>پنل کاربری</li>
                    <li>تماس با ما</li>
                    <li>مقالات</li>
                    <li>قیمت محصولات</li>
                </ul>
            </div>
            
            <div class="footer-div">
                <p>
                    <h3>ارتباط با ما</h3>
                    برای اطلاع از آخرین قیمت ها و جشنواره های فروش ما را در شبکه های اجتماعی دنبال کنید<br>
                    <div class="footer-link"><div><span class="icon-map-marker"> </span>آدرس دفتر فروش:</div><div>مشهد، خین‌عرب، طرحچی 15/5</div></div><br>
                    <div class="footer-link"><div><span class="icon-phone"> </span>شماره تلفن:</div><div>051-91001020</div></div><br>
                    <div class="footer-link"><div><span class="icon-envelope-o"> </span>آدرس ایمیل:</div><div>info@setarefoolad.com</div></div><br>
                </p>
            </div>
        </div>
    </body>
</html>
