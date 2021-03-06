@extends('layouts.CapacityLayout')

@section('title')
    HR |نمایش ضروریات تحصیلی

@stop
<link rel="icon" href="{{ URL::asset('assets/images/favicon/favicon-32x32.png') }}" sizes="32x32">

<!-- Favicons-->
<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/images/favicon/apple-touch-icon-152x152.png') }}">
<meta name="msapplication-TileColor" content="#00bcd4">
<meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">


<body>
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="cyan">
            <div class="nav-wrapper">
                <h1 class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/MOHE.png') }}" height="50" width="50" alt="HR logo" sizes></a></h1>
                <ul class="right hide-on-med-and-down">
                    <li class="search-out">
                        <input type="text" class="search-out-text">
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
        <section id="content">

            <!--breadcrumbs start-->
            <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12" align="right">
                            <h5 class="breadcrumbs-title">فورم ها</h5>
                            <ol class="breadcrumb">
                                <li><a href="index-2.html">دشبورد</a>
                                </li>
                                <li class="active">فورم ضروریات تحصیلی</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->
            @section('content')
                <h1 class="header" align="right">نمایش ضروریات تحصیلی</h1>

                <!--Input fields-->
                <div class="row">
                    <form>
                    <div class="col s12 m12 l12">
                        <div class="card-panel">
                            <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                            <h5 align="center" class="header">Islamic And Republic Of Afghanistan</h5>
                            <h5 align="center" class="header">Independent Administrative Reform And Civil Service Commission</h5>
                            <hr>
                            <div class="row">

                                <div class="input-field col s12">
                                    <ul id="task-card" class="collection with-header">
                                        <li class="collection-header cyan">
                                            <h5 class="task-card-title" align="center">ریاست عمومی انستیتوت خدمات ملکی</h5>
                                            <h5 class="task-card-title" align="center">پرسش نامه نیاز سنجی آموزیشی</h5>
                                        </li>
                                    </ul>
                                </div>

                                <div class="input-field col s12" align="center">
                                    <ul id="task-card" class="collection with-header">
                                        <li >
                                            <h4 >شهرت کارمندان</h4>
                                        </li>
                                    </ul>
                                </div>


                                <div class="input-field col s6">
                                    <i class="mdi-social-person prefix"></i>
                                    <input name="Name" type="text" data-parsley-required="true" value="{{ $record->Name }}">
                                    <label for="Name">اسم</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-person prefix"></i>
                                    <input name="LastName" type="text" data-parsley-required="true" value="{{ $record->LastName }}">
                                    <label for="LastName">تخلص</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-person prefix"></i>
                                    <input name="FatherName" type="text" data-parsley-required="true" value="{{ $record->FatherName }}">
                                    <label for="FatherName">نام پدر</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-alarm-add prefix"></i>
                                    <input name="BirthDate" type="text" class="datepicker" value="{{ $record->BirthDate }}">
                                    <label for="BirthDate">تاریخ تولد</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-person prefix"></i>
                                    <input name="PermenantAddress" type="text" data-parsley-required="true" value="{{ $record->PermenantAddress }}">
                                    <label for="PermenantAddress">سکونت اصلی</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-person prefix"></i>
                                    <input name="CurrentAddress" type="text" data-parsley-required="true" value="{{ $record->CurrentAddress }}">
                                    <label for="CurrentAddress">سکونت فعلی</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-person prefix"></i>
                                    <input name="MarritalStatues" type="text" data-parsley-required="true" value="{{ $record->MarritalStatues }}">
                                    <label for="MarritalStatues">حالت مدنی</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-person prefix"></i>
                                    <input name="TazkeraNumber" type="text" data-parsley-required="true" value="{{ $record->TazkeraNumber }}">
                                    <label for="TazkeraNumber">نمبر تذکره</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-communication-call Large prefix"></i>
                                    <input name="Phone" type="text" data-parsley-required="true" value="{{ $record->Phone }}">
                                    <label for="Phone">شماره تماس</label>
                                </div>

                                <div class="input-field col s12" align="center">
                                    <ul id="task-card" class="collection with-header">
                                        <li >
                                            <h4 >خصو صیات تحصیلی</h4>
                                        </li>
                                    </ul>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-school prefix"></i>
                                    <input name="BastTitle" type="text" data-parsley-required="true" value="{{ $record->BastTitle }}">
                                    <label for="BastTitle">عنوان بست</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-school prefix"></i>
                                    <br/>
                                    <select name="EducationLevel" disabled>
                                        <option value="" disabled selected>انتخاب شده: {{ $record->EducationLevel }} </option>
                                        <option value="فارغ 12">فارغ 12</option>
                                        <option value="14 پاس">14 پاس</option>
                                        <option value="لسانس">لسانس</option>
                                        <option value="ماستر">ماستر</option>
                                        <option value="دکتورا">دکتورا</option>
                                    </select>
                                </div>



                                <div class="input-field col s6">
                                    <i class="mdi-social-school prefix"></i>
                                    <input name="EducationalField" type="text" data-parsley-required="true" value="{{ $record->EducationalField }}">
                                    <label for="EducationalField">رشته تحصیلی</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-school prefix"></i>
                                    <input name="University" type="text" data-parsley-required="true" value="{{ $record->University }}">
                                    <label for="University">موسسه تعلیمی و تحصیلی</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-school prefix"></i>
                                    <input name="Bast" type="text" data-parsley-required="true" value="{{ $record->Bast }}">
                                    <label for="Bast">بست</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-school prefix"></i>
                                    <input name="BastStep" type="text" data-parsley-required="true" value="{{ $record->BastStep }}">
                                    <label for="BastStep">قدم</label>
                                </div>


                                <div class="input-field col s6">
                                    <i class="mdi-communication-messenger prefix"></i>
                                    <input name="Experience" type="text" data-parsley-required="true" value="{{ $record->Experience }}">
                                    <label for="Experience">تجربه کاری درپست فعلی</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-communication-location-on prefix"></i>
                                    <input name="Ministry" type="text" data-parsley-required="true" value="{{ $record->Ministry }}">
                                    <label for="Ministry">وزارت/اداره</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-home prefix"></i>
                                    <input name="Reyasat" type="text" data-parsley-required="true" value="{{ $record->Reyasat }}">
                                    <label for="Reyasat">ریاست</label>
                                </div>


                                <div class="input-field col s12" align="center">
                                    <ul id="task-card" class="collection with-header">
                                        <li >
                                            <h4 >دوره های آموزیشی ورکشاپ ها و سیمینار ها</h4>
                                        </li>
                                    </ul>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-school prefix"></i>
                                    <input name="PeriodsName" type="text" data-parsley-required="true" value="{{ $record->PeriodsName }}">
                                    <label for="PeriodsName">نام دوره ها</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="mdi-communication-call Large prefix"></i>
                                    <input name="Details" type="text" data-parsley-required="true" value="{{ $record->Details }}">
                                    <label for="Details">محتویات</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="mdi-communication-call Large prefix"></i>
                                    <input name="PeriodsDuration" type="text" data-parsley-required="true" value="{{ $record->PeriodsDuration }}">
                                    <label for="PeriodsDuration">مدت دوره</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-home prefix"></i>
                                    <input name="Preprationer" type="text" data-parsley-required="true" value="{{ $record->Preprationer }}">
                                    <label for="Preprationer">مرجع دایره کننده</label>
                                </div>

                                <div class="row" >
                                    <div class="col s12 m4 l12" align="center">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h4 >مهارت های زبان</h4>
                                            </li>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <li class="collection-item dismissable">
                                                            <p>
                                                                <label for="English"><b>انگلیسی :</b>
                                                                </label><span class="task-cat teal">{{ $record->English }}</span>
                                                            </p> <hr />
                                                            <p>

                                                                <label for="EnglishWrittingLevel">سطح تحریری :
                                                                </label><span class="task-cat pink">{{ $record->EnglishWrittingLevel }}</span>
                                                            </p><hr />
                                                            <p>

                                                                <label for="EnglishReadingLevel">سطح خواندن :
                                                                </label><span class="task-cat cyan">{{ $record->EnglishReadingLevel }}</span>
                                                            </p><hr />
                                                            <p>

                                                                <label for="EnglishSpeakingLevel">سطح تکلم :
                                                                </label><span class="task-cat red">{{ $record->EnglishSpeakingLevel }}</span>
                                                            </p><hr />
                                                        </li>
                                                    </td>
                                                </tr>
                                            </table>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12" align="center">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h4 >مهارت های کمپیوتر</h4>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-home prefix"></i>
                                        <input name="ComputerSkills" type="text" data-parsley-required="true" value="{{ $record->ComputerSkills }}">
                                        <label for="ComputerSkills">نام پروگرام</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-social-school prefix"></i>
                                        <br/>
                                        <select name="ComputerSkillsLevel" disabled>
                                            <option value=""  selected>انتخاب شده: {{ $record->ComputerSkillsLevel }}</option>
                                            <option value="خوب">خوب</option>
                                            <option value="متوسط">متوسط</option>
                                            <option value="ضعیف">ضعیف</option>

                                        </select>
                                    </div>

                                    <div class="input-field col s12" align="center">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h4 >آگاهی از قوانین مقررات طرزالعمل ها و رهنمود های خدمات ملکی</h4>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-home prefix"></i>
                                        <input nam="HumanLaws" type="text" data-parsley-required="true" value="{{ $record->HumanLaws }}">
                                        <label for="HumanLaws">قانون کارکنان خدمات ملکی</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-social-school prefix"></i>
                                        <br/>
                                        <select name="HumanLawsLevel" disabled>
                                            <option value="" selected> انتخاب شده: {{ $record->HumanLawsLevel }}</option>
                                            <option value="خوب">خوب</option>
                                            <option value="متوسط">متوسط</option>
                                            <option value="ضعیف">ضعیف</option>

                                        </select>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-home prefix"></i>
                                        <input name="Regulations" type="text" data-parsley-required="true" value="{{ $record->Regulations }}">
                                        <label for="Regulations">مقررات</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-social-school prefix"></i>
                                        <br/>
                                        <select name="RegulationsLevel" disabled>
                                            <option value="" selected>انتخاب شده: {{ $record->RegulationsLevel }}</option>
                                            <option value="خوب">خوب</option>
                                            <option value="متوسط">متوسط</option>
                                            <option value="ضعیف">ضعیف</option>

                                        </select>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-home prefix"></i>
                                        <input name="Rules" type="text" data-parsley-required="true" value="{{ $record->Rules }}">
                                        <label for="Rules">طرزالعمل ها</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-social-school prefix"></i>
                                        <br/>
                                        <select name="RulesLevel" disabled>
                                            <option value="" selected>نتخاب شده: {{ $record->RulesLevel }}</option>
                                            <option value="خوب">خوب</option>
                                            <option value="متوسط">متوسط</option>
                                            <option value="ضعیف">ضعیف</option>

                                        </select>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-home prefix"></i>
                                        <input name="Directions" type="text" data-parsley-required="true" value="{{ $record->Directions }}">
                                        <label for="Directions">رهنمود ها</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-social-school prefix"></i>
                                        <br/>
                                        <select name="DirectionsLevel" disabled>
                                            <option value="" selected>نتخاب شده: {{ $record->DirectionsLevel }}</option>
                                            <option value="خوب">خوب</option>
                                            <option value="متوسط">متوسط</option>
                                            <option value="ضعیف">ضعیف</option>

                                        </select>

                                    </div>

                                    <div class="input-field col s12">
                                        {{--<button class="btn cyan waves-effect waves-light right" type="submit" name="action">تایید--}}
                                            {{--<i class="mdi-content-send right"></i>--}}
                                        {{--</button>--}}

                                        <a onclick="moreInfo({{ $record->id }});" class="modal-trigger" href="#modal2" value="{{ $record->id }}"> <i class="mdi-editor-border-color prefix"></i></a>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    </form>
                </div>

    </div>
</div>


<div id="modal2" class="modal" style="border-radius:25px">
    <div class="modal-content">
        <div class="card-panel cyan darken-1">
            <h5 class="card-content white-text"> Update Records</h5>
        </div>

        <div class="row">
            <form method="POST" action="{{ route('education.update',['id'=>$record]) }}" accept-charset="utf-8" class="col s11 right" data-parsley-validate>
                {!! csrf_field() !!}
                <input name="_method" type="hidden" value="PATCH">

                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                        <h5 align="center" class="header">Islamic And Republic Of Afghanistan</h5>
                        <h5 align="center" class="header">Independent Administrative Reform And Civil Service Commission</h5>
                        <hr>
                        <div class="row">

                            <div class="input-field col s12">
                                <ul id="task-card" class="collection with-header">
                                    <li class="collection-header cyan">
                                        <h5 class="task-card-title" align="center">ریاست عمومی انستیتوت خدمات ملکی</h5>
                                        <h5 class="task-card-title" align="center">پرسش نامه نیاز سنجی آموزیشی</h5>
                                    </li>
                                </ul>
                            </div>

                            <div class="input-field col s12" align="center">
                                <ul id="task-card" class="collection with-header">
                                    <li >
                                        <h4 >شهرت کارمندان</h4>
                                    </li>
                                </ul>
                            </div>


                            <div class="input-field col s6">
                                <i class="mdi-social-person prefix"></i>
                                <input name="Name" type="text" data-parsley-required="true" value="{{ $record->Name }}">
                                <label for="Name">اسم</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-social-person prefix"></i>
                                <input name="LastName" type="text" data-parsley-required="true" value="{{ $record->LastName }}">
                                <label for="LastName">تخلص</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-social-person prefix"></i>
                                <input name="FatherName" type="text" data-parsley-required="true" value="{{ $record->FatherName }}">
                                <label for="FatherName">نام پدر</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-action-alarm-add prefix"></i>
                                <input name="BirthDate" type="text" class="datepicker" value="{{ $record->BirthDate }}">
                                <label for="BirthDate">تاریخ تولد</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-social-person prefix"></i>
                                <input name="PermenantAddress" type="text" data-parsley-required="true" value="{{ $record->PermenantAddress }}">
                                <label for="PermenantAddress">سکونت اصلی</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-social-person prefix"></i>
                                <input name="CurrentAddress" type="text" data-parsley-required="true" value="{{ $record->CurrentAddress }}">
                                <label for="CurrentAddress">سکونت فعلی</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-social-person prefix"></i>
                                <input name="MarritalStatues" type="text" data-parsley-required="true" value="{{ $record->MarritalStatues }}">
                                <label for="MarritalStatues">حالت مدنی</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-social-person prefix"></i>
                                <input name="TazkeraNumber" type="text" data-parsley-required="true" value="{{ $record->TazkeraNumber }}">
                                <label for="TazkeraNumber">نمبر تذکره</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-communication-call Large prefix"></i>
                                <input name="Phone" type="text" data-parsley-required="true" value="{{ $record->Phone }}">
                                <label for="Phone">شماره تماس</label>
                            </div>

                            <div class="input-field col s12" align="center">
                                <ul id="task-card" class="collection with-header">
                                    <li >
                                        <h4 >خصو صیات تحصیلی</h4>
                                    </li>
                                </ul>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-social-school prefix"></i>
                                <input name="BastTitle" type="text" data-parsley-required="true" value="{{ $record->BastTitle }}">
                                <label for="BastTitle">عنوان بست</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-social-school prefix"></i>
                                <br/>
                                <select name="EducationLevel">
                                    <option value="" disabled selected>انتخاب شده: {{ $record->EducationLevel }} </option>
                                    <option value="فارغ 12">فارغ 12</option>
                                    <option value="14 پاس">14 پاس</option>
                                    <option value="لسانس">لسانس</option>
                                    <option value="ماستر">ماستر</option>
                                    <option value="دکتورا">دکتورا</option>
                                </select>
                            </div>



                            <div class="input-field col s6">
                                <i class="mdi-social-school prefix"></i>
                                <input name="EducationalField" type="text" data-parsley-required="true" value="{{ $record->EducationalField }}">
                                <label for="EducationalField">رشته تحصیلی</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-social-school prefix"></i>
                                <input name="University" type="text" data-parsley-required="true" value="{{ $record->University }}">
                                <label for="University">موسسه تعلیمی و تحصیلی</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-social-school prefix"></i>
                                <input name="Bast" type="text" data-parsley-required="true" value="{{ $record->Bast }}">
                                <label for="Bast">بست</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-social-school prefix"></i>
                                <input name="BastStep" type="text" data-parsley-required="true" value="{{ $record->BastStep }}">
                                <label for="BastStep">قدم</label>
                            </div>


                            <div class="input-field col s6">
                                <i class="mdi-communication-messenger prefix"></i>
                                <input name="Experience" type="text" data-parsley-required="true" value="{{ $record->Experience }}">
                                <label for="Experience">تجربه کاری درپست فعلی</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-communication-location-on prefix"></i>
                                <input name="Ministry" type="text" data-parsley-required="true" value="{{ $record->Ministry }}">
                                <label for="Ministry">وزارت/اداره</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-action-home prefix"></i>
                                <input name="Reyasat" type="text" data-parsley-required="true" value="{{ $record->Reyasat }}">
                                <label for="Reyasat">ریاست</label>
                            </div>


                            <div class="input-field col s12" align="center">
                                <ul id="task-card" class="collection with-header">
                                    <li >
                                        <h4 >دوره های آموزیشی ورکشاپ ها و سیمینار ها</h4>
                                    </li>
                                </ul>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-social-school prefix"></i>
                                <input name="PeriodsName" type="text" data-parsley-required="true" value="{{ $record->PeriodsName }}">
                                <label for="PeriodsName">نام دوره ها</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="mdi-communication-call Large prefix"></i>
                                <input name="Details" type="text" data-parsley-required="true" value="{{ $record->Details }}">
                                <label for="Details">محتویات</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="mdi-communication-call Large prefix"></i>
                                <input name="PeriodsDuration" type="text" data-parsley-required="true" value="{{ $record->PeriodsDuration }}">
                                <label for="PeriodsDuration">مدت دوره</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-action-home prefix"></i>
                                <input name="Preprationer" type="text" data-parsley-required="true" value="{{ $record->Preprationer }}">
                                <label for="Preprationer">مرجع دایره کننده</label>
                            </div>

                            <div class="row" >
                                <div class="col s12 m4 l12" align="center">
                                    <ul id="task-card" class="collection with-header">
                                        <li >
                                            <h4 >مهارت های زبان</h4>
                                        </li>
                                        <table>
                                            <tr>
                                                <td>
                                                    <li class="collection-item dismissable">
                                                        <input type="checkbox" checked disabled name="English" value="True" id="English"/>
                                                        <label for="English">انگلیسی
                                                        </label>
                                                        <span class="task-cat teal">تحریر    </span>
                                                        <select name="EnglishWrittingLevel" >
                                                            <option value="" disabled selected>Selected:  {{ $record->EnglishWrittingLevel }} </option>
                                                            <option value="خوب">خوب</option>
                                                            <option value="عالی">عالی</option>
                                                            <option value="بسیار خوب">بسیار خوب</option>
                                                        </select>

                                                        <span class="task-cat pink">خواندن   </span>
                                                        <select name="EnglishReadingLevel">
                                                            <option value="" disabled selected>Selected:  {{ $record->EnglishReadingLevel }} </option>
                                                            <option value="خوب">خوب</option>
                                                            <option value="عالی">عالی</option>
                                                            <option value="بسیار خوب">بسیار خوب</option>
                                                        </select>

                                                        <span class="task-cat cyan">تکلم   </span>
                                                        <select name="EnglishSpeakingLevel">
                                                            <option value="" disabled selected>Selected:  {{ $record->EnglishSpeakingLevel }} </option>
                                                            <option value="خوب">خوب</option>
                                                            <option value="عالی">عالی</option>
                                                            <option value="بسیار خوب">بسیار خوب</option>
                                                        </select>
                                                    </li>
                                                </td>

                                            </tr>
                                        </table>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </ul>
                                </div>

                                <div class="input-field col s12" align="center">
                                    <ul id="task-card" class="collection with-header">
                                        <li >
                                            <h4 >مهارت های کمپیوتر</h4>
                                        </li>
                                    </ul>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-home prefix"></i>
                                    <input name="ComputerSkills" type="text" data-parsley-required="true" value="{{ $record->ComputerSkills }}">
                                    <label for="ComputerSkills">نام پروگرام</label>
                                </div>


                                <div class="input-field col s6">
                                    <i class="mdi-social-school prefix"></i>
                                    <br/>
                                    <select name="ComputerSkillsLevel">
                                        <option value="" disabled selected>Selected: {{ $record->ComputerSkillsLevel }} </option>
                                        <option value="خوب">خوب</option>
                                        <option value="متوسط">متوسط</option>
                                        <option value="ضعیف">ضعیف</option>

                                    </select>
                                </div>

                                <div class="input-field col s12" align="center">
                                    <ul id="task-card" class="collection with-header">
                                        <li >
                                            <h4 >آگاهی از قوانین مقررات طرزالعمل ها و رهنمود های خدمات ملکی</h4>
                                        </li>
                                    </ul>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-home prefix"></i>
                                    <input nam="HumanLaws" type="text" data-parsley-required="true" value="{{ $record->HumanLaws }}">
                                    <label for="HumanLaws">قانون کارکنان خدمات ملکی</label>
                                </div>


                                <div class="input-field col s6">
                                    <i class="mdi-social-school prefix"></i>
                                    <br/>
                                    <select name="HumanLawsLevel">
                                        <option value="" disabled selected>Selected: {{ $record->HumanLawsLevel }} </option>
                                        <option value="خوب">خوب</option>
                                        <option value="متوسط">متوسط</option>
                                        <option value="ضعیف">ضعیف</option>

                                    </select>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-home prefix"></i>
                                    <input name="Regulations" type="text" data-parsley-required="true" value="{{ $record->Regulations }}">
                                    <label for="Regulations">مقررات</label>
                                </div>


                                <div class="input-field col s6">
                                    <i class="mdi-social-school prefix"></i>
                                    <br/>
                                    <select name="RegulationsLevel">
                                        <option value=""  disabled selected>Selected: {{ $record->RegulationsLevel }} </option>
                                        <option value="خوب">خوب</option>
                                        <option value="متوسط">متوسط</option>
                                        <option value="ضعیف">ضعیف</option>

                                    </select>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-home prefix"></i>
                                    <input name="Rules" type="text" data-parsley-required="true" value="{{ $record->Rules }}">
                                    <label for="Rules">طرزالعمل ها</label>
                                </div>


                                <div class="input-field col s6">
                                    <i class="mdi-social-school prefix"></i>
                                    <br/>
                                    <select name="RulesLevel">
                                        <option value=""  disabled selected>Selected: {{ $record->RulesLevel }} </option>
                                        <option value="خوب">خوب</option>
                                        <option value="متوسط">متوسط</option>
                                        <option value="ضعیف">ضعیف</option>

                                    </select>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-home prefix"></i>
                                    <input name="Directions" type="text" data-parsley-required="true" value="{{ $record->Directions }}">
                                    <label for="Directions">رهنمود ها</label>
                                </div>


                                <div class="input-field col s6">
                                    <i class="mdi-social-school prefix"></i>
                                    <br/>
                                    <select name="DirectionsLevel" value="">
                                        <option value="" disabled selected>Selected: {{ $record->DirectionsLevel }}</option>
                                        <option value="خوب">خوب</option>
                                        <option value="متوسط">متوسط</option>
                                        <option value="ضعیف">ضعیف</option>

                                    </select>

                                </div>

                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="submit">Update
                                    <i class="mdi-content-send right"></i>
                                    </button>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>



    </div>
    </div>
@stop

</body>

