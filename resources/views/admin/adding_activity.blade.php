@extends('crudbooster::admin_template')

@section('content')
<style>
 h1 small {
	 display: block;
	 font-size: 15px;
	 padding-top: 8px;
	 color: gray;
}

 .avatar-edit {
	 position: absolute;
	 left: 12px;
	 z-index: 1;
}
 .avatar-edit input {
	 display: none;
}
 .avatar-edit input + label {
	 display: inline-block;
     padding: 19px;
	 border-radius: 100%;
     background: #AAFF00;
	 border: 1px solid transparent;
	 box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
	 cursor: pointer;
	 font-weight: normal;
	 transition: all 0.2s ease-in-out;
}
 .avatar-edit input + label:hover {
	 background: #f1f1f1;
	 border-color: #d6d6d6;
}
 .avatar-edit input + label:after {
	 content: "\f040";
	 font-family: 'FontAwesome';
	 color: #757575;
	 position: absolute;
	 top: 10px;
	 left: 0;
	 right: 0;
	 text-align: center;
	 margin: auto;
}
 .avatar-preview {
	 position: relative;
	 border: 6px solid #f8f8f8;
	 box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
 .avatar-preview > div {
    padding: 100px 10px;
	 background-size: cover;
	 background-repeat: no-repeat;
	 background-position: center;
}
.col-sm-2.control-label{
    text-align: left;
    font-size: 1.5rem;
    text-transform: capitalize;
}
</style>
<div>
    <div class='panel panel-default'> 
        <div class='panel-heading'>{{ $page_title }}</div>
        <div class='panel-body'>
            <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data"
                action="{{ crudbooster::mainpath('add-save') }}">
                @csrf
                <div class="panel-body">
                    {{-- Add your form fields here --}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" required>
                        </div>
                    </div>
                        {{ form_start_combobox("Page action", "action_key[]", 10, "", "required multiple='multiple'", "select2", false) }}
                            @foreach ($action_key as $key => $item)
                                <option value="{!! $item->id !!}">{!! $item->val !!}</option>
                            @endforeach
                        {{ form_end_combobox() }}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                            <textarea name="dcr" class="form-control" required minlength="5" maxlength="5000" rows="20"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <h2 class="text-center" style="text-transform: uppercase; padding-bottom:3rem;">Activity Picturs</h2>
                            <div class="col-sm-3">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' name="photo_1" class="imageUpload" id="imageUpload1" data-preview="imagePreview1" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload1"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview1" style="background-image: url({{ asset('img/3204121.jpg') }});">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' name="photo_2" class="imageUpload" id="imageUpload2" data-preview="imagePreview2" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload2"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview2" style="background-image: url({{ asset('img/3204121.jpg') }});">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file'  name="photo_3" class="imageUpload" id="imageUpload3" data-preview="imagePreview3" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload3"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview3" style="background-image: url({{ asset('img/3204121.jpg') }});">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' name="photo_4" class="imageUpload" id="imageUpload4" data-preview="imagePreview4" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload4"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview4" style="background-image: url({{ asset('img/3204121.jpg') }});">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="form-group">
                        <h2 class="text-center" style="text-transform: uppercase;">Pictur cover</h2>
                        <div class="col-sm-12">
                                <div class="avatar-edit">
                                    <input type='file' name="photo_cover" class="imageUpload" id="imageUpload" data-preview="imagePreview5" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview5" 
                                    style=" 
                                        background-image: url({{ asset('img/3204121.jpg') }});
                                        padding: 150px 0;
                                    ">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5">
                            <input type="radio" name="status" value="1" required>
                        </div>
                        <div class="col-sm-5">
                            <input type="radio" name="status" value="0" required>
                        </div>
                    </div>
                    {{-- Add other form fields similarly --}}
                </div>
                <div class="panel-footer">
                    <input type="submit" name="submit" value="Save & Add More" class='btn btn-success'>
                    <input type="submit" name="submit" class="btn btn-primary" value="Save Data">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var previewId = $(input).data('preview'); // Get the data-preview attribute
            reader.onload = function (e) {
                $('#' + previewId).css('background-image', 'url(' + e.target.result + ')');
                $('#' + previewId).hide().fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(".imageUpload").change(function () {
        readURL(this);
    });
</script>

@endsection
