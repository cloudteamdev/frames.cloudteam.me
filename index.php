<!DOCTYPE HTML>
<html>
<head>
<!-- Meta Data: Viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Meta Data: Embedding -->
        <meta property="og:type" content="website" />
        <meta name="theme-color" content="#2571e8" />
        <title>CloudTeam Frames</title>
        <meta property="og:site_name" content="© CloudTeam.me" />
        <meta property="og:title" content="CloudTeam Frames official." />
        <meta property="og:description" content="Decorate your profile with an awesome Frame Overlay for your Avatar! Get yourself an overlay without entering any data." />
        <meta property="og:url" content="https://frames.cloudteam.me" />
        <meta property="og:image:type" content="image/png" />
        <meta property="twitter:card" content="summary_large_image" />
        <meta name="description" content="Decorate your profile with an awesome Frame Overlay for your Avatar! Get yourself an overlay without entering any data." />
        <meta name="keywords" content="Frames, Overlay, Discord Frames, Twitter Frames, Twitter Frame, Avatar Frame, Avatar, Customization, Decoration, Overlays, CloudTeam, Cloud Team, Cloud Codes, cloudteam.me" />
<!-- Meta Data: Brand -->
        <meta name="author" content="CloudTeam" />
        <meta name="copyright" content="CloudTeam © <?php echo date("Y"); ?>" />
<!-- Extra -->
<meta property="og:image" content="codes.cloudteam.me/assets/img/banner.png" />
<!-- Spiders indexation -->
<meta name="robots" content= "index, follow">
<!-- Favicons -->
<!-- =========================== ^ To-Do ===========================  -->
<meta name="msapplication-TileColor" content="#2571e8">
<!-- CDN Links -->
<!-- Bootstrap Styling v5.1.3 Minified -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- FontAwesome v6.1.1 Minified -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- JQuery v3.6.0 Minified -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- HTML2Canvas v1.4.1 Minified -->
  <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js" integrity="sha256-6H5VB5QyLldKH9oMFUmjxw2uWpPZETQXpCkBaDjquMs=" crossorigin="anonymous"></script>
<!-- Import Styling -->
<link rel="stylesheet" href="./assets/css/style.css">
<!-- No Script -->
<noscript>Your browser does not support Javascript or has it blocked for this page, you may face lot of errors due to this, please enable it!</noscript>
</head>
<!-- Header -->
<header class="basic-animation" id="header-info" style="display: none;">
<nav class="navbar bg-primary">
  <a class="navbar-brand text-white" href="https://cloudteam.me">
    <img src="./assets/img/logo_frames.png" width="178" style="margin-left: 10px;" class="d-inline-block align-top" alt="CloudTeam Frames">
  </a>
</nav>
</header>
<!-- Body -->
<body onload="loader()" style="margin:0;">
<div class="parent-loader" id="spinner-parent">
    <div class="mx-auto inner-loader" id="spinner"><i class="fa-solid fa-gear"></i></div>
</div>

<div class="container basic-animation" style="display:none;" id="content" >
  <div class="row">
<!-- Frame Previewer -->
    <div class="col-md-5 frame-preview">
    <h6 class="text-center"><i class="fa-solid fa-icons"></i> Real-Time Frame Preview</h6>
<div class="mx-auto" id="holder" style="width: 350px; height: 350px;">
<div class="frame-view mx-auto" style="position: relative; left: 0; top: 0;">
 <div>
<img src="https://cdn.discordapp.com/avatars/551786741296791562/6f1287afbd08f212530ecfda48aad9a1.png?size=2048" id="user-avatar" alt="Frame Preview" class="image-preview">
<img src="https://i.imgur.com/0cn29ow.png" class="image-overlay" id="overlay-preview">
<img src="https://i.imgur.com/ayFFzNr.png" class="image-icon" id="icon-preview">
 </div>
</div>
</div>

<div class="download-history mt-2 mx-auto">
<h6 id="downloads" style="display: none;">Recent Downloads <span class="subttl">Your Frames download(s) this session!</span></h6><br>
<span id="preview-list"></span>
</div>
</div> <!-- End Frame Preview -->

    <div class="col"> <!-- UI: Avatar Uploader -->
<h6><i class="fa-solid fa-image"></i> Upload your Avatar <span class="subttl">From URL or from your device.</span></h6>
<input class="form-control form-control-sm" type="url" placeholder="Avatar URL here..." onkeyup="updater(this.value);" id="warning">
<span class="subttl">or upload from your device...</span> <span style="color: orange; font-size: 12px;">(Recommended)</span><br>

<input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
<p><label for="file" style="cursor: pointer;" class="btn btn-primary"><i class="fa-solid fa-upload"></i> Upload From Device</label></p>
<span class="subttl" id="extra"></span>
<hr>

<!-- UI: Navigation Bar -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#"  id="ui-overlay" onclick="ui(this.id);"><i class="fa-solid fa-paint-roller"></i> Overlay</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" id="ui-icons" onclick="ui(this.id);"><i class="fa-solid fa-shapes"></i> Icons</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#"  id="ui-pets" onclick="ui(this.id);"><i class="fa-solid fa-otter"></i> Pets</a>
  </li>
  <li class="nav-item">
    <button type="button" class="btn btn-primary" id="btn_dwl"><i class="fa-solid fa-download"></i> Download Frame</button>
  </li>
</ul>

<!-- UI: Customization, image selection -->
<div class="customization-ui mt-2">
<!-- Type: Icons -->
<div class="icons-types d-none" id="col-icons">

<h6>Default <span class="subttl">Discord Badges and Normal Icons Set</span></h6>
<div class="option d-inline-block">
<img id="none" onclick="icon(this.id);" src="https://i.imgur.com/ayFFzNr.png" width="72px">
</div>

<div class="option but-dark d-inline-block">
<img id="developer-icon" onclick="icon(this.id);" src="https://i.imgur.com/wmBSZ29.png" width="72px">
</div>

<div class="option but-dark d-inline-block">
<img id="balance-icon" onclick="icon(this.id);" src="https://i.imgur.com/Rz8FinM.png" width="72px">
</div>

<div class="option but-dark d-inline-block">
<img id="brilliance-icon" onclick="icon(this.id);" src="https://i.imgur.com/oNNdas2.png" width="72px">
</div>

<div class="option but-dark d-inline-block">
<img id="bravery-icon" onclick="icon(this.id);" src="https://i.imgur.com/3MdIfdq.png" width="72px">
</div>

<div class="option but-dark d-inline-block">
<img id="bitcoin-icon" onclick="icon(this.id);" src="https://i.imgur.com/axM0ZaO.png" width="72px">
</div>

<div class="option but-dark d-inline-block">
<img id="booster-icon" onclick="icon(this.id);" src="https://i.imgur.com/jLkR5RA.png" width="72px">
</div>

<div class="option but-dark d-inline-block">
<img id="bughunter-icon" onclick="icon(this.id);" src="https://i.imgur.com/XNMUbJN.png" width="72px">
</div>

<div class="option but-dark d-inline-block">
<img id="crossingswords-icon" onclick="icon(this.id);" src="https://i.imgur.com/d63FB8c.png" width="72px">
</div>

<div class="option but-dark d-inline-block">
<img id="crown-icon" onclick="icon(this.id);" src="https://i.imgur.com/oVmzaPq.png" width="72px">
</div>

<div class="option but-dark d-inline-block">
<img id="partner-icon" onclick="icon(this.id);" src="https://i.imgur.com/GrZV5RD.png" width="72px">
</div>

<div class="option but-dark d-inline-block">
<img id="hypesquadevents-icon" onclick="icon(this.id);" src="https://i.imgur.com/vImYM18.png" width="72px">
</div>

<div class="option but-dark d-inline-block">
<img id="nitrolinear-icon" onclick="icon(this.id);" src="https://i.imgur.com/hC4AUzy.png" width="72px">
</div>

<div class="option but-dark d-inline-block">
<img id="nitronormal-icon" onclick="icon(this.id);" src="https://i.imgur.com/7YefPpM.png" width="72px">
</div>

<div class="option but-dark d-inline-block">
<img id="tools-icon" onclick="icon(this.id);" src="https://i.imgur.com/YRRzVq4.png" width="72px">
</div>

<div class="option but-dark d-inline-block">
<img id="verification-icon" onclick="icon(this.id);" src="https://i.imgur.com/ZGeeGi7.png" width="72px">
</div>
<hr>
<h6><i class="fa-solid fa-hashtag"></i> Social Media Icons</h6>
<div class="option but-dark d-inline-block">
<img id="social-discord-icon" onclick="icon(this.id);" src="https://i.imgur.com/0Of83HU.png" width="72px">
</div>

</div>

<!-- Type: Pets -->
<div class="pets-types d-none" id="col-pets">
Pets soon!
</div>

<!-- Type: Overlay Frames -->
<div class="overlay-types" id="col-overlay"> 
<h6>Default <span class="subttl">Recommended with icons!</span></h6>
<div class="option d-inline-block">
<img id="none" onclick="select(this.id);" src="https://i.imgur.com/ayFFzNr.png" width="72px">
</div>

<div class="option d-inline-block">
<img id="blue-overlay" onclick="select(this.id);" src="https://i.imgur.com/LtqRiov.png" width="72px">
</div>

<div class="option d-inline-block">
<img id="orange-overlay" onclick="select(this.id);" src="https://i.imgur.com/3GCjFV7.png" width="72px">
</div>

<div class="option d-inline-block">
<img id="green-overlay" onclick="select(this.id);" src="https://i.imgur.com/AhoAvUO.png" width="72px">
</div>

<div class="option d-inline-block">
<img id="lightblue-overlay" onclick="select(this.id);" src="https://i.imgur.com/56H3XcH.png" width="72px">
</div>

<div class="option d-inline-block">
<img id="purple-overlay" onclick="select(this.id);" src="https://i.imgur.com/wKeXAzj.png" width="72px">
</div>

<div class="option d-inline-block">
<img id="red-overlay" onclick="select(this.id);" src="https://i.imgur.com/pjNQ4S9.png" width="72px">
</div>

<div class="option d-inline-block">
<img id="black-overlay" onclick="select(this.id);" src="https://i.imgur.com/WciiqPm.png" width="72px">
</div>

<div class="option d-inline-block">
<img id="special-tech-overlay" onclick="select(this.id);" src="https://i.imgur.com/mMZZUg9.png" width="72px">
</div>

<hr>
<h6><i class="fa-solid fa-paw"></i> Animals</h6>
<div class="option d-inline-block">
<img id="bee-overlay" onclick="select(this.id);" src="https://i.imgur.com/HgNl9Rp.png" width="72px">
</div>

<div class="option d-inline-block">
<img id="froggy-overlay" onclick="select(this.id);" src="https://i.imgur.com/mRaTreu.png" width="72px">
</div>

<div class="option d-inline-block">
<img id="greenbunny-overlay" onclick="select(this.id);" src="https://i.imgur.com/eGKUdje.png" width="72px">
</div>

<div class="option d-inline-block">
<img id="pinkbunny-overlay" onclick="select(this.id);" src="https://i.imgur.com/1ESwUFO.png" width="72px">
</div>

<div class="option d-inline-block">
<img id="greencat-overlay" onclick="select(this.id);" src="https://i.imgur.com/RxbfM3T.png" width="72px">
</div>

<div class="option d-inline-block">
<img id="grizzly-overlay" onclick="select(this.id);" src="https://i.imgur.com/UXgFI6g.png" width="72px">
</div>

<div class="option d-inline-block">
<img id="panda-overlay" onclick="select(this.id);" src="https://i.imgur.com/wbPiWUd.png" width="72px">
</div>

<div class="option d-inline-block">
<img id="pinkbear-overlay" onclick="select(this.id);" src="https://i.imgur.com/qetaQNK.png" width="72px">
</div>

</div> <!-- close Overlay Types -->
</div> <!-- close Customization-UI -->
    </div> <!-- close column -->

  </div>
 </div>
 
<script src="./assets/js/script.js"></script>
</body>
<!-- Starts Footer -->
<footer class="basic-animation" style="display: none;" id="footer-info">
<hr>
<p class="text-center" style="font-size: 13px; color: black;"><a href="https://legal.cloudteam.me/privacy" title="Our General Privacy Policies!">Privacy Policy</a>&nbsp;&nbsp;&nbsp;<a href="https://github.com/cloudteamdev" title="We are Open Source! check our GitHub."><i class="fa-brands fa-github"></i> GitHub</a>&nbsp;&nbsp;&nbsp;<a href="https://join.cloudteam.me" title="Join our official Discord Server"><i class="fa-brands fa-discord"></i> Discord</a></p>
<p class="text-center subttl">Built by <a href="https://cloudteam.me" title="CloudTeam's Website">CloudTeam</a> using <a href="https://getbootstrap.com" title="Bootstrap Framework Website">Bootstrap</a> and <a href="https://fontawesome.com/" title="Fontawesome Icons Website">Fontawesome icons</a>.</p>
</footer>

</html>
