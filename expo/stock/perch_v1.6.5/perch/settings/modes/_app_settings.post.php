<?php
    
    if (PerchUtil::count($app_settings)) {
        $app_settings   = PerchUtil::array_sort($app_settings, 'app_id');
        $prev_app_id = 'perch_content';
        $settings_copy = $app_settings;
        reset($settings_copy);

        foreach($app_settings as $id=>$setting) {
            if ($setting['app_id']!=$prev_app_id) {
                $app = $Perch->get_app($setting['app_id']);
                if (PerchUtil::count($app)) echo '<h2 id="'.PerchUtil::html($app['id']).'">'.PerchUtil::html($app['label']).'</h2>';
            }
            
            $c = '';
            $next_item = next($settings_copy);
            
            if ($next_item) {
                if ($next_item['app_id']!=$setting['app_id']) {
                    $c = ' last';
                }
            }
?>
        <div class="field <?php echo $Form->error($id, false); echo $c; ?>">
            <?php echo $Form->label($id, $setting['label']); ?>
            <?php 
            
                switch($setting['type']) {
                    case 'checkbox':
                        echo $Form->checkbox($id, true, $Form->get($details, $id)); 
                        break;
                    case 'textarea':
                        echo $Form->textarea($id, $Form->get($details, $id, $setting['default'])); 
                        break;
                    case 'select':
                        echo $Form->select($id, $setting['opts'], $Form->get($details, $id, $setting['default'])); 
                        break;
                    
                    default:
                        echo $Form->text($id, $Form->get($details, $id, $setting['default'])); 
                        break;
                        
                }
                
                if ($setting['hint']) {
                    echo $Form->hint($setting['hint']);
                }
                
                $prev_app_id = $setting['app_id'];
            ?>
        </div>

<?php            
        }
    }

?>
