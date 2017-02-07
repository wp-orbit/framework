var WPOrbit_Admin_Utility = (function () {
    function WPOrbit_Admin_Utility() {
        this.showViews();
    }
    // Toggle elements with .hide-on-load and .show-on-load.
    WPOrbit_Admin_Utility.prototype.showViews = function () {
        var $ = jQuery, previews = $('.hide-on-load'), hidden = $('.show-on-load');
        previews.hide();
        hidden.show();
    };
    return WPOrbit_Admin_Utility;
}());
// Auto instantiate on jQuery ready.
jQuery(document).ready(function () {
    new WPOrbit_Admin_Utility();
});

//# sourceMappingURL=wp-orbit.js.map
