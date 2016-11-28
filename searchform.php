<?php
/**
 * The search form for the YorkU theme.
 * @package yorku
 */
?>
<span class="native-search">
    <form method="get" role="search" action="<?php echo esc_url(home_url('/')); ?>">
        <div class="input-group">
            <input type="search" name="s" class="form-control" placeholder="Search FES...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit" onclick="submit();"><i class="fa fa-search" aria-hidden="true"></i></button>
            </span>
        </div><!-- /input-group -->
    </form>
</span>