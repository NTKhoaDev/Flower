(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[77,75],{21:function(t,e,n){"use strict";n.d(e,"a",(function(){return r})),n.d(e,"b",(function(){return c}));var o=n(38);const r=t=>!Object(o.a)(t)&&t instanceof Object&&t.constructor===Object;function c(t,e){return r(t)&&e in t}},283:function(t,e,n){"use strict";n.d(e,"a",(function(){return o}));var o=function(){return(o=Object.assign||function(t){for(var e,n=1,o=arguments.length;n<o;n++)for(var r in e=arguments[n])Object.prototype.hasOwnProperty.call(e,r)&&(t[r]=e[r]);return t}).apply(this,arguments)};Object.create,Object.create},284:function(t,e,n){"use strict";function o(t){return t.toLowerCase()}n.d(e,"a",(function(){return a}));var r=[/([a-z0-9])([A-Z])/g,/([A-Z])([A-Z][a-z])/g],c=/[^A-Z0-9]+/gi;function a(t,e){void 0===e&&(e={});for(var n=e.splitRegexp,a=void 0===n?r:n,l=e.stripRegexp,i=void 0===l?c:l,u=e.transform,d=void 0===u?o:u,b=e.delimiter,f=void 0===b?" ":b,p=s(s(t,a,"$1\0$2"),i,"\0"),g=0,v=p.length;"\0"===p.charAt(g);)g++;for(;"\0"===p.charAt(v-1);)v--;return p.slice(g,v).split("\0").map(d).join(f)}function s(t,e,n){return e instanceof RegExp?t.replace(e,n):e.reduce((function(t,e){return t.replace(e,n)}),t)}},288:function(t,e,n){"use strict";n.d(e,"a",(function(){return c}));var o=n(283),r=n(284);function c(t,e){return void 0===e&&(e={}),function(t,e){return void 0===e&&(e={}),Object(r.a)(t,Object(o.a)({delimiter:"."},e))}(t,Object(o.a)({delimiter:"-"},e))}},290:function(t,e,n){"use strict";n.d(e,"a",(function(){return d}));var o=n(5),r=n.n(o),c=n(21),a=n(28),s=n(288),l=n(132);function i(){let t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};const e={};return Object(l.getCSSRules)(t,{selector:""}).forEach(t=>{e[t.key]=t.value}),e}function u(t,e){return t&&e?`has-${Object(s.a)(e)}-${t}`:""}const d=t=>{const e=(t=>{const e=Object(c.a)(t)?t:{style:{}};let n=e.style;return Object(a.a)(n)&&(n=JSON.parse(n)||{}),Object(c.a)(n)||(n={}),{...e,style:n}})(t),n=function(t){var e,n,o,a,s,l,d;const{backgroundColor:b,textColor:f,gradient:p,style:g}=t,v=u("background-color",b),m=u("color",f),O=function(t){if(t)return`has-${t}-gradient-background`}(p),j=O||(null==g||null===(e=g.color)||void 0===e?void 0:e.gradient);return{className:r()(m,O,{[v]:!j&&!!v,"has-text-color":f||(null==g||null===(n=g.color)||void 0===n?void 0:n.text),"has-background":b||(null==g||null===(o=g.color)||void 0===o?void 0:o.background)||p||(null==g||null===(a=g.color)||void 0===a?void 0:a.gradient),"has-link-color":Object(c.a)(null==g||null===(s=g.elements)||void 0===s?void 0:s.link)?null==g||null===(l=g.elements)||void 0===l||null===(d=l.link)||void 0===d?void 0:d.color:void 0}),style:i({color:(null==g?void 0:g.color)||{}})}}(e),o=function(t){var e;const n=(null===(e=t.style)||void 0===e?void 0:e.border)||{};return{className:function(t){var e;const{borderColor:n,style:o}=t,c=n?u("border-color",n):"";return r()({"has-border-color":n||(null==o||null===(e=o.border)||void 0===e?void 0:e.color),borderColorClass:c})}(t),style:i({border:n})}}(e),s=function(t){var e;return{className:void 0,style:i({spacing:(null===(e=t.style)||void 0===e?void 0:e.spacing)||{}})}}(e),l=(t=>{const e=Object(c.a)(t.style.typography)?t.style.typography:{},n=Object(a.a)(e.fontFamily)?e.fontFamily:"";return{className:t.fontFamily?`has-${t.fontFamily}-font-family`:n,style:{fontSize:t.fontSize?`var(--wp--preset--font-size--${t.fontSize})`:e.fontSize,fontStyle:e.fontStyle,fontWeight:e.fontWeight,letterSpacing:e.letterSpacing,lineHeight:e.lineHeight,textDecoration:e.textDecoration,textTransform:e.textTransform}}})(e);return{className:r()(l.className,n.className,o.className,s.className),style:{...l.style,...n.style,...o.style,...s.style}}}},38:function(t,e,n){"use strict";n.d(e,"a",(function(){return o}));const o=t=>null===t},425:function(t,e){},462:function(t,e,n){"use strict";n.r(e),n.d(e,"Block",(function(){return p}));var o=n(0),r=n(1),c=n(5),a=n.n(c),s=n(61),l=n(290),i=n(147),u=n(109);n(425);const d=t=>({width:t/5*100+"%"}),b=t=>{let{parentClassName:e}=t;const n=d(0);return Object(o.createElement)("div",{className:a()("wc-block-components-product-rating__norating-container",e+"-product-rating__norating-container")},Object(o.createElement)("div",{className:"wc-block-components-product-rating__norating",role:"img"},Object(o.createElement)("span",{style:n})),Object(o.createElement)("span",null,Object(r.__)("No Reviews","woocommerce")))},f=t=>{const{rating:e,reviews:n,parentClassName:c}=t,s=d(e),l=Object(r.sprintf)(
/* translators: %f is referring to the average rating value */
Object(r.__)("Rated %f out of 5","woocommerce"),e),i={__html:Object(r.sprintf)(
/* translators: %1$s is referring to the average rating value, %2$s is referring to the number of ratings */
Object(r._n)("Rated %1$s out of 5 based on %2$s customer rating","Rated %1$s out of 5 based on %2$s customer ratings",n,"woocommerce"),Object(r.sprintf)('<strong class="rating">%f</strong>',e),Object(r.sprintf)('<span class="rating">%d</span>',n))};return Object(o.createElement)("div",{className:a()("wc-block-components-product-rating__stars",c+"__product-rating__stars"),role:"img","aria-label":l},Object(o.createElement)("span",{style:s,dangerouslySetInnerHTML:i}))},p=t=>{const{textAlign:e,shouldDisplayMockedReviewsWhenProductHasNoReviews:n}=t,r=Object(l.a)(t),{parentClassName:c}=Object(s.useInnerBlockLayoutContext)(),{product:i}=Object(s.useProductDataContext)(),d=(t=>{const e=parseFloat(t.average_rating);return Number.isFinite(e)&&e>0?e:0})(i),p=(t=>{const e=Object(u.a)(t.review_count)?t.review_count:parseInt(t.review_count,10);return Number.isFinite(e)&&e>0?e:0})(i),g=a()(r.className,"wc-block-components-product-rating",{[c+"__product-rating"]:c,["has-text-align-"+e]:e}),v=n?Object(o.createElement)(b,{parentClassName:c}):null,m=p?Object(o.createElement)(f,{rating:d,reviews:p,parentClassName:c}):v;return Object(o.createElement)("div",{className:g,style:r.style},Object(o.createElement)("div",{className:"wc-block-components-product-rating-stars__container"},m))};e.default=Object(i.withProductDataContext)(p)}}]);