@extends('crudbooster::admin_template')
@section('content')
    <div class='panel panel-default'>
        <div class='panel-heading'>{{ $page_title }}</div>
        <div class='panel-body'>
                <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data"
                action="{{ crudbooster::mainpath('add-save') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="panel-body">
                    {{ form_input("ចំណងជើងជាភាសារខ្មែរ", "title", "text", 10, "", "required") }}
                    {{ form_textarea("ការពិពណ៌នាជាភាសរអងគ្លេស", "description", "textarea", "required", "") }}
                    <hr>
                    {{ form_start_combobox("Page Action", "category[]", 6, "", "required multiple='multiple'", "select2", false) }}
                            @foreach ($creator_teams as $key => $item)
                                <option value="{!! $item->id !!}">{!! $item->val !!}</option>
                            @endforeach
                    {{ form_end_combobox() }}
                    <hr>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-6">
                            <div class="callout callout-info">
                                <h4><i class="fa fa-exclamation-circle"></i> Note:</h4>
                                <p>You could add more than one keyword.</p>
                            </div>
                            <br>
                        </div>
                    </div>

                    <hr>
                    {{ form_mediapicker("Video", "video_name", 10, "required|mimes:mp4,ogx,oga,ogv,ogg,webm", '') }}
                    <hr>
                    {{ form_mediapicker("Cover pictures", "video_cover", 10, "required|img", '') }}
                    {{ form_radio("Status", "status") }}
                </div>
                <div class="panel-footer">
                    <input type="submit" name="submit" value="Save & Add More"
                        class='btn btn-success'>
                    <input type="submit" name="submit" class="btn btn-primary" value="Save Data">
                </div>
            </form>
        </div>
    </div>
@endsection