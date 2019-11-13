@extends('layouts.template')
@section('title','Upload')
@section('content')
<!-- ==============================================
	 News Feed Section
	 =============================================== -->
<section class="upload">
    <div class="container">

        <div class="row" style="border-radius: 10px;">
            <div class="col-lg-12">

                <div class="box">
                    <h3 style="padding-left: 20px; padding-top: 20px;"> Submit Something Fun</h3>

                    <form id="upload" action="{{route('upload.update', $post->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <table width="100%" id="upload_form">
                            <tr style="display: none;" class="mediatype" id="mediatype2" class="{{ $errors->has('foto') ? ' has-error' : '' }}">
                                <td width="100" valign="middle">
                                    File foto
                                </td>

                                <td>
                                    <input type="hidden" name="foto" onchange="$('#pic_title').focus()" id="pic_file"
                                style="width:400px" value="{{$post->foto}}"> <br>
                                </td>
                                @if ($errors->has('foto'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nip') }}</strong>
                                </span>
                            @endif
                            </tr>

                            <tr>
                                <td width="100" valign="middle">
                                    Title
                                </td>

                                <td class="{{ $errors->has('title') ? ' has-error' : '' }}">
                                <input type="text" name="title" id="pic_title" value="{{$post->title}}" style="width:400px"><br>
                                    @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nip') }}</strong>
                                    </span>
                                @endif
                                    <span class="blur">(required) deskripsi gambar yang kamu posting, biar mendapat vote
                                        yang banyak , hindari judul yang terlalu singkat seperti LOL,kocak,
                                        ngakak,postingan pertama, koplak, tolong di vote</span>

                                </td>

                            </tr>

                            <tr>
                                <td width="100" valign="middle">
                                    Sumber
                                </td>

                                <td>
                                <input type="text" name="sumber" id="pic_source" value="{{$post->sumber}}" style="width:400px"><br>
                                    <span class="blur">(Opsional) Hormati dan Hargai Pemilik Aslinya</span>


                                </td>

                            </tr>

                            <tr>
                                <td width="100" valign="middle">
                                    Tags
                                </td>

                                <td>
                                    <select class="js-example-basic-multiple" name="tags" multiple="multiple">
                                    {{-- <option value="{{$post->id_tag}}" selected>{{$post->tags->nama}}</option> --}}
                                        @foreach ($tags as $key => $tag)
                                        <option value="{{$tag->id}}" {{ ($post->id_tag == $tag->id ? "selected":"") }}>{{$tag->nama}}</option>
                                        @endforeach
                                    </select>
                                    {{-- <input type="text" name="tags" style="width:400px"><br> --}}
                                    <span class="blur">(Optional) e.g. : bola, lucu, cewek, kucing </span>
                                </td>

                            </tr>

                            <tr>
                                <td width="100" valign="middle">

                                </td>

                                <td>


                                    <button id="uploadBtn" class="kafe-btn kafe-btn-mint-small btn-sm" type="submit">Upload</button>
                                </td>

                            </tr>

                        </table>
                    </form>

                    <div class="box-footer clearfix">
                        <!-- isi footer form -->
                    </div>
                </div>

            </div>
        </div>

        <div class="row one-row">
            <div class="col-lg-12">
                <a href="https://picturepan2.github.io/instagram.css/" target="_blank">
                    <h4>Instagram Filters from Picture Pan 2</h4>
                </a>
            </div>
        </div>

    </div>
    <!--/ container -->
</section>
<!--/ newsfeed -->
@endsection

@section('js')
<script>$(document).ready(function() {
        $('.js-example-basic-multiple').select2();
        });</script>

@endsection