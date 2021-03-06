/**
 * kk Star Ratings
 * @see https://github.com/kamalkhan/kk-star-ratings
 */
 "use strict";jQuery(document).ready(function(s){function a(t,n){n=n||{isBusy:!1};function r(e){var i,o,c,u=s(this);i={rating:u.data("star"),payload:t.data("payload")},o=function(e,i,o){var c=s(e);c.addClass(t.attr("class")),t.replaceWith(c),s("[data-star]",t).each(function(){s(this).off("click",r)}),t.remove(),a(c,n)},c=function(s,a,t){s.responseJSON&&s.responseJSON.error&&console.error(s.responseJSON.error)},n.isBusy||t.hasClass("kksr-disabled")||(n.isBusy=!0,s.ajax({type:"POST",url:kk_star_ratings.endpoint,data:Object.assign({nonce:kk_star_ratings.nonce,action:kk_star_ratings.action},i),error:c,success:o,complete:function(){n.isBusy=!1}}))}s("[data-star]",t).each(function(){s(this).on("click",r)})}s(".kk-star-ratings").each(function(){a(s(this))})});
