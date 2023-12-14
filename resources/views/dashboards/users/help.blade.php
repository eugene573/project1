@extends('layout')
@section('content')
<br><br><br><br><br>
<body>

  <h2><center>Help & Answer Frequently Asked Questions.</center></h2>

  <br>
  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

h3 {
        color: #28A828;
  text-shadow: 3px 3px 3px white, 0 0 20px white, 0 0 10px green;
  }

.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 60%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 17px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 19px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.3s ease-out;
}
</style>
</head>
<body>
<center>
<button class="accordion">Is it safe to use Blogger?</button>
<div class="panel">
  <p>Yes, Blogger is a safety website and user do not need to pay any fee to use it.</p>
</div>

<button class="accordion">What is Blogger?</button>
<div class="panel">
  <p>A website that user can post something good in life to share with other.</p>
</div>

<button class="accordion">Why we should choose Blogger?</button>
<div class="panel">
  <p>Blogs serve as a knowledge-sharing platform, offering valuable insights, information and guidance on various topics.</p>
</div>

<button class="accordion">What is the purpose of Blogger?</button>
<div class="panel">
  <p>Individuals use blogs to express their thoughts, creativity and experiences which connecting with audiences on a personal level.</p>
</div>

<button class="accordion">How can i post something on blog?</button>
<div class="panel">
  <p>Firstly you need to login or if you haven't had an account you can register after that you can start to upload your post.</p>
</div>

</center>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>

</body>
</html>
@endsection

