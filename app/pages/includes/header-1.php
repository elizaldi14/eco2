<div class="tiny-8 small-8 medium-8 tiny-end" style="position:relative;">
    <nav>
        <input type="checkbox" id="nav" class="hidden"/>
        <label for="nav" class="nav-open"></label>
        <div class="nav-container">
            <ul>
                <li><a href="<?=ROOT?>/home">Home</a></li>
                <li><a href="<?=ROOT?>/news-3">News</a></li>
                <li><a href="<?=ROOT?>/contact-2">Contact</a></li>
                <li><a href="./about.php">About us</a></li>
                <?php if(!logged_in()):?>
                    <a href="<?=ROOT?>/login" style="position: relative; top: 10px; left: 20px;">
                        <img src="<?=ROOT?>/../public/assets/imgs/user-icon.png" style="" width="36" height="36" class="rounded-circle">
                    </a>
            <?php endif;?>
            </ul>
        </div>
    </nav>
</div>