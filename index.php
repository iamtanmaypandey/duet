<!Doctype html>
<html>

<head>
  <title>Duet</title>
  <?php include("./components/meta.html");?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
  <!--div id="loader">
    <img src="./Assets/Image/Logo/primary.png" />
  </div-->
  <div class="page">
    <?php if(isset($_GET['submitted'])){
        include("./components/submitted.html");
    }
    ?>
    <?php include("./components/nav.html");?>
    <?php include("./components/home/section1.html");?>
    <?php include("./components/home/section2.html");?>
    <?php include("./components/home/section3.html");?>
    <?php include("./components/home/section4.html");?>
    <?php include("./components/home/section5.html");?>
    <?php include("./components/home/section6.html");?>
    <?php include("./components/home/section7.html");?>
    <?php //include("./components/home/subscribe.html");?>
    <?php //include("./components/footer.html");?>

  </div>
</body>
<script>
  function onReady(callback) {
    var intervalId = window.setInterval(function () {
      if (document.getElementsByTagName('body')[0] !== undefined) {
        window.clearInterval(intervalId);
        callback.call(this);
      }
    }, 1000);
  }

  function setVisible(selector, visible) {
    document.querySelector(selector).style.display = visible ? 'block' : 'none';
  }

  onReady(function () {
    setVisible('.page', true);
    setVisible('#loader', false);
  });
</script>

<!-- core  -->
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
<!-- bootstrap 3 affix -->
<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

<!-- steller js -->
<script src="assets/js/steller.js"></script>

<script>
    
</script>

</html>