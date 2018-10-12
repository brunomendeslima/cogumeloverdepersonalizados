<?php 
    wp_footer(); 
    $home = get_template_directory_uri();
?>
</div>
</div>
<!-- Footer -->
<footer class="py-5 ">
    <div class="container-footer">
        <p class="m-0 text-center text-white">Copyright &copy; <?=bloginfo('name')?> <?=date('Y')?></p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?= $home; ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= $home; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>