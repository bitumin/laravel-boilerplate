@extends('templates.architect.layout')

@section('title')
    <title>BeraNia Office</title>
@endsection

@section('css')

@endsection

@section('content')
<div class="overlay-paralax content-animation"></div>

<div id="content">
    <section class="section padding-off">

        <div class="full-width-image lazy-image img">
            <div class="lazy">
                <i  class="G G_1"></i>
                <i  class="G G_2"></i>
                <i  class="G G_3"></i>
                <i  class="G G_4"></i>
                <i  class="G G_5"></i>
                <i  class="G G_6"></i>
                <i  class="G G_7"></i>
                <i  class="G G_8"></i>
            </div>
            <img src="{{ asset('img/architect/about-image-2.jpg') }}" alt="top-image" />
        </div>

    </section>

    <section class="section">
        <div class="container">

            <div class="row">

                <div class="col-xs-12">

                    <div class="section-title opacity">
                        <h3>درباره بـــرانیـــا</h3>

                    </div>

                </div>

            </div><!--/ .row-->

            <div class="row">
                <div class="col-md-6">
                    <h3 class="tr">آنچه ما در بـــرانـــــیا انجام می‌دهیم</h3>
                    <p class="jf">
                        <a class="side-meta-title">دفتر مــــا</a> با آگاهی از این وضعیت همواره دو رویکرد اصلی را در پروژه‌های مختلف پی گرفته است.
                    </p>
                    <p class="jf">
                        در وهله اول در برخورد با <a class="side-meta-title">پروژه‌های کوچک مقیاس</a> همواره به دنبال آزاد کردن بنا از این «قید زمانی» هستیم. ایده‌های شکل‌دهنده در طراحی عمدتا برآمده از <a class="side-meta-title">نیازهای مسئله</a> و خواسته‌های کارفرما هستند نه پیروی کورکورانه از مناسبات بازار! و جاه‌طلبی‌های طراحی نه در استفاده بی حد و حصر از مصالح لوکس و گران قیمت بلکه در نگاه جدید به سبک زندگی و ارائه ایده‌های برآمده از نیازهای پروژه است. (به عنوان مثال
                        <a href="{{ route('template.architect.detail') }}" class="side-meta-title">آپارتمان آقای رضایتی</a>
                        ، تکثیر یک مدول برآمده از ایده محرمیت در نما) ایده‌هایی که علاوه بر بدیع و اوریجینال بودن در اغلب موارد به صرفه‌جویی‌های جدی اقتصادی در مصرف بیهوده مصالح می‌انجامد. بدون شک بناهای خاص که روند‌های روتین‌شده بازار را دنبال نمی‌کنند، مخاطب خاص خود را هم خواهند داشت. ایده‌هایی که قبلا شبیه شان در جایی دیده نشده ارزش افزوده‌ای به بنا اضافه می‌کنند که باعث می‌شوند یک بنا تا سال‌های سال اوریجینال و یکه باقی بماند و با تغییر مناسبات بازار ارزش و اعتبار خود را از دست ندهد.
                    </p>
                    <p class="jf">
                        در برخورد با <a class="side-meta-title">پروژه‌های بزرگ مقیاس</a> و شهری (مسابقات و پروپوزال‌ها) نگاه متفاوتی را پی گرفته‌ایم. معماری در حال فاصله گرفتن از روش‌های قرن بیستمی است و الگوهای قدیمی دیگر پاسخگوی مسائل نیستند. روش‌های طراحی مدام در حال تغییر اند. نشانه بارز این تغییر نگاه در فضای معماری معاصر، در تغییر نقطه توجه معماران از <a class="side-meta-title">محصول به پروسه</a> طراحی دیده می‌شود. دفتر ما در این پروژه‌ها به دنبال تجربه‌ روش‌های جدید طراحی با رویکرد‌های <a class="side-meta-title">پارامتریک و دیجیتال</a> است و همواره در کنار پرداختن به مفاهیم تئوریک و چالش‌های اجرا، دغدغه استفاده از بروزترین روش‌ها و درگیر شدن با مسائل چالش‌برانگیز طراحی را داشته است. «چگونه» و «چرا» (پروسه) دغدغه‌های اصلی ما را شکل می‌دهند و «چه» (محصول) اگرچه لازم اما در اولویت بعدی ما قرار دارد. سیستم کاری ما متضمن شدت کار، مشخص سازی و طرح دیدگاه های جزئی ریزبینانه است که علاوه بر پاسخگوی به الزامات اجرایی پروژه، مرزهای پیشروی حرفه را می سازند. (به عنوان مثال
                        <a href="Pro-92.html" class="side-meta-title">مجموعه مسکونی 360 واحدی الغدیر2</a>
                        که براساس روش‌ Parametric Form Finding شکل گرفته است)
                    </p>
                </div>

                <div class="col-md-6">
                    <h3 class="tr">آنچه در بازار ساخت و ساز ایـــران اتفاق می‌افتد</h3>
                    <p class="jf">
                        در خوش‌بینانه‌ترین نگاه فقط حدود <ins>سه درصد</ins> از پروژه‌های ساختمانی در ایران توسط معماران، طراحی و ساخته می‌شود و مابقی یعنی 97 درصد ساخت و ساز توسط پیمانکاران ، دفاتر خدمات و دلالان مصالح انجام می‌گیرد. این مراکز مدلی از کسب و کار را پی گرفته‌اند که مبتنی بر بهره‌وری مستمر اقتصادی از طریق <a class="side-meta-title">فروش مصالح و طراحی های سریع و زودبازده</a> است. طراحی‌هایی که عمدتا بر اساس المان‌های ثابت و تکرار شونده، رویه‌ها و راه‌حل‌های روتین و استاندارد شده ی بازار و مٌد ‌شکل گرفته‌اند.
                    </p>
                    <p class="jf">
                        طراحی در این شکل از کسب و کار اساسا ارزش افزوده‌ای به بنا اضافه نمی‌کند و آنچه هنگام قیمت‌گذاری این گونه ساختمان‌ها (سوای از مکان و متراژ بنا) مدنظر است عمدتا <a class="side-meta-title">کیفیت متریال</a> استفاده شده است. تفاوت یک ساختمان خوب و بد عمدتا به مصالح و متریال‌ آن برمی‌گردد و طراحی صرفا به مسئله «انتخاب مصالح» تنزل یافته است.
                    </p>
                    <p class="jf">
                        معماری این ساختمان‌ها عمدتا با متریال‌هایشان شناخته می‌شوند. ساختمان‌های سنگ پلاک سفید، ساختمان های آجر سه سانتی ، ساختمان‌های گرانیتی، ساختمان‌های نما رومی، ساختمان‌های ترمو وود و . . . و در طراحی‌های داخلی نیز به همین ترتیب! متریال‌هایی که به اقتضای بازار و مناسبات اقتصادی <a class="side-meta-title">وارد کننده‌های مصالح</a> تغییر می‌کنند. لذا شاهد هستیم که عمر مفید زیبایی یک ساختمان به کمتر از یک دهه رسیده است. مصالحی که در زمان ساخت نماد و نشانه به روز بودن یک بنا به حساب می‌امدند، امروز به نوعی مهر انقضای آن ساختمان هستند. زیرا مصالح جدیدی وارد بازار شده که آن‌ها را از رده خارج می‌کند.
                    </p>
                    <p class="jf">
                        این درحالی است که اساسا گذشت زمان نه تنها از ارزش معماری نمی‌کاهد بلکه قدمت بنا، آن را واجد ارزشی دوچندان می‌کند. اما مشکل اینجاست تفاوت بنیادینی وجود دارد میان آن بنایی که معماری شده و آنچه صرفا به <a class="side-meta-title">بزک‌کاری فضا با متریال</a> تنزل یافته است. آن یکی تولید می‌شود، خلق می‌شود که بماند و این یکی فقط قرار است مصرف ‌شود. زیرا دلالان مصالح باید بهانه‌ای برای بازسازی بناهایی که ساخته‌اند با اقتضائات جدید بازار داشته باشند.
                    </p>
                </div>

            </div><!--/ .row-->

            <div class="separator"></div>

            <div class="row">

                <div class="col-md-12">

                    <p class="jf">
                        مجموعه حاضر مروری بر کار‌های ما در چند سال گذشته است. سعی کردیم بر مقیاس‌های مختلف با موضوعات متنوع، متمرکز شویم و خط فکری‌مان را در مقیاس‌های متفاوتی از طراحی بسنجیم. دستاورد این چند سال تلاش بی وقفه به عنوان یک دفتر جوان ، به مرحله ساخت رسیدن چند پروژه در مقیاس کوچک و کسب چهار عنوان در مسابقات معماری بوده است :
                    </p>
                    <p class="jf">
                        <b class="side-meta-title">1.</b> "طرح برگزیده" مسابقه طراحی <a href="Pro-90.html" class="side-meta-title">میدان قبله مشهد</a> / با همکاری  مهندسین مشاور نقش و طرح لوتوس/ آبان 93
                        <br>  <b class="side-meta-title">2.</b> مرحله نیمه نهایی مسابقه <a href="Pro-92.html" class="side-meta-title">مجموعه مسکونی 360 واحدی الغدیر2</a> / شهریور 93
                        <br>  <b class="side-meta-title">3.</b> "طرح برگزیده" طراحی <a href="Pro-95.html" class="side-meta-title">سردر دانشگاه میبد</a>/ خرداد93
                        <br>  <b class="side-meta-title">4.</b> مرحله نیمه نهایی مسابقه <a href="Pro-96.html" class="side-meta-title">مجموعه فرهنگی هنری بنیاد آسمان</a>/ با همکاری Schema Studio/ آذر92
                    </p>


                </div>

            </div><!--/ .row-->

            <div class="row">

                <div class="col-xs-12">
                    <div class="section-title opacity">
                        <h3>خدمات</h3>
                    </div>
                </div>

            </div><!--/ .row-->

            <div class="row">

                <div class="col-lg-3 col-sm-6">

                    <div class="box-article">

                        <a class="opacity">
                            <div class="content-circle">
                                <i class="row-circle-icon icon-puzzle"></i>
                            </div>

                            <div class="content-text">

                                <h3 class="content-boxes-title">همکـــاری با مهندسین مشـــاور</h3>
                                <p class="jf">
                                    آمادگی همکاری تخصصی با مهندسین مشاور در پروژه های با رویکردهای معماری پایدار و پارامتریک و همکاری با موسسات پژوهشی در زمینه های زیر :
                                    <br><b class="side-meta-title">1.</b> طراحی با نگاه جزء به کل - تکثیر مدولار (Component Based Design)
                                    <br><b class="side-meta-title">2.</b> طراحی براساس تکنیک‌های فرم‌یابی دیجیتال (Parametric Form Finding)
                                    <br><b class="side-meta-title">3.</b> طراحی براساس الگوریتم‌های بهینه سازی (Evolutionary Algorithms)
                                    <br><b class="side-meta-title">4.</b> طراحی بر اساس آنالیز‌های اقلیمی و سازه‌ای (Ecological & Structural Analysis)
                                    <br><b class="side-meta-title">5.</b> طراحی محیط‌های تعاملی و پاسخ‌ده (Responsive Architecture)
                                    <br><b class="side-meta-title">6.</b> تنظیم ساختار پوسته‌های بیرونی ساختمانی (Adaptable Skins)
                                    <br><b class="side-meta-title">7.</b> تدوین ساختار‌های شهری با استفاده از روش‌های خودسازماندهی (Self-Organization)
                                    <br><b class="side-meta-title">8.</b> مدیریت داده ها و کنترل الگوریتم‌های تصادفی (Data Branching & Random Controlling)

                                </p>

                            </div>
                        </a>

                    </div><!--/ .box-article-->

                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="box-article">

                        <a class="opacity">
                            <div class="content-circle">
                                <i class="row-circle-icon icon-lightbulb-2"></i>
                            </div>

                            <div class="content-text">

                                <h3 class="content-boxes-title">مشــــاوره رایگــــان</h3>
                                <p class="jf">
                                    <b class="side-meta-title">1.</b> ارائه مشاوره رایگان در رابطه با مبانی طراحی دکوراسیون داخلی
                                    <br><b class="side-meta-title">2.</b> مشاوره رایگان و ارائه ایده‌های اولیه طراحی برای بازسازی منازل مسکونی
                                    <br><b class="side-meta-title">3.</b> مشاوره رایگان طراحی نما همراه با ارائه کانسپ و ایده‌های اولیه طراحی
                                    <br><b class="side-meta-title">4.</b> مشاوره رایگان طراحی پلان مجموعه های آپارتمانی و اعیانی
                                    <br><b class="side-meta-title">5.</b> مشاوره معرفی و ارائه متریال‌های موجود در بازار
                                    <br><b class="side-meta-title">6.</b> مشاوره رایگان در رابطه با قوانین و معضلات ساخت و ساز شهری

                                </p>

                            </div>
                        </a>

                    </div><!--/ .box-article-->

                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="box-article">

                        <a class="opacity">
                            <div class="content-circle">
                                <i class="icon-wrench-4"></i>
                            </div>

                            <div class="content-text">

                                <h3 class="content-boxes-title">طراحـــی فـــاز دو</h3>
                                <p class="jf">
                                    <b class="side-meta-title">1.</b> اخذ پروانه ساختمان :‌ پروانه ساخت ،‌ نوسازی ، توسعه بنا
                                    <br><b class="side-meta-title">2.</b> ارائه نقشه‌های فاز یک جهت ارائه به شهرداری
                                    <br><b class="side-meta-title">3.</b> ارائه نقشه‌های فاز دو کارگاهی همراه با دفترچه دیتیل
                                    <br><b class="side-meta-title">4.</b> ارائه نقشه‌های سازه و محاسبات، دفترچه محاسبات
                                    <br><b class="side-meta-title">5.</b> ارائه نقشه‌های تاسیسات مکانیکی و تاسیسات برقی
                                    <br><b class="side-meta-title">6.</b> ارائه برگ سبز معماری، محاسبات، تاسیسات و نظارت

                                </p>

                            </div>
                        </a>

                    </div><!--/ .box-article-->

                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="box-article">

                        <a class="opacity">
                            <div class="content-circle">
                                <i class="icon-pencil-7"></i>
                            </div>

                            <div class="content-text">

                                <h3 class="content-boxes-title">طراحـــی فـــاز یک</h3>
                                <p class="jf">

                                    <b class="side-meta-title">1.</b> طراحی صفر تا صد پروژه های آپارتمانی و اعیانی شهری
                                    <br><b class="side-meta-title">2.</b> طراحی صفر تا صد پروژه های ویلایی
                                    <br><b class="side-meta-title">3.</b> طراحی مجموعه‌های تجاری با احتساب حداکثر تراکم
                                    <br><b class="side-meta-title">4.</b> طراحی و ساماندهی محوطه، سردرهای ورودی و بام سبز
                                    <br><b class="side-meta-title">5.</b> طراحی نما‌های اصلی و فرعی مجموعه ‌های تجاری و مجتمع‌های مسکونی
                                    <br><b class="side-meta-title">6.</b> طراحی دکوراسیون داخلی فضاهای مسکونی : آشپزخانه، نشیمن، کتابخانه، اتاق خواب و ...
                                    <br><b class="side-meta-title">7.</b> طراحی دکوراسیون داخلی فضاهای تجاری : رستوران‌، کافی‌شاپ، برند‌های تجاری و ...
                                    <br><b class="side-meta-title">8.</b> طراحی دکوراسیون داخلی مشاعات ساختمانی : لابی، سالن اجتماعات، استخر و سونا و ...

                                </p>

                            </div>
                        </a>

                    </div><!--/ .box-article-->

                </div>

            </div><!--/ .row-->

        </div><!--/ .container-->

    </section><!--/ .section-->

</div><!--/ #content-->


@endsection

