jQuery = $
(function ($) {


    $(document).ready(function () {
        let smhead = $("#header-top-bar")
        let html = '<div class="large-6 columns topbar-menu">'
        html += '<div class="topbar-contact-info">'
        html += '<div class="smarty-contact-info">'
        html += '<p class="contact-item">Email: info@smartyenterprisellc.com</p>'
        html += '<p class="contact-item">Phone: +1 3414001727</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        smhead.prepend(html)
    })

})
