 <div class="sidebar">
    <h1 class="archives sidebar"><span class="glyphicon glyphicon-pencil"></span><?php _e('Archives:'); ?></h1>
    
    <h2 class="month sidebar">By Month:</h2>
    <ul class="monthlyList sidebar">
        <?php wp_get_archives('type=monthly'); ?>
    </ul>
 </div>

