@extends('layouts.template')
@section('title','Home')
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

                    <form id="upload"
                        action="" method="post" enctype="multipart/form-data">

                        <table width="100%" id="upload_form">
                            <tr class="mediatype" style="display:none" id="mediatype1">
                                <td width="100" valign="middle">
                                    Url Gambar
                                </td>

                                <td>
                                    <input type="text" name="pic_url" value="" style="width:400px"> <br>
                                    <span class="blur">(required) e.g. http://example.com/images/funnyimages.jpg</span>

                                </td>

                            </tr>

                            <tr class="mediatype" id="mediatype2">
                                <td width="100" valign="middle">
                                    File gambar
                                </td>

                                <td>
                                    <input type="file" name="pic_file" onchange="$('#pic_title').focus()" id="pic_file"
                                        style="width:400px"> <br>


                                </td>

                            </tr>

                            <tr class="mediatype" style="display:none" id="mediatype3">
                                <td width="100" valign="middle">
                                    Video URL
                                </td>

                                <td>
                                    <input type="text" name="video_url" style="width:400px"> <br>
                                    <span class="blur">(required) e.g. http://www.youtube.com/watch?v=3Ri_G0wgaQo (with
                                        minimum likes 25, or at least 20 followers on 1CAK) atau
                                        https://gfycat.com/FakeDescriptiveArmedcrab </span>

                                </td>

                            </tr>

                            <tr>
                                <td width="100" valign="middle">
                                    Title
                                </td>

                                <td>
                                    <input type="text" name="pic_title" id="pic_title" value="" style="width:400px"><br>
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
                                    <input type="text" name="pic_source" id="pic_source" value=""
                                        style="width:400px"><br>
                                    <span class="blur">(Recomended) Hormati dan Hargai Pemilik Aslinya</span>


                                </td>

                            </tr>

                            <tr>
                                <td width="100" valign="middle">
                                    Tags
                                </td>

                                <td>
                                    <input type="text" name="pic_tags" style="width:400px"><br>
                                    <span class="blur">(Recomended) e.g. : bola, lucu, cewek, kucing </span>


                                </td>

                            </tr>


                            <tr>
                                <td width="100" valign="middle">

                                </td>

                                <td>
                                    <input type="checkbox" name="pic_save"> Ini material yang tidak cocok dibuka saat
                                    bekerja(di kantor) (Not Safe For Work)/NSFW



                                </td>

                            </tr>

                            <tr>
                                <td width="100" valign="middle">

                                </td>

                                <td>
                                    <input type="checkbox" name="pic_original" onclick="$('#pic_source').val('');"> Ini
                                    buatan saya sendiri



                                </td>

                            </tr>


                            <tr>
                                <td width="100" valign="middle">

                                </td>

                                <td>
                                    
                                    
                        <button id="uploadBtn" class="kafe-btn kafe-btn-mint-small btn-sm" type="submit" name="upload">Upload</button>


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