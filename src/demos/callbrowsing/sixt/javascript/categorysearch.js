/** Filename: Application/js/tracking/trackingSeo.js - Last modified: 2019-04-05T07:10:19+02:00 **/ !function(t){"use strict";"function"==typeof define&&define.amd?define([],t):(window.newcar=window.newcar||{},window.newcar.TrackingSeo=t())}(function(){"use strict";var t=function(){};return t.prototype={splitId:180,splitVariant:{200:"original",201:"kontrollgruppe",202:"neue_version"},trackParameters:[],wait:null,run:function(t){t=t&&t.b2cl&&t.b2cl.globals?t:{b2cl:{globals:{}}},this.prepareParameters(t.b2cl.globals).trackByVariant()},prepareParameters:function(t){return t&&t.get?(t.get("modeName"),"G"===t.get("lvkd")?"business":"private"):("vario","private"),this},setGoogleTracking:function(t,i){t=t||window._gaq,this.wait&&clearTimeout(this.wait),this.wait=setTimeout(function(){},100)},filterTrackingParams:function(t){return t&&t instanceof Array?t.filter(function(t){return void 0!==t}):[]},checkForSplit:function(t,i){var n=this;newcar.Split.checkSplit(this.splitId,t).done(function(){n.setGoogleTracking(null,i)}).fail(function(){n.setGoogleTracking()})},trackByVariant:function(){var t=this,i=this.splitVariant;return Object.keys(i).forEach(function(n){t.checkForSplit(n,i[n])}),this}},t});
/** Filename: Application/js/categorysearch.js - Last modified: 2019-04-02T07:06:22+02:00 **/ sx.b2cl.CategorySearch=function(){"use strict";function t(){n.change('input[name="lvkd"]',function(t){return t.preventDefault(),t.stopPropagation(),sx.b2cl.loaderLayer(),n.submit("","POST"),!1})}var n=new sxCalculator({type:"full"});(new newcar.TrackingSeo).run(sx.b2cl.globals),this.initRepositioning=function(){return(new newcar.RepositioningElement).run($('[data-elem="finance-example"]'),$(".sx-b2cl-main-content div:last")),!0},this.initRepositioning(),this.initGtmSeoList=function(){var t=$("[data-gtm-list]"),n=new newcar.GtmListTracking,i=[];return $.each(t,function(){i.push($(this).data("gtmList"))}),n.run(i,8,0),!0},this.initGtmSeoList(),n.setOptions({form:$("form[name=basicCalculation]"),layout:{modelLine:{element:$("#sx-ityc"),output:'<strong class="name unit" title="%title">%stya</strong><span class="data">%kw %ps %tuer %stra %gearLabel</span>',callback:"xhr-select-efficiency",efficiency:{init:!0,tooltip:$(".sx-b2cl-type-modelselector .sx-b2cl-efficiency-tooltip")}}},expander:{0:{wrapper:$("fieldset.sx-b2bl-calc-conditions .calculatorExpandWrapper"),button:$("fieldset.sx-b2bl-calc-conditions .calculatorExpandBttn"),box:$("fieldset.sx-b2bl-calc-conditions .calculatorExpandCtx"),txt:"<span>*ld*,</span> <span>*jkm*/Jahr,</span> <span>*sozp* Anzahlung</span>",cls:"nHide"}}},function(){$("#container").on("click",n.toggleLayerOpen),t()}),sx.b2cl.resultListFilter(null,".sx-b2cl-main-content"),sx.b2cl.toggleContent("a.toggleElement");try{$("img.sxLazy","#container").sxLazyLoader()}catch(t){}try{$(".basicCalculation, .sx-b2cl-main-content").sxTooltip({contentWrapper:"#container",triggerElement:".sx-b2cl-efficiency-tooltip",contentWidth:370,fadeIn:500,tooltipClass:" sx-b2cl-tooltipcontent sx-b2cl-efficiency-tooltip-content "})}catch(t){}this.accordionBox=function(){if($(".accordionBox").length){var t=$(".accordionBox"),n=t.height(),i=0;t.find(".accordionHead").each(function(){i=i+$(this).outerHeight()+parseFloat($(this).css("margin-bottom"))}),t.find(".accordionContent").height(n-i),$(".accordionBox").on("click",".accordionHead",function(){$(this).next(".accordionContent").slideToggle(300).siblings(".accordionContent:visible").slideUp(300),$(this).toggleClass("contentVisible").siblings(".accordionHead").removeClass("contentVisible")})}},this.accordionBox()};
/** Filename: Application/js/jsparts/compareVariants.js - Last modified: 2019-03-20T08:40:40+01:00 **/ function compareVariants(){"use strict";var a={variantsUrl:"/php/leaseb2c/json/comparevariants.json",equipmentUrl:"/php/leaseb2c/api/carseries/showFeatures.json",openLayer:".openCompareLayer",layer:$(".compareLayerWrapper"),maxVariants:3,layerSelect:'<select class="mls size9of10 changeVariant"></select>'},t={variants:{},variantsLength:0,equipmentTableCache:{}},e={getVariantsParams:function(){var t=$(a.openLayer).data(),e={bauu:t.bauu,sauu:t.sauu,poid:t.poid,mode:sx.b2cl.globals.mode,lvkd:sx.b2cl.globals.lvkd};return"seonewcar"==sx.b2cl.globals.site&&(e.mode=""),e},getVariants:function(){if(0==t.variantsLength){var r=e.getVariantsParams();$.ajax({url:a.variantsUrl,data:r}).done(function(a){var t=a.data;return e.setVarianteCache(t),n.openLayer(),n.fillLayer(),t})}else n.openLayer(),n.fillLayer()},getEquipment:function(n,r){void 0===t.variants[r].Equipment?$.ajax({url:a.equipmentUrl,data:n}).done(function(a){var t=a.data;e.setEquipmentCache(t,r)}):e.setEquipmentCache(t.variants[r].Equipment,r)},setVarianteCache:function(a){t.variants=a;var e=0;$.each(a,function(){e++}),t.variantsLength=e},setEquipmentCache:function(a,e){t.variants[e]&&(t.variants[e].Equipment=a),n.fillEquipment()}},n={openLayer:function(){$(".compareLayerWrapper").box({txttitle:$(a.openLayer).prop("title"),width:700,height:515}),$.box.open($(".compareLayerWrapper"));var t=!1;if((navigator.userAgent.match(/Android/i)||navigator.userAgent.match(/Mobi/i)||navigator.userAgent.match(/Tablet/i)||navigator.userAgent.match(/webOS/i)||navigator.userAgent.match(/BlackBerry/i)||navigator.userAgent.match(/Kindle/i)||navigator.userAgent.match(/Windows Phone/i))&&(t=!0),!t){var e=void 0!==window.outerHeight?window.outerHeight:document.documentElement.offsetHeight;$("#box-window").css({position:"fixed",top:(e-$("#box-window").height()-50)/2})}},drawTable:function(t){return'<table class="variantCompareTable variantCompareTableHead mbs"><colgroup><col width="40"><col width="20"><col width="20"><col width="20"></colgroup><tbody><tr><td class="equipment"><div class="wrapper"><label for="onlyDifferences"><input type="checkbox" name="onlyDifferences" id="onlyDifferences" class="onlyDifferences mrm" value="" />nur Unterschiede anzeigen</label></div></td><td class="variant">'+a.layerSelect+'</td><td class="variant">'+a.layerSelect+'</td><td class="variant">'+a.layerSelect+"</td></tr></tbody></table>"},fillLayer:function(){var a='<div class="mvs h3 c3">Serienausstattung</div>',e='<table class="variantCompareTable variantCompareTableBody "><tbody>';e+='<tr><td class="txtC mtxl"><img src="/common/img/app/b2cleasing/loader-medium.gif" height="32" width="32" /></td></tr>',e+="</tbody></table>";a+=n.drawTable()+'<div class="tableBodyWrapper mbm">'+e+'</div><table class="variantCompareTable variantCompareTableFoot"><colgroup><col width="40"><col width="20"><col width="20"><col width="20"></colgroup><tbody><tr><td class="equipment"><div class="wrapper"><span class="featureNotAvailable">X</span> Ausstattung nicht enthalten<br/><span class="featureAvailable">V</span> Ausstattung enthalten</div></td><td class="variant txtC"><a href=""><span class="nButton"><span><strong class="nButtonDescriptionXX">Variante wählen</strong></span></span></a></td><td class="variant txtC"><a href=""><span class="nButton"><span><small class="nButtonDescriptionXX">Variante wählen</small></span></span></a></td><td class="variant txtC"><a href=""><span class="nButton"><span><small class="nButtonDescriptionXX">Variante wählen</small></span></span></a></td></tr></tbody></table>';var r="";$.each(t.variants,function(a,t){r+='<option value="'+t.triu+'">'+t.trim+"</option> "}),$(".compareLayerWrapper").html(a),t.variantsLength<3&&$(".compareLayerWrapper .variantCompareTable tr td").each(function(){$(this).index()>t.variantsLength&&$(this).remove()});var i=0;$(".compareLayerWrapper select").each(function(){$(this).html(r),$(this).find("option:eq("+i+")").prop("selected",!0),n.changeVariant($(this).find(":selected").text()),i++})},fillEquipment:function(){var a=t.equipmentTableCache,e='<colgroup><col width="40%"><col width="20%"><col width="20%"><col width="20%"></colgroup><tbody>',r=$(".variantCompareTableHead .variant select"),i=r.length;r.each(function(){var e=$(this).parent(".variant").index(),n=$(this).find(":selected").text();if(void 0!==t.variants[n]&&void 0!==t.variants[n].Equipment){$.each(t.variants[n].Equipment,function(t,n){!a[t]&&(a[t]={}),$.each(n,function(n,r){!a[t][r.ssol]&&(a[t][r.ssol]={}),r.ssol in a[t]&&(a[t][r.ssol][e]=!0)})}),e-=1;var r=t.variants[n].monthly_rate_brutto+" &euro;";t.variants[n].monthly_rate_brutto<=0?(r=sx.b2cl.globals.noPriceText,$(".variantCompareTableFoot .variant:eq("+e+") .priceAb").html("")):$(".variantCompareTableFoot .variant:eq("+e+") .priceAb").html("ab "),$(".variantCompareTableFoot .variant:eq("+e+") .price").html(r),$(".variantCompareTableFoot .variant:eq("+e+") a").prop("href",t.variants[n].url)}}),$.each(a,function(a,t){e+='<tr><td><strong class="inlBlock ptm">'+a+"</strong></td>";for(var n=1;n<=i;n++)e+="<td></td>";e+="</tr>",$.each(t,function(a,t){e+="<tr><td>"+a+"</td>";for(var n=1;n<=r.length;n++)e+=void 0!==t[n]?'<td class="txtC featureAvailable">V</td>':'<td class="txtC featureNotAvailable">X</td>';e+="</tr>"})}),$(".variantCompareTableBody").html(e),n.showOnlyDifferents()},changeVariant:function(a){var n={ityc:t.variants[a].ityc,grouped:!0};e.getEquipment(n,a)},showOnlyDifferents:function(){var t=$(".variantCompareTableHead .variant").length;$(".variantCompareTableBody tr").each(function(){var e=$(this);e.find(".featureAvailable").length==t&&(1==$(a.layer).find("input.onlyDifferences").is(":checked")?e.hide():e.show())})}};!function(){$(".sx-b2cl-main-content").on("click",a.openLayer,function(t){t.preventDefault();var n=$(a.openLayer).data();n.poid=n.poid+"",n.bauu=n.bauu.toString(),n.sauu=n.sauu.toString(),n.bauu.length&&n.sauu.length&&n.poid.length&&e.getVariants()}),a.layer.on("change","input, select",function(a){a.preventDefault(),a.originalEvent&&$(a.target).hasClass("changeVariant")?(t.equipmentTableCache={},n.changeVariant($(this).find(":selected").text())):n.showOnlyDifferents()})}()}compareVariants();
/** Filename: Application/js/jsparts/repositioning.js - Last modified: 2019-03-20T08:40:40+01:00 **/ !function(e){"use strict";"function"==typeof define&&define.amd?define([],e):(window.newcar=window.newcar||{},window.newcar.RepositioningElement=e())}(function(){"use strict";var e=function(){};return e.prototype={element:$('[data-elem="finance-example"]'),target:$(".sx-b2cl-main-content div:last"),run:function(e,n){var t=this;t.element=e?e:t.element,t.target=n?n:t.target,t.element.remove(),t.element.length&&void 0!==document.body.insertAdjacentHTML&&t.target[0].insertAdjacentHTML("beforebegin",t.element.html())}},e});
/** Filename: Application/js/tracking/gtmListTracking.js - Last modified: 2019-04-10T07:01:03+02:00 **/ !function(t){"use strict";"function"==typeof define&&define.amd?define([],t):(window.newcar=window.newcar||{},window.newcar.GtmListTracking=t())}(function(){"use strict";var t=function(){};return t.prototype={completeListData:{},maxDatasets:8,currentPushedListElements:0,run:function(t,e,i){var n=this;n.maxDatasets=e||n.maxDatasets,n.currentPushedListElements=i||n.currentPushedListElements,this.completeListData=t,this.currentPushedListElements=this.maxDatasets,this.collectDataAndPush(i,n.maxDatasets+i-1),document.onscroll=function(){var t=document.querySelectorAll("[data-gtm-push-next]");t.length&&t[0]&&n.isElementInViewport(t[0])&&($(t[0]).removeAttr("data-gtm-push-next"),n.collectDataAndPush(n.currentPushedListElements,n.maxDatasets+n.currentPushedListElements-1),n.currentPushedListElements=n.maxDatasets+n.currentPushedListElements)}},collectDataAndPush:function(t,e){var i,n,e=void 0!==e?e:t,a=[];for(i=t;i<=e;i++)(n=this.completeListData[i])&&a.push({name:n.name,id:n.id,price:n.price,brand:n.brand,list:n.list,position:n.position,modell:n.modell});a.length&&this.pushData({event:"eec.productImpression",ecommerce:{currencyCode:"EUR",impressions:a}})},pushData:function(t){window.dataLayer&&window.dataLayer.push(t)},isElementInViewport:function(t){"function"==typeof jQuery&&t instanceof jQuery&&(t=t[0]);var e=t.getBoundingClientRect();return void 0!==e.height?e.top>=0&&e.left>=0&&e.bottom<=(window.innerHeight+e.height||document.documentElement.clientHeight+e.height)&&e.right<=(window.innerWidth||document.documentElement.clientWidth)||e.bottom<=(window.innerHeight||document.documentElement.clientHeight)&&e.right<=(window.innerWidth||document.documentElement.clientWidth):e.top>=0&&e.left>=0&&e.bottom<=(window.innerHeight||document.documentElement.clientHeight)&&e.right<=(window.innerWidth||document.documentElement.clientWidth)},addToCart:function(t){var e={event:"eec.addToCart",ecommerce:{currencyCode:"EUR",detail:{products:[{name:t.name,id:t.id,price:t.price,brand:t.brand,list:t.list,position:t.position,modell:t.modell,kraftstoff:t.kraftstoff,leistung:t.leistung,variant:t.variant,verfuegbarkeit:t.verfuegbarkeit,quantity:t.quantity}]}}};this.pushData(e)},initGtmClickTracking:function(){var t=this;$("[data-gtm-list]").on("click",function(e){t.doGtmClickTracking(e)})},doGtmClickTracking:function(t){var e=$(t.currentTarget)?$(t.currentTarget).data("gtm-list"):void 0;!t.target.hasAttribute("data-layer")&&window.dataLayer&&e&&(window.newcar.cookieManager.set("gtmcookie_position",e.position,1),window.newcar.cookieManager.set("gtmcookie_list",e.list,1),window.dataLayer.push({event:"eec.productClick",ecommerce:{currencyCode:"EUR",click:{actionField:{list:e.list},products:[{name:e.name,id:e.id,price:e.price,brand:e.brand,list:e.list,position:e.position,modell:e.modell}]}}}))},doCheckoutStep:function(t){var t=t||$("[data-gtm]");if(window.dataLayer&&t){var e={event:"eec.checkoutStep",ecommerce:{checkout:{actionField:{step:1},products:[{name:t.name,id:t.id,price:t.price,brand:t.brand,list:t.list,position:t.position,modell:t.modell,kraftstoff:t.kraftstoff,leistung:t.leistung,variant:t.variant,verfuegbarkeit:t.verfuegbarkeit,quantity:t.quantity}]}}};this.pushData(e)}}},t});