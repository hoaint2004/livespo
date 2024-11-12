@extends('layout')
@section('title', 'Post - Recognize')
@section('content')
    <div class="content">
        <div class="post-recognize">
            <div class="info-badge">
                <div class="img-member">
                    <img src="{{ asset('storage/images/image_member1.jpg') }}" alt="">
                </div>
                <div class="info-status-badge">
                    <span class="user-name">Lương Quỳnh</span> <span class="user-action">đã ghi nhận Zhang Xinh - 🏅 Linh
                        Hoạt</span>
                    <div class="time-recognize">
                        <span>1 phút trước &#8226; <i class="fa-solid fa-briefcase"></i>
                        </span>
                    </div>
                </div>
            </div>


            <div class="img-recognize">
                <div class="img-bg">
                    <img src="{{ asset('storage/images/bg_recoginze.jpg') }}" alt="">
                </div>

                <div class="congrats-badge">
                    <div class="img-badge">
                        <img src="{{ asset('storage/images/badge1.jpg') }}" alt="">
                    </div>
                    <div class="text-congrats">
                        <span>Chúc mừng <strong>Zhang Xinh</strong><br>
                            đã được ghi nhận <strong>Linh hoạt</strong></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="post-recognize">
            <div class="info-badge">
                <div class="img-member">
                    <img src="{{ asset('storage/images/image_member1.jpg') }}" alt="">
                </div>
                <div class="info-status-badge">
                    <span class="user-name">Lương Quỳnh</span> <span class="user-action">đã ghi nhận Zhang Xinh - 🏅 Linh
                        Hoạt</span>
                    <div class="time-recognize">
                        <span>1 phút trước &#8226; <i class="fa-solid fa-briefcase"></i>
                        </span>
                    </div>
                </div>
            </div>


            <div class="img-recognize">
                <div class="img-bg">
                    <img src="{{ asset('storage/images/bg_recoginze.jpg') }}" alt="">
                </div>

                <div class="congrats-badge">
                    <div class="img-badge">
                        <img src="{{ asset('storage/images/badge1.jpg') }}" alt="">
                    </div>
                    <div class="text-congrats">
                        <span>Chúc mừng <strong>Zhang Xinh</strong><br>
                            đã được ghi nhận <strong>Linh hoạt</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
