<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/scss/recognize.css')}}">
    <title>Recognize</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="member">
                <div class="list-member">
                    <h3>Chọn thành viên ghi nhận</h3>
                    <span>Danh sách thành viên</span> <br>
                    <div class="form-search">
                        <input type="text" name="key-search" class="key-search">
                        <button type="submit" class="btn-search">
                            <i class="fa-solid fa-magnifying-glass"></i><span>Tìm kiếm</span>
                        </button>
                    </div>

                    <div class="list">
                        <div class="info-member">
                            <div class="image">
                                <img src="{{ asset('storage/images/image_member1.jpg') }}" alt="">
                            </div>
                            <div class="infomation">
                                <span class="fullname">Đỗ Ngọc Diệp</span> <br>
                                <span class="position">Chuyên Gia Đào Tạo - Đào Tạo & CSKH Cuộc Gọi</span>
                            </div>
                        </div>
                        <div class="select">
                            <input type="checkbox" name="select" id="">
                        </div>
                    </div>
                    <hr>
                    
                    <div class="list">
                        <div class="info-member">
                            <div class="image">
                                <img src="{{ asset('storage/images/image_member1.jpg') }}" alt="">
                            </div>
                            <div class="infomation">
                                <span class="fullname">Đỗ Thị Hoa</span> <br>
                                <span class="position">Trưởng Phòng QTBH - Bộ phận Quản Trị Bán Hàng</span>
                            </div>
                        </div>
                        <div class="select">
                            <input type="checkbox" name="select" id="">
                        </div>
                    </div>
                    <hr>
                    
                    <div class="list">
                        <div class="info-member">
                            <div class="image">
                                <img src="{{ asset('storage/images/image_member1.jpg') }}" alt="">
                            </div>
                            <div class="infomation">
                                <span class="fullname">Doan Nhu Thanh</span> <br>
                                <span class="position">Nhân viên sản xuất - Phòng sản xuất</span>
                            </div>
                        </div>
                        <div class="select">
                            <input type="checkbox" name="select" id="">
                        </div>
                    </div>
                    <hr>

                    <div class="list">
                        <div class="info-member">
                            <div class="image">
                                <img src="{{ asset('storage/images/image_member1.jpg') }}" alt="">
                            </div>
                            <div class="infomation">
                                <span class="fullname">Doan Thi Mai Chi</span> <br>
                                <span class="position">Giám đốc kinh doanh kênh MT - MT</span>
                            </div>
                        </div>
                        <div class="select">
                            <input type="checkbox" name="select" id="">
                        </div>
                    </div>
                    <hr>
                </div>

                <div class="member-recognize">
                    <h3>Thành viên đã chọn</h3>

                    <div class="member-selected">
                        <div class="image-member-selected">
                            <img src="{{ asset('storage/images/image_mebber2.jpg') }}" alt="" width="100px">
                        </div>

                        <div class="infomation-member-selected">
                            <span class="fullname">Trần Văn Lương</span> <br>
                            <span class="position">Development - Bộ phận IT</span>
                        </div>
                    </div>
                </div>
            </div>

            <di2 class="badge">
                <h3>Chọn huy hiệu muốn ghi nhận</h3>
                <div class="list-badge">
                    <div id="badgeid-1" class="badgeid">
                        <div class="image-badge">
                            <img src="{{ asset('storage/images/badge1.jpg') }}" alt="">
                        </div>
                        <span>Tận tâm với khách hàng</span>
                    </div>
                
                    <div id="badgeid-2" class="badgeid">
                        <div class="image-badge">
                            <img src="{{ asset('storage/images/badge2.png') }}" alt="">
                        </div>
                        <span>Trân trọng lời nói</span>
                    </div>
                
                    <div id="badgeid-3" class="badgeid">
                        <div class="image-badge">
                            <img src="{{ asset('storage/images/badge3.png') }}" alt="">
                        </div>
                        <span>Sống với data</span>
                    </div>
                
                    <div id="badgeid-4" class="badgeid">
                        <div class="image-badge">
                            <img src="{{ asset('storage/images/badge4.jpg') }}" alt="">
                        </div>
                        <span>Giao tiếp hiệu quả</span>
                    </div>
                
                    <div id="badgeid-5" class="badgeid">
                        <div class="image-badge">
                            <img src="{{ asset('storage/images/badge5.png') }}" alt="">
                        </div>
                        <span>Cởi mở học hỏi</span>
                    </div>
                </div>                
            </di2>

            <div class="content-recognize">
                <h3>Để lại lời nhắn cho người được ghi nhận</h3>
                <textarea name="" id="" class="content"></textarea>
                {{-- <textarea type="text" name="content-recognize" id="" class="message"> --}}
            </div>
            <hr>
            <div class="button-recognize">
                <button type="submit" class="cancel">Hủy</button>
                <button type="submit" class="recognize">Ghi nhận</button>
            </div>
        </form>
    </div>

</body>
    <link rel="stylesheet" href="{{ asset('reognize.js')}}">
</html>
