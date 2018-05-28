$(document).ready(function() {
        window.setTimeout("fadeOutFlashMessages();", 5000); //call fade in 3 seconds
    }
);

function fadeOutFlashMessages() {
    $(".message-alert").fadeOut('slow');
}
//# sourceMappingURL=flashMessages.js.map
