/**
 * 2017 IQIT-COMMERCE.COM
 *
 * NOTICE OF LICENSE
 *
 * This file is licenced under the Software License Agreement.
 * With the purchase or the installation of the software in your application
 * you accept the licence agreement
 *
 *  @author    IQIT-COMMERCE.COM <support@iqit-commerce.com>
 *  @copyright 2017 IQIT-COMMERCE.COM
 *  @license   Commercial license (You can not resell or redistribute this software)
 *
 */


/**!
 * Sortable
 * @author  RubaXa   <trash@rubaxa.org>
 * @license MIT
 */
!function(a){"use strict";"function"==typeof define&&define.amd?define(a):"undefined"!=typeof module&&"undefined"!=typeof module.exports?module.exports=a():"undefined"!=typeof Package?Sortable=a():window.Sortable=a()}(function(){"use strict";function F(a,b){if(!a||!a.nodeType||1!==a.nodeType)throw"Sortable: `el` must be HTMLElement, and not "+{}.toString.call(a);this.el=a,this.options=b=X({},b),a[t]=this;var c={group:Math.random(),sort:!0,disabled:!1,store:null,handle:null,scroll:!0,scrollSensitivity:30,scrollSpeed:10,draggable:/[uo]l/i.test(a.nodeName)?"li":">*",ghostClass:"sortable-ghost",chosenClass:"sortable-chosen",ignore:"a, img",filter:null,animation:0,setData:function(a,b){a.setData("Text",b.textContent)},dropBubble:!1,dragoverBubble:!1,dataIdAttr:"data-id",delay:0,forceFallback:!1,fallbackClass:"sortable-fallback",fallbackOnBody:!1};for(var d in c)!(d in b)&&(b[d]=c[d]);E(b);for(var e in this)"_"===e.charAt(0)&&(this[e]=this[e].bind(this));this.nativeDraggable=!b.forceFallback&&x,J(a,"mousedown",this._onTapStart),J(a,"touchstart",this._onTapStart),this.nativeDraggable&&(J(a,"dragover",this),J(a,"dragenter",this)),C.push(this._onDragOver),b.store&&this.sort(b.store.get(this))}function G(b){d&&d.state!==b&&(M(d,"display",b?"none":""),!b&&d.state&&e.insertBefore(d,a),d.state=b)}function H(a,b,c){if(a){c=c||v;do if(">*"===b&&a.parentNode===c||V(a,b))return a;while(a="host"in a?a.host:a.parentNode)}return null}function I(a){a.dataTransfer&&(a.dataTransfer.dropEffect="move"),a.preventDefault()}function J(a,b,c){a.addEventListener(b,c,!1)}function K(a,b,c){a.removeEventListener(b,c,!1)}function L(a,b,c){if(a)if(a.classList)a.classList[c?"add":"remove"](b);else{var d=(" "+a.className+" ").replace(s," ").replace(" "+b+" "," ");a.className=(d+(c?" "+b:"")).replace(s," ")}}function M(a,b,c){var d=a&&a.style;if(d){if(void 0===c)return v.defaultView&&v.defaultView.getComputedStyle?c=v.defaultView.getComputedStyle(a,""):a.currentStyle&&(c=a.currentStyle),void 0===b?c:c[b];b in d||(b="-webkit-"+b),d[b]=c+("string"==typeof c?"":"px")}}function N(a,b,c){if(a){var d=a.getElementsByTagName(b),e=0,f=d.length;if(c)for(;e<f;e++)c(d[e],e);return d}return[]}function O(a,b,c,e,f,g,h){var i=v.createEvent("Event"),j=(a||b[t]).options,k="on"+c.charAt(0).toUpperCase()+c.substr(1);i.initEvent(c,!0,!0),i.to=b,i.from=f||b,i.item=e||b,i.clone=d,i.oldIndex=g,i.newIndex=h,b.dispatchEvent(i),j[k]&&j[k].call(a,i)}function P(a,b,c,d,e,f){var g,j,h=a[t],i=h.options.onMove;return g=v.createEvent("Event"),g.initEvent("move",!0,!0),g.to=b,g.from=a,g.dragged=c,g.draggedRect=d,g.related=e||b,g.relatedRect=f||b.getBoundingClientRect(),a.dispatchEvent(g),i&&(j=i.call(h,g)),j}function Q(a){a.draggable=!1}function R(){z=!1}function S(a,b){var c=a.lastElementChild,d=c.getBoundingClientRect();return(b.clientY-(d.top+d.height)>5||b.clientX-(d.right+d.width)>5)&&c}function T(a){for(var b=a.tagName+a.className+a.src+a.href+a.textContent,c=b.length,d=0;c--;)d+=b.charCodeAt(c);return d.toString(36)}function U(a,b){var c=0;if(!a||!a.parentNode)return-1;for(;a&&(a=a.previousElementSibling);)"TEMPLATE"!==a.nodeName.toUpperCase()&&V(a,b)&&c++;return c}function V(a,b){if(a){b=b.split(".");var c=b.shift().toUpperCase(),d=new RegExp("\\s("+b.join("|")+")(?=\\s)","g");return!(""!==c&&a.nodeName.toUpperCase()!=c||b.length&&((" "+a.className+" ").match(d)||[]).length!=b.length)}return!1}function W(a,b){var c,d;return function(){void 0===c&&(c=arguments,d=this,setTimeout(function(){1===c.length?a.call(d,c[0]):a.apply(d,c),c=void 0},b))}}function X(a,b){if(a&&b)for(var c in b)b.hasOwnProperty(c)&&(a[c]=b[c]);return a}if("undefined"==typeof window||"undefined"==typeof window.document)return function(){throw new Error("Sortable.js requires a window with a document")};var a,b,c,d,e,f,g,h,i,j,k,l,m,n,p,q,r,o={},s=/\s+/g,t="Sortable"+(new Date).getTime(),u=window,v=u.document,w=u.parseInt,x=!!("draggable"in v.createElement("div")),y=function(a){return a=v.createElement("x"),a.style.cssText="pointer-events:auto","auto"===a.style.pointerEvents}(),z=!1,A=Math.abs,C=([].slice,[]),D=W(function(a,b,c){if(c&&b.scroll){var d,e,n,p,f=b.scrollSensitivity,i=b.scrollSpeed,j=a.clientX,k=a.clientY,l=window.innerWidth,m=window.innerHeight;if(h!==c&&(g=b.scroll,h=c,g===!0)){g=c;do if(g.offsetWidth<g.scrollWidth||g.offsetHeight<g.scrollHeight)break;while(g=g.parentNode)}g&&(d=g,e=g.getBoundingClientRect(),n=(A(e.right-j)<=f)-(A(e.left-j)<=f),p=(A(e.bottom-k)<=f)-(A(e.top-k)<=f)),n||p||(n=(l-j<=f)-(j<=f),p=(m-k<=f)-(k<=f),(n||p)&&(d=u)),o.vx===n&&o.vy===p&&o.el===d||(o.el=d,o.vx=n,o.vy=p,clearInterval(o.pid),d&&(o.pid=setInterval(function(){d===u?u.scrollTo(u.pageXOffset+n*i,u.pageYOffset+p*i):(p&&(d.scrollTop+=p*i),n&&(d.scrollLeft+=n*i))},24)))}},30),E=function(a){var b=a.group;b&&"object"==typeof b||(b=a.group={name:b}),["pull","put"].forEach(function(a){a in b||(b[a]=!0)}),a.groups=" "+b.name+(b.put.join?" "+b.put.join(" "):"")+" "};return F.prototype={constructor:F,_onTapStart:function(a){var b=this,c=this.el,d=this.options,e=a.type,f=a.touches&&a.touches[0],g=(f||a).target,h=a.target.shadowRoot&&a.path[0]||g,i=d.filter;if(!("mousedown"===e&&0!==a.button||d.disabled)&&(g=H(g,d.draggable,c))){if(l=U(g,d.draggable),"function"==typeof i){if(i.call(this,a,g,this))return O(b,h,"filter",g,c,l),void a.preventDefault()}else if(i&&(i=i.split(",").some(function(a){if(a=H(h,a.trim(),c))return O(b,a,"filter",g,c,l),!0})))return void a.preventDefault();d.handle&&!H(h,d.handle,c)||this._prepareDragStart(a,f,g)}},_prepareDragStart:function(c,d,g){var l,h=this,i=h.el,j=h.options,k=i.ownerDocument;g&&!a&&g.parentNode===i&&(p=c,e=i,a=g,b=a.parentNode,f=a.nextSibling,n=j.group,l=function(){h._disableDelayedDrag(),a.draggable=!0,L(a,h.options.chosenClass,!0),h._triggerDragStart(d)},j.ignore.split(",").forEach(function(b){N(a,b.trim(),Q)}),J(k,"mouseup",h._onDrop),J(k,"touchend",h._onDrop),J(k,"touchcancel",h._onDrop),j.delay?(J(k,"mouseup",h._disableDelayedDrag),J(k,"touchend",h._disableDelayedDrag),J(k,"touchcancel",h._disableDelayedDrag),J(k,"mousemove",h._disableDelayedDrag),J(k,"touchmove",h._disableDelayedDrag),h._dragStartTimer=setTimeout(l,j.delay)):l())},_disableDelayedDrag:function(){var a=this.el.ownerDocument;clearTimeout(this._dragStartTimer),K(a,"mouseup",this._disableDelayedDrag),K(a,"touchend",this._disableDelayedDrag),K(a,"touchcancel",this._disableDelayedDrag),K(a,"mousemove",this._disableDelayedDrag),K(a,"touchmove",this._disableDelayedDrag)},_triggerDragStart:function(b){b?(p={target:a,clientX:b.clientX,clientY:b.clientY},this._onDragStart(p,"touch")):this.nativeDraggable?(J(a,"dragend",this),J(e,"dragstart",this._onDragStart)):this._onDragStart(p,!0);try{v.selection?setTimeout(function(){v.selection.empty()}):window.getSelection().removeAllRanges()}catch(a){}},_dragStarted:function(){e&&a&&(L(a,this.options.ghostClass,!0),F.active=this,O(this,e,"start",a,e,l))},_emulateDragOver:function(){if(q){if(this._lastX===q.clientX&&this._lastY===q.clientY)return;this._lastX=q.clientX,this._lastY=q.clientY,y||M(c,"display","none");var a=v.elementFromPoint(q.clientX,q.clientY),b=a,d=" "+this.options.group.name,e=C.length;if(b)do{if(b[t]&&b[t].options.groups.indexOf(d)>-1){for(;e--;)C[e]({clientX:q.clientX,clientY:q.clientY,target:a,rootEl:b});break}a=b}while(b=b.parentNode);y||M(c,"display","")}},_onTouchMove:function(a){if(p){F.active||this._dragStarted(),this._appendGhost();var b=a.touches?a.touches[0]:a,d=b.clientX-p.clientX,e=b.clientY-p.clientY,f=a.touches?"translate3d("+d+"px,"+e+"px,0)":"translate("+d+"px,"+e+"px)";r=!0,q=b,M(c,"webkitTransform",f),M(c,"mozTransform",f),M(c,"msTransform",f),M(c,"transform",f),a.preventDefault()}},_appendGhost:function(){if(!c){var g,b=a.getBoundingClientRect(),d=M(a),f=this.options;c=a.cloneNode(!0),L(c,f.ghostClass,!1),L(c,f.fallbackClass,!0),M(c,"top",b.top-w(d.marginTop,10)),M(c,"left",b.left-w(d.marginLeft,10)),M(c,"width",b.width),M(c,"height",b.height),M(c,"opacity","0.8"),M(c,"position","fixed"),M(c,"zIndex","100000"),M(c,"pointerEvents","none"),f.fallbackOnBody&&v.body.appendChild(c)||e.appendChild(c),g=c.getBoundingClientRect(),M(c,"width",2*b.width-g.width),M(c,"height",2*b.height-g.height)}},_onDragStart:function(b,c){var f=b.dataTransfer,g=this.options;this._offUpEvents(),"clone"==n.pull&&(d=a.cloneNode(!0),M(d,"display","none"),e.insertBefore(d,a)),c?("touch"===c?(J(v,"touchmove",this._onTouchMove),J(v,"touchend",this._onDrop),J(v,"touchcancel",this._onDrop)):(J(v,"mousemove",this._onTouchMove),J(v,"mouseup",this._onDrop)),this._loopId=setInterval(this._emulateDragOver,50)):(f&&(f.effectAllowed="move",g.setData&&g.setData.call(this,f,a)),J(v,"drop",this),setTimeout(this._dragStarted,0))},_onDragOver:function(g){var l,m,o,h=this.el,p=this.options,q=p.group,s=q.put,u=n===q,v=p.sort;if(void 0!==g.preventDefault&&(g.preventDefault(),!p.dragoverBubble&&g.stopPropagation()),r=!0,n&&!p.disabled&&(u?v||(o=!e.contains(a)):n.pull&&s&&(n.name===q.name||s.indexOf&&~s.indexOf(n.name)))&&(void 0===g.rootEl||g.rootEl===this.el)){if(D(g,p,this.el),z)return;if(l=H(g.target,p.draggable,h),m=a.getBoundingClientRect(),o)return G(!0),void(d||f?e.insertBefore(a,d||f):v||e.appendChild(a));if(0===h.children.length||h.children[0]===c||h===g.target&&(l=S(h,g))){if(l){if(l.animated)return;w=l.getBoundingClientRect()}G(u),P(e,h,a,m,l,w)!==!1&&(a.contains(h)||(h.appendChild(a),b=h),this._animate(m,a),l&&this._animate(w,l))}else if(l&&!l.animated&&l!==a&&void 0!==l.parentNode[t]){i!==l&&(i=l,j=M(l),k=M(l.parentNode));var J,w=l.getBoundingClientRect(),x=w.right-w.left,y=w.bottom-w.top,A=/left|right|inline/.test(j.cssFloat+j.display)||"flex"==k.display&&0===k["flex-direction"].indexOf("row"),B=l.offsetWidth>a.offsetWidth,C=l.offsetHeight>a.offsetHeight,E=(A?(g.clientX-w.left)/x:(g.clientY-w.top)/y)>.5,F=l.nextElementSibling,I=P(e,h,a,m,l,w);if(I!==!1){if(z=!0,setTimeout(R,30),G(u),1===I||I===-1)J=1===I;else if(A){var K=a.offsetTop,L=l.offsetTop;J=K===L?l.previousElementSibling===a&&!B||E&&B:L>K}else J=F!==a&&!C||E&&C;a.contains(h)||(J&&!F?h.appendChild(a):l.parentNode.insertBefore(a,J?F:l)),b=a.parentNode,this._animate(m,a),this._animate(w,l)}}}},_animate:function(a,b){var c=this.options.animation;if(c){var d=b.getBoundingClientRect();M(b,"transition","none"),M(b,"transform","translate3d("+(a.left-d.left)+"px,"+(a.top-d.top)+"px,0)"),b.offsetWidth,M(b,"transition","all "+c+"ms"),M(b,"transform","translate3d(0,0,0)"),clearTimeout(b.animated),b.animated=setTimeout(function(){M(b,"transition",""),M(b,"transform",""),b.animated=!1},c)}},_offUpEvents:function(){var a=this.el.ownerDocument;K(v,"touchmove",this._onTouchMove),K(a,"mouseup",this._onDrop),K(a,"touchend",this._onDrop),K(a,"touchcancel",this._onDrop)},_onDrop:function(g){var h=this.el,i=this.options;clearInterval(this._loopId),clearInterval(o.pid),clearTimeout(this._dragStartTimer),K(v,"mousemove",this._onTouchMove),this.nativeDraggable&&(K(v,"drop",this),K(h,"dragstart",this._onDragStart)),this._offUpEvents(),g&&(r&&(g.preventDefault(),!i.dropBubble&&g.stopPropagation()),c&&c.parentNode.removeChild(c),a&&(this.nativeDraggable&&K(a,"dragend",this),Q(a),L(a,this.options.ghostClass,!1),L(a,this.options.chosenClass,!1),e!==b?(m=U(a,i.draggable),m>=0&&(O(null,b,"sort",a,e,l,m),O(this,e,"sort",a,e,l,m),O(null,b,"add",a,e,l,m),O(this,e,"remove",a,e,l,m))):(d&&d.parentNode.removeChild(d),a.nextSibling!==f&&(m=U(a,i.draggable),m>=0&&(O(this,e,"update",a,e,l,m),O(this,e,"sort",a,e,l,m)))),F.active&&(null!=m&&m!==-1||(m=l),O(this,e,"end",a,e,l,m),this.save()))),this._nulling()},_nulling:function(){F.active===this&&(e=a=b=c=f=d=g=h=p=q=r=m=i=j=n=F.active=null)},handleEvent:function(b){var c=b.type;"dragover"===c||"dragenter"===c?a&&(this._onDragOver(b),I(b)):"drop"!==c&&"dragend"!==c||this._onDrop(b)},toArray:function(){for(var b,a=[],c=this.el.children,d=0,e=c.length,f=this.options;d<e;d++)b=c[d],H(b,f.draggable,this.el)&&a.push(b.getAttribute(f.dataIdAttr)||T(b));return a},sort:function(a){var b={},c=this.el;this.toArray().forEach(function(a,d){var e=c.children[d];H(e,this.options.draggable,c)&&(b[a]=e)},this),a.forEach(function(a){b[a]&&(c.removeChild(b[a]),c.appendChild(b[a]))})},save:function(){var a=this.options.store;a&&a.set(this)},closest:function(a,b){return H(a,b||this.options.draggable,this.el)},option:function(a,b){var c=this.options;return void 0===b?c[a]:(c[a]=b,void("group"===a&&E(c)))},destroy:function(){var a=this.el;a[t]=null,K(a,"mousedown",this._onTapStart),K(a,"touchstart",this._onTapStart),this.nativeDraggable&&(K(a,"dragover",this),K(a,"dragenter",this)),Array.prototype.forEach.call(a.querySelectorAll("[draggable]"),function(a){a.removeAttribute("draggable")}),C.splice(C.indexOf(this._onDragOver),1),this._onDrop(),this.el=a=null}},F.utils={on:J,off:K,css:M,find:N,is:function(a,b){return!!H(a,b,a)},extend:X,throttle:W,closest:H,toggleClass:L,index:U},F.create=function(a,b){return new F(a,b)},F.version="1.4.2",F});

$(document).ready(function(){

var repositoryListId = document.getElementById('repository-list');
var selectedListId = document.getElementById('selected-list');

if (typeof(repositoryListId) != "undefined" && repositoryListId !== null) {
  var repositoryList = Sortable.create(repositoryListId, {
    sort: false,
    handle: '.drag-handle',
    group: { name: 'links', pull: 'clone', put: false },
    animation: 150,

});
}

if (typeof(selectedListId) != "undefined" && selectedListId !== null) {

var selectedList = Sortable.create(selectedListId, {
    animation: 150,
    sort: true,
    handle: '.drag-handle',
    group: { name: 'links', pull: false, put: true },
    filter: '.js-remove',
    onFilter: function (evt) {
      evt.item.parentNode.removeChild(evt.item);
    },
    onAdd: function (evt) {
        var itemEl = evt.item;  // dragged HTMLElement
        itemEl.removeAttribute("style");
    }
});

var customLinksData = {};

document.getElementById('add-custom-link').onclick = function () {

    title = {};
    url = {};
    window = 0;
    $panel = $('#custom-links-panel');

    if (typeof languages != "undefined") {
        languages.forEach(function(jsLang) {
            title[jsLang.id_lang] = $panel.find('.link-title-' + jsLang.id_lang).first().val();
            url[jsLang.id_lang] = $panel.find('.link-url-' + jsLang.id_lang).first().val();
        });
    } else {
        title[id_language] = $panel.find('.link-title-' + id_language).first().val();
        url[id_language] = $panel.find('.link-url-' + id_language).first().val();
    }
    window = parseInt($panel.find('.link-window').first().val());

    var el = document.createElement('li');

    $panel.find('input:text').each(function() {
        $(this).attr('value', $(this).val());
    });
    $panel.find('select').each(function() {
        var val = $(this).val();
        $(this).attr('value', val);
        $(this).find('option[value='+val+']').attr('selected','selected');
    });

    el.innerHTML = '<span class="drag-handle">☰</span> ' + $panel.clone().html()  + '<i class="icon-trash js-remove"></i>';
    el.setAttribute('data-type', 'custom');

    selectedList.el.appendChild(el);
    $panel.find('input:text').each(function() {
        $(this).attr('value', '');
    });
    };

    $('button[name="submitIqitLinkBlock"]').on("click",function(e) {
       //e.preventDefault();
        var links = [],
        $children = $(selectedListId).children();

        $children.each(function() {
            var $el = $(this);
            if ($el.data('type') == 'custom'){
                title = {};
                url = {};
                windowVal = 0;
                if (typeof languages != "undefined") {
                    languages.forEach(function(jsLang) {
                        title[jsLang.id_lang] = $el.find('.link-title-' + jsLang.id_lang).first().val();
                        url[jsLang.id_lang] = $el.find('.link-url-' + jsLang.id_lang).first().val();
                    });
                } else {
                    title[id_language] = $el.find('.link-title-' + id_language).first().val();
                    url[id_language] = $el.find('.link-url-' + id_language).first().val();
                }
                windowVal = parseInt($el.find('.link-window').first().val());

                link = {type: $el.data('type'), title: title, url: url, window: windowVal};
            }
            else{
                link = {type: $el.data('type'), id: $el.data('id')};
            }
            links.push(link);
        });
        if($.isEmptyObject(links)){
            $('#selected-links').val('');
        }
        else{
            $('#selected-links').val(JSON.stringify(links));
        }
    });

}

});

