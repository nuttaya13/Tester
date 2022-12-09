@extends('frontend.layouts.master')

@section('title', 'E-SHOP || Order Track Page')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Order Track</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <section class="tracking_box_area section_gap py-5">
        <div class="container">
            <div class="tracking_box_inner">
                @if (session()->get('status') && session()->get('status') == 'success')
                    <div class="alert alert-success">ดำเนินการสำเร็จ</div>
                @endif
                <h1>แจ้งชำระเงิน</h1>
                <p>ระบบแจ้งยืนยันการชำระเงิน เป็นระบบที่สร้างขึ้นเพื่ออำนวยความสะดวกลูกค้า
                    ในกรณีที่ไม่สามารถส่งแฟกซ์หรือสแกนสลิปส่งทางอีเมลได้
                    การแจ้งชำระเงินออนไลน์ จะช่วยให้เจ้าหน้าที่ของเรา ทราบถึงการชำระเงินของลูกค้า และสามารถตรวจสอบข้อมูล
                    ได้จากรายละเอียดที่ลูกค้าแจ้งให้
                    ซึ่งจะเป็นการประหยัดเวลา และลดขั้นตอนความยุ่งยากได้</p>
                <form class="row tracking_form my-4" action="{{ route('file.store') }}" method="post"
                    novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-8 form-group">
                        <label>ชื่อ<span>*</span></label>
                        <input type="text" class="form-control p-2 {{ $errors->has('name') ? 'is-invalid' : '' }}"
                            name="name" placeholder="Enter your order number" value="{{ old('name', null) }}">
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {!! $errors->first('name') !!}
                            </div>
                        @endif
                    </div>

                    <div class="col-md-8 form-group">
                        <label>จำนวนโอน<span>*</span></label>
                        <input type="text" class="form-control p-2 {{ $errors->has('payment') ? 'is-invalid' : '' }}"
                            name="payment" placeholder="Enter your order number" value="{{ old('payment', null) }}">
                        <div class="invalid-feedback">
                            {!! $errors->first('payment') !!}
                        </div>
                    </div>
                    <div class="col-md-8 form-group">
                        <label>หลักฐานการชำระเงิน<span>*</span></label>
                        <input type="file" class="form-control p-2 {{ $errors->has('file') ? 'is-invalid' : '' }}"
                            name="file" placeholder="Enter your order number">
                        <div class="invalid-feedback">
                            {!! $errors->first('file') !!}
                        </div>
                    </div>
                    <div class="col-md-8 form-group">
                        <button type="submit" value="submit" class="btn submit_btn">แจ้งชำระเงิน</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
