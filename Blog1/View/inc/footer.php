<footer>
    <p class="italic"><strong><a href="<?=ROOT_URL?>"title="Homeage">Simple Blog</a></strong> мой пример простого Блога &nbsp; | &n&nbsp;
        <?php if (!empty($_SESSION['is_logged'])): ?>
        You are connected as Adnin - <a href="<?=ROOT_URL?>?p=admin&amp;a=logout">Logout</a> $nbsp; | &n&nbsp;       
        <a href="<?=ROOT_URL?>?p=blog&amp;a=all">View All Blog Posts</a>
        <?php else: ?>
        <a href="<?=ROOT_URL?>p=admin&amp;a=login">Admin Login</a>
         <?php endif; ?>
    </p>
</footer>
</div>
</body>
</html>
  