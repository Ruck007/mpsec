<!-- start pop up ADs -->
<!----> 
<style>

.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1200;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 5%;
    width: 100%;
    text-align: center;
    margin-top: 20px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 26px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
</style>
 
 <div id="myNav" class="overlay">
  <div class="overlay-content">
	<img src="<?php echo base_url(); ?>assets/front/images/pg-large4.jpg" style="width:50%;">
    <a href="<?php echo base_url(); ?>content/merchant-power-etf-siminar" >More Information</a>
    <a href="javascript:void(0)" onclick="closeNav()">Close</a>
  </div>
</div>

<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
	myStopFunction();
}

var myVar = setInterval(function(){ openNav(); }, 2000);

function myStopFunction() {
    clearInterval(myVar);
}
</script>
<!---->
<!-- end pop up ADs -->
 
 
<div class="cp-featured-news-slider">
<div class="featured-slider">
<div class="item">
<div class="cp-post-content">
<div class="catname"><a class="btn btn-purple waves-effect waves-button" href="category-layout-2.html">สัมมนา</a> </div>
<h1><a href="<?php echo base_url(); ?>content/merchant-power-etf-siminar">"Merchant Power ETF" siminar</a></h1>
<ul class="cp-post-tools">
<li><i class="icon-1"></i> June 19, 2017</li>
<li><i class="icon-2"></i> Administrator</li>
<li><i class="icon-3"></i> ข้อมูลการลงทุน</li>
<li><i class="icon-4"></i> 57 Comments</li>
</ul>
</div>
<a href="<?php echo base_url(); ?>content/merchant-power-etf-siminar">
	<div class="cp-post-thumb"><img src="<?php echo base_url(); ?>assets/front/images/pg-large4.jpg" alt=""></div>
</a>
</div>
<div class="item">
<div class="cp-post-content">
<div class="catname"><a class="btn btn-lorange waves-effect waves-button" href="category-layout-1.html">บทความ</a> </div>
<h1><a href="single-post.html">6 เรื่องเล่าการลงทุน ที่รู้แล้วต้องร้อง…</a></h1>
<ul class="cp-post-tools">
<li><i class="icon-1"></i> May 10, 2016</li>
<li><i class="icon-2"></i> Nelson Doe</li>
<li><i class="icon-3"></i> ข้อมูลการลงทุน</li>
<li><i class="icon-4"></i> 57 Comments</li>
</ul>
</div>
<div class="cp-post-thumb"><img src="<?php echo base_url(); ?>assets/front/images/pg-large1.jpg" alt=""></div>
</div>
<div class="item">
<div class="cp-post-content">
<div class="catname"><a class="btn btn-lorange waves-effect waves-button" href="category-layout-4.html">บทความ</a> </div>
<h1><a href="single-post.html">วิ่งมาราธอนบนเส้นทางลงทุน</a></h1>
<ul class="cp-post-tools">
<li><i class="icon-1"></i> May 10, 2016</li>
<li><i class="icon-2"></i> Nelson Doe</li>
<li><i class="icon-3"></i> ข้อมูลการลงทุน</li>
<li><i class="icon-4"></i> 57 Comments</li>
</ul>
</div>
<div class="cp-post-thumb"><img src="<?php echo base_url(); ?>assets/front/images/pg-large2.jpg" alt=""></div>
</div>
<div class="item">
<div class="cp-post-content">
<div class="catname"><a class="btn btn-lorange waves-effect waves-button" href="category-layout-3.html">บทความ</a> </div>
<h1><a href="single-post.html">วันๆ Fund Manager ทำอะไรบ้าง</a></h1>
<ul class="cp-post-tools">
<li><i class="icon-1"></i> May 10, 2016</li>
<li><i class="icon-2"></i> Nelson Doe</li>
<li><i class="icon-3"></i> เรื่องทั่วไป</li>
<li><i class="icon-4"></i> 57 Comments</li>
</ul>
</div>
<div class="cp-post-thumb"><img src="<?php echo base_url(); ?>assets/front/images/pg-large.jpg" alt=""></div>
</div>
</div>
</div>