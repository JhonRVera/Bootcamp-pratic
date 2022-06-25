define([
    'jquery',
    'mage/template',
    'text!Bootcamp_reloj/template/reloj.html'
], function($, mageTemplate,relojTemplate) {
   return function (config,element){
    setInterval(function(){
        $(element).html(mageTemplate(relojTemplate,{hora:new Date() }));
    },1000)
   }
    
});