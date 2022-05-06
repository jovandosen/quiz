(function ($, window, document) {
    'use strict';
    $(document).ready(function () { 
        
        $(".new-question").on("click", function(){

            var elCount = $(".question-data-wrapper").length;

            elCount = elCount + 1;

            var el = '\
                <div class="question-data-wrapper">\
                    <label class="question-fragment">Pitanje ' + elCount + '</label>\
                    <div>\
                        <input type="text" name="question_fragment[]" value="" autocomplete="off" placeholder="Pitanje..." class="question-field">\
                    </div>\
                </div>\
            ';

            $("#question-main-content-wrapper").append(el);

        });

    });
}(jQuery, window, document));