<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<!-- css -->
	<link href="{{ asset ('manage/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset ('manage/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset ('manage/css/styles.css') }}" rel="stylesheet">
	<!--Icons-->
	<script src="{{ asset ('manage/js/lumino.glyphs.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('manage/Awesome/css/all.css') }}">
</head>
<body>


	<!-- header -->
	@include('admin.layout.header')
    <!-- header -->    


	<!-- sidebar left-->
	@include('admin.layout.sidebar')
    <!--/. end sidebar left-->
    

	<!--main-->
	@yield('content')
	<!--end main-->

	<!-- javascript -->
	<script src="{{ asset ('manage/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset ('manage/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset ('manage/js/chart.min.js') }}"></script>
	<script src="{{ asset ('manage/js/easypiechart.js') }}"></script>
	<script src="{{ asset ('manage/js/easypiechart-data.js') }}"></script>
	<script src="{{ asset ('manage/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset ('manage/js/chart-data.js') }}"></script>
    <script>
            function changeImg(input){
                   //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
                   if(input.files && input.files[0]){
                       var reader = new FileReader();
                       //Sự kiện file đã được load vào website
                       reader.onload = function(e){
                           //Thay đổi đường dẫn ảnh
                           $('#avatar').attr('src',e.target.result);
                       }
                       reader.readAsDataURL(input.files[0]);
                   }
               }
               $(document).ready(function() {
                   $('#avatar').click(function(){
                       $('#img').click();
                   });
               });
       
    </script>
</body>

</html>