<x-app-layout>
    <x-slot name="header">
        <section class="course-header-area">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="course-header-wrap">
                            <h1 class="title"></h1>
                            <p class="subtitle"></p>
                            <div class="rating-row">
                                {{--<span class="course-badge best-seller">Best seller</span>--}}
                                <i class="fas fa-star filled" style="color: #f5c85b;"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-rating"><?php echo 5; ?></span>
                                <span>(20 ratings)</span>
                                <span class="enrolled-num">
                                100 students enrolled
                            </span>
                            </div>
                            <div class="created-row">
                                {{--<span class="created-by">--}}
                                {{--Created by--}}
                                {{--<a href="">first_name last_name</a>--}}
                                {{--</span>--}}
                                <span class="last-updated-date">Created on </span>
                                <span class="last-updated-date">Last updated on </span>
                                <span class="comment">
                                <i class="fas fa-comment"></i>English
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
        </section>

        <section class="course-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <div class="what-you-get-box">
                            <div class="what-you-get-title">What i will learn?</div>
                            <ul class="what-you-get__items">
                                <li></li>
                            </ul>
                        </div>
                        <br>
                        <div class="course-curriculum-box">
                            <div class="course-curriculum-title clearfix">
                                <div class="title float-left">Lessons for this course</div>
                                <div class="float-right">
                                <span class="total-lectures">
                                    lessons
                                </span>
                                    <span class="total-time">
                                    2 hours
                                </span>
                                </div>
                            </div>
                            <div class="course-curriculum-accordion">

                                <div class="lecture-group-wrapper">
                                    <div class="lecture-group-title clearfix" data-toggle="collapse"
                                         data-target="#collapse"
                                         aria-expanded="false">
                                        <div class="title float-left">
                                            Lessons
                                        </div>
                                        <div class="float-right">
                                        <span class="total-lectures">
                                            lessons
                                        </span>
                                            <span class="total-time">
                                            12: 30 minute
                                        </span>
                                        </div>
                                    </div>

                                    <div id="collapse" class="lecture-list collapse">
                                        <ul>
                                                <li class="lecture has-preview">
                                                    <span class="lecture-title"></span>
                                                    <span class="lecture-time float-right"></span>
                                                    <!-- <span class="lecture-preview float-right" data-toggle="modal" data-target="#CoursePreviewModal">Preview</span> -->
                                                </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="requirements-box">
                            <div class="requirements-title">Requirements</div>
                            <div class="requirements-content">
                                <ul class="requirements__list">
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="description-box view-more-parent">
                            <div class="view-more" onclick="viewMore(this,'hide')">
                                + View More
                            </div>
                            <div class="description-title">Description</div>
                            <div class="description-content-wrap">
                                <div class="description-content">
                                </div>
                            </div>
                        </div>


                        <div class="compare-box view-more-parent">
                            <div class="view-more" onclick="viewMore(this)">+ View More</div>
                            <div class="compare-title">Other Related Courses</div>
                            <div class="compare-courses-wrap">

                            </div>
                        </div>

                        <div class="about-instructor-box">
                            <div class="about-instructor-title">
                                About the instructor
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="about-instructor-image">
                                        <img src="" alt="" class="img-fluid">
                                        <ul>
                                            <!-- <li><i class="fas fa-star"></i><b>4.4</b> Average Rating</li> -->
                                            <li>
                                                <i class="fas fa-comment"></i><b>
                                                    100
                                                </b> reviews
                                            </li>
                                            <li><i class="fas fa-user"></i><b>
                                                    120
                                                </b> Students
                                            </li>
                                            <li>
                                                <i class="fas fa-play-circle"></i>
                                                <b>
                                                    11
                                                </b> Courses
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="about-instructor-details view-more-parent">
                                        <div class="view-more" onclick="viewMore(this)">+ View More</div>
                                        <div class="instructor-name">
                                            <a href=""></a>
                                        </div>
                                        <div class="instructor-title">

                                        </div>
                                        <div class="instructor-bio">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="student-feedback-box">
                            <div class="student-feedback-title">
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-4">
                                    <div class="average-rating">
                                        <div class="num">
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star filled" style="color: #f5c85b;"></i>
                                            <i class="fas fa-star" style="color: #abb0bb;"></i></div>
                                        <div class="title">Average rating</div>
                                    </div>
                                </div>
                                {{--<div class="col-lg-9">--}}
                                {{--<div class="individual-rating">--}}
                                {{--<ul>--}}
                                {{--@for($i = 1; $i <= 5; $i++)--}}
                                {{--<li>--}}
                                {{--<div class="progress">--}}
                                {{--<div class="progress-bar" style="width: 20%"></div>--}}
                                {{--</div>--}}
                                {{--<div>--}}
                                {{--<span class="rating">--}}
                                {{--@for($j = 1; $j <= (5 - $i); $j++)--}}
                                {{--<i class="fas fa-star"></i>--}}
                                {{--@endfor--}}
                                {{--@for($j = 1; $j <= $i; $j++)--}}
                                {{--<i class="fas fa-star filled"></i>--}}
                                {{--@endfor--}}
                                {{--</span>--}}
                                {{--<span>30%</span>--}}
                                {{--</div>--}}
                                {{--</li>--}}
                                {{--@endfor--}}
                                {{--</ul>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                            <div class="reviews">
                                <div class="reviews-title">Reviews</div>
                                <ul>
                                        <li>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="reviewer-details clearfix">
                                                        <div class="reviewer-img float-left">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="review-time">
                                                            <div class="time">
                                                            </div>
                                                            <div class="reviewer-name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="review-details">
                                                        <div class="rating">
                                                        </div>
                                                        <div class="review-text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course-sidebar natural">
                            <div class="preview-video-box">
                                <a data-toggle="modal" data-target="#CoursePreviewModal">
                                    <img src="" alt="" class="img-fluid">
                                    <span class="preview-text">Preview this course</span>
                                    <span class="play-btn"></span>
                                </a>
                            </div>
                            <div class="course-sidebar-text-box">
                                <div class="price">
                                <span class="current-price">
                                    $<span class="current-price"></span></span>
                                    <input type="hidden" id="total_price_of_checking_out" value="">
                                </div>

                                {{--<div class="buy-btns">--}}
                                {{--<button class="btn btn-buy-now" type="button">Already purchased</button>--}}
                                {{--</div>--}}
                                <div class="buy-btns">
                                        <a href="" class="btn btn-buy-now" id="course_2" onclick="">Buy
                                            now</a>
                                        <button class="btn btn-add-cart addedToCart" type="button" id=""
                                                onclick="">Added to cart
                                        </button>

                                        <form action="" method="post">
                                            @csrf

                                            <input type="hidden" value="" name="course_id">
                                            <input type="hidden" value="" name="name">
                                            <input type="hidden" value="" name="price">
                                            <input type="hidden" value="1" name="quantity">

                                            <button class="btn btn-add-cart" type="submit" id="">Add to
                                                cart
                                            </button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
</x-app-layout>
