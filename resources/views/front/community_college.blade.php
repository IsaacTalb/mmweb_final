@extends('front.layout')

@push('styles')
<style>
    .side_bar_right{
        background: #EAE5E3;
        padding-bottom: 20px;
    }
    .side_bar_right h2{
        padding:10px 0;
        color: #7E3F3F;
        border-bottom: 1.5px solid #978080;
    }
    .side_bar_right li{
        line-height: 2;
        color: white;
    }
    .side_bar_right li a{
        color: #714747;
        text-decoration: none;
    }
    .side_bar_right .realative_page{
        width: 100%;
        padding: 8px 0;
        background: #9D5139;
        border-radius: 27px;
        transform: rotate(4deg);
        padding-left: 10px;
        box-shadow: inset 1px 1px 10px rgb(38 37 37 / 84%);
        margin-bottom: 2rem;
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .side_bar_right .realative_page a{
        color: white;
        text-decoration: none;
         margin:0 10%;
         z-index: 100;
    }
    .realative_page i{
        padding: 10px;
        color: white;
        background: #978080;
        border-radius: 50%;
        box-shadow: 1px 1px 10px rgb(38 37 37 / 84%);
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        z-index: 50;
    }
    .realative_page:hover >i{
        animation: moveRight .5s forwards;
    }
    .img_galery{
        display: flex;
        flex-wrap: wrap;
    }
    .img_galery .img_blocks{
        width: 33.33%;
        height: 150px;
        border-radius: 10px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        transform: rotate(11deg) translateX(10px);
        z-index: 10;
        transition: all .5s;
    }
    .img_blocks:hover {
        z-index: 15;
        transform: rotate(0);
    }
    .img_blocks:nth-child(2):hover {
        transform: rotate(0deg) translateY(-20px);
        z-index: 15;
    }
    .img_blocks:last-child:hover {
        transform: rotate(0deg) translateX(-10px)  translateY(-30px);
        z-index: 15;
    }
    .img_blocks:nth-child(2){
        transform: rotate(11deg) translateY(-20px);
        z-index: 5;
    }
    .img_blocks:last-child{
        transform: rotate(11deg) translateX(-10px) translateY(-30px);
        z-index: 2;
    }
    @keyframes moveRight {
            0% {
                left: 0;
                background: #978080;
            }
            100% {
                left: 91%; /* Adjust this value based on how far you want the element to move */
                background: green;
            }
        }

        .video_component{
            max-width: 350px;
            min-width: 100%;
            text-align: center;
        }
        .video_component .video_vocer_img {
            margin: auto;
            width: 100%;
            height: 300px;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            border-radius: 20px;
            transition: all .6s;
        }
        .video_component .video_vocer_img:hover{
            opacity: .5;
        }
        .video_component .video_vocer_img .play_icon{
            position: absolute;
            top: 50%;
            right: 50%;
            transform: translate(50%, -50%);
            font-size: 2.5rem;
            color: white;
        }
        @media screen and (min-width:1050px) {
            .video_component .video_vocer_img {
                max-width: 600px;
                height: 300px;
            }
        }
</style>
@endpush

@section('content')
   <video playsinline="playsinline" autoplay="autoplay" id="myVideo" muted="muted" loop="loop" style="width: 100%;">
		<source src="{{ asset('img/video/Home_page_cover.mp4') }}" type="video/mp4">
    </video>
    <div class="container">
        <h2 class="text-center pt-5 pb-5">起業家</h2>
       <div class="row">
          <div class="col-sm-6">
                <img src="{{ asset('img/650c1db596b082.23624320.jpg') }}" alt="" width="100%">
          </div>
          <div class="col-sm-6 pt-4">
          <h3 class="text-center pb-3">人名</h3>
            <p>

            「まず始めに」または「まず」というと、簡単に始めることができます。
             例を挙げる場合は、「たとえば」または「次のことを検討してください」。 
             要点を付け加えたり、アイデアを拡張したりするときに「さらに」または「さらに」。 
             反対の視点を導入する場合は、「逆に」または「その一方で」。 
            「さらに」または「さらに」は、別の補足的な詳細を持ち出す場合に使用します。
             文章の文脈や流れに基づいて導入フレーズを選択してください。
            </p>
          </div>
       </div>
       <div class="row">
           <div class="col-sm-6 pt-4">
            <h3 class="text-center pb-3">人名</h3>
               <p>

               「まず始めに」または「まず」というと、簡単に始めることができます。
             例を挙げる場合は、「たとえば」または「次のことを検討してください」。 
             要点を付け加えたり、アイデアを拡張したりするときに「さらに」または「さらに」。 
             反対の視点を導入する場合は、「逆に」または「その一方で」。 
            「さらに」または「さらに」は、別の補足的な詳細を持ち出す場合に使用します。
             文章の文脈や流れに基づいて導入フレーズを選択してください。
                </p>
            </div>
            <div class="col-sm-6">
                  <img src="{{ asset('img/650c1db596b082.23624320.jpg') }}" alt="" width="100%">
            </div>
       </div>

    </div>
@endsection

@push('scripts')
	<script type="text/javascript">
	</script>
    <script>
        function setHref(path) {
            console.log(path)
            window.location.href = "{{url('rel')}}/" + path;
        }
   </script>
@endpush
