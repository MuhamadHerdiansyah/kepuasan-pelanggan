<?php

require 'function.php';

if (isset($_POST['submit'])) {
    $x = tambah($_POST);
   if ($x) {
    header("Location: sukses.php");
   }
}
?>

<!DOCTYPE html>
<html lang="en"><head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form</title>
</head>
<body>

<style>
    label:before {
  content: '☆';
  color: white;
  font-size: 2em;
}
label.on:before {
  content: '★';
  color: white;
  /* uncomment for iOS */
/*   font-size: 2.4em;
  top: -0.1em;
  left: -0.1em; */
}
input:checked + label:before {
  content: '★'; 
  color: white;
  /* uncomment for iOS */
/*   font-size: 2.4em;
  top: -0.1em;
  left: -0.1em; */
}
label {  
  display: inline-block;  
  cursor: pointer;  
  position: relative;  
  padding-left: 25px;  
  margin-right: 15px;  
  font-size: 20px; 
}
label:before {
  display: inline-block;
  width: 20px;
  height: 20px;
  margin-right: 10px;
  position: absolute;
  left: 0;
  border-radius: 10px;
}
input[type=radio] {
  display: none;
  -webkit-appearance: none;
}

/* Non-essential */
body {
  margin: 2em;
  background-color: #448AC1;
  text-align: center;
  /* remove gray highlight on tap in iOS */
  -webkit-tap-highlight-color:transparent;
}
.question {
  margin-bottom: 8em;
}
#q1 {
  margin-top: 6em;
}
p {
  color: white;
  font-family: Bitter, sans-serif;
  font-size: 2em;
}
#submit {
  font-size: 24px;
  font-family: Bitter, sans-serif;
  color: #448AC1;
  background-color: white;
  width: 80px;
  height: 80px;
  border: none;
  border-radius: 40px;
}


 
</style>
<form action="" method="POST">
    <center><h1>Rating Pelayanan</h1></center>
<div class="question" id="q1">
    <p>How well were your needs met?</p>
    <input type="radio" name="rate" id="a1" value="1">
    <label for="a1"></label>
    <input type="radio" name="rate" id="a2" value="2">
    <label for="a2"></label>
    <input type="radio" name="rate" id="a3" value="3">
    <label for="a3"></label>
    <input type="radio" name="rate" id="a4" value="4">
    <label for="a4"></label>
    <input type="radio" name="rate" id="a5" value="5">
    <label for="a5"></label>

</div>
<textarea name="tanggapan" id="tanggapan" cols="30" rows="10"></textarea>


<br>
<br>

  

  <center><input type="submit" name="submit" value="submit" id="submit">
</form>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $('input[type="radio"]').click(function() {
  var theNumber = $(this).attr('id').slice(-1);
  $(this).siblings('label').each(function() {
    var sibNumber = $(this).attr('for').slice(-1);
    if (sibNumber <= theNumber) {
      $(this).addClass('on');
    } else {
      $(this).removeClass('on');
    }
  });
});
</script>
</body>
</html>
