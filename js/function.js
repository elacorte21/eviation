$(document).ready(function(){
    
    $('.home-news').owlCarousel({
        loop:true,
        margin:9,
        nav:true,
        responsive:{
            0: { items:1 },
            600: { items:2 },
            1000: { items:3 }
        }
    });

    $('.btn-commuter').click(function(e) {
        var popname = $(this).data('name');
        var popdesc1 = $(this).data('desc1');
        var popdesc2 = $(this).data('desc2');

        $('.content-name').text(popname);
        $('.content-desc1').text(popdesc1);
        $('.content-desc2').text(popdesc2);

        if($(this).hasClass('active')){
            $('.btn-commuter').removeClass('active');
            $('#commuter .content, .commuter').removeClass('on');
        } else {
            $('.btn-commuter').removeClass('active');
            $('#commuter .content, .commuter').removeClass('on');
            $(this).addClass('active');
            $('#commuter .content, .commuter').addClass('on');
        } 
        e.preventDefault();
    });

    var $owl = $( '.acraft' );
    $owl.owlCarousel({
        animateOut: 'fadeOut',
        loop:true,
        margin:25,
        nav:true,
        items:1
    });
    $('.mediakit').owlCarousel({
        animateOut: 'fadeOut',
        loop:true,
        margin:25,
        nav:false,
        items:1
    });

    $(document).on('keydown', function( event ) { //attach event listener
        if(event.keyCode == 37) {
            $owl.trigger('prev.owl')
        }
        if(event.keyCode == 39) {
            $owl.trigger('next.owl')
        }
    });

    $('.btn-leader').on('click', function () {
        var leaderfname = $(this).data('fname');
        var leaderlname = $(this).data('lname');
        var leadertitle = $(this).data('title');
        var leaderdesc = $(this).data('desc');

        $('.leader-fname').text(leaderfname);
        $('.leader-lname').text(leaderlname);
        $('.leader-title').text(leadertitle);
        $('.leader-desc').text(leaderdesc);

        if($(this).hasClass('on')) {
            $(this).removeClass('on');
            $('.btn-leader').removeClass('off');
            $('.leader-box').removeClass('active');
        } else {
            $('.btn-leader').addClass('off');
            $(this).toggleClass('off on');
            $('.leader-box').addClass('active');
        }
    });

    $('.close').click(function(e) {
        $('.btn-leader').removeClass('on');
        $('.btn-leader').removeClass('off');
        $('.leader-box').removeClass('active');
        e.preventDefault();
    });

    $('.btn-play').on('click', function () {
        $('video').trigger('play');
        $('.btn-play').hide();
    });
    
    $('video').on('click', function () {
        $('video').trigger('pause');
        $('.btn-play').show();
    });

    var zindex = 1;
    $('.btn-career').click(function(e) {
        $(this).toggleClass('on');
        $(this).css('z-index', zindex++);
        e.preventDefault();
    });

    $('.btn-benefits').on('click', function (e) {
        var benefitdesc = $(this).data('desc');
        $('.benefit-desc').text(benefitdesc);
        if($(this).hasClass('on')) {
            $(this).removeClass('on');
            $('.btn-benefits').removeClass('off');
            $('.benefit-desc').removeClass('active');
        } else {
            $('.btn-benefits').addClass('off');
            $(this).toggleClass('off on');
            $('.benefit-desc').addClass('active');
        }
        e.preventDefault();
    });

    $('.mobile-nav').click(function (e) {
        $('body').toggleClass('mobile-nav-on');
        if ($('body').hasClass('mobile-nav-on')) {
            $('body').on('touchmove', false);
        } else {
            $('body').off('touchmove', false);
        }
        e.preventDefault();
    });
        
    $('.lt-bg').waypoint(function(direction) {
        if (direction === 'down') {
            console.log('down to light');
            $('.paging').removeClass("lt dk");  
            $('.paging').addClass("dk");
        }
    }, {
        offset: '40%'
    });
            
    $('.lt-bg').waypoint(function(direction) {
        if (direction === 'up') {
            console.log('up to light');
            $('.paging').removeClass("lt dk");  
            $('.paging').addClass("dk");
        }
    }, {
        offset: '-50%'
    });
            
    $('.dk-bg').waypoint(function(direction) {
        if (direction === 'down') {
            console.log('down to dark');
            $('.paging').removeClass("dk lt");  
            $('.paging').addClass("lt");
        }
    }, {
        offset: '40%'
    });
        
    $('.dk-bg').waypoint(function(direction) {
        if (direction === 'up') {
            console.log('up to dark');
            $('.paging').removeClass("dk lt");  
            $('.paging').addClass("lt");
        }
    }, {
        offset: '-50%'
    });

});

$(function() {
    $.scrollify({
        section:".panel",
        scrollbars:false,
        before:function(i,panels) {
    
            var ref = panels[i].attr("data-section-name");
            var activePanel = $(".panel.active");

            $(".paging .active").removeClass("active");
            activePanel.addClass("remove");

            $(".paging").find("a[href=\"#" + ref + "\"]").addClass("active");

            $("[data-slide=" + i + "]").addClass("active");
            activePanel.removeClass("remove active");
        },
        afterRender:function() {
            var paging = "<ul class=\"paging\">";
            var activeClass = "";
            $(".panel").each(function(i) {
                activeClass = "";
                if(i===$.scrollify.currentIndex()) {
                    activeClass = "active";
                }
                //paging += "<li><a class=\"" + activeClass + "\" href=\"#" + $(this).attr("data-section-name").toString().replace(/ /g,'-') + "\"><span class=\"hover-text\">" + $(this).attr("data-section-name").charAt(0).toUpperCase() + $(this).attr("data-section-name").slice(1) + "</span></a></li>";
                paging += "<li><a class=\"" + activeClass + "\" href=\"#" + $(this).attr("data-section-name") + "\"></a></li>";
            });
  
            paging += "</ul>";
    
            $('body').append(paging);
            $('.paging a').on('click', function () {
                $.scrollify.move($(this).attr('href'));
            });

            //Panels ACTIVE
            $.scrollify.update();
            $("[data-slide=0]").addClass("active");

        }
    });
  });