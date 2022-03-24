/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/themes.todo.js":
/*!*************************************!*\
  !*** ./resources/js/themes.todo.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "themes": () => (/* binding */ themes)
/* harmony export */ });
var themes = [{
  name: "Cool Dark Theme",
  slug: "cool-dark-theme",
  colors: [{
    name: "primary",
    hex: "#321b47"
  }, {
    name: "primary-dark",
    hex: "#111a3b"
  }, {
    name: "primary-light",
    hex: "#a53e86"
  }, {
    name: "secondary",
    hex: "#f5487"
  }, {
    name: "secondary-dark",
    hex: "#c7417b"
  }, {
    name: "secondary-darkest",
    hex: "#1a0a11"
  }, {
    name: "text",
    hex: "#eee"
  }]
}, {
  name: "Greenish Theme",
  slug: "greenish-theme",
  colors: [{
    name: "primary",
    hex: "#cde4b8"
  }, {
    name: "primary-light",
    hex: "#eee5c4"
  }, {
    name: "primary-dark",
    hex: "#5ac179"
  }, {
    name: "secondary",
    hex: "#0ab780"
  }, {
    name: "secondary-dark",
    hex: "#38be84"
  }, {
    name: "secondary-darkest",
    hex: "#174d36"
  }, {
    name: "text",
    hex: "#111111"
  }]
}, {
  name: "Cute Kawaii Theme",
  slug: "kawaii-theme",
  colors: [{
    name: "primary",
    hex: "#FFC2FF"
  }, {
    name: "primary-light",
    hex: "#FAF0FF"
  }, {
    name: "primary-dark",
    hex: "#A488B3"
  }, {
    name: "secondary",
    hex: "#9988B3"
  }, {
    name: "secondary-dark",
    hex: "#6B5F7D"
  }, {
    name: "secondary-darkest",
    hex: "#FFC2FF"
  }, {
    name: "text",
    hex: "#111111"
  }]
}];

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!**********************************!*\
  !*** ./resources/js/app.todo.js ***!
  \**********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _themes_todo_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./themes.todo.js */ "./resources/js/themes.todo.js");
/**
 * @author: Frederick Roegiers
 */

var themeSwitcher = {
  init: function init() {
    // get defined themes from themes module
    this.themes = _themes_todo_js__WEBPACK_IMPORTED_MODULE_0__.themes;
    this.root = document.documentElement; // set active theme get from local storage

    this.activeThemeName = localStorage.getItem("activeThemeName") || "cool-dark-theme";
    this.cacheElements();
    this.registerListeners(); // populate dropdown box

    this.populateSelect(); // change theme, based on active theme

    this.changeDOMTheme();
  },
  cacheElements: function cacheElements() {
    this.$selectSwitch = document.querySelector("#theme-switcher");
  },
  registerListeners: function registerListeners() {
    var _this = this;

    this.$selectSwitch.addEventListener("change", function (e) {
      // change active theme here
      _this.activeThemeName = e.target.value; // change in local storage

      localStorage.setItem("activeThemeName", e.target.value); // other theme, so change the dom colors

      _this.changeDOMTheme();
    });
  },
  populateSelect: function populateSelect() {
    var _this2 = this;

    var options = _themes_todo_js__WEBPACK_IMPORTED_MODULE_0__.themes.map(function (theme) {
      return "<option value=\"".concat(theme.slug, "\" ").concat(theme.slug == _this2.activeThemeName ? "selected" : "", ">\n         ").concat(theme.name, "\n     </option>");
    });
    this.$selectSwitch.innerHTML = options.join("");
  },
  changeDOMTheme: function changeDOMTheme() {
    var _this3 = this;

    var activeTheme = this.themes.find(function (theme) {
      return theme.slug == _this3.activeThemeName;
    });
    activeTheme.colors.forEach(function (color) {
      _this3.root.style.setProperty("--color-".concat(color.name), color.hex);
    });
  }
};
themeSwitcher.init();
})();

/******/ })()
;