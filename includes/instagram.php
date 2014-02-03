<?php
$userid = "184142151";
$accessToken = "184142151.ab103e5.c83f8b5441134b5dafafc492466432d0";
$count = 18;

function fetchData($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $result = curl_exec($ch);
    curl_close($ch); 

    return $result;
}

$result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}&count={$count}");
$result = json_decode($result);
?>

<section>
    <div id="section">
        <img src="img/instagram.jpg" alt="Instagram" class="section_title"/>
        <div id="instagram">
            <?php foreach ($result->data as $post): ?>
                <a class="lightbox" href="<?= $post->images->standard_resolution->url ?>"><img class="instagram" src="<?= $post->images->thumbnail->url ?>"></a>
            <?php endforeach ?>
            <img src="img/end_section.jpg" class="end_section"/>
        </div>
    </div>
</section>