/*<![CDATA[*/
//cannot use $ with wordpress must use jQuery instead
//main search replace with google search
    jQuery(function () {
    //adds event to search input 
    jQuery('#search-form-header').on('keypress', function (event) {
          if (event.keyCode == 13) {
            event.preventDefault();

            if (jQuery(this).val())
                window.location="http://www.google.com/cse?cx=017030560044630687448:rexcsjnxmks&q=" + jQuery(this).val() + "&oq=" + jQuery(this).val() + "&gs_l=partner.12...3568.4091.0.4830.4.4.0.0.0.0.19.32.4.4.0.gsnos%2Cn%3D13...0.485j137497j4..1ac.1.25.partner..2.2.24.nW5mjdB3aJs#gsc.tab=0&gsc.q=" + jQuery(this).val() + "&gsc.page=1";
        }
    });

    jQuery('button[aria-controls="search-form-header"]').on('click', function () {
        if (jQuery('#search-form-header').val()) {
            window.location="http://www.google.com/cse?cx=017030560044630687448:rexcsjnxmks&q=" + jQuery('#search-form-header').val() + "&oq=" + jQuery('#search-form-header').val() + "&gs_l=partner.12...3568.4091.0.4830.4.4.0.0.0.0.19.32.4.4.0.gsnos%2Cn%3D13...0.485j137497j4..1ac.1.25.partner..2.2.24.nW5mjdB3aJs#gsc.tab=0&gsc.q=" + jQuery('#search-form-header').val() + "&gsc.page=1";
        }
    });
});

//model-slide-in-menu replace with google search
    jQuery(function () {
    //adds event to search input 
    jQuery('#search-form-header-modal-slide-in').on('keypress', function (event) {
          if (event.keyCode == 13) {
            event.preventDefault();

            if (jQuery(this).val())
                window.location="http://www.google.com/cse?cx=017030560044630687448:rexcsjnxmks&q=" + jQuery(this).val() + "&oq=" + jQuery(this).val() + "&gs_l=partner.12...3568.4091.0.4830.4.4.0.0.0.0.19.32.4.4.0.gsnos%2Cn%3D13...0.485j137497j4..1ac.1.25.partner..2.2.24.nW5mjdB3aJs#gsc.tab=0&gsc.q=" + jQuery(this).val() + "&gsc.page=1";
        }
    });

    jQuery('button[aria-controls="search-form-header-modal-slide-in"]').on('click', function () {
        if (jQuery('#search-form-header-modal-slide-in').val()) {
            window.location="http://www.google.com/cse?cx=017030560044630687448:rexcsjnxmks&q=" + jQuery('#search-form-header-modal-slide-in').val() + "&oq=" + jQuery('#search-form-header-modal-slide-in').val() + "&gs_l=partner.12...3568.4091.0.4830.4.4.0.0.0.0.19.32.4.4.0.gsnos%2Cn%3D13...0.485j137497j4..1ac.1.25.partner..2.2.24.nW5mjdB3aJs#gsc.tab=0&gsc.q=" + jQuery('#search-form-header-modal-slide-in').val() + "&gsc.page=1";
        }
    });
});
//SiteImprove Script
(function() {

              var sz = document.createElement('script'); sz.type = 'text/javascript'; sz.async = true;

              sz.src = '//siteimproveanalytics.com/js/siteanalyze_66356561.js';

              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sz, s);

})();
//End SiteImprove Script


//jQuery(document).ready(function(){
//  jQuery('li#menu-item-menu-secondary-right-396>a>span').on("click", function(e){
//      alert('test2');
//    jQuery(this).next('ul').toggle();
//    e.stopPropagation();
//    e.preventDefault();
//  });
//});


/* multilevel navigation for Bootstrap 4 jQuery Fix October 2020 */

jQuery(document).ready(function(){
	jQuery('.dropdown-menu > li > .dropdown-menu').parent().addClass('dropdown-submenu').find(' > .dropdown-item').attr('href', 'javascript:;').addClass('dropdown-toggle');
	jQuery('.dropdown-menu > li > .dropdown-menu').parent().addClass('dropdown-submenu').find(' > .dropdown-item').attr('aria-haspopup', 'true');
	jQuery('.dropdown-menu > li > .dropdown-menu').parent().addClass('dropdown-submenu').find(' > .dropdown-item').attr('aria-expanded', 'false');
	//jQuery('.dropdown-menu > li > .dropdown-menu').parent().addClass('dropdown-submenu').find(' > .dropdown-item').attr('style', 'z-index:2');
	
//var jj= jQuery('.dropdown-menu > li > .dropdown-menu').parent().next().get(0).nodeName;
//alert(jj);	
    jQuery('.dropdown-menu > li > .dropdown-menu').parent().find( "ul" ).attr('style', 'display: none !important');
   // jQuery('.dropdown-menu > li > .dropdown-menu').parent().find( "ul" ).removeClass('dropdown-menu');
    //jQuery('.dropdown-menu > li > .dropdown-menu').parent().find( "ul" ).addClass('displayNoneClass');
   // jQuery('.dropdown-menu > li > .dropdown-menu').parent().find( "ul" ).addClass('dropdown-menu');
   
    //#navbar-nav-secondary-right menu click action
	jQuery('#navbar-nav-secondary-right .dropdown-submenu > a').on("click", function(e) {
	var dropdown = jQuery(this).parent().find(' > .show');
	jQuery('.dropdown-submenu .dropdown-menu').not(dropdown).removeClass('show');
	//jQuery(this).parent().find(' > .show').attr('style', 'display: block !important');
	jQuery(this).next('.dropdown-menu').toggleClass('show');
	//  if ( jQuery(this).next('.dropdown-menu').is( ".show" ) ) {
    if ( jQuery(this).next('.dropdown-menu').css('display') == 'none' ) {
    jQuery(this).attr('aria-expanded', 'true');    
    jQuery(this).next('.dropdown-menu').attr('style', 'display: block !important; width:1px; position:relative; left: -54%; top: 16px;');
  } else {
    jQuery(this).attr('aria-expanded', 'false');  
    jQuery(this).next('.dropdown-menu').attr('style', 'display: none !important;');
  }
	//jQuery(this).next('.dropdown-menu').attr('style', 'display: block !important');
		e.stopPropagation();
	});
	
	//#navbar-main-nav-desktop menu click action
	jQuery('#navbar-main-nav-desktop .dropdown-submenu > a').on("click", function(e) {
	var dropdown = jQuery(this).parent().find(' > .show');
	jQuery('.dropdown-submenu .dropdown-menu').not(dropdown).removeClass('show');
	//jQuery(this).parent().find(' > .show').attr('style', 'display: block !important');
	jQuery(this).next('.dropdown-menu').toggleClass('show');
	//  if ( jQuery(this).next('.dropdown-menu').is( ".show" ) ) {
    if ( jQuery(this).next('.dropdown-menu').css('display') == 'none' ) {
    jQuery(this).attr('aria-expanded', 'true');     
    jQuery(this).next('.dropdown-menu').attr('style', 'display: block !important;');
  } else {
    jQuery(this).attr('aria-expanded', 'false');   
    jQuery(this).next('.dropdown-menu').attr('style', 'display: none !important;');
  }
	//jQuery(this).next('.dropdown-menu').attr('style', 'display: block !important');
		e.stopPropagation();
	});
	
	
	jQuery('.dropdown').on("hidden.bs.dropdown", function() {
		jQuery('.dropdown-menu.show').removeClass('show');
	});
});

//Department Sidebar Navigation
jQuery(document).ready(function(){
var pathArray = window.location.pathname.split('/');
var baseurl = "/"+pathArray[1]+"/";
jQuery( "#left-sidebar .widget-title" ).wrap( "<a id='left-sidebar-title-link' href=" + baseurl + "></a>" );

jQuery("#left-sidebar li").find(".sub-menu").prev().addClass("dropdown-toggle");
jQuery("#left-sidebar li").find(".sub-menu").prev().attr("aria-haspopup","true");
jQuery("#left-sidebar li").find(".sub-menu").prev().attr("aria-expanded","false");
jQuery("#left-sidebar li").find(".sub-menu").prev().attr("data-toggle","dropdown");
//jQuery("#left-sidebar li").find(".sub-menu").find(".sub-menu").css("background-color", "#A9A9A9");
//this code commented out below I was testing with having just the arrow expand the subitems for now left this feature out
//jQuery("#left-sidebar li").find(".sub-menu").prev().after("<a align='right' class='dropdown-toggle' aria-haspopup='true' aria-expanded='false' data-toggle='dropdown-toggle' href='#'></a>");
  jQuery("#left-sidebar li a.dropdown-toggle").click(function(e){
    jQuery(this).parent().find(".sub-menu").first().toggle();
jQuery(this).parent().find(".sub-menu").first().prev().attr('aria-expanded', function (i, attr) {
    return attr == 'true' ? 'false' : 'true'
});   
e.stopPropagation();
    return false;
  });
  
jQuery( "<div class='mobilehamburgermenu'><div class='hamburgertext'>IN THIS SECTION <div class='hamburgercontainer'><span class='hamburger'></span></div></div></div>" ).insertAfter( ".widget_nav_menu a:first" );

  jQuery(".mobilehamburgermenu").click(function(e){
  	  e.stopPropagation();
  jQuery(".widget_nav_menu div:nth-child(3)").toggle();
  if(jQuery('.widget_nav_menu div:nth-child(3):hidden').length === 0)
	{
	 jQuery(".mobilehamburgermenu").css("margin-bottom", "8px");
	}

  });  
  
});

//Used to keep the main navigation menu expanded after navigating to a sub page
jQuery(document).ready(function(){
var menuURL = "";
//function pageLoad() { //this function auto fires at page load
var currentURL = window.location.pathname.toLowerCase();
var currentURLFull = "https://wwwcp.umes.edu" + window.location.pathname.toLowerCase();
jQuery( "#left-sidebar .widget_nav_menu a" ).each(function() {
menuURL = jQuery(this).attr('href').toLowerCase();

if (currentURL == menuURL || currentURLFull == menuURL) {
jQuery(this).parents('.sub-menu').css("display", "block");
jQuery(this).addClass( "active-item" );

jQuery(this).parentsUntil(".menu").find("a").each(function() {
  // your code here
  if (jQuery(this).hasClass('active-item') === true) {
    // end each loop after processing #before
    return false;
  }
  else {

	var attr = jQuery(this).attr('aria-expanded');

	// For some browsers, `attr` is undefined; for others, `attr` is false. Check for both.
	if (typeof attr !== typeof undefined && attr !== false) {
	// Element has this attribute
	if(jQuery(this).next().css('display') == 'block') {	
	jQuery(this).attr('aria-expanded', 'true');
	}
    }
	
    
  }

});

	return;
}
});

//}
//End
});	


jQuery(document).ready(function(){
jQuery(".breadcrumb-item-begin a").attr("href", "https://www.umes.edu");
});	

/*]]>*/