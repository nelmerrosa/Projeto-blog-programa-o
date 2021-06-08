<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores quo et ullam quod vel ipsum blanditiis excepturi minus explicabo enim, in quaerat officiis asperiores, facilis cupiditate iusto! Repudiandae, quis cumque.
            Placeat pariatur at blanditiis hic dignissimos mollitia provident illo. Voluptatum natus, pariatur necessitatibus iste aliquam, itaque minus blanditiis hic odio quia asperiores. Commodi repellendus sit soluta nesciunt iusto inventore dolores.
            Minima dolor inventore mollitia minus, recusandae tempora adipisci deserunt cumque quam sapiente corporis ullam autem officiis dolorum quis dicta eum eligendi esse accusamus dolore iste debitis obcaecati consectetur? Nam, est.
            Nostrum minima, dolorum architecto, quisquam accusamus molestias hic magnam illum dolor reprehenderit similique asperiores possimus sapiente, fuga eum cumque commodi aut animi temporibus vel culpa consequatur laudantium? Sequi, iusto porro?
            Maiores odio impedit ex architecto voluptates in iusto distinctio suscipit nisi maxime perferendis nobis quam labore voluptate voluptatibus ea nam magni, quasi, fugiat repellat tempore. Officiis accusamus eligendi necessitatibus dolor?</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores quo et ullam quod vel ipsum blanditiis excepturi minus explicabo enim, in quaerat officiis asperiores, facilis cupiditate iusto! Repudiandae, quis cumque.
            Placeat pariatur at blanditiis hic dignissimos mollitia provident illo. Voluptatum natus, pariatur necessitatibus iste aliquam, itaque minus blanditiis hic odio quia asperiores. Commodi repellendus sit soluta nesciunt iusto inventore dolores.
            Minima dolor inventore mollitia minus, recusandae tempora adipisci deserunt cumque quam sapiente corporis ullam autem officiis dolorum quis dicta eum eligendi esse accusamus dolore iste debitis obcaecati consectetur? Nam, est.
            Nostrum minima, dolorum architecto, quisquam accusamus molestias hic magnam illum dolor reprehenderit similique asperiores possimus sapiente, fuga eum cumque commodi aut animi temporibus vel culpa consequatur laudantium? Sequi, iusto porro?
            Maiores odio impedit ex architecto voluptates in iusto distinctio suscipit nisi maxime perferendis nobis quam labore voluptate voluptatibus ea nam magni, quasi, fugiat repellat tempore. Officiis accusamus eligendi necessitatibus dolor?</p>
    </div>
    </div>

    <aside id="tag-list">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <div class="tags-container">
                <?php foreach ($currentPost['tags'] as $tag) : ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </div>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $categoria) : ?>
                <li><a href="#"><?= $categoria ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>


<?php
include_once("templates/footer.php")
?>