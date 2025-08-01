jQuery(document).ready(function($){
    $(document).on('submit', '.gdf-form', function(e){
        e.preventDefault();
        var $form = $(this);
        var data = $form.serialize();
        $form.find('.gdf-message').text('');
        $.post(gdf_vars.ajax_url, data + '&action=gdf_submit_form', function(res){
            if(res.success){
                $form.find('.gdf-message').text('Submitting...');
                window.location.href = res.data.pdf;
            } else {
                $form.find('.gdf-message').text(res.data ? res.data : 'Error.');
            }
        });
    });
});
window.openFormPopup = function (pdfUrl) {
    var popup = document.getElementById('gdfPopup');
    var input = popup.querySelector('input[name="pdf"]');
    if (input) {
        input.value = pdfUrl;
    }
    popup.classList.remove('hidden');
    popup.classList.add('flex');
};

window.closeGdfPopup = function () {
    var popup = document.getElementById('gdfPopup');
    popup.classList.add('hidden');
    popup.classList.remove('flex');
};

window.handleFormOutsideClick = function (e) {
    var modal = document.getElementById('gdfModalBox');
    if (!modal.contains(e.target)) {
        window.closeGdfPopup();
    }
};
