<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";
?>
<style>
    .part-line {
        position: absolute;
        left: -10px;
        bottom: 85px;
        width: 100% !important;
        padding: 0;
        margin: 0 auto;
    }

    .time-display {
        color: #fff;
    }

    .progress-bar-container {
        background: transparent;
        width: 100%;
    }

    .progress-bar {
        background-color: #6c757d;
        height: 11px;
    }

    .progress {
        background-color: #FA5252;
    }

    /* Container Styles */
    @media screen and (min-width:0px) and (max-width:768px) {
        .layer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 30%;
            background-color: rgba(0, 0, 0, 0);
            z-index: 1;
        }
    }

    @media screen and (min-width:769px) {
        .layer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 30%;
            background-color: rgba(0, 0, 0, 0);
            z-index: 1;
        }
    }

    .youtube-container {
        z-index: 1;
        position: relative;
        overflow: hidden;
        width: 100%;
        aspect-ratio: 16/9;
        max-height: 400px;
        border-radius: 25px;
        background-color: #fff;
    }

    .youtube-container iframe {
        width: 300%;
        height: 95%;
        margin-left: -100%;
    }

    /* Controls Styling */
    .controls {

        position: absolute;
        bottom: -5px;
        left: 10px;
        display: flex;
        gap: 10px;
        height: 20%;
        z-index: 3;
        /* display:none; */
    }

    .control-button {
        background-color: rgba(0, 0, 0, 0.7);
        border: none;
        color: white;
        padding: 8px;
        font-size: 14px;
        cursor: pointer;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 35px;
        height: 35px;
    }

    .control-button:hover {
        background-color: #35A7FF;
    }

    /* Dropdown Styling */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-button {
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 10px;
        font-size: 18px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .dropdown-button:hover {
        background-color: #35A7FF;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: rgba(0, 0, 0, 0.9);
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 4;
        border-radius: 5px;
        top: -240%;
    }

    .dropdown-content button {
        color: white;
        padding: 3px 6px;
        text-decoration: none;
        display: block;
        width: 100%;
        background: none;
        border: none;
        text-align: left;
        cursor: pointer;
    }

    .dropdown-content button:hover {
        background-color: rgba(255, 0, 0, 0.7);
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Icon Overlays */
    .icover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 55px;
        background-color: transparent;
        z-index: 4;
    }

    .controls>div {
        justify-content: center;
        align-items: center;
    }

    .controls {
        width: 100% !important;
        justify-content: space-between !important;
    }

    .dropdown5 {
        top: -100% !important;
    }

    .dropdown3 {
        top: -320% !important;
    }

    @media screen and (min-width:0px) and (max-width:767px) {
        .controls {
            bottom: 10px !important;
        }

        .youtube-container {
            aspect-ratio: 4 / 3;
            height: 700px;
            padding-bottom: 50px;
        }

        .dropdown-button {
            font-size: 0.8rem;
        }

        .control-button {
            width: 40px;
            height: 40px;
        }

        .dropdown-content {
            top: -450%;
        }

        .dropdown4 {
            top: -580% !important;
        }

        .dropdown5 {
            top: -150% !important;
        }
    }

    @media screen and (min-width:767px) and (max-width:849px) {
        .dropdown4 {
            top: -525% !important;
        }

        .part-line {
            bottom: 49px !important;
        }
    }

    @media screen and (min-width:850px) {
        .dropdown4 {
            top: -465% !important;
        }

        .part-line {
            bottom: 49px !important;
        }
    }
</style>
<!-- Font Awesome CDN for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Video Player</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Course Details</li>
                            <li class="breadcrumb-item active">Video List</li>
                            <li class="breadcrumb-item active">Video Player</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $title = $src = '';
        if (
            isset($_GET['vid']) &&
            !empty($_GET['vid']) &&
            filter_var($_GET['vid'], FILTER_VALIDATE_INT) &&
            $_GET['type'] === 'video'
        ) {
            $vid = filter($_GET['vid']);
            $sql_video = "SELECT * FROM `tbl_tutorial` WHERE id = '{$vid}'";
            $videos = runFatch($sql_video);
            if ($videos) {
                foreach ($videos as $video) {
                    $title = $video['title'];
                    $src = $video['video'];
                }
            }
        }
        if (
            isset($_GET['vid']) &&
            !empty($_GET['vid']) &&
            filter_var($_GET['vid'], FILTER_VALIDATE_INT) &&
            $_GET['type'] === 'live'
        ) {
            $vid = filter($_GET['vid']);
            $sql_video = "SELECT * FROM `tbl_youtube` WHERE id = '{$vid}'";
            $videoy = runFatch($sql_video);
            if ($videoy) {
                foreach ($videoy as $video1) {


                    $liveDate = $video1['start_date'];
                    $today = date('Y-m-d');
                    $start_time = date('H:i', strtotime($video1['start_time']));
                    $end_time = date('H:i', strtotime($video1['end_time']));

                    // Determine status based on date and time
                    $status = '';
                    $disabled = false;
                    if ($liveDate == $today) {
                        if ($start_time <= date('H:i') && $end_time > date('H:i')) {
                            $disabled = false;
                        } else if ($end_time < date('H:i')) {
                            $disabled = true;
                        } else {
                            $disabled = true;
                        }
                    } elseif ($liveDate > $today) {
                        $disabled = true;
                    } elseif ($liveDate < $today) {
                        $disabled = true;
                    }
                    if (!$disabled) {
                        $title = $video1['title'];
                        $src = $video1['video'];
                    }
                }
            }
        }
        if (!empty($src) && !empty($title)) {
        ?>
            <h2 class="card-h"><?= $title; ?></h2>
            <!-- YouTube Container -->
            <div class="youtube-container" id="youtube-container">
                <iframe
                    id="player"
                    class="responsive-iframe"
                    src="<?= htmlspecialchars_decode($src); ?>?controls=0&modestbranding=1&vq=highres&playsinline=1&rel=0&enablejsapi=1&showinfo=0&autoplay=1&mute=0&loop=1&color=red"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <div class="icover"></div>
                <div class="layer"></div>
                <!-- Custom Controls -->
                <div class="controls" style="flex-direction: column;">
                    <div>
                        <div class="part-line">
                            <div class="progress-bar-container">
                                <div class="progress-bar">
                                    <div id="progress" class="progress"></div>
                                </div>
                                <div class="time-display" id="time-display">0:00 / 0:00</div>
                            </div>
                        </div>
                    </div>
                    <div style="
                            display:flex;
                            justify-content: space-between;
                            align-items:center;
                            background:#fff;
                            ">
                        <div class="d-flex">

                            <button id="play-pause" class="d-none btn"><i class="fas fa-play"></i></button>

                            <button id="skip-backward" class="btn btn-dark ms-2"><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i></button>
                            <button class="control-button ms-2" id="mute-unmute">
                                <i class="fas fa-volume-up"></i>
                            </button>
                            <button id="skip-forward" class="btn btn-dark ms-2"><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></button>
                        </div>
                        <div style="margin-right:30px;">
                            <!-- Dropdown for Quality -->


                            <!-- Dropdown for Speed -->
                            <div class="dropdown">
                                <button class="dropdown-button">
                                    <i class="fas fa-tachometer-alt"></i> <i class="fas fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content dropdown4" id="speed-selector">
                                    <!-- <button onclick="setSpeed(0.5)">0.5x</button>
                                        <button onclick="setSpeed(1)">1x (Normal)</button>
                                        <button onclick="setSpeed(1.5)">1.5x</button>
                                        <button onclick="setSpeed(2)">2x</button> -->
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="dropdown-button" onclick="openFullScreen();"><i class="fas fa-expand"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #chat-wrapper {
                    background: #ffffff;
                    border-radius: 8px;
                    box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
                    padding: 15px;
                }

                #chat-box {
                    border: 1px solid #ddd;
                    padding: 15px;
                    height: 350px;
                    overflow-y: auto;
                    background: #f9f9f9;
                    border-radius: 6px;
                    font-size: 14px;
                    line-height: 1.4;
                }

                #chat-form {
                    margin-top: 15px;
                    display: flex;
                    gap: 10px;
                }

                #chat-input {
                    flex: 1;
                    padding: 10px;
                    border-radius: 6px;
                    border: 1px solid #ccc;
                }

                .chat-message {
                    margin-bottom: 10px;
                }

                .chat-message b {
                    color: #007bff;
                }

                .g_id_signin {
                    margin-top: 15px;
                    justify-content: center;
                }

                #logout-btn_chat {
                    margin-top: 15px;
                }

                #webview-login-wrapper {
                    margin-top: 20px;
                }
            </style>

            <div class="row mb-5 mt-3">
                <div class="col-md-12 col-12">
                    <div id="chat-wrapper">
<p class="text-danger">If not logged in, please login with Google to access live chat.</p>

                        <!-- Google Sign-in -->
                        <div id="g_id_onload"
                            data-client_id="190994105019-cuojk3hr4kf7tklj2be2iqnns617ninj.apps.googleusercontent.com"
                            data-context="signin"
                            data-ux_mode="popup"
                            data-callback="handleCredentialResponse"
                            data-auto_prompt="false">
                        </div>

                        <div class="g_id_signin" data-type="standard" data-theme="outline" data-size="large"></div>

                        <!-- Web Login Fallback -->
                        <!-- Web Login Fallback -->
                        <div id="webview-login-wrapper" style="display:none;">
                            <button id="login-btn" class="btn btn-danger">Login with Google</button>
                        </div>


                        <!-- Logout Button -->
                        <button id="logout-btn_chat" onclick="logout()" class="btn btn-secondary" style="display: none;">
                            Logout
                        </button>

                        <!-- Chat Section -->
                        <div id="chat-section" style="display: none;">
                            <h5 class="mt-4 mb-3">Live Chat</h5>

                            <!-- Chat Box -->
                            <div id="chat-box">Waiting for chat...</div>

                            <!-- Chat Input Form -->
                            <form id="chat-form" onsubmit="return sendMessage(event)">
                                <input type="text" id="chat-input" placeholder="Type your message..." required />
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
    </div>
    <!-- /Overview Section -->
</div>

<?php
require "./inc/footer.php";
require "./inc/script.php";
?>

<script>
    const _0x5df72b = _0x2d80;
    (function(_0x2600aa, _0x49b3c6) {
        const _0x3e98dc = _0x2d80,
            _0x383fbb = _0x2600aa();
        while (!![]) {
            try {
                const _0x24e7bb = parseInt(_0x3e98dc(0x14f)) / 0x1 * (-parseInt(_0x3e98dc(0xff)) / 0x2) + -parseInt(_0x3e98dc(0x126)) / 0x3 * (-parseInt(_0x3e98dc(0x137)) / 0x4) + parseInt(_0x3e98dc(0x112)) / 0x5 * (parseInt(_0x3e98dc(0x143)) / 0x6) + parseInt(_0x3e98dc(0x105)) / 0x7 * (parseInt(_0x3e98dc(0x108)) / 0x8) + parseInt(_0x3e98dc(0x119)) / 0x9 * (parseInt(_0x3e98dc(0x135)) / 0xa) + parseInt(_0x3e98dc(0x11b)) / 0xb * (parseInt(_0x3e98dc(0x124)) / 0xc) + -parseInt(_0x3e98dc(0x13a)) / 0xd;
                if (_0x24e7bb === _0x49b3c6) break;
                else _0x383fbb['push'](_0x383fbb['shift']());
            } catch (_0xdede6e) {
                _0x383fbb['push'](_0x383fbb['shift']());
            }
        }
    }(_0x1492, 0x6c077));
    var player, isPlaying = ![],
        isMuted = ![],
        zoomLevel = 0x1;
    let currentSpeed = 0x1,
        duration = 0x0;

    function _0x1492() {
        const _0x1f3008 = ['Player\x20is\x20playing.\x20Fetching\x20available\x20qualities...', '11KVicIJ', 'speed-controller', 'seekTo', 'play-pause', 'getPlaybackQuality', 'msFullscreenElement', 'requestFullscreen', 'fa-volume-up', 'skip-forward', '3292584gMhRlO', 'textContent', '1491VEpHaY', 'remove', 'max', 'innerHTML', 'mute-unmute', 'mute', 'data', 'pauseVideo', 'Requested\x20quality\x20', 'skip-backward', 'getElementsByTagName', 'isMuted', 'script', 'parentNode', 'offsetWidth', '2426330kbrNeQ', 'insertBefore', '7100okHcKH', 'fa-volume-mute', 'querySelector', '18800067CvizvN', 'Current\x20Quality\x20after\x20setting:', 'transform', 'Called\x20Me', 'Player', 'time-display', 'click', 'scale(', 'fa-pause', '138jurJQJ', 'PlayerState', 'classList', 'forEach', '.youtube-container', 'offsetX', 'unMute', 'appendChild', 'style', 'msRequestFullscreen', 'getElementById', 'getCurrentTime', '3BiMqbc', 'src', 'className', 'log', 'getAvailablePlaybackRates', 'getDuration', 'webkitExitFullscreen', 'msExitFullscreen', 'youtube-container', 'contextmenu', 'stopVideo', 'addEventListener', 'mozCancelFullScreen', 'getAvailableQualityLevels', 'add', '<i\x20class=\x22fas\x20fa-play\x22></i>', 'webkitRequestFullscreen', '484294BptBCO', 'player', 'mozRequestFullScreen', 'getPlayerState', 'getPlaybackRate', 'floor', '195601CFRvDw', 'mozFullScreenElement', 'progress', '40SCxqVC', 'createElement', 'preventDefault', 'webkitFullscreenElement', '\x20/\x20', 'width', 'setPlaybackRate', 'exitFullscreen', '.youtube-container\x20iframe', 'Error\x20entering/exiting\x20fullscreen:', '128460UtNBon', 'setPlaybackQuality', 'playVideo', 'fa-play', 'https://www.youtube.com/iframe_api', 'Speed\x20change\x20requested:', '<i\x20class=\x22fas\x20fa-pause\x22></i>', '27KDKLLD'];
        _0x1492 = function() {
            return _0x1f3008;
        };
        return _0x1492();
    }
    var tag = document[_0x5df72b(0x109)](_0x5df72b(0x132));
    tag[_0x5df72b(0x150)] = _0x5df72b(0x116);
    var firstScriptTag = document[_0x5df72b(0x130)]('script')[0x0];
    firstScriptTag[_0x5df72b(0x133)][_0x5df72b(0x136)](tag, firstScriptTag);
    var player;

    function onPlaybackQualityChange(_0x204c8f) {
        const _0x1f6b75 = _0x5df72b;
        console[_0x1f6b75(0xf1)]('Playback\x20quality\x20changed\x20to:', _0x204c8f[_0x1f6b75(0x12c)]);
    }

    function onYouTubeIframeAPIReady() {
        const _0x1662bb = _0x5df72b;
        player = new YT[(_0x1662bb(0x13e))](_0x1662bb(0x100), {
            'events': {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange,
                'onPlaybackQualityChange': onPlaybackQualityChange
            }
        });
    }

    function onPlayerStateChange(_0x27afd1) {
        const _0x387e46 = _0x5df72b;
        _0x27afd1[_0x387e46(0x12c)] === YT[_0x387e46(0x144)]['PLAYING'] && (console[_0x387e46(0xf1)](_0x387e46(0x11a)), setQualityOptions());
    }

    function setQualityOptions() {
        const _0x8e939e = _0x5df72b,
            _0xaa6055 = player[_0x8e939e(0xf2)](),
            _0x44260f = document[_0x8e939e(0x14d)]('speed-selector');
        _0x44260f[_0x8e939e(0x129)] = '', console[_0x8e939e(0xf1)](_0x8e939e(0x13d), _0xaa6055), _0xaa6055['length'] > 0x0 && _0xaa6055[_0x8e939e(0x146)](_0x1c3239 => {
            const _0x5c7218 = _0x8e939e,
                _0x3337e2 = document[_0x5c7218(0x109)]('button');
            _0x3337e2[_0x5c7218(0xf0)] = _0x5c7218(0x11c), _0x3337e2[_0x5c7218(0x125)] = _0x1c3239, _0x3337e2[_0x5c7218(0xf9)](_0x5c7218(0x140), () => {
                const _0x4383e2 = _0x5c7218;
                player[_0x4383e2(0x10e)](_0x1c3239), console[_0x4383e2(0xf1)](_0x4383e2(0x117), _0x1c3239), setTimeout(() => {
                    const _0x1f12a2 = _0x4383e2;
                    console['log'](player[_0x1f12a2(0x103)](), 'Current');
                }, 0x3e8);
            }), _0x44260f[_0x5c7218(0x14a)](_0x3337e2);
        });
    }

    function updateProgressBar() {
        const _0x5833b2 = _0x5df72b,
            _0x4a133e = player[_0x5833b2(0x14e)](),
            _0x2312d2 = _0x4a133e / player['getDuration']() * 0x64;
        document[_0x5833b2(0x14d)](_0x5833b2(0x107))[_0x5833b2(0x14b)][_0x5833b2(0x10d)] = _0x2312d2 + '%', document[_0x5833b2(0x14d)](_0x5833b2(0x13f))[_0x5833b2(0x125)] = formatTime(_0x4a133e) + _0x5833b2(0x10c) + formatTime(player[_0x5833b2(0xf3)]());
    }

    function formatTime(_0x1d522e) {
        const _0x54412a = _0x5df72b,
            _0x21190f = Math['floor'](_0x1d522e / 0x3c),
            _0x5967e5 = Math[_0x54412a(0x104)](_0x1d522e % 0x3c);
        return _0x21190f + ':' + (_0x5967e5 < 0xa ? '0' : '') + _0x5967e5;
    }

    function onPlayerReady(_0x3780c3) {
        const _0x5295d3 = _0x5df72b;
        setTimeout(() => setQualityOptions(), 0x9c4), _0x3780c3['target'][_0x5295d3(0x114)](), duration = player[_0x5295d3(0xf3)]();
        const _0x411d8b = document[_0x5295d3(0x14d)](_0x5295d3(0x11e)),
            _0x1666b3 = document[_0x5295d3(0x14d)](_0x5295d3(0x123)),
            _0x5a7eb4 = document['getElementById'](_0x5295d3(0x12f)),
            _0x9b90ac = document['querySelector']('.progress-bar');
        _0x1666b3['addEventListener']('click', () => {
            const _0x479b9a = _0x5295d3,
                _0x35bac7 = player[_0x479b9a(0x14e)]();
            player[_0x479b9a(0x11d)](_0x35bac7 + 0xa, !![]);
        }), _0x5a7eb4['addEventListener'](_0x5295d3(0x140), () => {
            const _0x4e1e30 = _0x5295d3,
                _0x42af69 = player['getCurrentTime']();
            player[_0x4e1e30(0x11d)](_0x42af69 - 0xa, !![]);
        }), _0x411d8b['addEventListener'](_0x5295d3(0x140), () => {
            const _0x1d5fb6 = _0x5295d3,
                _0x28d2cc = player[_0x1d5fb6(0x102)]();
            _0x28d2cc === YT[_0x1d5fb6(0x144)]['PLAYING'] ? (player[_0x1d5fb6(0x12d)](), _0x411d8b['innerHTML'] = _0x1d5fb6(0xfd)) : (player[_0x1d5fb6(0x114)](), _0x411d8b[_0x1d5fb6(0x129)] = _0x1d5fb6(0x118));
        }), _0x9b90ac[_0x5295d3(0xf9)](_0x5295d3(0x140), _0x28aa0b => {
            const _0x3b1c59 = _0x5295d3,
                _0x3254d5 = _0x9b90ac[_0x3b1c59(0x134)],
                _0x200244 = _0x28aa0b[_0x3b1c59(0x148)],
                _0x205e01 = _0x200244 / _0x3254d5,
                _0x5ce0de = _0x205e01 * player[_0x3b1c59(0xf3)]();
            player['seekTo'](_0x5ce0de, !![]);
        }), setInterval(updateProgressBar, 0x3e8), setTimeout(() => setQualityOptions(), 0x9c4);
    }

    function playVideo() {
        player && player['playVideo'] && (player['playVideo'](), updatePlayPauseButton(!![]));
    }

    function pauseVideo() {
        const _0x1ac6d = _0x5df72b;
        player && player[_0x1ac6d(0x12d)] && (player[_0x1ac6d(0x12d)](), updatePlayPauseButton(![]));
    }

    function stopVideo() {
        const _0x30f627 = _0x5df72b;
        player && player[_0x30f627(0xf8)] && (player[_0x30f627(0xf8)](), updatePlayPauseButton(![]));
    }

    function muteVideo() {
        const _0x22f829 = _0x5df72b;
        player && player[_0x22f829(0x12b)] && (player[_0x22f829(0x12b)](), isMuted = !![], updateMuteUnmuteButton(!![]));
    }

    function unmuteVideo() {
        player && player['unMute'] && (player['unMute'](), isMuted = ![], updateMuteUnmuteButton(![]));
    }

    function setSpeed(_0x20ca1a) {
        player && player['setPlaybackRate'] && player['setPlaybackRate'](_0x20ca1a);
    }

    function setQuality(_0x4fda4e) {
        const _0x403aa5 = _0x5df72b;
        if (player) {
            const _0x2b1501 = player[_0x403aa5(0xfb)]();
            console[_0x403aa5(0xf1)]('Available\x20Qualities:', _0x2b1501), _0x2b1501['includes'](_0x4fda4e) ? (player[_0x403aa5(0x113)](_0x4fda4e), console['log']('Attempting\x20to\x20set\x20playback\x20quality\x20to:', _0x4fda4e), setTimeout(() => {
                const _0x3edca4 = _0x403aa5;
                console[_0x3edca4(0xf1)](_0x3edca4(0x13b), player[_0x3edca4(0x11f)]());
            }, 0x3e8)) : console['log'](_0x403aa5(0x12e) + _0x4fda4e + '\x20is\x20not\x20available.');
        } else console['log']('Player\x20is\x20not\x20initialized\x20yet.');
    }

    function updatePlayPauseButton(_0x4e6c05) {
        const _0x5c8d20 = _0x5df72b;
        var _0x370926 = document[_0x5c8d20(0x14d)](_0x5c8d20(0x11e)),
            _0x5b8434 = _0x370926[_0x5c8d20(0x139)]('i');
        _0x4e6c05 ? (_0x5b8434[_0x5c8d20(0x145)][_0x5c8d20(0x127)](_0x5c8d20(0x115)), _0x5b8434[_0x5c8d20(0x145)]['add']('fa-pause')) : (_0x5b8434[_0x5c8d20(0x145)]['remove'](_0x5c8d20(0x142)), _0x5b8434[_0x5c8d20(0x145)]['add'](_0x5c8d20(0x115)));
    }

    function zoomIn() {
        const _0x836905 = _0x5df72b;
        zoomLevel += 0.1, document[_0x836905(0x139)](_0x836905(0x110))['style'][_0x836905(0x13c)] = _0x836905(0x141) + zoomLevel + ')';
    }

    function _0x2d80(_0xc920a8, _0x5710bc) {
        const _0x1492a = _0x1492();
        return _0x2d80 = function(_0x2d80a5, _0x38858b) {
            _0x2d80a5 = _0x2d80a5 - 0xf0;
            let _0x4c9ee4 = _0x1492a[_0x2d80a5];
            return _0x4c9ee4;
        }, _0x2d80(_0xc920a8, _0x5710bc);
    }

    function zoomOut() {
        const _0x6b2ccb = _0x5df72b;
        zoomLevel = Math[_0x6b2ccb(0x128)](0x1, zoomLevel - 0.1), document[_0x6b2ccb(0x139)](_0x6b2ccb(0x110))[_0x6b2ccb(0x14b)]['transform'] = 'scale(' + zoomLevel + ')';
    }
    document[_0x5df72b(0x14d)](_0x5df72b(0x12a))[_0x5df72b(0xf9)]('click', function() {
        const _0x3773af = _0x5df72b;
        console[_0x3773af(0xf1)]('check\x20mute'), player[_0x3773af(0x131)]() ? (player[_0x3773af(0x149)](), console[_0x3773af(0xf1)]('Unmute'), isMuted = ![], updateMuteUnmuteButton(![])) : (player[_0x3773af(0x12b)](), console[_0x3773af(0xf1)](_0x3773af(0x12b)), isMuted = !![], updateMuteUnmuteButton(!![]));
    });

    function updateMuteUnmuteButton(_0x351997) {
        const _0x594ee3 = _0x5df72b;
        var _0x2ae8ee = document[_0x594ee3(0x14d)]('mute-unmute'),
            _0x36205a = _0x2ae8ee[_0x594ee3(0x139)]('i');
        _0x351997 ? (_0x36205a[_0x594ee3(0x145)][_0x594ee3(0x127)]('fa-volume-up'), _0x36205a['classList'][_0x594ee3(0xfc)](_0x594ee3(0x138))) : (_0x36205a['classList'][_0x594ee3(0x127)](_0x594ee3(0x138)), _0x36205a[_0x594ee3(0x145)][_0x594ee3(0xfc)](_0x594ee3(0x122)));
    }
    document[_0x5df72b(0xf9)](_0x5df72b(0xf7), function(_0x5afd23) {
        const _0x5ebe31 = _0x5df72b;
        _0x5afd23[_0x5ebe31(0x10a)]();
    });
    var iframeContainer = document[_0x5df72b(0x139)](_0x5df72b(0x147));
    iframeContainer && iframeContainer[_0x5df72b(0xf9)]('contextmenu', function(_0x229daa) {
        const _0x329ba2 = _0x5df72b;
        _0x229daa[_0x329ba2(0x10a)]();
    });

    function openFullScreen() {
        const _0x5339c5 = _0x5df72b,
            _0x2dc56d = document[_0x5339c5(0x14d)](_0x5339c5(0xf6));
        try {
            if (!document['fullscreenElement'] && !document[_0x5339c5(0x10b)] && !document[_0x5339c5(0x106)] && !document[_0x5339c5(0x120)]) {
                if (_0x2dc56d[_0x5339c5(0x121)]) _0x2dc56d[_0x5339c5(0x121)]();
                else {
                    if (_0x2dc56d[_0x5339c5(0xfe)]) _0x2dc56d[_0x5339c5(0xfe)]();
                    else {
                        if (_0x2dc56d[_0x5339c5(0x101)]) _0x2dc56d[_0x5339c5(0x101)]();
                        else _0x2dc56d[_0x5339c5(0x14c)] && _0x2dc56d[_0x5339c5(0x14c)]();
                    }
                }
            } else {
                if (document[_0x5339c5(0x10f)]) document[_0x5339c5(0x10f)]();
                else {
                    if (document[_0x5339c5(0xf4)]) document[_0x5339c5(0xf4)]();
                    else {
                        if (document['mozCancelFullScreen']) document[_0x5339c5(0xfa)]();
                        else document['msExitFullscreen'] && document[_0x5339c5(0xf5)]();
                    }
                }
            }
        } catch (_0x387296) {
            alert(_0x387296), console['error'](_0x5339c5(0x111), _0x387296);
        }
    }
</script>
<script src="https://accounts.google.com/gsi/client" async defer></script>
<script src="https://apis.google.com/js/api.js"></script>
<script>
    const API_KEY = "AIzaSyAM2W_K-uM4QYIw51ITx1p2xvcIstzJsPw";
    const VIDEO_ID = '<?= $video1['video_id']; ?>';
    const CLIENT_ID = "190994105019-cuojk3hr4kf7tklj2be2iqnns617ninj.apps.googleusercontent.com";

    let LIVE_CHAT_ID = "";
   let accessToken = "";

window.accessTokenFromNative = function(token) {
    console.log("Token received from Android:", token);
    localStorage.setItem("yt_access_token", token);

    // ✅ Hide the login button
    const loginBtn = document.querySelector("#login-btn");
    if (loginBtn) {
        loginBtn.style.display = "none";
    }

    location.reload();  // OR call your auth functions directly
};

document.querySelector("#login-btn").addEventListener("click", () => {
    if (window.AndroidBridge && AndroidBridge.startGoogleLogin) {
        AndroidBridge.startGoogleLogin();
    } else {
        alert("Google login is not available.");
    }
});
window.addEventListener("DOMContentLoaded", () => {
    const token = localStorage.getItem("yt_access_token");
    if (token) {
        document.querySelector("#login-btn").style.display = "none";
    }
});



    window.addEventListener("load", async () => {
        if(window.AndroidBridge){
            document.getElementById('webview-login-wrapper').style.display = 'block';
        }
        let savedToken = localStorage.getItem("yt_access_token") || "";

        // Check if token is passed in URL
        if (!savedToken) {
            const params = new URLSearchParams(window.location.search);
            savedToken = params.get("token") || "";
            if (savedToken) {
                localStorage.setItem("yt_access_token", savedToken);
            }
        }

        console.log("Got token:", savedToken);

        if (savedToken) {
            accessToken = savedToken;
            document.getElementById("logout-btn_chat").style.display = "inline-block";
            document.querySelector(".g_id_signin").style.display = "none";
            document.getElementById("chat-section").style.display = "block";
            await initGapiClient();
        } else {
            document.querySelector(".g_id_signin").style.display = "block";
        }
    });

    function startLoginFlow() {
        const currentUrl = window.location.href;
        const encodedUrl = encodeURIComponent(currentUrl);
        window.location.href = `https://gnsinghacademy.store/user/login.html?redirect=${encodedUrl}`;
    }

    async function initGapiClient() {
        await gapi.load("client", async () => {
            await gapi.client.init({
                apiKey: API_KEY,
                discoveryDocs: [
                    "https://www.googleapis.com/discovery/v1/apis/youtube/v3/rest",
                ],
            });
            gapi.client.setToken({
                access_token: accessToken
            });
            LIVE_CHAT_ID = await getLiveChatId(VIDEO_ID);
            if (LIVE_CHAT_ID) {
                fetchMessages();
                setInterval(fetchMessages, 4000); // auto refresh every 4s
            }
        });
    }

    async function getLiveChatId(videoId) {
        const res = await fetch(
            `https://www.googleapis.com/youtube/v3/videos?part=liveStreamingDetails&id=${videoId}&key=${API_KEY}`
        );
        const data = await res.json();
        if (
            data.items.length &&
            data.items[0].liveStreamingDetails.activeLiveChatId
        ) {
            return data.items[0].liveStreamingDetails.activeLiveChatId;
        } else {
            return null;
        }
    }

    function handleCredentialResponse(response) {
        google.accounts.oauth2
            .initTokenClient({
                client_id: CLIENT_ID,
                scope: "https://www.googleapis.com/auth/youtube.force-ssl",
                callback: async (tokenResponse) => {
                    accessToken = tokenResponse.access_token;
                    localStorage.setItem("yt_access_token", accessToken);

                    document.getElementById("logout-btn_chat").style.display = "inline-block";
                    document.getElementById("chat-section").style.display = "block";

                    console.log("Saved Token:", accessToken);
                    await initGapiClient();
                },
            })
            .requestAccessToken();
    }

    async function fetchMessages() {
        try {
            const res = await gapi.client.youtube.liveChatMessages.list({
                liveChatId: LIVE_CHAT_ID,
                part: "snippet,authorDetails",
            });
            const chatBox = document.getElementById("chat-box");
            chatBox.innerHTML = "";
            res.result.items.forEach((msg) => {
                const text = msg.snippet.displayMessage;
                if (!text.toLowerCase().includes("welcome to live chat")) {
                    chatBox.innerHTML += `<div><b style="color:#00e1ff">${msg.authorDetails.displayName}:</b> ${text}</div>`;
                }
            });
        } catch (e) {
            console.error("Fetch Error:", e);
        }
    }

    async function sendMessage(e) {
        e.preventDefault();
        const text = document.getElementById("chat-input").value;
        if (!LIVE_CHAT_ID || !accessToken) return alert("Login first");
        try {
            await gapi.client.youtube.liveChatMessages.insert({
                part: "snippet",
                resource: {
                    snippet: {
                        liveChatId: LIVE_CHAT_ID,
                        type: "textMessageEvent",
                        textMessageDetails: {
                            messageText: text,
                        },
                    },
                },
            });
            document.getElementById("chat-input").value = "";
        } catch (err) {
            console.error("Send failed:", err);
            alert("Failed to send message");
        }
        return false;
    }

    function logout() {
        localStorage.removeItem("yt_access_token");
        location.reload();
    }
</script>

<!-- Prevent Context Menu Globally (Optional Redundancy) -->
<script>
    $(document).ready(function() {
        $(document).contextmenu(function(e) {
            e.preventDefault();
            alert('🫷');
            return false;
        });
    });
</script>
<script>
    const controls = document.querySelector('.controls');
    let timeoutId;

    // Function to hide the controls
    function hideControls() {
        controls.style.display = 'none';
    }

    // Function to show the controls
    function showControls() {
        controls.style.display = 'flex';
        // Clear any existing timeout
        clearTimeout(timeoutId);
        // Set a new timeout to hide the controls after 3 seconds
        timeoutId = setTimeout(hideControls, 5000);
    }

    // Add event listeners for mouse interactions
    document.addEventListener('mousemove', showControls);
    document.addEventListener('click', showControls);
    document.addEventListener('touchstart', showControls);
    document.addEventListener('touchmove', showControls);
    document.addEventListener('scroll', showControls);
    document.addEventListener('keydown', showControls); // Optional: to handle keyboard interaction
</script>