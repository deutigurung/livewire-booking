<!-- Home -->
<div class="home">
    <div class="background_image" style="background-image:url( {{$img}} )"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">{{$title}}</div>
                        <div class="booking_form_container">
                            <form action="{{ route('search')}}" method="GET" class="booking_form">
                                <div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
                                    <div class="booking_input_container d-flex flex-row align-items-start justify-content-start flex-wrap">
                                        <div>
                                            <input type="date" name="start_date" class="datepicker booking_input booking_input_a booking_in hasDatepicker" placeholder="Check in" id="dp1691058116334" wfd-id="id0">
                                        </div>
                                        <div>
                                            <input type="date" name="end_date" class="datepicker booking_input booking_input_a booking_out hasDatepicker" placeholder="Check out" id="dp1691058116335" wfd-id="id1">
                                        </div>
                                        <div>
                                            <input type="number" name="adults" min="1" class="booking_input booking_input_b" placeholder="Adults" wfd-id="id2">
                                        </div>
                                        <div>
                                            <input type="number" name="children" min="0" class="booking_input booking_input_b" placeholder="Children" wfd-id="id3">
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="booking_button trans_200">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>