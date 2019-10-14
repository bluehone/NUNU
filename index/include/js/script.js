function include(scriptUrl) {
    document.write('<script src="' + scriptUrl + '"></script>');
}

function isIE() {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
};



/* Navbar
 ========================================================*/
(function ($) {
    include('/theme/f067/index/include/js/jquery.rd-navbar.js');
})(jQuery);

/* 
 ========================================================*/
$(function(){
	
	$('.nav li').mouseover(function(){
		nav_num = $(this).attr('data-num')
		$('.subnav_bar').stop().animate({'height':40},100)
		$('.subnav').css('display','none')
		$('.sub_menu'+nav_num).css('display','block');
	})
	$('.nav > li').mouseleave(function(){
		$('.subnav_bar').stop().animate({'height':0},100)	
		$('.subnav').css('display','none')
	})
	// 네비게이션
});

/* 
 ========================================================*/
$(function(){
	$('.service').mouseover(function(){
		nav_num = $(this).attr('data-service')
		$('.service'+nav_num).css('background-color','#e75c39')
	});
	$('.service').mouseleave(function(){
		$('.service'+nav_num).css('background-color','#10c7c7')
	});
});

/* 
 ========================================================*/
	visualL = $('.visual_section .main_panel div').length;			
	visualN = 1
	function auto(){
		visualN++		
		$('.visual_section .slide_img'+visualN).siblings().fadeOut(800);
		$('.visual_section .slide_img'+visualN).fadeIn(800);
		if( visualN == visualL ){
			 visualN = 0 
		};			
	};
	setInterval(function(){ auto() },5000);
	//메인 비쥬얼 
	
/* 
 ========================================================*/
	$('.tab_menu li').click(function(){
		tab_num = $(this).attr('data-tab');
		$('.tab_menu li').removeClass('on');
		$(this).addClass('on');		
		$('.tabview .tabcnt').css('display','none');
		$('.tabview_cnt'+tab_num).css('display','block');		
	});
	// 서브 탭 메뉴 끝

	$('.portfolio_tab li').click(function(){
		tab_num = $(this).attr('data-tab');
		$('.portfolio_tab li').addClass('on');
		$(this).removeClass('on');		
		$('.pf_tabview .pf_tabcnt').css('display','none');
		$('.pf_tabview_cnt'+tab_num).css('display','block');		
	});
	//  탭 메뉴 끝

/* 
 ========================================================*/
$(function () {
	// Location Action
	function locationAction () {
	    var location = $('.sub_path'),
	        current = location.find('.current'),
	        other = current.find('.subnav_panel'),
	        otherIndex = null;

	    other.slideUp(0);

	    other.find('a').each(function (idx) {
	        if ($(this).hasClass('active')) {
	            otherIndex = $(this).index();
	            return false;
	        }
	    })

	    current.on({
	        'mouseenter': function () {
	            $(this).find('>a').addClass('active');
	            other.slideDown(200);
	        },
	        'mouseleave': function () {
	            $(this).find('>a').removeClass('active');
	            other.slideUp(100);
	        }
	    });

	    other.find('a').on({
	        'mouseenter': function () {
	            other.find('a').each(function () {
	                $(this).removeClass('active');
	            });
	            $(this).addClass('active');
	        },
	        'mouseleave': function () {
	            $(this).removeClass('active');
	        }
	    });

	    other.on({
	        'mouseleave': function () {
	            other.find('a').eq(otherIndex).addClass('active');
	        }
	    });
	}
	locationAction();
});

