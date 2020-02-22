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
                            <a href="{{url('admin/blog/create')}}" class="cancel btn-sm btn-success float-right"> &nbsp; <i class="fas fa-plus"></i> เพิ่มบทความ &nbsp; </a>
                        </div>
                        <div class="card-body">


                            @if(count($errors)>0)
                                @foreach($errors->all() as $error)
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <strong>Oh snap!!</strong> &nbsp; &nbsp;<span>{{$error}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                            @if(session('success'))
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert alert-warning">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="material-icons">close</i>
                                        </button>
                                        <strong>Well done! </strong> &nbsp; &nbsp; <span>{{session('success')}}</span>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(session('error'))
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="material-icons">close</i>
                                        </button>
                                        <strong>Oh snap!!</strong> &nbsp; &nbsp;<span>{{session('error')}}</span>
                                    </div>
                                </div>
                            </div>
                            @endif

                            <table class="table table-hover">
                                <thead>
                                <tr class="table-success">
                                    <th width="7%">ID</th>
                                    <th>Title</th>
                                    <th width="3%" text-align="center">Status</th>
                                    <th width="3%" align="center">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr align="top">
                                    <td>1</td>
                                    <td>แชมเปี้ยนสปาฟลอร์มาม่า รูบิค มิลค์แอ๊บแบ๊วเฟอร์รี่ ซาฟารีเพรส ไนน์จูน บัตเตอร์นู้ดปูอัดโฟนผลไม้ โมเต็ล
                                        แชมเปี้ยนสปาฟลอร์มาม่า รูบิค มิลค์แอ๊บแบ๊วเฟอร์รี่ ซาฟารีเพรส ไนน์จูน บัตเตอร์นู้ดปูอัดโฟนผลไม้ โมเต็ล
                                        แชมเปี้ยนสปาฟลอร์มาม่า รูบิค มิลค์แอ๊บแบ๊วเฟอร์รี่ ซาฟารีเพรส ไนน์จูน บัตเตอร์นู้ดปูอัดโฟนผลไม้ โมเต็ล
                                        แชมเปี้ยนสปาฟลอร์มาม่า รูบิค มิลค์แอ๊บแบ๊วเฟอร์รี่ ซาฟารีเพรส ไนน์จูน บัตเตอร์นู้ดปูอัดโฟนผลไม้ โมเต็ล
                                    </td>
                                    <td>
                                        <form action="/blog/" method="POST">
                                            <input type="hidden" name="_method" value="PUT" />
                                            <input type="hidden" name="switch" value="status" />
                                            <button type="submit" class="btn btn-link"><i class="fas fa-rss text-success"></i></button>
                                            @csrf
                                        </form>
                                    </td>
                                    <td>
                                        <form action="/blog/" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" title="Remove" class="btn-sm btn btn-link" onclick="return confirm('ลบโพส์ต ID #01 แน่ใจ?');"><i class="fas fa-trash-alt text-danger"></i></button>
                                            @csrf
                                        </form>
                                    </td>  
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>เบนโตะช็อค เฟรช อะสึนามิสะบึมส์เกสต์เฮาส์เซนเซอร์ เตี๊ยมอึ้ม ออร์แกนิกควีนโบว์อุด้ง</td>
                                    <td>
                                        <form action="/blog/" method="POST">
                                            <input type="hidden" name="_method" value="PUT" />
                                            <input type="hidden" name="switch" value="status" />
                                            <button type="submit" class="btn btn-link"><i class="fas fa-rss text-success"></i></button>
                                            @csrf
                                        </form>
                                    </td>
                                    <td>
                                        <form action="/blog/" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" title="Remove" class="btn-sm btn btn-link" onclick="return confirm('ลบโพส์ต ID #01 แน่ใจ?');"><i class="fas fa-trash-alt text-danger"></i></button>
                                            @csrf
                                        </form>
                                    </td>                                     
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>บาร์บีคิวจิตพิสัยเฟอร์นิเจอร์จุ๊ยแดนซ์ ฮอตดอกซูเปอร์ดัมพ์มอยส์เจอไรเซอร์ ดีเจทิปเยอบีราดราม่าคอนโด มยุราภิรมย์โปสเตอร์แบคโฮ</td>
                                    <td>
                                        <form action="/blog/" method="POST">
                                            <input type="hidden" name="_method" value="PUT" />
                                            <input type="hidden" name="switch" value="status" />
                                            <button type="submit" class="btn btn-link"><i class="fas fa-rss text-success"></i></button>
                                            @csrf
                                        </form>
                                    </td>
                                    <td>
                                        <form action="/blog/" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" title="Remove" class="btn-sm btn btn-link" onclick="return confirm('ลบโพส์ต ID #01 แน่ใจ?');"><i class="fas fa-trash-alt text-danger"></i></button>
                                            @csrf
                                        </form>
                                    </td>                                    
                                </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

