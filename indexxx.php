<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<script> document.title = "Integration | JWPlayer";</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="./assets/img/favicon.png" />
<!-- JS Files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="./assets/hls.light.min.js"></script>
<script src="./assets/provider.hlsjs.js"></script>
<script src="https://ssl.p.jwpcdn.com/player/v/8.8.6/jwplayer.js"></script>
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" href="./assets/player_style.css">
<link rel="stylesheet" type="text/css" href="./assets/codenine_skin.css">
<!-- JWPlayer License -->
<script type="text/javascript">jwplayer.key="64HPbvSQorQcd52B8XFuhMtEoitbvY/EXJmMBfKcXZQU2Rnn";</script>
</head>
<body>
    <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="circle-line">
    <div class="circle-blue">&nbsp;</div>
    <div class="circle-red">&nbsp;</div>
    <div class="circle-green">&nbsp;</div>
    <div class="circle-yellow">&nbsp;</div>
    </div>
	</div>
    </div>
<div id="codenine_player"></div>
<script>
    var p2pConfig = {
    logLevel: 'debug',
    live: true, // set to false in VOD mode        
    }
    if (!Hls.P2pEngine.isMSESupported() || Hls.P2pEngine.getBrowser() === 'Mac-Safari') {
    new Hls.P2pEngine.ServiceWorkerEngine(p2pConfig)
    }    
    jwplayer('codenine_player').setup({
    file: 'https://bitdash-a.akamaihd.net/content/sintel/hls/playlist.m3u8',
    autostart: false,
    stretching:"uniform",
    aspectratio: "16:9",
    image: "./assets/img/sintel.jpg",
    playbackRateControls: true,
    sharing: {
    sites: ["facebook","twitter","email","linkedin","pinterest"]
    },
    advertising: {
        client: "vast",
        schedule: {
    adbreak1: {
        offset : "pre",                         
        tag: "#",
        skipoffset: 10
        },
    adbreak2: {
        offset: "10%",
        tag: "#",
        type: "nonlinear"
        },
        },
        }, 
	logo: {
    file: "#",
        position: "top-left",
        link : "#",
        },
    skin: {
        controlbar: {
        "icons": "#05D1D2",
        "iconsActive": "#fff"
        },
        timeslider: {
        "progress": "#fff",
        }
        },
    hlsjsdefault: true,
    hlsjsConfig: {
    p2pConfig
    },
    });
</script>

    <script>
    setTimeout(function() {
    $("#loader").delay(1000).fadeOut("slow");
    $("#loader-wrapper").delay(1500).fadeOut("slow");
    }, 2000);
    </script>
    
    <?php include './includeds/ad-popup.php';?>
    
</body>
</html>
