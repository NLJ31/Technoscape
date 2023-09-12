/* Announcement */
const expandAnnouncement = (e) => {
    $(e).parent().siblings(".content").slideToggle();
    $(e).toggleClass("rotate-180");
}

/* Expand Participant Data */
const expandParticipantData = (e) => {
    $(e).parent().siblings(".participant-data").slideToggle();
    $(e).toggleClass("rotate-90");
}

/* Delete Participant Modal */
const openModal = (participantId, eventType) => {
    var confirm = document.getElementById('confirmDelete');
    if (eventType.includes('hackTeam')) {
        eventType = 'hack';
        confirm.action = "/admin/" + eventType + "/participant/delete/team/" + participantId;
    } else {
        confirm.action = "/admin/" + eventType + "/participant/delete/" + participantId;
    }
    $("#modal").removeClass("hidden");
}

const closeModal = () => {
    $("#modal").addClass("hidden");
}

/* Show Payment Modal */
const openPaymentModal = (fileLink, participantId, eventType) => {
    var reject = document.getElementById('rejectPayment');
    var verify = document.getElementById('verifyPayment');
    var image = document.getElementById('paymentImage');
    var ext = fileLink.split('.').pop();

    if (ext.toLowerCase().match(/pdf/)) {
        window.open(fileLink, '_blank');
        image.innerHTML = "File opened in a new tab";
    } else if (ext.toLowerCase().match(/zip/) || ext.toLowerCase().match(/rar/)) {
        image.innerHTML = "File downloaded";
    }
    else {
        image.innerHTML = "<img class=\"max-h-[30rem]\" src=\"" + fileLink + "\" alt=\"no-image\">";
    }

    $("#paymentModal").removeClass("hidden");
    reject.action = "/admin/" + eventType + "/payment/reject/" + participantId;
    verify.action = "/admin/" + eventType + "/payment/verify/" + participantId;
}

const closePaymentModal = () => {
    $("#paymentModal").addClass("hidden");
}

/* Show Image Modal */
const openImageModal = (fileLink) => {
    var image = document.getElementById('image');
    var ext = fileLink.split('.').pop();
    if (ext.toLowerCase().match(/pdf/)) {
        window.open(fileLink, '_blank');
    } else {
        image.innerHTML = "<img class=\"max-h-[30rem]\" src=\"" + fileLink + "\" alt=\"no-image\">";
        $("#imageModal").removeClass("hidden");
    }
}

const closeImageModal = () => {
    $("#imageModal").addClass("hidden");
}

/* Show Create Announcement Modal */
const openAnnouncementModal = () => {
    $("#modal").removeClass("hidden");
}
const closeAnnouncementModal = () => {
    $("#modal").addClass("hidden");
}

/* Delete Announcement Modal */
const openAnnouncementDeleteModal = (announcementId, eventType) => {
    var confirm = document.getElementById('confirmDelete');
    confirm.action = "/admin/" + eventType + "/announcement/delete/" + announcementId;
    $("#deleteModal").removeClass("hidden");
}

const closeAnnouncementDeleteModal = () => {
    $("#deleteModal").addClass("hidden");
}


