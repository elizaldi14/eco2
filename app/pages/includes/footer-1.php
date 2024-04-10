<footer class="site_footer">
    <div class="site_footer_inner">
        <p>
            Designed, built, and maintained by <a href="https://triss.dev" target="_blank">Tristan White</a> © 2023-2024.<br>
            Powered by <a href="https://cloudservers.dk" target="_blank">Cloudservers</a>.
            <br>
            Data provided by <a href="https://www.thegreenwebfoundation.org/" target="_blank">The Green Web Foundation</a> and <a href=" https://developers.google.com/web/tools/lighthouse" target="_blank">Lighthouse</a>.
        </p>
        <p><a href="/contact">Contact</a> | <a href="/news">News</a> | <a href="/privacy">Privacy Policy</a> | <a href="/about">FAQ</a> | <a href="/badge">Get the badge</a></p>
        <br>
        <br>
        <div id="co2Badge"></div>
        <script src="/assets/js/badge.js"></script>
        <script>
        const myCo2Badge = new Badge({
            target: '#co2Badge',
            key: '425e5e5a59100505494518044548594f585c4f580559435e4f05155f584617494518044548594f585c4f58066b01061a041a1d4d0a696518055c434f5d067e4243590a5d4f4859435e4f0a43590a49464f4b444f580a5e424b440a12130f'
        });
        myCo2Badge.init();
        </script>
    </div>
</footer>