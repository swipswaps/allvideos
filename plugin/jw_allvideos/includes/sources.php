<?php
/**
 * @version    4.8.0
 * @package    AllVideos (plugin)
 * @author     JoomlaWorks - http://www.joomlaworks.net
 * @copyright  Copyright (c) 2006 - 2017 JoomlaWorks Ltd. All rights reserved.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

/* -------------------------------- Clappr embed templates -------------------------------- */
$clapprEmbed = "
<div id=\"avID_{SOURCEID}\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" title=\"JoomlaWorks AllVideos Player\"></div>
<script type=\"text/javascript\">
    var player = new Clappr.Player({
        source: '{SITEURL}/{FOLDER}/{SOURCE}.{FILE_EXT}',
        poster: '{PLAYER_POSTER_FRAME}',
        height: '{HEIGHT}',
        width: '{WIDTH}',
        autoPlay: {PLAYER_AUTOPLAY},
        loop: {PLAYER_LOOP},
        //hideMediaControl: {JWPLAYER_CONTROLS},
        parentId: '#avID_{SOURCEID}'
    });
</script>
";

$clapprEmbedRemote = "
<div id=\"avID_{SOURCEID}\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" title=\"JoomlaWorks AllVideos Player\"></div>
<script type=\"text/javascript\">
    var player = new Clappr.Player({
        source: '{SOURCE}',
        poster: '{PLAYER_POSTER_FRAME_REMOTE}',
        height: '{HEIGHT}',
        width: '{WIDTH}',
        autoPlay: {PLAYER_AUTOPLAY},
        loop: {PLAYER_LOOP},
        //hideMediaControl: {JWPLAYER_CONTROLS},
        parentId: '#avID_{SOURCEID}'
    });
</script>
";

/* -------------------------------- JW Player embed templates -------------------------------- */
$jwPlayerEmbed = "
<div id=\"avID_{SOURCEID}\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" title=\"JoomlaWorks AllVideos Player\"></div>
<script type=\"text/javascript\">
    jwplayer('avID_{SOURCEID}').setup({
        'file': '{SITEURL}/{FOLDER}/{SOURCE}.{FILE_EXT}',
        'image': '{PLAYER_POSTER_FRAME}',
        'height': '{HEIGHT}',
        'width': '{WIDTH}',
        'autostart': '{PLAYER_AUTOPLAY}',
        'repeat': '{PLAYER_LOOP}',
        'controls': '{JWPLAYER_CONTROLS}'
    });
</script>
";

$jwPlayerEmbedRemote = "
<div id=\"avID_{SOURCEID}\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" title=\"JoomlaWorks AllVideos Player\"></div>
<script type=\"text/javascript\">
    jwplayer('avID_{SOURCEID}').setup({
        'file': '{SOURCE}',
        'image': '{PLAYER_POSTER_FRAME_REMOTE}',
        'height': '{HEIGHT}',
        'width': '{WIDTH}',
        'type': '{FILE_TYPE}',
        'autostart': '{PLAYER_AUTOPLAY}',
        'repeat': '{PLAYER_LOOP}',
        'controls': '{JWPLAYER_CONTROLS}'
    });
</script>
";

/* -------------------------------- Embed templates for Quicktime Media -------------------------------- */
$qtEmbed = "
<script type=\"text/javascript\">
    QT_WriteOBJECT_XHTML('{SITEURL}/{FOLDER}/{SOURCE}.{FILE_EXT}', '{WIDTH}', '{HEIGHT}', '', 'autoplay', '{PLAYER_AUTOPLAY}', 'loop', '{PLAYER_LOOP}', 'bgcolor', '{PLAYER_BACKGROUNDQT}', 'scale', 'aspect', 'wmode', 'transparent', 'title', 'JoomlaWorks AllVideos Player');
</script>
";

$qtEmbedRemote = "
<script type=\"text/javascript\">
    QT_WriteOBJECT_XHTML('{SOURCE}', '{WIDTH}', '{HEIGHT}', '', 'autoplay', '{PLAYER_AUTOPLAY}', 'loop', '{PLAYER_LOOP}', 'bgcolor', '{PLAYER_BACKGROUNDQT}', 'scale', 'aspect', 'wmode', 'transparent', 'title', 'JoomlaWorks AllVideos Player');
</script>
";

/* -------------------------------- Embed templates for Windows Media -------------------------------- */
$wmEmbed = "
<div id=\"avID_{SOURCEID}\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" title=\"JoomlaWorks AllVideos Player\"></div>
<script type=\"text/javascript\">
    var cnt = document.getElementById('avID_{SOURCEID}');
    var src = '{PLUGIN_PATH}/includes/js/wmvplayer/wmvplayer.xaml';
    var cfg = {
        'file': '{SITEURL}/{FOLDER}/{SOURCE}.{FILE_EXT}',
        'image': '{PLAYER_POSTER_FRAME}',
        'width': '{WIDTH}',
        'height': '{HEIGHT}',
        'autostart': '{PLAYER_AUTOPLAY}',
        'repeat': '{PLAYER_LOOP}'
    };
    var ply = new jeroenwijering.Player(cnt,src,cfg);
</script>
";

$wmEmbedRemote = "
<div id=\"avID_{SOURCEID}\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" title=\"JoomlaWorks AllVideos Player\"></div>
<script type=\"text/javascript\">
    var cnt = document.getElementById('avID_{SOURCEID}');
    var src = '{PLUGIN_PATH}/includes/js/wmvplayer/wmvplayer.xaml';
    var cfg = {
        'file': '{SOURCE}',
        'width': '{WIDTH}',
        'height': '{HEIGHT}',
        'autostart': '{PLAYER_AUTOPLAY}',
        'repeat': '{PLAYER_LOOP}'
    };
    var ply = new jeroenwijering.Player(cnt,src,cfg);
</script>
";



/* -------------------------------- Tags & formats -------------------------------- */
$tagReplace = array(

/* --- Audio/Video formats --- */

/* JW Player compatible media */
"3gp"           => $jwPlayerEmbed,
"3gpremote"     => $jwPlayerEmbedRemote,
"3g2"           => $jwPlayerEmbed,
"3g2remote"     => $jwPlayerEmbedRemote,

"mp4"           => $clapprEmbed,
"mp4remote"     => $clapprEmbedRemote,
"m4v"           => $jwPlayerEmbed,
"m4vremote"     => $jwPlayerEmbedRemote,
"mkv"           => $jwPlayerEmbed,
"mkvremote"     => $jwPlayerEmbedRemote,
"webm"          => $clapprEmbed,
"webmremote"    => $clapprEmbedRemote,

"ogv"           => $jwPlayerEmbed,
"ogvremote"     => $jwPlayerEmbedRemote,

"flv"           => $jwPlayerEmbed,
"flvremote"     => $jwPlayerEmbedRemote,
"f4v"           => $jwPlayerEmbed,
"f4vremote"     => $jwPlayerEmbedRemote,

"mp3"           => $clapprEmbed,
"mp3remote"     => $clapprEmbedRemote,
"aac"           => $jwPlayerEmbed,
"aacremote"     => $jwPlayerEmbedRemote,
"m4a"           => $jwPlayerEmbed,
"m4aremote"     => $jwPlayerEmbedRemote,
"ogg"           => $jwPlayerEmbed,
"oggremote"     => $jwPlayerEmbedRemote,
"oga"           => $jwPlayerEmbed,
"ogaremote"     => $jwPlayerEmbedRemote,

/* Quicktime */
"mov"           => $qtEmbed,
"movremote"     => $qtEmbedRemote,
"mpeg"          => $qtEmbed,
"mpegremote"    => $qtEmbedRemote,
"mpg"           => $qtEmbed,
"mpgremote"     => $qtEmbedRemote,
"avi"           => $qtEmbed,
"aviremote"     => $qtEmbedRemote,

/* Windows Media */
"wmv"           => $wmEmbed,
"wma"           => $wmEmbed,
"wmvremote"     => $wmEmbedRemote,
"wmaremote"     => $wmEmbedRemote,

/* DivX */
"divx" => "
<object type=\"video/divx\" data=\"{SITEURL}/{FOLDER}/{SOURCE}.divx\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" title=\"JoomlaWorks AllVideos Player\">
    <param name=\"type\" value=\"video/divx\" />
    <param name=\"src\" value=\"{SITEURL}/{FOLDER}/{SOURCE}.divx\" />
    <param name=\"data\" value=\"{SITEURL}/{FOLDER}/{SOURCE}.divx\" />
    <param name=\"codebase\" value=\"{SITEURL}/{FOLDER}/{SOURCE}.divx\" />
    <param name=\"url\" value=\"{SITEURL}/{FOLDER}/{SOURCE}.divx\" />
    <param name=\"mode\" value=\"full\" />
    <param name=\"pluginspage\" value=\"http://go.divx.com/plugin/download/\" />
    <param name=\"allowContextMenu\" value=\"true\" />
    <param name=\"previewImage\" value=\"{SITEURL}/{FOLDER}/{SOURCE}.jpg\" />
    <param name=\"autoPlay\" value=\"{PLAYER_AUTOPLAY}\" />
    <param name=\"loop\" value=\"{PLAYER_LOOP}\" />
    <param name=\"minVersion\" value=\"1.0.0\" />
    <param name=\"custommode\" value=\"none\" />
    <p>No video? Get the DivX browser plug-in for <a href=\"http://download.divx.com/player/DivXWebPlayerInstaller.exe\">Windows</a> or <a href=\"http://download.divx.com/player/DivXWebPlayer.dmg\">Mac</a></p>
</object>
",

"divxremote" => "
<object type=\"video/divx\" data=\"{SOURCE}\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" title=\"JoomlaWorks AllVideos Player\">
    <param name=\"type\" value=\"video/divx\" />
    <param name=\"src\" value=\"{SOURCE}\" />
    <param name=\"data\" value=\"{SOURCE}\" />
    <param name=\"codebase\" value=\"{SOURCE}\" />
    <param name=\"url\" value=\"{SOURCE}\" />
    <param name=\"mode\" value=\"full\" />
    <param name=\"pluginspage\" value=\"http://go.divx.com/plugin/download/\" />
    <param name=\"allowContextMenu\" value=\"true\" />
    <param name=\"previewImage\" value=\"\" />
    <param name=\"autoPlay\" value=\"{PLAYER_AUTOPLAY}\" />
    <param name=\"loop\" value=\"{PLAYER_LOOP}\" />
    <param name=\"minVersion\" value=\"1.0.0\" />
    <param name=\"custommode\" value=\"none\" />
    <p>No video? Get the DivX browser plug-in for <a href=\"http://download.divx.com/player/DivXWebPlayerInstaller.exe\">Windows</a> or <a href=\"http://download.divx.com/player/DivXWebPlayer.dmg\">Mac</a></p>
</object>
",

/* SWF */
"swf" => "
<object type=\"application/x-shockwave-flash\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" data=\"{SITEURL}/{FOLDER}/{SOURCE}.swf\">
    <param name=\"movie\" value=\"{SITEURL}/{FOLDER}/{SOURCE}.swf\" />
    <param name=\"quality\" value=\"high\" />
    <param name=\"wmode\" value=\"{PLAYER_TRANSPARENCY}\" />
    <param name=\"bgcolor\" value=\"{PLAYER_BACKGROUND}\" />
    <param name=\"autoplay\" value=\"{PLAYER_AUTOPLAY}\" />
    <param name=\"loop\" value=\"{PLAYER_LOOP}\" />
</object>
",

"swfremote" => "
<object type=\"application/x-shockwave-flash\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" data=\"{SOURCE}\">
    <param name=\"movie\" value=\"{SOURCE}\" />
    <param name=\"quality\" value=\"high\" />
    <param name=\"wmode\" value=\"{PLAYER_TRANSPARENCY}\" />
    <param name=\"bgcolor\" value=\"{PLAYER_BACKGROUND}\" />
    <param name=\"autoplay\" value=\"{PLAYER_AUTOPLAY}\" />
    <param name=\"loop\" value=\"{PLAYER_LOOP}\" />
</object>
",



/* --- Major 3rd party video providers --- */

// dailymotion.com - http://www.dailymotion.com/featured/video/x35714_cap-nord-projet-1_creation
"Dailymotion" => "<iframe src=\"https://www.dailymotion.com/embed/video/{SOURCE}\" width=\"{WIDTH}\" height=\"{HEIGHT}\" frameborder=\"0\" allowfullscreen title=\"JoomlaWorks AllVideos Player\"></iframe>",

// facebook.com - https://www.facebook.com/Channel4News/videos/10155042102006939/
"Facebook" => "<iframe src=\"https://www.facebook.com/plugins/video.php?href={SOURCE}&show_text=0&width={WIDTH}\" width=\"{WIDTH}\" height=\"{HEIGHT}\" style=\"border:none;overflow:hidden;\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\" title=\"JoomlaWorks AllVideos Player\"></iframe>",

// soundcloud.com - https://soundcloud.com/sebastien-tellier/look
"SoundCloud" => "
<script type=\"text/javascript\">
    allvideos.ready(function(){
        allvideos.embed({
            'url': 'https://soundcloud.com/oembed?format=js&iframe=true&callback=soundcloud{SOURCEID}&auto_play={PLAYER_AUTOPLAY}&maxwidth={WIDTH}&url={SOURCE}',
            'callback': 'soundcloud{SOURCEID}',
            'playerID': 'avID_{SOURCEID}'
        });
    });
</script>
<div id=\"avID_{SOURCEID}\" title=\"JoomlaWorks AllVideos Player\">&nbsp;</div>
",

// vimeo.com - http://www.vimeo.com/1319796
"Vimeo" => "<iframe src=\"https://player.vimeo.com/video/{SOURCE}\" width=\"{WIDTH}\" height=\"{HEIGHT}\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen title=\"JoomlaWorks AllVideos Player\"></iframe>",

// vine.co - https://vine.co/v/hr9OQTHJYPj
"Vine" => "<iframe src=\"{SOURCE}/embed/simple?audio=1\" width=\"{WIDTH}\" height=\"{HEIGHT}\" frameborder=\"0\" title=\"JoomlaWorks AllVideos Player\"></iframe>",

// youtube.com - http://www.youtube.com/watch?v=g5lGNkS5TE0 or https://www.youtube.com/playlist?list=PL0875C16C899A8DE6
"YouTube" => "<iframe src=\"https://www.youtube.com/embed/{SOURCE}\" width=\"{WIDTH}\" height=\"{HEIGHT}\" frameborder=\"0\" allowfullscreen title=\"JoomlaWorks AllVideos Player\"></iframe>",



/* --- Other 3rd party video providers --- */
// 123video.nl - http://www.123video.nl/playvideos.asp?MovieID=248020
"123video" => "
<object type=\"application/x-shockwave-flash\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" data=\"http://www.123video.nl/123video_emb.swf?mediaSrc={SOURCE}\" title=\"JoomlaWorks AllVideos Player\">
    <param name=\"movie\" value=\"http://www.123video.nl/123video_emb.swf?mediaSrc={SOURCE}\" />
    <param name=\"quality\" value=\"high\" />
    <param name=\"wmode\" value=\"{PLAYER_TRANSPARENCY}\" />
    <param name=\"bgcolor\" value=\"{PLAYER_BACKGROUND}\" />
    <param name=\"autoplay\" value=\"{PLAYER_AUTOPLAY}\" />
    <param name=\"loop\" value=\"{PLAYER_LOOP}\" />
</object>
",

// aniboom.com - http://www.aniboom.com/video/28604/Kashe-Li-Its-Hard/
"Aniboom" => "
<object type=\"application/x-shockwave-flash\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" data=\"http://api.aniboom.com/e/{SOURCE}\" title=\"JoomlaWorks AllVideos Player\">
    <param name=\"movie\" value=\"http://api.aniboom.com/e/{SOURCE}\" />
    <param name=\"quality\" value=\"high\" />
    <param name=\"wmode\" value=\"{PLAYER_TRANSPARENCY}\" />
    <param name=\"bgcolor\" value=\"{PLAYER_BACKGROUND}\" />
    <param name=\"autoplay\" value=\"{PLAYER_AUTOPLAY}\" />
    <param name=\"loop\" value=\"{PLAYER_LOOP}\" />
    <param name=\"allowscriptaccess\" value=\"sameDomain\" />
</object>
",

// blip.tv - http://blip.tv/joomlaworks/k2-for-joomla-dec-2010-4565453
"Blip" => "
<script type=\"text/javascript\">
    allvideos.ready(function(){
        allvideos.embed({
            'url': 'https://blip.tv/oembed/?callback=bliptv{SOURCEID}&maxwidth={WIDTH}&maxheight={HEIGHT}&url={SOURCE}',
            'callback': 'bliptv{SOURCEID}',
            'playerID': 'avID_{SOURCEID}'
        });
    });
</script>
<div id=\"avID_{SOURCEID}\" title=\"JoomlaWorks AllVideos Player\">&nbsp;</div>
",

// collegehumor.com - http://www.collegehumor.com/video/6961115/should-we-do-a-bitcoin-sketch
"CollegeHumor" => "<iframe src=\"http://www.collegehumor.com/e/{SOURCE}\" width=\"{WIDTH}\" height=\"{HEIGHT}\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen title=\"JoomlaWorks AllVideos Player\"></iframe>",

// dotsub.com - http://dotsub.com/view/9518104c-aa15-4646-9a39-a789e5586cdb
"Dotsub" => "
<object type=\"application/x-shockwave-flash\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" data=\"http://dotsub.com/static/players/portalplayer.swf?v=3407\" title=\"JoomlaWorks AllVideos Player\">
    <param name=\"movie\" value=\"http://dotsub.com/static/players/portalplayer.swf?v=3407\" />
    <param name=\"quality\" value=\"high\" />
    <param name=\"wmode\" value=\"{PLAYER_TRANSPARENCY}\" />
    <param name=\"bgcolor\" value=\"{PLAYER_BACKGROUND}\" />
    <param name=\"autoplay\" value=\"{PLAYER_AUTOPLAY}\" />
    <param name=\"loop\" value=\"{PLAYER_LOOP}\" />
    <param name=\"allowfullscreen\" value=\"true\" />
    <param name=\"allowscriptaccess\" value=\"always\" />
    <param name=\"flashvars\" value=\"type=flv&plugins=dotsub&debug=none&tid=UA-3684979-1&uuid={SOURCE}&lang=eng\" />
</object>
",

// flickr.com - https://www.flickr.com/photos/bswise/5930051523/in/pool-726923@N23/
"Flickr" => "
<object type=\"application/x-shockwave-flash\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" data=\"https://www.flickr.com/apps/video/stewart.swf?v=109786\" title=\"JoomlaWorks AllVideos Player\">
    <param name=\"movie\" value=\"https://www.flickr.com/apps/video/stewart.swf?v=109786\" />
    <param name=\"quality\" value=\"high\" />
    <param name=\"wmode\" value=\"{PLAYER_TRANSPARENCY}\" />
    <param name=\"bgcolor\" value=\"{PLAYER_BACKGROUND}\" />
    <param name=\"autoplay\" value=\"{PLAYER_AUTOPLAY}\" />
    <param name=\"loop\" value=\"{PLAYER_LOOP}\" />
    <param name=\"allowfullscreen\" value=\"true\" />
    <param name=\"allowscriptaccess\" value=\"always\" />
    <param name=\"flashvars\" value=\"intl_lang=en-us&amp;div_id=stewart_swf{SOURCE}_div&amp;flickr_notracking=true&amp;flickr_target=_self&amp;flickr_h={HEIGHT}&amp;flickr_w={WIDTH}&amp;flickr_no_logo=true&amp;onsite=true&amp;flickr_noAutoPlay=false&amp;in_photo_gne=true&amp;photo_secret=&amp;photo_id={SOURCE}&amp;flickr_doSmall=true\" />
</object>
",

// funnyordie.com - http://www.funnyordie.com/videos/7c52bd0f81/the-pussy-patch-from-lil-jon
"FunnyOrDie" => "<iframe src=\"http://www.funnyordie.com/embed/{SOURCE}\" width=\"{WIDTH}\" height=\"{HEIGHT}\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen title=\"JoomlaWorks AllVideos Player\"></iframe>",

// gametrailers.com - http://www.gametrailers.com/video/downloadable-content-soul-calibur/41925
"GameTrailers" => "
<object type=\"application/x-shockwave-flash\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" data=\"http://media.mtvnservices.com/mgid:moses:video:gametrailers.com:{SOURCE}\" title=\"JoomlaWorks AllVideos Player\">
    <param name=\"movie\" value=\"http://media.mtvnservices.com/mgid:moses:video:gametrailers.com:{SOURCE}\" />
    <param name=\"quality\" value=\"high\" />
    <param name=\"wmode\" value=\"{PLAYER_TRANSPARENCY}\" />
    <param name=\"bgcolor\" value=\"{PLAYER_BACKGROUND}\" />
    <param name=\"autoplay\" value=\"{PLAYER_AUTOPLAY}\" />
    <param name=\"loop\" value=\"{PLAYER_LOOP}\" />
    <param name=\"allowfullscreen\" value=\"true\" />
    <param name=\"allowscriptaccess\" value=\"sameDomain\" />
    <param name=\"base\" value=\".\" />
    <param name=\"flashvars\" value=\"\" />
</object>
",

// gloria.tv - http://gloria.tv/?media=509392
"Gloria" => "<iframe src=\"http://gloria.tv/?embed=frame&amp;media={SOURCE}&amp;width={WIDTH}&amp;height={HEIGHT}\" width=\"{WIDTH}\" height=\"{HEIGHT}\" frameborder=\"0\" scrolling=\"no\" allowfullscreen title=\"JoomlaWorks AllVideos Player\"></iframe>",

// goal4replay.net - http://www.goal4replay.net/VideoWatchF.asp?ID=56215&Ln=En
"goal4replay" => "
<object type=\"application/x-shockwave-flash\" style=\"width:{VWIDTH}px;height:{VHEIGHT}px;\" data=\"http://www.goal4replay.net/videoEmbedLa.swf?ID={AVSOURCE}&amp;MediaID=1\">
    <param name=\"movie\" value=\"http://www.goal4replay.net/videoEmbedLa.swf?ID={AVSOURCE}&amp;MediaID=1\" />
    <param name=\"quality\" value=\"high\" />
    <param name=\"wmode\" value=\"{PLAYER_TRANSPARENCY}\" />
    <param name=\"bgcolor\" value=\"{PLAYER_BACKGROUND}\" />
    <param name=\"autoplay\" value=\"{PLAYER_AUTOPLAY}\" />
    <param name=\"loop\" value=\"{PLAYER_LOOP}\" />
    <param name=\"allowfullscreen\" value=\"true\" />
    <param name=\"allowscriptaccess\" value=\"always\" />
</object>
",

// godtube.com - http://www.godtube.com/watch/?v=FJ219MNU
"GodTube" => "
<object type=\"application/x-shockwave-flash\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" data=\"http://media.salemwebnetwork.com/godtube/resource/mediaplayer/5.6/player.swf\" title=\"JoomlaWorks AllVideos Player\">
    <param name=\"movie\" value=\"http://media.salemwebnetwork.com/godtube/resource/mediaplayer/5.6/player.swf\" />
    <param name=\"quality\" value=\"high\" />
    <param name=\"wmode\" value=\"{PLAYER_TRANSPARENCY}\" />
    <param name=\"bgcolor\" value=\"{PLAYER_BACKGROUND}\" />
    <param name=\"autoplay\" value=\"{PLAYER_AUTOPLAY}\" />
    <param name=\"loop\" value=\"{PLAYER_LOOP}\" />
    <param name=\"allowfullscreen\" value=\"true\" />
    <param name=\"allowscriptaccess\" value=\"always\" />
    <param name=\"flashvars\" value=\"file=http://www.godtube.com/resource/mediaplayer/{SOURCE}.file&image=http://www.godtube.com/resource/mediaplayer/{SOURCE}.jpg&screencolor=000000&type=video&autostart={PLAYER_AUTOPLAY}&playonce=true&skin=http://media.salemwebnetwork.com/godtube/resource/mediaplayer/skin/default/videoskin.swf&logo.file=undefinedtheme/default/media/embed-logo.png&logo.link=http://www.godtube.com/watch/%3Fv%3D{SOURCE}&logo.position=top-left&logo.hide=false&controlbar.position=over\" />
</object>
",

// grindtv.com - http://www.grindtv.com/outdoor/video/snowmobile_riding_in_labrador/#60513
"GrindTV" => "
<object type=\"application/x-shockwave-flash\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" data=\"http://static.grindtv.com/player/optics.swf?sa=1&si=1&i={SOURCE}\" title=\"JoomlaWorks AllVideos Player\">
    <param name=\"movie\" value=\"http://static.grindtv.com/player/optics.swf?sa=1&si=1&i={SOURCE}\" />
    <param name=\"quality\" value=\"high\" />
    <param name=\"wmode\" value=\"{PLAYER_TRANSPARENCY}\" />
    <param name=\"bgcolor\" value=\"{PLAYER_BACKGROUND}\" />
    <param name=\"autoplay\" value=\"{PLAYER_AUTOPLAY}\" />
    <param name=\"loop\" value=\"{PLAYER_LOOP}\" />
    <param name=\"allowfullscreen\" value=\"true\" />
    <param name=\"allowscriptaccess\" value=\"always\" />
</object>
",

// kewego.com - http://www.kewego.com/video/iLyROoafYcaT.html
"Kewego" => "
<object type=\"application/x-shockwave-flash\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" data=\"http://sll.kewego.com/swf/kp.swf\" title=\"JoomlaWorks AllVideos Player\" name=\"kplayer_{SOURCE}\" id=\"kplayer_{SOURCE}\">
    <param name=\"bgcolor\" value=\"{PLAYER_BACKGROUND}\" />
    <param name=\"allowfullscreen\" value=\"true\" />
    <param name=\"allowscriptaccess\" value=\"always\" />
    <param name=\"flashVars\" value=\"language_code=en&playerKey=902e0deec887&configKey=&suffix=&sig={SOURCE}&autostart={PLAYER_AUTOPLAY}\" />
    <param name=\"movie\" value=\"http://sll.kewego.com/swf/kp.swf\" />
    <param name=\"wmode\" value=\"{PLAYER_TRANSPARENCY}\" />
    <param name=\"autoplay\" value=\"{PLAYER_AUTOPLAY}\" />
    <param name=\"loop\" value=\"{PLAYER_LOOP}\" />
    <video id=\"kewego_HTML5_{SOURCE}\" poster=\"http://api.kewego.com/video/getHTML5Thumbnail/?playerKey=902e0deec887&amp;sig={SOURCE}\" controls=\"true\" height=\"{HEIGHT}\" width=\"{WIDTH}\" preload=\"none\">
        <source src=\"http://api.kewego.com/video/getHTML5Stream/?playerKey=902e0deec887&amp;sig={SOURCE}\" type=\"video/mp4\" width=\"{WIDTH}\" height=\"{HEIGHT}\" />
    </video>
</object>
",

// ku6.com (China) - http://ku6.com/2017/detail.html?vid=MY8_sA92OcjFb4EezXaFZQ
"Ku6" => $clapprEmbedRemote,

// liveleak.com - https://www.liveleak.com/view?i=ea0_1506997861
"LiveLeak" => "<iframe src=\"https://www.liveleak.com/ll_embed?i={SOURCE}\" width=\"{WIDTH}\" height=\"{HEIGHT}\" frameborder=\"0\" scrolling=\"no\" title=\"JoomlaWorks AllVideos Player\"></iframe>",

// metacafe.com - http://www.metacafe.com/watch/11498826/amazing-girl-pours-rainbow-shots/
"Metacafe" => "<iframe width=\"{WIDTH}\" height=\"{HEIGHT}\" src=\"{SOURCE}\" frameborder=\"0\" allowFullScreen=\"true\" title=\"JoomlaWorks AllVideos Player\"></iframe>",

// myspace.com - https://myspace.com/myspace/video/the-pedicab-interviews-chris-cole/109546118
"Myspace" => "<iframe src=\"//media.myspace.com/play/video/{SOURCE}\" width=\"{WIDTH}\" height=\"{HEIGHT}\" frameborder=\"0\" scrolling=\"no\" title=\"JoomlaWorks AllVideos Player\"></iframe>",

// myvideo.de - http://www.myvideo.de/musik/christina-stuermer/wir-leben-den-moment-video-m-7713020 OR http://www.myvideo.de/watch/8198664/Der_komplette_Tanz_zum_Song
"MyVideo" => "<iframe src=\"http://www.myvideo.de/embed/{SOURCE}\" width=\"{WIDTH}\" height=\"{HEIGHT}\" frameborder=\"0\" scrolling=\"no\" allowfullscreen title=\"JoomlaWorks AllVideos Player\"></iframe>",

// sapo.pt - http://videos.sapo.pt/34NipYH7bWgUzc3pZgwo
"SAPO" => "<iframe src=\"http://videos.sapo.pt/playhtml?file=http://rd3.videos.sapo.pt/{SOURCE}/mov/1\" frameborder=\"0\" scrolling=\"no\" width=\"{WIDTH}\" height=\"{HEIGHT}\" title=\"JoomlaWorks AllVideos Player\"></iframe>",

// screenr.com - http://www.screenr.com/LQ2s
"Screenr" => "<iframe src=\"http://www.screenr.com/embed/{SOURCE}\" frameborder=\"0\" width=\"{WIDTH}\" height=\"{HEIGHT}\" title=\"JoomlaWorks AllVideos Player\"></iframe>",

// sevenload.com - http://www.sevenload.com/videos/mausepingel-par-excellence-512b6a3e32b0c28c5500035b
"Sevenload" => "<iframe src=\"http://embed.sevenload.com/widgets/singlePlayer/{SOURCE}/?autoplay={PLAYER_AUTOPLAY}&env=slcom-ext\" width=\"{WIDTH}\" height=\"{HEIGHT}\" title=\"JoomlaWorks AllVideos Player\" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>",

// sohu.com (China) - http://my.tv.sohu.com/us/16361148/6854750.shtml
"Sohu" => "
<object type=\"application/x-shockwave-flash\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" data=\"http://share.vrs.sohu.com/my/v.swf&id={SOURCE}&topBar=1&autoplay={PLAYER_AUTOPLAY}\" title=\"JoomlaWorks AllVideos Player\">
    <param name=\"movie\" value=\"http://share.vrs.sohu.com/my/v.swf&id={SOURCE}&topBar=1&autoplay={PLAYER_AUTOPLAY}\" />
    <param name=\"quality\" value=\"high\" />
    <param name=\"wmode\" value=\"{PLAYER_TRANSPARENCY}\" />
    <param name=\"bgcolor\" value=\"{PLAYER_BACKGROUND}\" />
    <param name=\"autoplay\" value=\"{PLAYER_AUTOPLAY}\" />
    <param name=\"loop\" value=\"{PLAYER_LOOP}\" />
    <param name=\"allowfullscreen\" value=\"true\" />
    <param name=\"allowscriptaccess\" value=\"Always\" />
</object>
",

// twitch.tv - https://go.twitch.tv/rom_bik (channel) or https://www.twitch.tv/videos/179343513 (video)
"Twitch" => "<iframe src=\"https://player.twitch.tv/?{SOURCE}&autoplay=false\" width=\"{WIDTH}\" height=\"{HEIGHT}\" frameborder=\"0\" scrolling=\"no\" title=\"JoomlaWorks AllVideos Player\"></iframe>",

// tudou.com - http://video.tudou.com/v/XMzA1NzY5NzM2NA==.html?spm=a2h28.8313475.c1.dimg13
"tudou" => "
<object type=\"application/x-shockwave-flash\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" data=\"http://www.tudou.com/v/{SOURCE}\" title=\"JoomlaWorks AllVideos Player\">
    <param name=\"movie\" value=\"http://www.tudou.com/v/{SOURCE}\" />
    <param name=\"quality\" value=\"high\" />
    <param name=\"wmode\" value=\"{PLAYER_TRANSPARENCY}\" />
    <param name=\"bgcolor\" value=\"{PLAYER_BACKGROUND}\" />
    <param name=\"autoplay\" value=\"{PLAYER_AUTOPLAY}\" />
    <param name=\"loop\" value=\"{PLAYER_LOOP}\" />
    <param name=\"allowfullscreen\" value=\"true\" />
    <param name=\"allowscriptaccess\" value=\"always\" />
</object>
",

// ustream.tv - http://www.ustream.tv/recorded/108521696
"Ustream" => "<iframe src=\"https://www.ustream.tv/embed/recorded/{SOURCE}?html5ui\" width=\"{WIDTH}\" height=\"{HEIGHT}\" frameborder=\"0\" scrolling=\"no\" title=\"JoomlaWorks AllVideos Player\"></iframe>",

// vbox7.com - https://www.vbox7.com/play:213e79223b
"VBox7" => "<iframe src=\"https://www.vbox7.com/emb/external.php?vid={SOURCE}\" width=\"{WIDTH}\" height=\"{HEIGHT}\" frameborder=\"0\" scrolling=\"no\" allowfullscreen=\"true\" title=\"JoomlaWorks AllVideos Player\"></iframe>",

// veoh.com - http://www.veoh.com/watch/v21091373cQe4FGa9
"veoh" => "
<object type=\"application/x-shockwave-flash\" style=\"width:{WIDTH}px;height:{HEIGHT}px;\" data=\"http://www.veoh.com/swf/webplayer/WebPlayer.swf?version=&permalinkId={SOURCE}&player=videodetailsembedded&videoAutoPlay={PLAYER_AUTOPLAY}&id=anonymous\" title=\"JoomlaWorks AllVideos Player\">
    <param name=\"movie\" value=\"http://www.veoh.com/swf/webplayer/WebPlayer.swf?version=&permalinkId={SOURCE}&player=videodetailsembedded&videoAutoPlay={PLAYER_AUTOPLAY}&id=anonymous\" />
    <param name=\"quality\" value=\"high\" />
    <param name=\"wmode\" value=\"{PLAYER_TRANSPARENCY}\" />
    <param name=\"bgcolor\" value=\"{PLAYER_BACKGROUND}\" />
    <param name=\"autoplay\" value=\"{PLAYER_AUTOPLAY}\" />
    <param name=\"loop\" value=\"{PLAYER_LOOP}\" />
    <param name=\"allowfullscreen\" value=\"true\" />
    <param name=\"allowscriptaccess\" value=\"always\" />
</object>
",

// videa.hu - http://videa.hu/videok/filmklub/film-animacio/tom-cruise-tancol-kockazatos-uzlet-pmd0e3xAJUEbJird
"Videa" => "<iframe src=\"//videa.hu/player?v={SOURCE}\" width=\"{WIDTH}\" height=\"{HEIGHT}\" frameborder=\"0\" scrolling=\"no\" title=\"JoomlaWorks AllVideos Player\"></iframe>",

// yahoo.com - https://uk.news.yahoo.com/video/catalan-protesters-block-roads-general-114436805.html
"Yahoo" => "<iframe src=\"{SOURCE}?format=embed\" width=\"{WIDTH}\" height=\"{HEIGHT}\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" mozallowfullscreen=\"true\" webkitallowfullscreen=\"true\" allowtransparency=\"true\" title=\"JoomlaWorks AllVideos Player\"></iframe>",

// youku.com (China) - http://v.youku.com/v_show/id_XMzAyNjcxNDkzNg==.html?spm=a2hww.20027244.ykRecommend.5~5!2~5~5~A
"Youku" => "<iframe src=\"https://player.youku.com/embed/{SOURCE}\" width=\"{WIDTH}\" height=\"{HEIGHT}\" frameborder=\"0\" scrolling=\"no\" title=\"JoomlaWorks AllVideos Player\"></iframe>",

// youmaker.com - https://www.youmaker.com/video/722db6ac-1ce4-4beb-7385-9621278e738a
"YouMaker" => "<iframe src=\"https://www.youmaker.com/api/{SOURCE}\" width=\"{WIDTH}\" height=\"{HEIGHT}\" frameborder=\"0\" scrolling=\"no\" title=\"JoomlaWorks AllVideos Player\"></iframe>",

);
