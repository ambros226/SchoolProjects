<?php

$post = [
    'user' => [
        'name' => 'Giga_chat',
        'pfp' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
    ],

    'img' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
    'title' => 'Hello World',
    'likes' => 43,
    'tags' => ['php', 'laravel'],
    'comments' => [
        ['author' => 'LOser', 'text' => 'GG', 'author-pfp' => 'https://images.unsplash.com/photo-1527980965255-d3b416303d12'],
        ['author' => 'LOser2', 'text' => 'WOW', 'author-pfp' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d'],
        ['author' => 'Leon', 'text' => 'Ily', 'author-pfp' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1']
    ],
    'date' => '11. září'
];

$post2 = [
    'user' => [
        'name' => 'Mira',
        'pfp' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
    ],

    'img' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
    'title' => 'Hello Friend',
    'likes' => 2303,
    'tags' => ['php', 'laravel'],
    'comments' => [
        ['author' => 'LOser', 'text' => 'GG', 'author-pfp' => 'https://images.unsplash.com/photo-1527980965255-d3b416303d12'],
        ['author' => 'LOser2', 'text' => 'WOW', 'author-pfp' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d'],
        ['author' => 'Leon', 'text' => 'Ily', 'author-pfp' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1']
    ],
    'date' => '11. září'
];

$post3 = [
    'user' => [
        'name' => 'IDK',
        'pfp' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
    ],

    'img' => 'https://images.unsplash.com/photo-1518717758536-85ae29035b6d',
    'title' => 'brown dog',
    'likes' => 413,
    'tags' => ['php', 'laravel'],
    'comments' => [
        ['author' => 'LOser', 'text' => 'GG', 'author-pfp' => 'https://images.unsplash.com/photo-1527980965255-d3b416303d12'],
        ['author' => 'LOser2', 'text' => 'WOW', 'author-pfp' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d'],
        ['author' => 'Leon', 'text' => 'Ily', 'author-pfp' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1']
    ],
    'date' => '11. září'
];

$posts = [$post, $post2, $post3];

$story1 = [
    'user' => [
        'name' => 'IDK',
        'pfp' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
    ]
];
$story2 = [
    'user' => [
        'name' => 'Mira',
        'pfp' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
    ]
];
$story3 = [
    'user' => [
        'name' => 'LOser',
        'pfp' => 'https://images.unsplash.com/photo-1527980965255-d3b416303d12',
    ]
];
$story4 = [
    'user' => [
        'name' => 'LOser2',
        'pfp' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d',
    ]
];
$story5 = [
    'user' => [
        'name' => 'Leon',
        'pfp' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1',
    ]
];
$story6 = [
    'user' => [
        'name' => 'Sad_man',
        'pfp' => 'https://images.unsplash.com/photo-1518717758536-85ae29035b6d',
    ]
];
$stories = [$story1, $story2, $story3, $story4, $story5, $story6];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


<nav>
    <div>
        <h1>Instakilo</h1>
        <div id="menu">
            <a href="#">🏠 Domů</a>
            <a href="#">🔎 Hledat</a>
            <a href="#">🧭 Objevujte</a>
            <a href="#">🎥 Reels</a>
            <a href="#">✉️ Zprávy</a>
            <a href="#">🔔 Upozornění</a>
            <a href="#">➕ Vytvořit</a>
            <a href="#">👤 Profil</a>
        </div>
    </div>
    <div id="settings">
        <a href="#">↪️ Víc</a>
        <a href="#">💠 Také od společnosti</a>
    </div>

</nav>
<main>
    <div id="column">


        <section id="stories-section">
            <?php foreach ($stories as $story) { ?>
                <div class="story">
                    <div class="border"><img src="<?= $story['user']['pfp'] ?>" alt="story" class="story-pfp"></div>
                    <p class="story-title"> <?= $story['user']['name'] ?></p>
                </div>
            <?php } ?>
        </section>
        <section id="post-section">


            <?php
            foreach ($posts as $post) {
                ?>
                <div class="post">
                    <div class="user-info">
                        <img class="profile-picture" src="<?= $post['user']['pfp'] ?>" alt="user-pfp"">
                        <h2> <?= $post['user']['name'] ?></h2>
                    </div>

                    <img src="<?= $post['img'] ?>" alt="post-photo" width="600px">

                    <div class="post-content">
                        <div class="stats">
                            <div>
                                <div>
                                    <button type="button" class="like-btn" data-clicked="off">🩶</button>
                                    <span class="countLine"><?= $post['likes'] ?></span>
                                </div>
                                <p class="message">💬 <?= count($post['comments']) ?></p>
                                <p class="safe-icon">↗️</p>
                            </div>
                            <p class="safe-icon">📥</p>
                        </div>

                        <div class="title">
                            <p class="username"><?= $post['user']['name'] ?></p>
                            <p> <?= $post['title'] ?> </p>
                        </div>

                        <div class="tags">
                            <?php
                            foreach ($post['tags'] as $tag) {
                                $tag = '#' . $tag;
                                ?>
                                <p><?= $tag ?> </p>
                                <?php
                            }
                            ?>
                        </div>

                        <div>
                            <?php
                            foreach ($post['comments'] as $comment) {
                                ?>
                                <div class="comment">
                                    <img class="comment-pfp" src="<?= $comment['author-pfp'] ?>" alt="comment-pfp">
                                    <h4 class="comment-author"><?= $comment['author'] ?>:</h4>
                                    <p><?= $comment['text'] ?></p>
                                </div>
                                <?php
                            }
                            ?>
                        </div>

                        <p class="date"><?= $post['date'] ?> </p>

                    </div>

                </div>
                <?php
            }
            ?>
        </section>
    </div>
</main>
<script>
    const likeButtons = document.querySelectorAll('.like-btn')
    likeButtons.forEach((buttonLike) => {
        buttonLike.addEventListener('click', () => {
            const countLine = buttonLike.nextElementSibling
            if (buttonLike.dataset.clicked === "off") {
                buttonLike.textContent = "❤️"
                console.log("clicked");
                buttonLike.dataset.clicked = "on"
                countLine.innerHTML = Number(countLine.textContent) + 1
            } else {
                console.log("unclicked")
                buttonLike.textContent = "🩶"
                buttonLike.dataset.clicked = "off"
                countLine.innerHTML = Number(countLine.textContent) - 1
            }
        });
    });
</script>

</body>
</html>


