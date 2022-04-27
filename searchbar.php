<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <style> 

.p2 input {
  width: 0px;
  margin-left:200px;
  /* box-sizing: border-box; */
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  visibility: hidden;
  /* display: none; */
  padding: 12px 20px 12px 40px;
transition: all 2s;
}

</style>

</head>
<body>
<?php  include('slick/index.php'); ?>
<div class="p2">

<form>
  <input type="text" name="search" placeholder="Search.."><br>
  <i class="fa-solid ff fa-magnifying-glass"></i>

</form>

</div>
<script>
  $(document).ready(function(){
  $("i").mouseover(function(){
    $("input").css("visibility","visible",);
    $("input").css("width","100px",);
    $("input").css("margin-left","100px",);
  });
  $(".ff").mouseout(function(){
    $("input").css("visibility","hidden");
    $("input").css("transition","0");
    $("input").css("width","0px",);
    $("input").css("margin-left","200px",);
  });
});
</script>
</body>
</html>





<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!-- This script got from frontendfreecode.com -->

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js'></script>
<style>
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css");
body {
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
  height: 100vh;
  background-color: #F0AD4E;
}

label {
  position: relative;
  display: inline-block;
  background-color: #fff;
  padding: 5px 12px;
  -webkit-transition: all 1s ease;
  transition: all 1s ease;
  border-radius: 0;
  box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
}
label::after {
  content: '';
  display: block;
  height: 2px;
  width: 80%;
  background-color: #F0AD4E;
  -webkit-transition: all 1s ease 0.5s;
  transition: all 1s ease 0.5s;
}
label input {
  -webkit-transition: width 1s ease, opacity 0.5s ease 0.5s;
  transition: width 1s ease, opacity 0.5s ease 0.5s;
  opacity: 1;
  width: 180px;
  height: 25px;
  border: 0;
  outline: none;
  color: #b06d0f;
}
label i {
  position: absolute;
  top: 11px;
  right: 11px;
  color: #333;
  cursor: pointer;
}
label[data-state="close"] {
  border-radius: 30px;
  padding: 5px 5px;
  -webkit-transition: all 1s ease;
  transition: all 1s ease;
}
label[data-state="close"]::after {
  width: 0%;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
label[data-state="close"] i {
  pointer-events: none;
}
label[data-state="close"] input {
  width: 28px;
  height: 25px;
  opacity: 0;
  cursor: pointer;
  -webkit-transition: opacity 0.5s ease, width 1s ease;
  transition: opacity 0.5s ease, width 1s ease;
  -webkit-appearance: none;
}
</style> -->

<!-- </head>
<body>
<form id="app" action="#">
<label :data-state="state" for="search">
  <input type="text" placeholder="Search" @click="state = 'opan'" @blur="state='close'"/>
  <i class="fa fa-search" @click="" aria-hidden="true"></i>
</label>
</form><div id="bcl"><a style="font-size:8pt;text-decoration:none;" href="http://www.devanswer.com">Free Frontend</a></div>
<script>
var app = new Vue({
  el: '#app',
  data: { state: "close" } 
});
</script>

</body>
</html> --> -->