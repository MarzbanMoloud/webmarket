@extends('layout.main-layout')
@section('title','لیست محصولات')
@section('content')

    <!--  ==========  -->
    <!--  = Breadcrumbs =  -->
    <!--  ==========  -->
    <div class="darker-stripe">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li>
                            <a>وبمارکت</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="{{route('home')}}">فروشگاه</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="push-up blocks-spacer">
            <div class="row">

                <!--  ==========  -->
    <!--  = Main content =  -->
    <!--  ==========  -->
    <section class="span12">

        <!--  ==========  -->
        <!--  = Title =  -->
        <!--  ==========  -->
        <div class="underlined push-down-20">
            <div class="row">
                <div class="span5">
                    <h3><span class="light">همه</span> محصولات</h3>
                </div>
                <div class="span4">
                    <div class="form-inline sorting-by" id="tourStep4">
                        <label for="isotopeSorting" class="black-clr">چینش :</label>
                        <select id="isotopeSorting" class="span3">
                            <option value='{"sortBy":"price", "sortAscending":"true"}'>بر اساس قیمت (کم به زیاد) &uarr;</option>
                            <option value='{"sortBy":"price", "sortAscending":"false"}'>بر اساس قیمت (زیاد به کم) &darr;</option>
                            <option value='{"sortBy":"name", "sortAscending":"true"}'>بر اساس نام (صعودی) &uarr;</option>
                            <option value='{"sortBy":"name", "sortAscending":"false"}'>بر اساس نام (نزولی) &darr;</option>
                        </select>
                    </div>
                </div>
            </div>
        </div> <!-- /title -->

        <!--  ==========  -->
        <!--  = Products =  -->
        <!--  ==========  -->
        <div class="row popup-products">
            <div id="isotopeContainer" class="isotope-container">






                <!--  ==========  -->
                <!--  = Single Product =  -->
                <!--  ==========  -->
                @foreach($test as $t)
                <div class="span3 filter--accessories" data-price="738" data-popularity="4" data-size="l|xl" data-color="red" data-brand="adidas">
                    <div class="product">

                        <div class="product-img">
                            <div class="picture">
                                <img width="540" height="374" alt="" src="" />
                                <div class="img-overlay">
                                    <a class="btn more btn-primary" href="">توضیحات بیشتر</a>
                                    <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-titles no-margin">
                            <h4 class="title">{{$t->price}}</h4>
                            <h5 class="no-margin isotope--title">{{$t->title}}</h5>
                        </div>
                        <p class="center-align stars">
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star"></span>

                        </p>
                    </div>
                </div>
                @endforeach
                    <!-- /single product -->

            </div>
        </div>
        <hr />
        <div class="text-center">
        </div>

    </section> <!-- /main content -->
    </div>
    </div>
    </div> <!-- /container -->






@stop