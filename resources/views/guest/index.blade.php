<!DOCTYPE html>
<!--
Template Name: Mixin
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
    <link rel="shortcut icon" type="image/ico" href="{{asset('/incon.jpg')}}">
<title>Jaket Company</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace inline">
        <li><i class="fa fa-phone"></i> +62 (221) 987 9876</li>
        <li><i class="fa fa-envelope-o"></i> info@jaketcompany.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-google-plus" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="/">jaketCompany</a></h1>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
@foreach ($Header as $data)
<div class="wrapper bgded" style="background-image:url('/img/img6/{{$data->background}}')">
  <div class="overlay black">
    <div id="pageintro" class="clear"> 
      <!-- ################################################################################################ -->
      <h2 class="heading font-xl uppercase">{!!$data->text_besar!!}</h2>
      <p>{!!$data->text_kecil!!}</p>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
@endforeach
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
@foreach ($background_quotes as $data)
<div class="wrapper bgded" style="background-image:url('/img/img5/{{$data->background}}')">
@endforeach
  <div class="overlay dkgrey">
    <div class="container clear"> 
      <!-- ################################################################################################ -->
      <h2 class="nospace center btmspace-50">Motivasi Hebat</h2>
        <div class="flexslider carousel">
        <ul class="carousel-items center">
          @foreach ($quotes as $data)
          <li>
            <blockquote>{!!$data->text!!}</blockquote>
            <figure>
              <figcaption>
                <em>~ jaketCompany</em></figcaption>
            </figure>
          </li>
          @endforeach
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="group btmspace-50">
      <article class="one_third first">
        <h2>Rencana jangka pendek</h2>
        <p>Memperkenalkan produk dan jasa perusahaan dibidang garment melalui program pemasaran secara efektif dengan manajemen sistematis sejalan dengan lajunya perkembangan dunia usaha di tanah air maupun mancanegara. Selain itu, memperkenalkan produk dan jasa melalui humas, promosi dengan tujuan produk dan jasa diperkenalkan hingga seluruh indonesia.</p>
        <p class="nospace"><a href="#"> </a></p>
      </article>
      <article class="one_third">
        <h2>Rencana Jangka Menengah</h2>
        <p>Penekanan perusahaan pada kualitas produk dan jasa yang meliputi pelayanan customer, layanan purnajual terjamin untuk memperkuat posisi dasar dan menentukan peluang-peluang bisnis yang ada maupun yang akan datang</p>
        <p class="nospace"><a href="#"> </a></p>
      </article>
      <article class="one_third">
        <h2>Rencana Jangka Panjang</h2>
        <p>Prioritas perusahaan untuk mengembangkan departement atau anak perusahaan baru yang memiliki hubungan erat dengan bisnis usaha yang ada di bidang produk garment dengan tujuan memasarkan produk dan jasa secara global.

Merekrut tim-tim ahli di bidang garment secara selektif untuk tujuan memperkuat fondasi dasar perusahaan dalam bersaing dari segi produk dan jasa di tanah air maupun mancanegara.</p>
        <p class="nospace"><a href="#"> </a></p>
      </article>
    </div>
    <!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
              
        
          <header class="heading">&nbsp&nbsp&nbsp&nbsp&nbsp <b>Product Yang Di Tawarkan JaketCompany</b><i></i></header>
           <header class="heading">&nbsp&nbsp&nbsp&nbsp&nbsp <td> product yang kami tampilkan di bawah merupakan upload terbaru dan dapat dipesan </td><i></i></header>
           <header class="heading">&nbsp&nbsp&nbsp&nbsp&nbsp <td> hubungi nomor yang berada di bawah halaman ini </td><i></i></header>
          
          <br>
          <br>
          <div id="gallery">
        <figure>
          <ul class="nospace clear">
          @foreach ($Product as $data)
          
          
            <li class="one_quarter">

            <h2><u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u></h2>
            <h1><img src="/img/img7/{{$data->cover}}" style="height: 100  width:50"></h1>
            <br>
            <br>
            <center><h1 class="heading"><b><u>{!!$data->nama_product!!}</u></b></h1></center>
            <p> <b><u>Detail</u></b>  {!!$data->detail!!}</p>

            <h2><u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u></h2>
            </th>
          </tr>
            </li>
      @endforeach
          
      </ul>
      </figure>
      </div>
         <figcaption>Gallery Product JaketCompany</figcaption>
        </div>
<section class="page-section cta"><center>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2135998910985!2d107.61990731363433!3d-6.984100170331682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9a7522b0de1%3A0x6a085e3964174e3b!2sHoax+Cuiiiih!5e0!3m2!1sid!2sid!4v1521341970705" width="1750" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></center>
</section>
  
  <div class="wrapper overlay white">
    <footer id="footer" class="clear"> 
      <!-- ################################################################################################ -->
      <div class="one_quarter first">
        <h6 class="title">Info mengenai perusahaan</h6>
        <address class="btmspace-15">
        mengenai ketertarikan product <br>
        hubungngi admin kami  &amp; Number<br>
        Town<br>
        Postcode/Zip
        </address>
        <ul class="nospace">
          <li class="btmspace-10"><span class="fa fa-phone"></span> +00 (123) 456 7890</li>
          <li><span class="fa fa-envelope-o"></span> info@domain.com</li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">From The Blog</h6>
        <article>
          <h2 class="nospace font-x1"><a href="#">Maecenas pretium</a></h2>
          <time class="smallfont" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed.</p>
        </article>
      </div>
      <div class="one_quarter">
        <h6 class="title">Sed consectetur enim</h6>
        <ul class="nospace linklist">
          <li><a href="#">Nullam id est condimen</a></li>
          <li><a href="#">Praesent eget purus ut</a></li>
          <li><a href="#">Ut quis augue quis neque</a></li>
          <li><a href="#">Quisque varius erat sed</a></li>
          <li><a href="#">Fusce quis dolor et</a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">Proin et magna eget</h6>
        <p>Ut ut eleifend massa. Phasellus tincidunt ipsum et ante tempor condimentum. Sed porttitor eget mauris ut lobortis? Integer nec vehicula dolor. Nullam rutrum ac lorem ut condimentum.</p>
      </div>
      <!-- ################################################################################################ -->
    </footer>
  </div>
  <!-- ################################################################################################ -->
</div>



<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">JaketCompany<a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates"></a></p>
    <!-- ################################################################################################ -->
  </div>
</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5aacc11ad7591465c708a5aa/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>