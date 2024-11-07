<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('scss/post-recognize.css')}}">
    <title>Post - Recognize</title>
</head>
<body>
    <div class="container">
        <div class="info-badge">
            <div class="img-member">
                <img src="{{ asset('storage/images/image_member1.jpg')}}" alt="">    
            </div>    

            <div class="info-status-badge">
                <div class="info-recorder">
                    <span><strong>Lương Quỳnh</strong> đã ghi nhận <strong>Zhang Xinh</strong> - <i class="fa-solid fa-medal"></i> <strong>Linh Hoạt</strong></span>
                </div>

                <div class="time-recognize">
                    <span>1 phút trước &#8226; <i class="fa-solid fa-briefcase"></i>
                    </span>
                </div>
            </div>            
        </div> 

        <div class="img-recognize">
            <div class="img-bg">
                <img src="{{ asset('storage/images/bg_recoginze.jpg')}}" alt="">
            </div>

            <div class="congrats-badge">
                <div class="img-badge">
                    <img src="{{asset('storage/images/badge1.jpg')}}" alt="">
                </div>
                <div class="text-congrats">
                    <span>Chúc mừng <strong>Zhang Xinh</strong><br> 
                        đã được ghi nhận <strong>Linh hoạt</strong></span>
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>