@extends('frontend.layout')

@section('content')
	<div id="right_ok">
		<div class="caption">THÔNG TIN CÔNG TY</div>  {{-- white-color --}}
		<div class="caption_en">Company infomation</div>

		<div class="m-t-40"></div>

		<div class="box-image-license">
			<div class="img-bus img-left">
	            <img src="{{ asset('images/license-business-1.png') }}" alt="">
	        </div>
	        <div class="img-bus img-right">
	        	<img src="{{ asset('images/license-business-2.png') }}" alt="">
	        </div>
		</div>
	</div>
@endsection

