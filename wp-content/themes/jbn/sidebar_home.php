
<div id="sidebar">
    <div class="widget">
        <div class="wodget-content">
            <?php include(TEMPLATEPATH."/widget/recentpost_tools.php");?>
        </div>
    </div><!-- END .widget -->
    <div class="widget">
        <div class="wodget-content">
            <?php include(TEMPLATEPATH."/widget/recentpost_kabarbisnis.php");?>
        </div>
    </div><!-- END .widget -->
    <div class="widget">
        <div class="wodget-content">
            <?php include(TEMPLATEPATH."/widget/recentpost_panduanbisnis.php");?>
        </div>
    </div><!-- END .widget -->
  <?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
  <?php endif; ?>
</div>
<!-- END #SIDEBAR -->
