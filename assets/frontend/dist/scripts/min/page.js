!function(i){var e=window.innerWidth;i(window).scroll(function(e){var o=i(window).scrollTop();100<o?i(".fl-social").addClass("fl-scrolled"):i(".fl-social").removeClass("fl-scrolled"),5<o?i("body").addClass("scrolled"):i("body").removeClass("scrolled");i("header").height();2<o?i("body").addClass("stick_buttom"):i("body").removeClass("stick_buttom"),i(".banner .summit_box").css({"transition-delay":"0s"})}),window.bLazy=new Blazy({offset:350,loadInvisible:!0}),i(document).ready(function(){i("body").addClass("is-loaded"),function(n){e<992&&i("body").on("click","a.scroll",function(e){i(".navbar-toggler").click()});i("body").on("click","a.scroll",function(e){e.preventDefault(),i(document).off("scroll"),i(this).closest(".navbar-nav").length&&(i(".navbar-nav a.scroll").each(function(){i(this).parent().removeClass("active")}),i(this).parent().addClass("active"));var o=i(this).attr("data-href"),t=i(o);i(o).length||(window.location.href=i(this).attr("href")),i("html, body").stop().animate({scrollTop:t.offset().top-n},500,"swing",function(){i(document).on("scroll")})})}(40),i(".fixed-action-btn").on("click",function(){var e=i(this);e.toggleClass("active"),e.hasClass("active")?e.addClass("pulse"):e.removeClass("pulse")})})}(jQuery),$(".burger_box").click(function(){$(this).toggleClass("active")}),$(window).width()<991&&$(".dropdown-menu .nav-item .nav-link").on("click",function(){$(".navbar-toggler").trigger("click"),$(".burger_box ").removeClass("active")}),function(o){o(document).ready(function(){o(".page-section").viewportChecker({classToAdd:"inView",offset:"25%"}),o(".common-content").viewportChecker({classToAdd:"contView",offset:100}),o(".who-content-wrapper .inner_ .content-wrapper").viewportChecker({classToAdd:"whoAnim",offset:"25%"}),o(".objectives_slider_wrapper").viewportChecker({classToAdd:"objAnim",offset:"25%"}),o(".mission_vision_content_wrapper ").viewportChecker({classToAdd:"misAnim",offset:"25%"}),o(".ksa_content").viewportChecker({classToAdd:"ksaAnim",offset:"25%"}),o(".jordan_content").viewportChecker({classToAdd:"jorAnim",offset:"25%"}),o(".team_bottom").viewportChecker({classToAdd:"teamAnim",offset:"25%"})}),o(window).scroll(function(e){100<o("html").scrollTop()?o(".fl-social").addClass("fl-scrolled"):o(".fl-social").removeClass("fl-scrolled")}),o(window).resize(function(){})}(jQuery);var lastId,topMenu=$(".abt-nav-list"),headHeight=$(".navbar"),menuItems=topMenu.find("a"),scrollItems=menuItems.map(function(){var e=$($(this).attr("data-href"));if(e.length)return e});$(window).width(),topMenuHeight=headHeight.outerHeight()+30,menuItems.click(function(e){if(!menuItems.hasClass("noScroll")){var o=$(this).attr("data-href"),t="#"===o?0:$(o).offset().top-topMenuHeight+1;$("html, body").stop().animate({scrollTop:t},850),e.preventDefault()}}),$(window).scroll(function(){var e=$(this).scrollTop()+topMenuHeight,o=scrollItems.map(function(){if($(this).offset().top<e)return this}),t=(o=o[o.length-1])&&o.length?o[0].id:"";lastId!==t&&(lastId=t,menuItems.parent().removeClass("active").end().filter("[data-href='#"+t+"']").parent().addClass("active"))});var pointer=$("#custom-pointer"),clickableLinks=$("a[href], button, .init_research"),clickableLinks_two=$(" .abt-nav-items .link_, .nav_"),inputClick=$(".input-field, .navbar-nav>.nav-item>.nav-link");$(document).ready(function(){pointer.removeClass("is-hover"),$(document).mousemove(function(e){var o=e.clientX-pointer.width()/2,t=e.clientY-pointer.height()/2;pointer.css({left:o,top:t})}),clickableLinks.hover(function(){pointer.addClass("is-hover")},function(){pointer.removeClass("is-hover")}),clickableLinks.click(function(){pointer.removeClass("is-hover")}),clickableLinks_two.hover(function(){pointer.addClass("is-hover-2")},function(){pointer.removeClass("is-hover-2")}),clickableLinks_two.click(function(){pointer.removeClass("is-hover-2")}),inputClick.hover(function(){pointer.addClass("inputhover")},function(){pointer.removeClass("inputhover")}),inputClick.click(function(){pointer.removeClass("inputhover")})});