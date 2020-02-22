@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2 py-3 side-menu">
            @include('admin.comp.sidemenu')
        </div>
        <div class="col-10 py-3">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card border-0">
                        <div class="card-header border-0 bg-light">
                            <b>Blog manage</b>
                            <a href="{{url('admin/user')}}" class="cancel btn-sm btn-danger float-right"> &nbsp; ยกเลิก &nbsp; </a>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="content-form">
                                <form method="POST" action="{{url('admin/blog/')}}" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="title">ชื่อบทความ:</label>
                                                <input type="text" class="form-control" placeholder="title here" id="title">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="sel1">หมวด:</label>
                                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="group">
                                                    <option selected>เลือก...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">คำบรรยายบทความ:</label>
                                        <input type="description" class="form-control" placeholder="description here" id="description">
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" name="content" id="ckeditor" required="" oninvalid="this.setCustomValidity('Content is require.')"
                                        oninput="setCustomValidity('')"></textarea>            
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="tag">แท็คข้อความ:</label>
                                                <input type="text" class="form-control" placeholder="tag, tag , tag , ... here" name="tag">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="hot"> บทความพิเศษ
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">

                                            <div class="form-group">
                                                <label for="FormControlFile1">รูปภาพ</label>
                                                <input type="file" class="form-control-file" id="FormControlFile1" name="image">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="description">ลิงค์ยูทูป:</label>
                                                <input type="description" class="form-control" placeholder="youtube-link here" id="clip">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">&nbsp;</div>
                                        <div class="col-6 mt-4">
                                            <div class="float-lg-right">
                                                <a href="{{url('admin/blog')}}" class="btn btn-danger mr-2"> &nbsp; ยกเลิก &nbsp; </a>
                                                <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                                            </div>
                                        </div>
                                    </div>
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('ckeditor', {
       filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
       filebrowserUploadMethod: 'form',
       height: 450,
       toolbarGroups: [
        {
          "name": "styles",
          "groups": ["styles"]
        },
        {
          "name": "basicstyles",
          "groups": ["basicstyles"]
        },
        {
          "name": "links",
          "groups": ["links"]
        },
        {
          "name": "paragraph",
          "groups": ["list", "blocks"]
        },
        {
          "name": "insert",
          "groups": ["insert"]
        }
      ],
       removeButtons: 'Subscript,Superscript,Anchor,Specialchar'
    });
 </script>  
@endsection

