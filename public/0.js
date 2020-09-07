(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Calculator.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/Calculator.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  props: ['amount', 'email', 'reference', 'callback', 'reference', 'action', 'id'],
  data: function data() {
    return {
      stock: 1,
      token: _token
    };
  },
  methods: {
    decreaseStock: function decreaseStock() {
      if (this.stock == 1) return;

      if (this.stock < 1) {
        this.stock = 1;
        return;
      }

      ;
      this.stock = this.stock - 1;
    },
    increaseStock: function increaseStock() {
      this.stock = this.stock + 1;
    }
  },
  computed: {
    totalAmount: function totalAmount() {
      return this.amount * this.stock;
    },
    sentTotalAmount: function sentTotalAmount() {
      return this.amount * this.stock * 100;
    },
    meta: function meta() {
      return {
        stock: this.stock,
        projectid: this.id
      };
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Calculator.vue?vue&type=template&id=625bc6ad&":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/Calculator.vue?vue&type=template&id=625bc6ad& ***!
  \*************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "card-body pb-1" }, [
      _c("div", { staticClass: "row justify-content-center" }, [
        _c("div", { staticClass: "col-md-8" }, [
          _c("div", { staticClass: "input-group mb-3" }, [
            _c(
              "div",
              {
                staticClass: "input-group-prepend pointer",
                on: { click: _vm.decreaseStock }
              },
              [_c("span", { staticClass: "input-group-text" }, [_vm._v("-")])]
            ),
            _vm._v(" "),
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.stock,
                  expression: "stock"
                }
              ],
              staticClass: "form-control",
              attrs: {
                type: "text",
                placeholder: "Number of stock",
                readonly: ""
              },
              domProps: { value: _vm.stock },
              on: {
                input: function($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.stock = $event.target.value
                }
              }
            }),
            _vm._v(" "),
            _c(
              "div",
              {
                staticClass: "input-group-append pointer",
                on: { click: _vm.increaseStock }
              },
              [_c("span", { staticClass: "input-group-text" }, [_vm._v("+")])]
            )
          ])
        ])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "card-body pt-3" }, [
      _c("div", { staticClass: "upload-benefits" }, [
        _vm._m(0),
        _vm._v(" "),
        _c("p", [
          _c("i", { staticClass: "fa fa-check-circle text-success mr-2" }),
          _vm._v(" "),
          _c("strong", [_vm._v("Number of Stocks:")]),
          _vm._v(" " + _vm._s(_vm.stock) + "\n            ")
        ]),
        _vm._v(" "),
        _c("p", [
          _c("i", { staticClass: "fa fa-check-circle text-success mr-2" }),
          _vm._v(" "),
          _c("strong", [_vm._v("Amount:")]),
          _vm._v(" ₦ " + _vm._s(_vm.totalAmount) + "\n            ")
        ])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "card-body pt-1" }, [
      _c(
        "form",
        {
          attrs: {
            method: "POST",
            action: _vm.action,
            "accept-charset": "UTF-8"
          }
        },
        [
          _c("input", {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.email,
                expression: "email"
              }
            ],
            attrs: { type: "hidden", name: "email" },
            domProps: { value: _vm.email },
            on: {
              input: function($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.email = $event.target.value
              }
            }
          }),
          _vm._v(" "),
          _c("input", {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.token,
                expression: "token"
              }
            ],
            attrs: { type: "hidden", name: "_token" },
            domProps: { value: _vm.token },
            on: {
              input: function($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.token = $event.target.value
              }
            }
          }),
          _vm._v(" "),
          _c("input", {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.sentTotalAmount,
                expression: "sentTotalAmount"
              }
            ],
            attrs: { type: "hidden", name: "amount" },
            domProps: { value: _vm.sentTotalAmount },
            on: {
              input: function($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.sentTotalAmount = $event.target.value
              }
            }
          }),
          _vm._v(" "),
          _c("input", {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.reference,
                expression: "reference"
              }
            ],
            attrs: { type: "hidden", name: "reference" },
            domProps: { value: _vm.reference },
            on: {
              input: function($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.reference = $event.target.value
              }
            }
          }),
          _vm._v(" "),
          _c("input", {
            attrs: { type: "hidden", name: "metadata" },
            domProps: { value: JSON.stringify(_vm.meta) }
          }),
          _vm._v(" "),
          _c("input", {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.callback,
                expression: "callback"
              }
            ],
            attrs: { type: "hidden", name: "callback_url" },
            domProps: { value: _vm.callback },
            on: {
              input: function($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.callback = $event.target.value
              }
            }
          }),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "btn btn-primary btn-block shadow text-white",
              attrs: { type: "submit" }
            },
            [
              _vm._v(
                "\n              Pay ₦ " +
                  _vm._s(_vm.totalAmount) +
                  "\n          "
              )
            ]
          )
        ]
      )
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("h6", [_c("strong", [_vm._v("Order Summary")])])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return normalizeComponent; });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () { injectStyles.call(this, this.$root.$options.shadowRoot) }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functioal component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ "./resources/js/components/Calculator.vue":
/*!************************************************!*\
  !*** ./resources/js/components/Calculator.vue ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Calculator_vue_vue_type_template_id_625bc6ad___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Calculator.vue?vue&type=template&id=625bc6ad& */ "./resources/js/components/Calculator.vue?vue&type=template&id=625bc6ad&");
/* harmony import */ var _Calculator_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Calculator.vue?vue&type=script&lang=js& */ "./resources/js/components/Calculator.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Calculator_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Calculator_vue_vue_type_template_id_625bc6ad___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Calculator_vue_vue_type_template_id_625bc6ad___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Calculator.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/Calculator.vue?vue&type=script&lang=js&":
/*!*************************************************************************!*\
  !*** ./resources/js/components/Calculator.vue?vue&type=script&lang=js& ***!
  \*************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Calculator_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./Calculator.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Calculator.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Calculator_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/Calculator.vue?vue&type=template&id=625bc6ad&":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/Calculator.vue?vue&type=template&id=625bc6ad& ***!
  \*******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Calculator_vue_vue_type_template_id_625bc6ad___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Calculator.vue?vue&type=template&id=625bc6ad& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Calculator.vue?vue&type=template&id=625bc6ad&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Calculator_vue_vue_type_template_id_625bc6ad___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Calculator_vue_vue_type_template_id_625bc6ad___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);