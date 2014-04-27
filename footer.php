        <footer style="margin-bottom: 20px;">
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <a href="#top" data-scroll="true">
                        <i class="fa fa-arrow-up"></i> Back to top
                    </a>
                </div>
                <div class="col-md-6 text-right">
                    <small class="text-muted">
                        &copy; <strong><?php get_bloginfo('name'); ?></strong><br>
                        Theme by <a href="http://www.doecode.net" target="_blank">doecode.net</a> <!-- Please do not remove this line - thanks :-) -->
                    </small>
                </div>
            </div>
        </footer>
    </div>

    <script>
    // Load RequireJS
    /* <![CDATA[ */
    require({
        baseUrl: "<?php echo get_template_directory_uri(); ?>/",
    }, ['<?php echo get_template_directory_uri(); ?>/js/main.js']);
    /* ]]> */
    </script>
    
    <?php wp_footer(); ?>
</body>
</html>
