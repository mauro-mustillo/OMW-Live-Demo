/**
 * jQuery Conditions 1.0.0
 *
 * Copyright 2016 Bejamin Rojas
 * @license Released under the MIT license.
 * http://jquery.org/license
 */
!function($){"use strict";$.fn.conditions=function(i){return this.each(function(n,o){var t=new e(o,i,$.fn.conditions.defaults);t.init()})},$.fn.conditions.defaults={condition:null,actions:{},effect:"fade"};var e=function(e,i,n){var o=this;o.element=$(e),o.defaults=n,o.conditions=i,o._init=!1,$.isArray(o.conditions)||(o.conditions=[o.conditions]),$.each(o.conditions,function(e,i){i=$.extend({},o.defaults,i),o.conditions[e]=i})};e.prototype.init=function(){var e=this;e._init=!0,$(e.element).on("change",function(){e.matchConditions()}),$(e.element).on("keyup",function(){e.matchConditions()}),e.matchConditions(!0)},e.prototype.matchConditions=function(e){var i=this;e||(i._init=!1),$.each(i.conditions,function(e,n){var o=!1,t=!0;$.isArray(n.conditions)||(n.conditions=[n.conditions]),$.each(n.conditions,function(e,i){switch(i.element=$(i.element),i.type){case"value":case"val":switch(i.operator){case"===":case"==":case"=":o=i.element.val()===i.condition;break;case"!==":case"!=":o=i.element.val()!==i.condition;break;case"array":o=-1!==$.inArray(i.element.val(),i.condition);break;case"!array":o=-1===$.inArray(i.element.val(),i.condition)}break;case"checked":switch(i.operator){case"is":o=i.element.is(":checked");break;case"!is":o=!i.element.is(":checked")}}!o&&t&&(t=!1)}),t?$.isEmptyObject(n.actions["if"])||($.isArray(n.actions["if"])||(n.actions["if"]=[n.actions["if"]]),$.each(n.actions["if"],function(e,o){i.showAndHide(o,n.effect)})):$.isEmptyObject(n.actions["else"])||($.isArray(n.actions["else"])||(n.actions["else"]=[n.actions["else"]]),$.each(n.actions["else"],function(e,o){i.showAndHide(o,n.effect)}))})},e.prototype.showAndHide=function(e,i){var n=this;switch(e.action){case"show":n._show($(e.element),i);break;case"hide":n._hide($(e.element),i)}},e.prototype._show=function(e,i){var n=this;if(n._init)e.show();else switch(i){case"appear":e.show();break;case"slide":e.slideDown();break;case"fade":e.fadeIn(300)}},e.prototype._hide=function(e,i){var n=this;if(n._init)e.hide();else switch(i){case"appear":e.hide();break;case"slide":e.slideUp();break;case"fade":e.fadeOut(300)}}}(jQuery),jQuery(document).ready(function($){$("#envira-gallery-settings input:not([type=hidden]), #envira-gallery-settings select").conditions([{conditions:{element:'[name="_envira_gallery[lightbox_theme]"]',type:"value",operator:"array",condition:["base","captioned","polaroid","showcase","sleek","subtle"]},actions:{"if":[{element:"#envira-config-lightbox-title-display-box, #envira-config-lightbox-arrows-box, #envira-config-lightbox-toolbar-box, #envira-config-supersize-box",action:"show"}]}},{conditions:{element:'[name="_envira_gallery[lightbox_theme]"]',type:"value",operator:"array",condition:["base_dark"]},actions:{"if":[{element:"#envira-config-lightbox-title-display-box, #envira-config-lightbox-arrows-box, #envira-config-lightbox-toolbar-box, #envira-config-supersize-box",action:"hide"}]}},{conditions:[{element:'[name="_envira_gallery[lightbox_theme]"]',type:"value",operator:"array",condition:["base","captioned","polaroid","showcase","sleek","subtle"]},{element:'[name="_envira_gallery[arrows]"]',type:"checked",operator:"is"}],actions:{"if":{element:"#envira-config-lightbox-arrows-position-box",action:"show"},"else":{element:"#envira-config-lightbox-arrows-position-box",action:"hide"}}},{conditions:[{element:'[name="_envira_gallery[toolbar]"]',type:"checked",operator:"is"},{element:'[name="_envira_gallery[lightbox_theme]"]',type:"value",operator:"array",condition:["base","captioned","polaroid","showcase","sleek","subtle"]}],actions:{"if":[{element:"#envira-config-lightbox-toolbar-title-box, #envira-config-lightbox-toolbar-position-box",action:"show"}],"else":[{element:"#envira-config-lightbox-toolbar-title-box, #envira-config-lightbox-toolbar-position-box",action:"hide"}]}},{conditions:[{element:'[name="_envira_gallery[lightbox_theme]"]',type:"value",operator:"array",condition:["base","captioned","polaroid","showcase","sleek","subtle"]},{element:'[name="_envira_gallery[mobile_lightbox]"]',type:"checked",operator:"is"}],actions:{"if":{element:"#envira-config-mobile-arrows-box, #envira-config-mobile-toolbar-box",action:"show"},"else":{element:"#envira-config-mobile-arrows-box, #envira-config-mobile-toolbar-box",action:"hide"}}},{conditions:[{element:'[name="_envira_gallery[lightbox_theme]"]',type:"value",operator:"array",condition:["base","captioned","polaroid","showcase","sleek","subtle"]},{element:'[name="_envira_gallery[thumbnails]"]',type:"checked",operator:"is"}],actions:{"if":{element:"#envira-config-thumbnails-position-box",action:"show"},"else":{element:"#envira-config-thumbnails-position-box",action:"hide"}}},{conditions:[{element:'[name="_envira_gallery[thumbnails]"]',type:"checked",operator:"is"}],actions:{"if":{element:"#envira-config-thumbnails-height-box, #envira-config-thumbnails-width-box",action:"show"},"else":{element:"#envira-config-thumbnails-height-box, #envira-config-thumbnails-width-box",action:"hide"}}},{conditions:{element:'[name="_envira_gallery[columns]"]',type:"value",operator:"array",condition:["0"]},actions:{"if":[{element:"#envira-config-standard-settings-box",action:"hide"},{element:"#envira-config-justified-settings-box",action:"show"}],"else":[{element:"#envira-config-standard-settings-box",action:"show"},{element:"#envira-config-justified-settings-box",action:"hide"}]}},{conditions:{element:'[name="_envira_gallery[description_position]"]',type:"value",operator:"array",condition:["0"]},actions:{"if":[{element:"#envira-config-description-box",action:"hide"}],"else":[{element:"#envira-config-description-box",action:"show"}]}},{conditions:{element:'[name="_envira_gallery[random]"]',type:"value",operator:"array",condition:["0"]},actions:{"if":[{element:"#envira-config-sorting-direction-box",action:"hide"}],"else":[{element:"#envira-config-sorting-direction-box",action:"show"}]}},{conditions:{element:'[name="_envira_gallery[css_animations]"]',type:"checked",operator:"is"},actions:{"if":[{element:"#envira-config-css-opacity-box",action:"show"}],"else":[{element:"#envira-config-css-opacity-box",action:"hide"}]}},{conditions:{element:'[name="_envira_gallery[image_size]"]',type:"value",operator:"array",condition:["default"]},actions:{"if":[{element:"#envira-config-crop-size-box, #envira-config-crop-box",action:"show"}],"else":[{element:"#envira-config-crop-size-box, #envira-config-crop-box",action:"hide"}]}},{conditions:{element:'[name="_envira_gallery[lightbox_enabled]"]',type:"checked",operator:"is"},actions:{"if":[{element:"#envira-lightbox-settings",action:"show"}],"else":[{element:"#envira-lightbox-settings",action:"hide"}]}},{conditions:{element:'[name="_envira_gallery[lazy_loading]"]',type:"checked",operator:"is"},actions:{"if":[{element:"#envira-config-lazy-loading-delay",action:"show"}],"else":[{element:"#envira-config-lazy-loading-delay",action:"hide"}]}}])});