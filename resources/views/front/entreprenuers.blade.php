@extends('front.layout')

@push('styles')
@endpush
@section('content')
  @foreach($data['videoArtegSelected'] as $idex => $item)
        <video playsinline="playsinline" autoplay="autoplay" id="myVideo" muted="muted" loop="loop" style="width: 100%;">
            <source src="{{$item->video_name}}" type="video/mp4">
        </video>
        @if($$idex < 1)
      @break
    @endif
  @endforeach
	<h2 class="text-center mb-5 mt-5">
        アクティビティギャラリー
    </h2>
    <div class="container">
        @if(empty($data['article_target']))
            <h2 class="text-center" style="color: red;">データなし！</h2>
        @else
        <div class="row">
                <div class="col-4 left_side_galery mt-5 pt-2">
                    @foreach($data['article_target']  as $index => $item3)
                        <a href="{{ url('/rel', $item3->title) }}">
                            <div class="img_block" 
                                style="background-image: url({{$item3->photo_cover}});">
                            
                            </div>
                        </a>
                        @if($index + 1 ===3)
                            @break
                        @endif
                    @endforeach
                </div>
                <div class="col-4">
                @foreach($data['article_target']  as $index => $item7)
                    @if($index >= 3 && $index < 7)
                        <a href="{{ url('/rel', $item7->title) }}">
                            <div class="img_block" 
                                style="background-image: url({{$item7->photo_cover}});">
                            
                            </div>
                        </a>
                        @endif
                    @endforeach
                </div>
                <div class="col-4 mt-5 pt-4">
                    @foreach($data['article_target']  as $index => $item7)
                        @if($index >= 8 && $index < 12)
                        <a href="{{ url('/rel', $item7->title) }}">
                            <div class="img_block" 
                                style="background-image: url({{$item7->photo_cover}});">
                            
                            </div>
                        </a>
                        @endif
                    @endforeach
                    
                </div>
            </div>
        @endif
        <h2 class="text-center mb-5 mt-5">
            ビデオフィード
        </h2>
        <div class="row mt-5 mb-5 video_feed_block">
            @foreach($data['videoArtegSelected'] as $item)
            <div class="d-md-flex  align-content-lg-center mb-4">
                <a href="{{ url('/watch', $item->title) }}">
                    <div class="feed__item" style="background-image: url('{{ asset($item->video_cover) }}');"> 
                    </div>
                </a>
                <div class="bili-video-card__info __scale-disable pt-4 mb-4">
                    <div class="bili-video-card__info--right p-3">
                        <h3 class="bili-video-card__info--tit">
                            <a href="{{ url('/watch', $item->title) }}" >{{$item->title}}</a>
                        </h3>
                      <div class="bili-video-card__info--bottom">
                          <span class="bili-video-card__info--author" title="凡人修仙传数据分析">凡人修仙传数据分析</span>
                          <span class="bili-video-card__info--date">· 16小时前</span>
                      </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
@push('scripts')
	<script type="text/javascript">
      let user_data = "thernthy"
      console.log(user_data);
	</script>
@endpush
