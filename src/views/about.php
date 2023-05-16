<?php

$init    = $deezer_response->duration;
$hours   = floor($init / 3600);
$minutes = floor(($init / 60) % 60);
$seconds = $init % 60;

?>
<section class="about">
    <div class="about_main">
        <img src="assets/img/about_main.jpg" alt="A picture of myself, Edson Pimenta.">
        <div class="about_text">
            <h1>About Me</h1>
            <h5>Fullstack Developer<span> & SEO Analist</span></h5>
            <p>
                Graduating in Cybersecurity (Anhanguera, ending Dec. 2023) and gaining experience
                with personal projects and contributing to Open-Source projects as a Full Stack developer.
                My values are organization, planning and gradual evolution, in order to achieve my goals and
                objectives in an agile, concise and responsible way with a focus on learning.
            </p>
            <a href="https://linktr.ee/eddyxide" target="_blank"><button type="button">Connect with me!</button></a>
        </div>
    </div>
</section>

<hr class="solid">

<section class="deezer_playlist">
    <div class="deezer_playlist_main">
        <div class="deezer_playlist_text">
            <h1><img src="<?php echo $deezer_response->picture_small; ?>" alt="">My playlist</h1>
            <h5><span> <?php echo ucfirst($deezer_response->title); ?> </span>vibes in this sh*t</h5>
            <p>
                Current (almost) daily updated playlist which contains all the tracks I've been listening lately.
                It has already more than a thousand songs and it will keep growing till Dezzer's limit, which is
                two thousand. Hope you all enjoy!
            </p>
            <p class="stats">Number of tracks: <span><?php echo $deezer_response->nb_tracks?></span></p>
            <p class="stats">Duration: <span><?php echo "{$hours}h {$minutes}m {$seconds}s";?></span></p>
            <p class="stats">link: <span>
                <a href="<?php echo $deezer_response->link; ?>">
                    <?php echo $deezer_response->link; ?>
                </a>
            </span></p>
        </div>
        <iframe
        title="deezer-widget"
        src="https://widget.deezer.com/widget/dark/playlist/10313232162"
        width="40%" height="450" frameborder="0" allowtransparency="true"
        allow="encrypted-media; clipboard-write"></iframe>
    </div>
</section>
