class WPOrbit_Admin_Utility
{
    // Toggle elements with .hide-on-load and .show-on-load.
    showViews() {
        let $ = jQuery,
            previews = $('.hide-on-load'),
            hidden = $('.show-on-load');
        previews.hide();
        hidden.fadeIn(125);
    }

    constructor() {
        this.showViews();
    }
}

// Auto instantiate on jQuery ready.
jQuery(document).ready(function() {
    new WPOrbit_Admin_Utility();
});