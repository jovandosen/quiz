<?php

class Question
{
    public function __construct()
    {
        add_action('add_meta_boxes', array($this, 'addMetaBox'));
		add_action('save_post', array($this, 'saveData'));
    }

    public function addMetaBox()
    {
        $screens = ['product'];

	    foreach ($screens as $screen) {
	        add_meta_box(
	            'question_box',           
	            'Pitanja' . '<a href="javascript:void(0)" class="new-question">Novo pitanje</a>',  
	            array($this, 'addMetaBoxHtml'),  
	            $screen                   
	        );
	    }
    }

    public function addMetaBoxHtml($post)
    {
        $value = get_post_meta($post->ID, 'question_box', true);

        ?>
        <div id="question-main-content-wrapper">
        <?php

        if(empty($value)){
            ?>
            <div class="question-data-wrapper" data-current-active-el="1">
                <label><?php _e('Pitanje 1', 'quiz-application'); ?></label>
                <div>
                    <input type="text" name="question_fragment[]" value="" autocomplete="off" placeholder="Pitanje..." class="question-field">
                </div>
            </div>
            <?php
        } else {
            foreach($value as $key => $val){
                $current = $key + 1;
                ?>
                <div class="question-data-wrapper" data-current-active-el="<?php echo $current; ?>">
                    <label><?php _e('Pitanje ' . $current, 'quiz-application'); ?></label>
                    <div>
                        <input type="text" name="question_fragment[]" value="<?php echo $val; ?>" autocomplete="off" placeholder="Pitanje..." class="question-field">
                    </div>
                </div>
                <?php
            }
        }

        ?>
        </div>
        <?php
    }

    public function saveData($post_id)
    {
        if (array_key_exists('question_fragment', $_POST)) {
	        update_post_meta(
	            $post_id,
	            'question_box',
	            $_POST['question_fragment']
	        );
	    }
    }
}

?>