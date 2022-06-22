<!DOCTYPE HTML>
<html>
<head>
<!-- Meta Data: Viewport -->
<meta name="viewport" content="width=device-width, initial-scale=0.70">
<!-- Meta Data: Embedding -->
        <meta property="og:type" content="website" />
        <meta name="theme-color" content="#2571e8" />
        <title>CloudTeam - Frames</title>
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
<meta property="og:image" content="https://codes.cloudteam.me/assets/img/banner.png" />
<!-- =========================== ^ To-Fix ===========================  -->
<!-- Spiders indexation -->
<meta name="robots" content= "index, follow">
        <!-- favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="https://cloudteam.me/assets/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://cloudteam.me/assets/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://cloudteam.me/assets/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://cloudteam.me/assets/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://cloudteam.me/assets/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://cloudteam.me/assets/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://cloudteam.me/assets/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://cloudteam.me/assets/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://cloudteam.me/assets/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="https://cloudteam.me/assets/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://cloudteam.me/assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://cloudteam.me/assets/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://cloudteam.me/assets/favicon/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#2571e8">
<meta name="msapplication-TileImage" content="https://cloudteam.me/assets/favicon/ms-icon-144x144.png">
<!-- =========================== ^ To-Do ===========================  -->
<meta name="msapplication-TileColor" content="#2571e8">
<!-- CDN Links -->
<!-- Bootstrap Styling v5.1.3 Minified -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- FontAwesome v6.1.1 Minified -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Roboto
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>-->
<!-- JQuery v3.6.0 Minified -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Handlers -->
<script>
/*Timeset*/
/*Date Functions*/
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' '+time;
/*Frame Preview Error Handlers*/
function handler(type) {
if(type == "avatar_invalid") {
    weblog("error", "Sorry, we couldn't set the given avatar, try with another image URL or device upload!");
    document.getElementById("avatar-holder").src="https://i.imgur.com/yY7VScU.png";}
if(type == "overlay_correct") { weblog("success", "Successfully loaded the selected overlay."); }
if(type == "icon_correct") { weblog("success", "Successfully loaded the selected icon.") }
}
/*Console and Tab Error/Success Logging*/
function weblog(type, msg){
var log = document.getElementById("error-log");
if(type == "error") {
log.innerHTML = "<hr><p class='text-danger sm-t'>[ "+dateTime+" ] <i class='fa-solid fa-bug'></i> "+ msg +"<p>";
console.error(msg);
ping_new();
  }
if(type == "success") {
log.innerHTML = "<hr><p class='text-success sm-t'>[ "+dateTime+" ] <i class='fa-solid fa-bug-slash'></i> "+ msg +"<p>";
console.info(msg);
  }
}
</script>
<!-- Adsense -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5711390134813679"
     crossorigin="anonymous"></script>
<!-- Import Styling -->
<link rel="stylesheet" href="./assets/css/style.css?v=6.1">
<!-- No Script -->
<noscript>Your browser does not support Javascript or has it blocked for this page, you may face lot of errors due to this, please enable it!</noscript>
</head>

<body onload="loader()">
<div class="parent-loader" id="spinner-parent">
    <div class="mx-auto inner-loader" id="spinner"><i class="fa-solid fa-paint-roller"></i></div>
</div>
<!-- Header -->
<header>
<nav class="navbar fixed-top navbar-expand-lg bg-white">
<div class="container" id="content-header">
<a href="https://cloudteam.me">
<img class="navbar-brand" src="https://cdn.discordapp.com/attachments/935221163855061012/987862398486601788/large_cloudteam_black.png" width="160px" alt="CloudTeam">
</a>
<div class="social-media order-lg-last">
<p class="mb-0 d-flex">
<a href="https://github.com/cloudteamdev" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-github"><i class="sr-only">GitHub</i></span></a>
<a href="https://join.cloudteam.me" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-discord"><i class="sr-only">Discord</i></span></a>
<a href="https://social.cloudteam.me/twitter" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-twitter"><i class="sr-only">Twitter</i></span></a>
</p>
</div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse">
<span class="fa fa-bars"></span> Menu
</button>
<div class="collapse navbar-collapse bg-white" id="collapse">
<ul class="navbar-nav ml-auto mr-md-3">
<li class="nav-item active"><a href="https://cloudteam.me" class="nav-link">Home</a></li>
<li class="nav-item"><a href="https://cloudteam.me/#projects" class="nav-link">Projects</a></li>
<li class="nav-item"><a href="https://legal.cloudteam.me" target="_blank"class="nav-link">Legal</a></li>
<li class="nav-item"><a href="https://cloudteam.me/#contact" class="nav-link">Contact</a></li>
</ul>
</div>
</div>
</nav>
</header>

<!-- Body -->
<div class="container main" id="content-body">
<div class="row">

<div class="col-sm custom-ui">
<!-- Tabs Selector Menu -->
<div class="tab">
  <button class="tablinks" onclick="newtab(event, 'overlays-tab-content')" id="defaultOpen"><i class="fa-solid fa-palette"></i>&nbsp; Overlay</button>
  <button class="tablinks" onclick="newtab(event, 'icons-tab-content')"><i class="fa-solid fa-icons"></i>&nbsp; Icons</button>
  <button class="tablinks" onclick="newtab(event, 'pets-tab-content')"><i class="fa-solid fa-otter"></i> Pets</button>
  <button class="tablinks" onclick="newtab(event, 'settings-tab-content')"><i class="fa-solid fa-gear" id="settings-info-tab"></i>&nbsp; Settings</button>
  <button class="tablinks position-relative" onclick="newtab(event, 'logs-tab-content'); read();"><i class="fa-solid fa-folder"></i>&nbsp; Logs&nbsp;
  <span class="position-absolute top-40 badge rounded-pill bg-danger" id="logs-ping" style="display: none;">
    <span id="logs-ping-counter">0</span>
    <span class="visually-hidden">unread pings</span>
  </span>
</button>
  
  <hr>
<button class="download mt-0" id="btn_dwl"><i class="fa-solid fa-download"></i> Download</button>
</div>

<div id="overlays-tab-content" class="tabcontent">

<div class="alert alert-primary alert-dismissible fade show sm-t" role="alert">
  <strong>Welcome to CloudTeam Frames V.2!</strong> Do not forget to check the <a class="alert-link" onclick="document.getElementById('settings-info-tab').click();" data-dismiss="alert" style="cursor: pointer;">settings tab</a> to set your avatar image.
  <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
  </button>
</div>

  <h5><i class="fa-solid fa-palette"></i> Overlays</h5>
  
 <div id="overlay-settings" style="display: none;"> 
<h6><i class="fa-solid fa-paint-roller"></i> Overlay Color <span class="sm-t text-muted">Hue color!</span></h6>
<div class="slider-container">
  <input type="range" min="0" max="360" value="0" class="slider" id="range-hue" oninput="range(this.id)">
</div>

<h6><i class="fa-solid fa-brush"></i> Overlay Saturation <span class="sm-t text-muted">Saturation!</span></h6>
<div class="slider-container">
  <input type="range" min="0" max="200" value="100" class="slider" id="range-saturation" oninput="range(this.id)">
</div>
 </div>
  
 <div class="options-container">
<div class="hrdivider">
  <hr/>
  <span>Default</span>
</div>
  <div class="option d-inline-block">
<img id="none" width="60px" src="https://i.imgur.com/ayFFzNr.png" data-source="https://i.imgur.com/ayFFzNr.png" alt="Overlay" onclick="select('overlay', this.id, this.getAttribute('data-source'));">
  </div>
  
  <div class="option d-inline-block">
<img id="default-circle" width="60px" src="https://i.imgur.com/xgxjZv4t.png" data-source="https://i.imgur.com/xgxjZv4.png" alt="Overlay" onclick="select('overlay', this.id, this.getAttribute('data-source'));">
  </div>
  
  <div class="option d-inline-block">
<img id="border-only" width="60px" src="https://i.imgur.com/TNCR4Wut.png" data-source="https://i.imgur.com/TNCR4Wu.png" alt="Overlay" onclick="select('overlay', this.id, this.getAttribute('data-source'));">
  </div>
  
  <div class="option d-inline-block"> <!-- Dark overlay, not viewable in preview, fix. -->
<img id="inclinated-square" width="60px" src="https://i.imgur.com/ZVtJedSt.png" data-source="https://i.imgur.com/ZVtJedS.png" alt="Overlay" onclick="select('overlay', this.id, this.getAttribute('data-source'));">
  </div>
  
  <div class="option d-inline-block">
<img id="rectangle-circle" width="60px" src="https://i.imgur.com/YsaWKuat.png" data-source="https://i.imgur.com/YsaWKua.png" alt="Overlay" onclick="select('overlay', this.id, this.getAttribute('data-source'));">
  </div>

<div class="hrdivider">
  <hr/>
  <span>Animals</span>
</div>

  <div class="option d-inline-block">
<img id="animal-bee" width="60px" src="https://i.imgur.com/HgNl9Rpt.png" data-source="https://i.imgur.com/HgNl9Rp.png" alt="Overlay" onclick="select('overlay', this.id, this.getAttribute('data-source'));">
  </div>
  
    <div class="option d-inline-block">
<img id="animal-frog" width="60px" src="https://i.imgur.com/mRaTreut.png" data-source="https://i.imgur.com/mRaTreu.png" alt="Overlay" onclick="select('overlay', this.id, this.getAttribute('data-source'));">
  </div>
  
    <div class="option d-inline-block">
<img id="animal-bunny" width="60px" src="https://i.imgur.com/eGKUdjet.png" data-source="https://i.imgur.com/eGKUdje.png" alt="Overlay" onclick="select('overlay', this.id, this.getAttribute('data-source'));">
  </div>
  
    <div class="option d-inline-block">
<img id="animal-bunny-pink" width="60px" src="https://i.imgur.com/1ESwUFOt.png" data-source="https://i.imgur.com/1ESwUFO.png" alt="Overlay" onclick="select('overlay', this.id, this.getAttribute('data-source'));">
  </div>

 </div>
</div>

<div id="icons-tab-content" class="tabcontent">
  <h5><i class="fa-solid fa-icons"></i> Icons</h5>
  
<div id="icon-settings" style="display: none;">
<h6><i class="fa-solid fa-circle-half-stroke"></i> Change to <span id="current-icons">Black</span> icons <span class="sm-t text-muted">Invert the icon colors?</span></h6>
<a onclick="invert();" class="btn btn-primary mb-1" id="invert">Click to change!</a>
</div>

 <div class="options-container icon-list">
<div class="hrdivider">
  <hr/>
  <span>Default</span>
</div>

  <div class="option d-inline-block">
<img id="none" width="60px" src="https://i.imgur.com/ayFFzNr.png" data-source="https://i.imgur.com/ayFFzNr.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
  <div class="upload d-inline-block">
<img src="https://i.imgur.com/BFquThP.png" id="upload-button" class="bg-primary" alt="Upload" width="60px" data-toggle="modal" data-target="#upload-icon">
  </div>
  
<!-- Modal -->
<div class="modal fade" id="upload-icon" tabindex="-1" role="dialog" aria-labelledby="upload-icon-modal-label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="upload-icon-modal-label"><i class="fa-solid fa-upload"></i> Upload Icon</h5>
  <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
  </button>
      </div>
      <div class="modal-body">
<p class="sm-t text-muted">Upload your own Icon, recommended minimum size is 128x128, recommended format is PNG (transparent)</p>

<div class="alert alert-primary alert-dismissible fade show sm-t" role="alert">
  <strong>Hey there!</strong> Just letting you know that the 'Invert' button may not work properly with custom icons.
  <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
  </button>
</div>

<p class="sm-t mb-0">Device Upload</p>
<input type="file"  accept="image/*" name="image" id="fileicon"  onchange="setholder(this, '#icon-holder')" style="display: none;">
<p><label for="fileicon" style="cursor: pointer;" class="btn btn-dark sm-t mb-0"><i class="fa-solid fa-upload"></i> Upload From Device</label></p>
<p class="sm-t mb-0">Reset Icon</p>
<a class="btn btn-danger sm-t" id="reset-icon" data-source="https://i.imgur.com/ayFFzNr.png" onclick="select('icon', this.id, this.getAttribute('data-source'));">Click to reset!</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  
<div class="option d-inline-block">
<img id="developer" width="60px" src="https://i.imgur.com/t93w1Np.png" data-source="https://i.imgur.com/t93w1Np.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
  <div class="option d-inline-block">
<img id="balance" width="60px" src="https://i.imgur.com/6SiHdDM.png" data-source="https://i.imgur.com/6SiHdDM.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
  <div class="option d-inline-block">
<img id="bravery" width="60px" src="https://i.imgur.com/bTiss5e.png" data-source="https://i.imgur.com/bTiss5e.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
  <div class="option d-inline-block">
<img id="brilliance" width="60px" src="https://i.imgur.com/bgLAui7.png" data-source="https://i.imgur.com/bgLAui7.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
  <div class="option d-inline-block">
<img id="bug-hunter" width="60px" src="https://i.imgur.com/DkJXD1L.png" data-source="https://i.imgur.com/DkJXD1L.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
    <div class="option d-inline-block">
<img id="hypesquad-events" width="60px" src="https://i.imgur.com/YrtWAQj.png" data-source="https://i.imgur.com/YrtWAQj.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
    <div class="option d-inline-block">
<img id="nitro-normal" width="60px" src="https://i.imgur.com/lVYWtZA.png" data-source="https://i.imgur.com/lVYWtZA.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
    <div class="option d-inline-block">
<img id="nitro-linear" width="60px" src="https://i.imgur.com/9dRaq6t.png" data-source="https://i.imgur.com/9dRaq6t.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
      <div class="option d-inline-block">
<img id="partner" width="60px" src="https://i.imgur.com/7k2J0az.png" data-source="https://i.imgur.com/7k2J0az.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
      <div class="option d-inline-block">
<img id="tools" width="60px" src="https://i.imgur.com/SVJpHbQ.png" data-source="https://i.imgur.com/SVJpHbQ.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
      <div class="option d-inline-block">
<img id="booster" width="60px" src="https://i.imgur.com/COqTWSm.png" data-source="https://i.imgur.com/COqTWSm.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
        <div class="option d-inline-block">
<img id="crown" width="60px" src="https://i.imgur.com/3isqxe6.png" data-source="https://i.imgur.com/3isqxe6.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
        <div class="option d-inline-block">
<img id="bitcoin" width="60px" src="https://i.imgur.com/y3JOZXa.png" data-source="https://i.imgur.com/y3JOZXa.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
        <div class="option d-inline-block">
<img id="crossing-swords" width="60px" src="https://i.imgur.com/dMNlqQT.png" data-source="https://i.imgur.com/dMNlqQT.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
        <div class="option d-inline-block">
<img id="verified" width="60px" src="https://i.imgur.com/ZNof9NC.png" data-source="https://i.imgur.com/ZNof9NC.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
<div class="hrdivider">
  <hr/>
  <span>Social Media</span>
</div>

        <div class="option d-inline-block">
<img id="social-discord" width="60px" src="https://i.imgur.com/4Pxx58n.png" data-source="https://i.imgur.com/4Pxx58n.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
        <div class="option d-inline-block">
<img id="social-twitter" width="60px" src="https://i.imgur.com/nM8RhNN.png" data-source="https://i.imgur.com/nM8RhNN.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
          <div class="option d-inline-block">
<img id="social-youtube" width="60px" src="https://i.imgur.com/XUWTDa8.png" data-source="https://i.imgur.com/XUWTDa8.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
          <div class="option d-inline-block">
<img id="social-twitch" width="60px" src="https://i.imgur.com/SINAIBD.png" data-source="https://i.imgur.com/SINAIBD.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
  
          <div class="option d-inline-block">
<img id="social-twitch-large" width="60px" src="https://i.imgur.com/ZJusAvl.png" data-source="https://i.imgur.com/ZJusAvl.png" alt="Icon" onclick="select('icon', this.id, this.getAttribute('data-source'));">
  </div>
 
 </div>

</div>

<div id="pets-tab-content" class="tabcontent">
  <h5><i class="fa-solid fa-otter"></i> Pets</h5>
  <p>Pets soon!</p>
</div>

<div id="logs-tab-content" class="tabcontent">
<h5><i class="fa-solid fa-folder"></i> Logs</h5>
<span id="error-log"></span>

<div class="download-history mt-2 mx-auto" id="downloads" style="display: none;">
<span class="sm-t text-muted">Your Frames download(s) this session!</span><br>
<span id="preview-list"></span>
</div>

</div>

<div id="settings-tab-content" class="tabcontent">
  <h5><i class="fa-solid fa-gear"></i> Settings</h5>
  <span class="text-muted sm-t mb-0">Diverse settings for web and overlay customization.</span>
 <hr>
<h6><i class="fa-solid fa-user-astronaut"></i> Set Avatar</h6>

<p class="sm-t text-muted mb-0">URL upload</p>
<div class="input-group input-group-sm mb-0" id="avatar-upload-url">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa-solid fa-link"></i></span>
  </div>
  <input type="url" onkeyup="avatarurl(this.value);" placeholder="Avatar URL..." class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<span class="text-warning bg-dark rounded p-1 mt-0" id="avatar-upload-warning" style="display: none; font-size: 11px;"></span>
<div class="hrdivider">
  <hr/>
  <span>or</span>
</div>
<input type="file"  accept="image/*" name="image" id="file"  onchange="setholder(this, '#avatar-holder')" style="display: none;">
<p><label for="file" style="cursor: pointer;" class="btn btn-dark"><i class="fa-solid fa-upload"></i> Upload From Device <span class="text-warning sm-t">(recommended)</span></label></p>

<h6><i class="fa-solid fa-toolbox"></i> Extra Settings</h6>
<div class="form-check text-muted">
  <input class="form-check-input" type="checkbox" checked value="" id="defaultCheck1">
  <label class="form-check-label sm-t" for="defaultCheck1">
    Remove Watermark (Not available!)
  </label>
</div>
<hr>
<a class="btn btn-danger sm-t mb-1" onclick="range('reset')">Reset Overlay Filters</a>
<a class="btn btn-danger sm-t mb-1" onclick="avatarurl('https://i.imgur.com/x02TVVv.png')">Reset Frame Avatar</a>
<hr>

</div>

</div>

  <div class="col-sm"> <!-- second -->
<div class="preview-holder" id="holder">
<div>
  <img id="avatar-holder" src="https://i.imgur.com/x02TVVv.png" class="img1 mx-auto" width="500px" onerror="handler('avatar_invalid');">
  <img id="overlay-holder" src="https://i.imgur.com/0cn29ow.png" class="img2 mx-auto" width="500px" onload="handler('overlay_correct')">
  <img id="icon-holder" src="https://i.imgur.com/ayFFzNr.png" class="img3 mx-auto" width="500px" onload="handler('icon_correct')">
</div>
</div>
  </div> <!-- /second -->
</div>
</div>
<!-- Development & Design GET Keywords -->
<?php
/* ?limiters=<int> = Shows the frame limit borders drawing */
if(is_numeric(htmlentities($_GET["limiters"]))){
    echo "<style>.preview-holder img {
    border: 3px solid #09ff00;
    }</style>";
}
?>

<!-- Footer -->
<footer>
<div class="copyright">
<a class="fl text-left mb-2" href="https://cloudteam.me">© <?php echo date("Y"); ?> CloudTeam
All rights reserved.</a>
</div>
</footer>

<!-- CloudTeam Frames Scripting -->
<script src="./assets/js/script.js?v=4.1"></script>
<!-- DOM to image v2.6.0 Minified -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js" integrity="sha512-01CJ9/g7e8cUmY0DFTMcUw/ikS799FHiOA0eyHsUWfOetgbx/t6oV4otQ5zXKQyIrQGTHSmRVPIgrgLcZi/WMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
