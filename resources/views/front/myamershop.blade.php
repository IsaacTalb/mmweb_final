@extends('front.layout')

@push('styles')
    <style>

     .content{
        line-height: 2;
     }
    </style>
@endpush

@section('content')
    <video playsinline="playsinline" autoplay="autoplay" id="myVideo" muted="muted" loop="loop" style="width: 100%;">
		<source src="https://youtu.be/CjC0fVRiVeE?si=9hSVLbvgDvnAWj1F" type="video/mp4">
    </video>
	<h2 class="text-center mb-5 mt-5">
    インパクトのあるお店
    </h2>
    <div class="container">
        <div class="row">
           <p class="content">
           One4One は、障害者 (PWD) と少数民族の包括性とエンパワーメントの促進に特化したオンライン プラットフォームです。
            私たちのプラットフォームは、啓発コンテンツや、障害者が作った地元で作られた衣類や少数民族の生地源の宣伝を通じて、障害者と一般の人々を結びつける架け橋の役割を果たしています。
            私たちは固定観念を打破し、多様性が尊重され祝われる環境を作り出すことを目指しています。
           </p>
        </div>
        <div class="row mt-5 pt-5">
            <div class="col-sm-6">
             <b>いらっしゃいませ</b>
            </div>
            <div class="col-sm-6" >
                <p class="content">
                One4One は、障害者 (PWD) と少数民族の包括性とエンパワーメントの促進に特化したオンライン プラットフォームです。
                私たちのプラットフォームは、啓発コンテンツや地元で作られた製品の宣伝を通じて障害者と一般の人々を結び付ける架け橋として機能します。
                 <img src="{{ asset('img/sh.jpg') }}" alt="" width="250px" height="250px" style="float:left;">
                </p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        AOS.init();
    </script>
	<script type="text/javascript">

	</script>
@endpush
