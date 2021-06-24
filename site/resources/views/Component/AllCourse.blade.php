<div class="container mt-5">
    <div class="row">


        @foreach($CourseData as $CourseData)
        <div class="col-md-4 p-1 text-center">
            <div class="card">
                <div class="text-center">
                    <img class="w-100" src="{{$CourseData->course_img}}" alt="Card image cap">
                    <h5 class="service-card-title mt-4">{{$CourseData->course_name}}</h5>
                    <h6 class="service-card-subTitle p-0 ">{{$CourseData->course_des}}</h6>
                    <h6 class="service-card-subTitle p-0 ">{{$CourseData->course_fee}} {{$CourseData->course_totalclass}}</h6>
                    <a href="{{$CourseData->course_link}}"  target="_blank" class="normal-btn-outline mt-2 mb-4 btn">শুরু করুন </a>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>

