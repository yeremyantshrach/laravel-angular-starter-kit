webpackJsonp([2],{

/***/ "../../../../../resources/assets/src/app/auth/forgot/forgot-routing.module.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_router__ = __webpack_require__("../../../router/@angular/router.es5.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__forgot_component__ = __webpack_require__("../../../../../resources/assets/src/app/auth/forgot/forgot.component.ts");
/* unused harmony export ForgotRoutes */
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ForgotRoute; });


var ForgotRoutes = [
    { path: '', component: __WEBPACK_IMPORTED_MODULE_1__forgot_component__["a" /* ForgotComponent */] }
];
var ForgotRoute = __WEBPACK_IMPORTED_MODULE_0__angular_router__["a" /* RouterModule */].forChild(ForgotRoutes);
//# sourceMappingURL=forgot-routing.module.js.map

/***/ }),

/***/ "../../../../../resources/assets/src/app/auth/forgot/forgot.component.css":
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__("../../../../css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "", ""]);

// exports


/*** EXPORTS FROM exports-loader ***/
module.exports = module.exports.toString();

/***/ }),

/***/ "../../../../../resources/assets/src/app/auth/forgot/forgot.component.html":
/***/ (function(module, exports) {

module.exports = "<p>\r\n  forgot works!\r\n</p>\r\n"

/***/ }),

/***/ "../../../../../resources/assets/src/app/auth/forgot/forgot.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("../../../core/@angular/core.es5.js");
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ForgotComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ForgotComponent = (function () {
    function ForgotComponent() {
    }
    ForgotComponent.prototype.ngOnInit = function () {
    };
    return ForgotComponent;
}());
ForgotComponent = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["c" /* Component */])({
        selector: 'app-forgot',
        template: __webpack_require__("../../../../../resources/assets/src/app/auth/forgot/forgot.component.html"),
        styles: [__webpack_require__("../../../../../resources/assets/src/app/auth/forgot/forgot.component.css")]
    }),
    __metadata("design:paramtypes", [])
], ForgotComponent);

//# sourceMappingURL=forgot.component.js.map

/***/ }),

/***/ "../../../../../resources/assets/src/app/auth/forgot/forgot.module.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("../../../core/@angular/core.es5.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_common__ = __webpack_require__("../../../common/@angular/common.es5.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__forgot_routing_module__ = __webpack_require__("../../../../../resources/assets/src/app/auth/forgot/forgot-routing.module.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__forgot_component__ = __webpack_require__("../../../../../resources/assets/src/app/auth/forgot/forgot.component.ts");
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ForgotModule", function() { return ForgotModule; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};




var ForgotModule = (function () {
    function ForgotModule() {
    }
    return ForgotModule;
}());
ForgotModule = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["b" /* NgModule */])({
        imports: [
            __WEBPACK_IMPORTED_MODULE_1__angular_common__["a" /* CommonModule */],
            __WEBPACK_IMPORTED_MODULE_2__forgot_routing_module__["a" /* ForgotRoute */]
        ],
        declarations: [
            __WEBPACK_IMPORTED_MODULE_3__forgot_component__["a" /* ForgotComponent */]
        ]
    })
], ForgotModule);

//# sourceMappingURL=forgot.module.js.map

/***/ })

});
//# sourceMappingURL=2.chunk.js.map