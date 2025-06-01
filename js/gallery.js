var $parent = $("#main"),
    $aside = $("#aside"),
    $asideTarget = $aside.find(".aside--details"),
    $asideClose = $aside.find(".close"),
    $tilesParent = $(".tiles-a"),
    $tiles = $tilesParent.find("a"),
    slideClass = "show-detail";

// tile click
$tiles.on("click", function(e){
    e.preventDefault();
    e.stopPropagation();
    if(!$("html").hasClass(slideClass)){
        $tiles.removeClass("active");
        $(this).addClass("active");
        $(this).attr("aria-expanded","true");
        loadTileData($(this));
    }else{
        killAside();
        $(this).attr("aria-expanded","false");
    }
});

// kill aside
$asideClose.on("click", function(e){
    e.preventDefault();
    killAside();
});

// load data to aside
function loadTileData(target){
    var $this = $(target),
        itemHtml = $this.find(".details").html();
    $asideTarget.html(itemHtml);
    showAside();
}

// show/hide aside
function showAside(){
    if(!$("html").hasClass(slideClass)){
        $("html").toggleClass(slideClass);
        $aside.attr("aria-hidden","false");
        focusCloseButton();
    }
}

// handle esc key
window.addEventListener("keyup", function(e){
    var code = (e.keyCode ? e.keyCode : e.which);
    if(code === 27){
        killAside();
    }
}, false);

// kill aside
function killAside(){
    if($("html").hasClass(slideClass)){
        $("html").removeClass(slideClass);
        sendFocusBack();
        $aside.attr("aria-hidden","true");
        $tiles.attr("aria-expanded","false");
    }
}

// send focus to close button
function focusCloseButton(){
    $asideClose.focus();    
}

// send focus back to item that triggered event
function sendFocusBack(){
    $(".active").focus();
}

// handle body click to close off-canvas
$parent.on("click",function(e){
    if($("html").hasClass(slideClass)){
        killAside();
    }
});

// Pagination
var itemsPerPage = 6;
var currentPage = 1;
var totalItems = $tiles.length;
var totalPages = Math.ceil(totalItems / itemsPerPage);
var $pagination = $("#pagination");

function showPage(page) {
    $tiles.hide();
    var start = (page - 1) * itemsPerPage;
    var end = start + itemsPerPage;
    $tiles.slice(start, end).show();
    
    $(".page-number").removeClass("active");
    $(".page-number[data-page='" + page + "']").addClass("active");
}

function createPagination() {
    $pagination.empty();
    for (var i = 1; i <= totalPages; i++) {
        var $btn = $("<button>")
            .addClass("page-number")
            .attr("data-page", i)
            .text(i);
        if (i === currentPage) {
            $btn.addClass("active");
        }
        $pagination.append($btn);
    }
}

$pagination.on("click", ".page-number", function() {
    currentPage = parseInt($(this).attr("data-page"));
    showPage(currentPage);
});

createPagination();
showPage(currentPage);
