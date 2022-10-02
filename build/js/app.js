/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_menuMobile__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/menuMobile */ "./assets/js/components/menuMobile.js");
/* harmony import */ var _components_insertIcons__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/insertIcons */ "./assets/js/components/insertIcons.js");
/* harmony import */ var _components_menuSticky__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/menuSticky */ "./assets/js/components/menuSticky.js");
/* harmony import */ var _components_hashTarget__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/hashTarget */ "./assets/js/components/hashTarget.js");
/* harmony import */ var _components_collapsible__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/collapsible */ "./assets/js/components/collapsible.js");
/* harmony import */ var _components_aside__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./components/aside */ "./assets/js/components/aside.js");
/* harmony import */ var _components_catalogModal__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./components/catalogModal */ "./assets/js/components/catalogModal.js");
/* harmony import */ var _components_copyText__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./components/copyText */ "./assets/js/components/copyText.js");
var $ = jQuery.noConflict();








jQuery(function ($) {
  $(document).ready(function () {
    Object(_components_menuMobile__WEBPACK_IMPORTED_MODULE_0__["default"])($); // Menu Mobile: Show menu and hidde    

    Object(_components_insertIcons__WEBPACK_IMPORTED_MODULE_1__["default"])($); // Insert icons svg   

    Object(_components_menuSticky__WEBPACK_IMPORTED_MODULE_2__["default"])($); // Insert icons svg 

    Object(_components_hashTarget__WEBPACK_IMPORTED_MODULE_3__["default"])($); // Hash target

    Object(_components_collapsible__WEBPACK_IMPORTED_MODULE_4__["default"])($); // Temario

    Object(_components_aside__WEBPACK_IMPORTED_MODULE_5__["default"])($); // Set offset aside

    Object(_components_catalogModal__WEBPACK_IMPORTED_MODULE_6__["default"])($); // Carga el nombre del programa como valor por defecto en el input del form

    Object(_components_copyText__WEBPACK_IMPORTED_MODULE_7__["default"])($);
  });
});

/***/ }),

/***/ "./assets/js/components/aside.js":
/*!***************************************!*\
  !*** ./assets/js/components/aside.js ***!
  \***************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var aside = function aside($) {
  if ($('.aside').length) {
    var aside_offset = $('.aside').offset().top;
    var aside_offset_move_top = Number(aside_offset) - 212;
    document.documentElement.style.setProperty('--offset-aside', "-".concat(aside_offset_move_top, "px"));
    console.log($('h1').offset().top);
  }
  /*Thumbnail*/


  var aside_content = document.querySelector(".aside-content");

  if (!!aside_content) {
    aside_content = aside_content.offsetTop;

    if (window.matchMedia('(min-width: 1024px)').matches) {
      $(window).scroll(function () {
        if (window.pageYOffset >= aside_content) {
          $('.single #single-thumbnail').slideUp();
        } else {
          $('.single #single-thumbnail').slideDown();
        }
      });
    }
  }
};

/* harmony default export */ __webpack_exports__["default"] = (aside);

/***/ }),

/***/ "./assets/js/components/catalogModal.js":
/*!**********************************************!*\
  !*** ./assets/js/components/catalogModal.js ***!
  \**********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var catalogModal = function catalogModal($) {
  $('.catalog-program-callaction button').click(function () {
    /* console.log($(this).data('program')); */

    /*   $('#evf-858-field_VaWwo29faT-9').val($(this).data('program')) */

    /*     $('#evf-858-field_VaWwo29faT-9').attr('disabled', 'disabled'); */
    $('#evf-858-field_foZdqpMmCL-8').val("Hola estoy interesad@, en el Programa: ".concat($(this).data('program'), " - gracias."));
    $('#catalog-modal-wrap').toggleClass('catalog-modal-wrap-active');
    $('html, body').css({
      overflow: 'hidden',
      height: '100%'
    });
    $('#catalog-modal-close').click(function () {
      $('#catalog-modal-wrap').removeClass('catalog-modal-wrap-active');
      $('html, body').css({
        overflow: 'auto',
        height: 'auto'
      });
    });
    $('#catalog-modal-close-wrap').click(function () {
      $('#catalog-modal-wrap').removeClass('catalog-modal-wrap-active');
      $('html, body').css({
        overflow: 'auto',
        height: 'auto'
      });
    });
  });
};

/* harmony default export */ __webpack_exports__["default"] = (catalogModal);

/***/ }),

/***/ "./assets/js/components/collapsible.js":
/*!*********************************************!*\
  !*** ./assets/js/components/collapsible.js ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var collapsible = function collapsible($) {
  $('.collapsible .collapsible-item').on('click', function () {
    $(this).toggleClass('active');
  });
};

/* harmony default export */ __webpack_exports__["default"] = (collapsible);

/***/ }),

/***/ "./assets/js/components/copyText.js":
/*!******************************************!*\
  !*** ./assets/js/components/copyText.js ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var copyText = function copyText($) {
  $('.copy-input').click('click', function (e) {
    var elemento = e.currentTarget.querySelector('.copy-text').textContent;
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val(elemento).select();
    document.execCommand("copy");
    $temp.remove();
    e.currentTarget.classList.add('copied');
    setTimeout(function () {
      e.currentTarget.classList.remove('copied');
    }, 4000);
  });
};

/* harmony default export */ __webpack_exports__["default"] = (copyText);

/***/ }),

/***/ "./assets/js/components/hashTarget.js":
/*!********************************************!*\
  !*** ./assets/js/components/hashTarget.js ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var hashTarget = function hashTarget($) {
  var lc = location;
  $('a[href*=#]:not([href=#])').click(function () {
    if (lc.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && lc.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

      if (target.length) {
        if ($('.home').length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 95
          }, 600);
        } else {
          $('html,body').animate({
            scrollTop: target.offset().top - 135
          }, 600);
        }

        return false;
      }
    }
  });
};

/* harmony default export */ __webpack_exports__["default"] = (hashTarget);

/***/ }),

/***/ "./assets/js/components/insertIcons.js":
/*!*********************************************!*\
  !*** ./assets/js/components/insertIcons.js ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var insertIcons = function insertIcons($) {
  /* ACCOUNT PAGE */
  //desktop
  $('header nav ul li.menu-item-has-children > a').append("<span class=\"dropdown\" ><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M3.8 5.6l8.3 8.3 8.3-8.3c.8-.8 2.2-.8 3 0s.8 2.2 0 3l-9.8 9.8c-.8.8-2.2.8-3 0L.8 8.6a2.18 2.18 0 0 1 0-3 2.18 2.18 0 0 1 3 0z\" fill-rule=\"evenodd\" /></svg></span>");
  $('a[target="_blank"]._blank').append("<svg viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M15.75 2.25L21 2.25C21.1989 2.25 21.3897 2.32902 21.5303 2.46967C21.671 2.61032 21.75 2.80109 21.75 3V8.25C21.75 8.66421 21.4142 9 21 9C20.5858 9 20.25 8.66421 20.25 8.25V4.81066L8.03033 17.0303C7.73744 17.3232 7.26256 17.3232 6.96967 17.0303C6.67678 16.7374 6.67678 16.2626 6.96967 15.9697L19.1893 3.75L15.75 3.75C15.3358 3.75 15 3.41421 15 3C15 2.58579 15.3358 2.25 15.75 2.25ZM5.25 6.75C4.42157 6.75 3.75 7.42157 3.75 8.25V18.75C3.75 19.5784 4.42157 20.25 5.25 20.25H15.75C16.5784 20.25 17.25 19.5784 17.25 18.75V10.5C17.25 10.0858 17.5858 9.75 18 9.75C18.4142 9.75 18.75 10.0858 18.75 10.5V18.75C18.75 20.4069 17.4069 21.75 15.75 21.75H5.25C3.59315 21.75 2.25 20.4069 2.25 18.75V8.25C2.25 6.59315 3.59315 5.25 5.25 5.25H13.5C13.9142 5.25 14.25 5.58579 14.25 6C14.25 6.41421 13.9142 6.75 13.5 6.75H5.25Z\" fill=\"#0F172A\"/></svg>");
};

/* harmony default export */ __webpack_exports__["default"] = (insertIcons);

/***/ }),

/***/ "./assets/js/components/menuMobile.js":
/*!********************************************!*\
  !*** ./assets/js/components/menuMobile.js ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var menuMobile = function menuMobile($) {
  // Shorthand 
  var Id = document.getElementById.bind(document);
  var mobileNav = Id('mobile-nav-wrap');
  var nav_toggle_iconburger = Id('nav-toggle-iconburger');
  $('#nav-toggle').on('click', function () {
    nav_toggle_iconburger.classList.toggle('nav-toggle-active');
    mobileNav.classList.toggle('nav-active');
    document.body.classList.toggle('disable-scrolling');
  });
  /*  $('#mobile-menu li').on('click',()=>{ 
       navToggle.classList.toggle('nav-toggle-active')
       mobileNav.classList.toggle('nav-active')  
   }) */

  $('#mobile-menu li:not(.menu-item-has-children)').on('click', function () {
    navToggle.classList.toggle('nav-toggle-active');
    mobileNav.classList.toggle('nav-active');
  });
  $('#mobile-menu li.menu-item-has-children').on('click', function (e) {
    $(e.currentTarget).toggleClass('open-submenu');
    $(e.currentTarget).find('ul.sub-menu').toggleClass('sub-menu-active');
  });
  $('#mobile-nav li.menu-item-has-children > a').on('click', function (e) {
    if (e.target.className == 'dropdown' || e.target.parentNode.className == 'dropdown') {
      e.preventDefault();
      $('.header-menu li.menu-item-has-children .sub-menu').toggleClass('dropdown-active');
    }
  });
  $('#buy-wrap ul li.menu-item-has-children').on('click', function (e) {
    $(e.currentTarget).toggleClass('open-submenu');
    $(e.currentTarget).find('ul.sub-menu').toggleClass('sub-menu-active');
  });
  $('#buy-wrap ul li.menu-item-has-children > a ').on('click', function (e) {
    if (e.target.className == 'dropdown' || e.target.parentNode.className == 'dropdown') {
      e.preventDefault();
    }
  });
  $('.header-menu-secondary li.search > a, #search-home-close ').on('click', function (e) {
    e.preventDefault();
    /*        $('.social-media li.search > a').toggleClass('close') */

    $('.search-home').toggleClass('search-home-active');
  });
};

/* harmony default export */ __webpack_exports__["default"] = (menuMobile);

/***/ }),

/***/ "./assets/js/components/menuSticky.js":
/*!********************************************!*\
  !*** ./assets/js/components/menuSticky.js ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var menuSticky = function menuSticky($) {
  var stickyOffset = $('.header').offset().top;
  console.log(stickyOffset, 'header');
  $(window).scroll(function () {
    var sticky = $('.header'),
        scroll = $(window).scrollTop();
    console.log(scroll, 'scroll');

    if (stickyOffset >= scroll) {
      /*    if (80 <= scroll){  */

      /*     sticky.addClass('fixed',4000).slideDown();   */
      document.documentElement.style.setProperty('--header-height', "80px");
      $('.header-logo').removeClass('header-logo--sticky');
    } else {
      document.documentElement.style.setProperty('--header-height', "60px");
      $('.header-logo').addClass('header-logo--sticky');
      /*  sticky.removeClass('fixed'); */

      /*    $('.header-wrap').removeClass('sticky-header'); */
    }
  });
  /* 
      function scrollingFromTop() { */

  /* Header */

  /*    if (window.pageYOffset >= sticky) {
       navbar.classList.add("sticky-header")
       navbar_sticky_mobile.classList.add("sticky-mobile") 
       document.documentElement.style.setProperty('--header-height',`50px`);
      } else {
       navbar.classList.remove("sticky-header");
       navbar_sticky_mobile.classList.remove("sticky-mobile");   
         if (window.matchMedia('(max-width: 768px)').matches){
          document.documentElement.style.setProperty('--header-height',`148px`); 
        } else { 
          document.documentElement.style.setProperty('--header-height',`180px`);
        }
     } */

  /*  Menu tabs */

  var menutabs = document.getElementById("menutabs");
  var is_menutabs = false;
  var menutabs_offsettop = null;

  if (!!menutabs) {
    menutabs_offsettop = is_menutabs.offsetTop;
  }

  if (is_menutabs) {
    if (window.pageYOffset >= menutabs_offsettop) {
      menutabs.classList.add("menutabs-sticky");
    } else {
      menutabs.classList.remove("menutabs-sticky");
    }
  }
  /* 
      } */

};

/* harmony default export */ __webpack_exports__["default"] = (menuSticky);

/***/ }),

/***/ "./assets/scss/app.scss":
/*!******************************!*\
  !*** ./assets/scss/app.scss ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./assets/scss/blocks/socialmedia.scss":
/*!*********************************************!*\
  !*** ./assets/scss/blocks/socialmedia.scss ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*********************************************************************************************!*\
  !*** multi ./assets/js/app.js ./assets/scss/app.scss ./assets/scss/blocks/socialmedia.scss ***!
  \*********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp\htdocs\wordpress\escuela\wp-content\themes\escuela\assets\js\app.js */"./assets/js/app.js");
__webpack_require__(/*! C:\xampp\htdocs\wordpress\escuela\wp-content\themes\escuela\assets\scss\app.scss */"./assets/scss/app.scss");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\wordpress\escuela\wp-content\themes\escuela\assets\scss\blocks\socialmedia.scss */"./assets/scss/blocks/socialmedia.scss");


/***/ })

/******/ });