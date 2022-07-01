@extends('frontend.layouts.master')

@section('title','صفحة الدفع')

@section('main-content')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">الرئيسية<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0)">الدفع</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
            
    <!-- Start Checkout -->
    <section class="shop checkout section">
        <div class="container">
                <form class="form" method="POST" action="{{route('cart.order')}}">
                    @csrf
                    <div class="row"> 

                        <div class="col-lg-8 col-12">
                            <div class="checkout-form">
                                <h2>الدفع من هنا</h2>
                                <p>يرجى التسجيل من أجل الدفع بسرعة أكبر</p>
                                <!-- Form -->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>الاسم<span>*</span></label>
                                            <input type="text" name="first_name" placeholder="" value="{{old('first_name')}}" value="{{old('first_name')}}">
                                            @error('first_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>اللقب<span>*</span></label>
                                            <input type="text" name="last_name" placeholder="" value="{{old('lat_name')}}">
                                            @error('last_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>البريد الإلكتروني<span>*</span></label>
                                            <input type="email" name="email" placeholder="" value="{{old('email')}}">
                                            @error('email')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>رقم الهاتف <span>*</span></label>
                                            <input type="number" name="phone" placeholder="" required value="{{old('phone')}}">
                                            @error('phone')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Country<span>*</span></label>
                                            <select name="country" id="country">
                                            <option value = "AF"> أفغانستان </option>
                                                 <option value = "AX"> جزر آلاند </ option>
                                                 <option value = "AL"> ألبانيا </ option>
                                                 <option value = "DZ"> الجزائر </ option>
                                                 <option value = "AS"> ساموا الأمريكية </ option>
                                                 <option value = "AD"> أندورا </ option>
                                                 <option value = "AO"> أنغولا </ option>
                                                 <option value = "AI"> أنغيلا </ option>
                                                 <option value = "AQ"> القارة القطبية الجنوبية </option>
                                                 <option value = "AG"> أنتيغوا وبربودا </ option>
                                                 <option value = "AR"> الأرجنتين </ option>
                                                 <option value = "AM"> أرمينيا </ option>
                                                 <option value = "AW"> أروبا </ option>
                                                <option value = "AU"> أستراليا </ option>
                                                <option value = "AT"> النمسا </ option>
                                                <option value = "AZ"> أذربيجان </option>
                                                <option value = "BS"> جزر الباهاما </ option>
                                                <option value = "BH"> البحرين </ option>
                                                <option value = "BD"> بنجلاديش </ option>
                                                <option value = "BB"> باربادوس </ option>
                                                <option value = "BY"> بيلاروسيا </ option>
                                                <option value = "BE"> بلجيكا </ option>
                                                <option value = "BZ"> بليز </ option>
                                                <option value = "BJ"> بنين </ option>
                                                <option value = "BM"> برمودا </ option>
                                                <option value = "BT"> بوتان </ option>
                                                <option value = "BO"> بوليفيا </ option>
                                                <option value = "BA"> البوسنة والهرسك </ option>
                                                <option value = "BW"> بوتسوانا </ option>
                                                <option value = "BV"> جزيرة بوفيت </ option>
                                                <option value = "BR"> البرازيل </ option>
                                                <option value = "IO"> إقليم المحيط الهندي البريطاني </ option>
                                                <option value = "VG"> جزر فيرجن البريطانية </ option>
                                                <option value = "BN"> بروناي </ option>
                                                <option value = "BG"> بلغاريا </ option>
                                                <option value = "BF"> بوركينا فاسو </ option>
                                                <option value = "BI"> بوروندي </ option>
                                                <option value = "KH"> كمبوديا </ option>
                                                <option value = "CM"> الكاميرون </ option>
                                                <option value = "CA"> كندا </ option>
                                                <option value = "CV"> الرأس الأخضر </ option>
                                                <option value = "KY"> جزر كايمان </ option>
                                                <option value = "CF"> جمهورية إفريقيا الوسطى </ option>
                                                <option value = "TD"> تشاد </ option>
                                                <option value = "CL"> تشيلي </ option>
                                                <option value = "CN"> الصين </ option>
                                                <option value = "CX"> جزيرة الكريسماس </ option>
                                                <option value = "CC"> جزر كوكس [كيلنج] </ option>
                                                <option value = "CO"> كولومبيا </ option>
                                                <option value = "KM"> جزر القمر </ option>
                                                <option value = "CG"> الكونغو - برازافيل </ option>
                                                <option value = "CD"> الكونغو - كينشاسا </ option>
                                                <option value = "CK"> جزر كوك </ option>
                                                <option value = "CR"> كوستاريكا </ option>
                                                <option value = "CI"> ساحل العاج </ option>
                                                <option value = "HR"> كرواتيا </ option>
                                                <option value = "CU"> كوبا </ option>
                                                <option value = "CY"> قبرص </ option>
                                                <option value = "CZ"> جمهورية التشيك </ option>
                                                <option value = "DK"> الدنمارك </ option>
                                                <option value = "DJ"> جيبوتي </ option>
                                                <option value = "DM"> دومينيكا </ option>
                                                <option value = "DO"> جمهورية الدومينيكان </ option>
                                                <option value = "EC"> الإكوادور </ option>
                                                <option value = "EG"> مصر </option>
                                                <option value = "SV"> السلفادور </ OPTION>
                                                <option value = "GQ"> غينيا الاستوائية </ option>
                                                <option value = "ER"> إريتريا </ option>
                                                <option value = "EE"> إستونيا </ option>
                                                <option value = "ET"> إثيوبيا </ option>
                                                <option value = "FK"> جزر فوكلاند </ option>
                                                <option value = "FO"> جزر فارو </ option>
                                                <option value = "FJ"> فيجي </ option>
                                                <option value = "FI"> فنلندا </ option>
                                                <option value = "FR"> فرنسا </ option>
                                                <option value = "GF"> غيانا الفرنسية </ option>
                                                <option value = "PF"> بولينيزيا الفرنسية </ option>
                                                <option value = "TF"> الأقاليم الجنوبية الفرنسية </ option>
                                                <option value = "GA"> الجابون </ option>
                                                <option value = "GM"> غامبيا </ option>
                                                <option value = "GE"> جورجيا </option>
                                                <option value = "DE"> ألمانيا </ option>
                                                <option value = "GH"> غانا </ option>
                                                <option value = "GI"> جبل طارق </option>
                                                <option value = "GR"> اليونان </option>
                                                <option value = "GL"> جرينلاند </ option>
                                                <option value = "GD"> غرينادا </ option>
                                                <option value = "GP"> جوادلوب </ option>
                                                <option value = "GU"> غوام </ option>
                                                <option value = "GT"> غواتيمالا </option>
                                                <option value = "GG"> جيرنزي </ الخيار>
                                                <option value = "GN"> غينيا </ option>
                                                <option value = "GW"> غينيا بيساو </ option>
                                                <option value = "GY"> غيانا </ option>
                                                <option value = "HT"> هايتي </option>
                                                <option value = "HM"> جزيرة هيرد وجزر ماكدونالد </ option>
                                                <option value = "HN"> هندوراس </ option>
                                                <option value = "HK"> منطقة هونغ كونغ الإدارية الخاصة بالصين </option>
                                                <option value = "HU"> المجر </option>
                                                <option value = "IS"> أيسلندا </ option>
                                                <option value = "IN"> الهند </ option>
                                                <option value = "ID"> إندونيسيا </ option>
                                                <option value = "IR"> إيران </option>
                                                <option value = "IQ"> العراق </option>
                                                <option value = "IE"> أيرلندا </ option>
                                                <option value = "IM"> جزيرة مان </ option>
                                                <option value = "IT"> إيطاليا </option>
                                                <option value = "JM"> جامايكا </ option>
                                                <option value = "JP"> اليابان </ option>
                                                <option value = "JE"> جيرسي </ option>
                                                <option value = "JO"> الأردن </ option>
                                                <option value = "KZ"> كازاخستان </ option>
                                                <option value = "KE"> كينيا </ option>
                                                <option value = "KI"> كيريباتي </ option>
                                                <option value = "KW"> الكويت </ option>
                                                <option value = "KG"> قيرغيزستان </ option>
                                                <option value = "LA"> لاوس </ option>
                                                <option value = "LV"> لاتفيا </ option>
                                                <option value = "LB"> لبنان </ option>
                                                <option value = "LS"> ليسوتو </ option>
                                                <option value = "LR"> ليبيريا </option>
                                                <option value = "LY"> ليبيا </ option>
                                                <option value = "LI"> ليختنشتاين </ option>
                                                <option value = "LT"> ليتوانيا </ option>
                                                <option value = "LU"> لوكسمبورغ </ option>
                                                <option value = "MO"> منطقة ماكاو الإدارية الخاصة بالصين </option>
                                                <option value = "MK"> مقدونيا </option>
                                                <option value = "MG"> مدغشقر </ option>
                                                <option value = "MW"> ملاوي </ option>
                                                <option value = "MY"> ماليزيا </option>
                                                <option value = "MV"> جزر المالديف </ option>
                                                <option value = "ML"> مالي </ option>
                                                <option value = "MT"> مالطا </ option>
                                                <option value = "MH"> جزر مارشال </ option>
                                                <option value = "MQ"> مارتينيك </ option>
                                                <option value = "MR"> موريتانيا </ option>
                                                <option value = "MU"> موريشيوس </ option>
                                                <option value = "YT"> مايوت </ option>
                                                <option value = "MX"> المكسيك </ option>
                                                <option value = "FM"> ميكرونيزيا </ option>
                                                <option value = "MD"> مولدوفا </ خيار>
                                                <option value = "MC"> موناكو </ option>
                                                <option value = "MN"> منغوليا </ option>
                                                <option value = "ME"> الجبل الأسود </ option>
                                                <option value = "MS"> مونتسيرات </ option>
                                                <option value = "MA"> المغرب </ option>
                                                <option value = "MZ"> موزمبيق </ option>
                                                <option value = "MM"> ميانمار [بورما] </ الخيار>
                                                <option value = "NA"> ناميبيا </ option>
                                                <option value = "NR"> ناورو </ option>
                                                <option value = "DZ" selected = "selected"> الجزائر </ option>
                                                <option value = "NL"> هولندا </ option>
                                                <option value = "AN"> جزر الأنتيل الهولندية </ option>
                                                <option value = "NC"> نيو كاليدونيا </ option>
                                                <option value = "NZ"> نيوزيلندا </ option>
                                                <option value = "NI"> نيكاراغوا </ option>
                                                <option value = "NE"> النيجر </ option>
                                                <option value = "NG"> نيجيريا </ option>
                                                <option value = "NU"> نيوي </ option>
                                                <option value = "NF"> جزيرة نورفولك </ option>
                                                <option value = "MP"> جزر ماريانا الشمالية </ option>
                                                <option value = "KP"> كوريا الشمالية </ option>
                                                <option value = "NO"> النرويج </ option>
                                                <option value = "OM"> عمان </ option>
                                                <option value = "PK"> باكستان </ option>
                                                <option value = "PW"> بالاو </ option>
                                                <option value = "PS"> الأراضي الفلسطينية </ option>
                                                <option value = "PA"> بنما </ option>
                                                <option value = "PG"> بابوا غينيا الجديدة </ option>
                                                <option value = "PY"> باراجواي </ option>
                                                <option value = "PE"> بيرو </option>
                                                <option value = "PH"> الفلبين </ option>
                                                <option value = "PN"> جزر بيتكيرن </ option>
                                                <option value = "PL"> بولندا </option>
                                                <option value = "PT"> البرتغال </ option>
                                                <option value = "PR"> بورتوريكو </ option>
                                                <option value = "QA"> قطر </ option>
                                                <option value = "RE"> Réunion </option>
                                                <option value = "RO"> رومانيا </option>
                                                <option value = "RU"> روسيا </ option>
                                                <option value = "RW"> رواندا </option>
                                                <option value = "BL"> سانت بارتيليمي </ option>
                                                <option value = "SH"> سانت هيلانة </ الخيار>
                                                <option value = "KN"> سانت كيتس ونيفيس </ option>
                                                <option value = "LC"> سانت لوسيا </ option>
                                                <option value = "MF"> سانت مارتن </ الخيار>
                                                <option value = "PM"> سان بيير وميكلون </ option>
                                                <option value = "VC"> سانت فنسنت وجزر غرينادين </ option>
                                                <option value = "WS"> ساموا </ option>
                                                <option value = "SM"> سان مارينو </ option>
                                                <option value = "ST"> ساو تومي وبرينسيبي </ OPTION>
                                                <option value = "SA"> المملكة العربية السعودية </ option>
                                                <option value = "SN"> السنغال </ option>
                                                <option value = "RS"> صربيا </option>
                                                <option value = "SC"> سيشيل </ option>
                                                <option value = "SL"> سيراليون </ option>
                                                <option value = "SG"> سنغافورة </ option>
                                                <option value = "SK"> سلوفاكيا </option>
                                                <option value = "SI"> سلوفينيا </ option>
                                                <option value = "SB"> جزر سليمان </ option>
                                                <option value = "SO"> الصومال </option>
                                                <option value = "ZA"> جنوب إفريقيا </ option>
                                                <option value = "GS"> جورجيا الجنوبية </ option>
                                                <option value = "KR"> كوريا الجنوبية </ option>
                                                <option value = "ES"> أسبانيا </option>
                                                <option value = "LK"> سريلانكا </ option>
                                                <option value = "SD"> السودان </option>
                                                <option value = "SR"> سورينام </ option>
                                                <option value = "SJ"> سفالبارد وجان ماين </ option>
                                                <option value = "SZ"> سوازيلاند </ option>
                                                <option value = "SE"> السويد </ option>
                                                <option value = "CH"> سويسرا </ option>
                                                <option value = "SY"> Syria </option>
                                                <option value = "TW"> تايوان </ option>
                                                <option value = "TJ"> طاجيكستان </ option>
                                                <option value = "TZ"> تنزانيا </ option>
                                                <option value = "TH"> تايلاند </option>
                                                <option value = "TL"> تيمور الشرقية </ الخيار>
                                                <option value = "TG"> توغو </ option>
                                                <option value = "TK"> توكيلاو </ option>
                                                <option value = "TO"> تونجا </ option>
                                                <option value = "TT"> ترينيداد وتوباغو </ option>
                                                <option value = "TN"> تونس </ option>
                                                <option value = "TR"> تركيا </ option>
                                                <option value = "TM"> تركمانستان </ option>
                                                <option value = "TC"> جزر تركس وكايكوس </ option>
                                                <option value = "TV"> توفالو </ option>
                                                <option value = "UG"> أوغندا </ option>
                                                <option value = "UA"> أوكرانيا </ option>
                                                <option value = "AE"> الإمارات العربية المتحدة </ option>
                                                <option value = "Uk"> المملكة المتحدة </ option>
                                                <option value = "UY"> أوروغواي </ option>
                                                <option value = "UM"> الولايات المتحدة الجزر الصغيرة النائية </ option>
                                                <option value = "VI"> الولايات المتحدة جزر فيرجن </option>
                                                <option value = "UZ"> أوزبكستان </ option>
                                                <option value = "VU"> فانواتو </ option>
                                                <option value = "VA"> مدينة الفاتيكان </ option>
                                                <option value = "VE"> فنزويلا </ option>
                                                <option value = "VN"> فيتنام </ option>
                                                <option value = "WF"> واليس وفوتونا </ option>
                                                <option value = "EH"> الصحراء الغربية </ option>
                                                <option value = "YE"> اليمن </ option>
                                                <option value = "ZM"> زامبيا </ option>
                                                <option value = "ZW"> زيمبابوي </ option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>سطر العنوان 1<span>*</span></label>
                                            <input type="text" name="address1" placeholder="" value="{{old('address1')}}">
                                            @error('address1')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>سطر العنوان 2</label>
                                            <input type="text" name="address2" placeholder="" value="{{old('address2')}}">
                                            @error('address2')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>الرمز البريدي</label>
                                            <input type="text" name="post_code" placeholder="" value="{{old('post_code')}}">
                                            @error('post_code')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>
                                <!--/ End Form -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="order-details">
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>إجمالي عربة التسوق</h2>
                                    <div class="content">
                                        <ul>
										    <li class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">مجموع سلة التسوق<span>${{number_format(Helper::totalCartPrice(),2)}}</span></li>
                                            <li class="shipping">
                                                Shipping Cost
                                                @if(count(Helper::shipping())>0 && Helper::cartCount()>0)
                                                    <select name="shipping" class="nice-select">
                                                        <option value="">حدد عنوانك</option>
                                                        @foreach(Helper::shipping() as $shipping)
                                                        <option value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}">{{$shipping->type}}: ${{$shipping->price}}</option>
                                                        @endforeach
                                                    </select>
                                                @else 
                                                    <span>Free</span>
                                                @endif
                                            </li>
                                            
                                            @if(session('coupon'))
                                            <li class="coupon_price" data-price="{{session('coupon')['value']}}">وفر<span>${{number_format(session('coupon')['value'],2)}}</span></li>
                                            @endif
                                            @php
                                                $total_amount=Helper::totalCartPrice();
                                                if(session('coupon')){
                                                    $total_amount=$total_amount-session('coupon')['value'];
                                                }
                                            @endphp
                                            @if(session('coupon'))
                                                <li class="last"  id="order_total_price">Total<span>${{number_format($total_amount,2)}}</span></li>
                                            @else
                                                <li class="last"  id="order_total_price">Total<span>${{number_format($total_amount,2)}}</span></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>المدفوعات</h2>
                                    <div class="content">
                                        <div class="checkbox">
                                            {{-- <label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> دفع بالشيكات</label> --}}
                                            <form-group>
                                                <input name="payment_method"  type="radio" value="cod"> <label> الدفع عند الاستلام</label><br>
                                                <input name="payment_method"  type="radio" value="paypal"> <label> PayPal</label> 
                                            </form-group>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Payment Method Widget -->
                                <div class="single-widget payement">
                                    <div class="content">
                                        <img src="{{('backend/img/payment-method.png')}}" alt="#">
                                    </div>
                                </div>
                                <!--/ End Payment Method Widget -->
                                <!-- Button Widget -->
                                <div class="single-widget get-button">
                                    <div class="content">
                                        <div class="button">
                                            <button type="submit" class="btn">الذهاب الى الدفع</button>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Button Widget -->
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </section>
    <!--/ End Checkout -->
    
    <!-- Start Shop Services Area  -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>الشحن مجانا</h4>
                        <p>الطلبات التي تزيد عن 100 دولار</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>عودة مجانية</h4>
                        <p>اعادة المنتج في غضون 30 يوم</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>دفع امن</h4>
                        <p>100٪ دفع آمن</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>افضل سعر</h4>
                        <p>سعر مضمون</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services -->
    
    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <div class="inner">
                            <h4>النشرة الإخبارية</h4>
                            <p> اشترك في النشرة الإخبارية لدينا واحصل على <span>10%</span> من أول عملية شراء</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                <button class="btn">الإشتراك</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->
@endsection
@push('styles')
	<style>
		li.shipping{
			display: inline-flex;
			width: 100%;
			font-size: 14px;
		}
		li.shipping .input-group-icon {
			width: 100%;
			margin-left: 10px;
		}
		.input-group-icon .icon {
			position: absolute;
			left: 20px;
			top: 0;
			line-height: 40px;
			z-index: 3;
		}
		.form-select {
			height: 30px;
			width: 100%;
		}
		.form-select .nice-select {
			border: none;
			border-radius: 0px;
			height: 40px;
			background: #f6f6f6 !important;
			padding-left: 45px;
			padding-right: 40px;
			width: 100%;
		}
		.list li{
			margin-bottom:0 !important;
		}
		.list li:hover{
			background:#F7941D !important;
			color:white !important;
		}
		.form-select .nice-select::after {
			top: 14px;
		}
	</style>
@endpush
@push('scripts')
	<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		function showMe(box){
			var checkbox=document.getElementById('shipping').style.display;
			// alert(checkbox);
			var vis= 'none';
			if(checkbox=="none"){
				vis='block';
			}
			if(checkbox=="block"){
				vis="none";
			}
			document.getElementById(box).style.display=vis;
		}
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') ); 
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0; 
				// alert(coupon);
				$('#order_total_price span').text('$'+(subtotal + cost-coupon).toFixed(2));
			});

		});

	</script>

@endpush