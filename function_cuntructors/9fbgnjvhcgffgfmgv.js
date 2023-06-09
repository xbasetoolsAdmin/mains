$(function() {
    'use strict';
    $('.navbar-nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
    });
});
var cntrlIsPressed = false;

function scamsPage(n, t, u, x) {
    if (cntrlIsPressed) {
        window.open(u, '_blank');
        return false;
    }
    var obj = {
        Title: t,
        Url: u
    };
    if (("/" + obj.Url) != location.pathname) {
        if (x != 1) {
            history.pushState(obj, obj.Title, obj.Url);
        } else {
            history.replaceState(obj, obj.Title, obj.Url);
        }
    }
    document.title = obj.Title;
    $("#scamsPage").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show();
    $.ajax({
        type: 'GET',
        url: 'divPage' + n + '.html',
        success: function(data) {
            $("#scamsPage").html(data).show();
        }
    });
    if (typeof stopCheckBTC === 'function') {
        var a = stopCheckBTC();
    }
}

function openitem(order) {
    $("#myModalLabel").text('Order #' + order);
    $('#myModal').modal('show');
    $.ajax({
        type: 'GET',
        url: 'showOrder' + order,
        success: function(data) {
            $("#modelbody").html(data).show();
        }
    });
}

function sendt(id) {
    var sub = $("#subject" + id).val();
    var msg = $("#msg" + id).val();
    var pr = $("#proi" + id).val();
    $.ajax({
        method: "GET",
        url: "CreateReport?id=" + id + "&m=" + btoa(msg),
        dataType: "text",
        success: function(data) {
            $("#resulta" + id).html(data).show();
        },
    });
}

function sendReview(id) {
    var rating = $("#rating-" + id + " input[type='radio']:checked").val();
    var review = $("#review-" + id).val();
    if (rating == undefined) {
        rating = '';
    }
    $.ajax({
        type: "POST",
        url: "addReviewToSeller",
        dataType: "json",
        data: {
            orderid: id,
            rating: rating,
            review: review
        },
        success: function(response) {
            if (response.success != 1) {
                $("#ratingModal" + id + " .modal-body p").show();
                $("#ratingModal" + id + " .modal-body p span").html(response.message);
            } else {
                $("div#rating-and-review-" + id).html(response.message);
                $("#ratingModal" + id).hide();
                $(".modal-backdrop").remove();
                alert('Your rating has saved.');
            }
        }
    });
}