define(["exports","metal/src/metal","metal-dom/src/all/dom","../cacheable/Cacheable"],function(e,t,n,r){"use strict";function o(e){return e&&e.__esModule?e:{"default":e}}function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function u(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}function a(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}Object.defineProperty(e,"__esModule",{value:!0});var l=o(r),c=function(){function e(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}return function(t,n,r){return n&&e(t.prototype,n),r&&e(t,r),t}}(),f=function v(e,t,n){null===e&&(e=Function.prototype);var r=Object.getOwnPropertyDescriptor(e,t);if(void 0===r){var o=Object.getPrototypeOf(e);return null===o?void 0:v(o,t,n)}if("value"in r)return r.value;var i=r.get;if(void 0!==i)return i.call(n)},s=function(e){function r(){i(this,r);var e=u(this,(r.__proto__||Object.getPrototypeOf(r)).call(this));return e.id=e.makeId_((0,t.getUid)()),e.metas=null,e.title=null,e}return a(r,e),c(r,[{key:"activate",value:function(){}},{key:"beforeActivate",value:function(){}},{key:"beforeDeactivate",value:function(){}},{key:"beforeUpdateHistoryPath",value:function(e){return e}},{key:"beforeUpdateHistoryState",value:function(e){return e}},{key:"deactivate",value:function(){}},{key:"disposeInternal",value:function(){f(r.prototype.__proto__||Object.getPrototypeOf(r.prototype),"disposeInternal",this).call(this)}},{key:"evaluateScripts",value:function(e){return Object.keys(e).forEach(function(t){e[t].activeChild&&n.globalEval.runScriptsInElement(e[t].activeChild)}),Promise.resolve()}},{key:"evaluateStyles",value:function(){return Promise.resolve()}},{key:"flip",value:function(e){var t=this,n=[];return Object.keys(e).forEach(function(r){var o=e[r],i=o.show(t.id);n.push(i)}),Promise.all(n)}},{key:"getId",value:function(){return this.id}},{key:"getMetas",value:function(){return this.metas}},{key:"getSurfaceContent",value:function(){}},{key:"getTitle",value:function(){return this.title}},{key:"load",value:function(){return Promise.resolve()}},{key:"makeId_",value:function(e){return"screen_"+e}},{key:"setId",value:function(e){this.id=e}},{key:"setMetas",value:function(e){this.metas=e}},{key:"setTitle",value:function(e){this.title=e}},{key:"toString",value:function(){return this.id}}]),r}(l["default"]);s.isImplementedBy=function(e){return e instanceof s},e["default"]=s});