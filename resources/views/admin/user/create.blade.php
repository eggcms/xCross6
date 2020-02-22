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
                            <b>@ User manage</b>
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
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="title">ชื่อ:</label>
                                                <input type="text" class="form-control" placeholder="name here" name="name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="title">อีเมล:</label>
                                                <input type="text" class="form-control" placeholder="email here" name="email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="title">รหัสผ่าน:</label>
                                                <input type="password" class="form-control" placeholder="password here" name="password">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="FormControlFile1">รูปภาพ</label>
                                                <input type="file" class="form-control-file" id="FormControlFile1" name="image">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-6">&nbsp;</div>
                                        <div class="col-6 mt-4">
                                            <div class="float-lg-right">
                                                <a href="{{url('admin/user')}}" class="btn btn-danger mr-2"> &nbsp; ยกเลิก &nbsp; </a>
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

@endsection

