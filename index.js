/**
 * Created by ditry_000 on 29.06.2015.
 */
jQuery(function($) {
    $(".checkbox-to-radio").find("label").click(function(event) {
        event.preventDefault();
        item = $(this).siblings('input');
        item.parents('.checkbox-to-radio').find("input:checked").prop("checked", false);
        item.prop("checked", true);
    });

    $(".type-label").click(function(){
        $('.evaluation-figure-model').text($(this).data('name'))
    });

    $('.evaluation-figure-model').text($('.type-box:checked').next().data('name'));

    $('.radio-item').click(function(){
        $('.evaluation-item-message > p').text($(this).data('text'));
    });

    $('.evaluation-item-message > p').text($('.radio-box:checked').next().data('text'));
});
