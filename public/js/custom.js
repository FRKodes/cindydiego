/*-------------------------------
    VALIDATE.JS
    A barebones jQuery validation plugin
    @author Todd Francis
    @version 1.0.3
-------------------------------*/
;(function(r,d,l){d.fn.validate=function(m){return this.each(function(){var f=d(this);if(l===f.data("validate")){var j=new d.validate(m,f);f.data("validate",j)}})};d.validate=function(m,f){function j(a,b){-1==d.inArray(a,b)&&b.push(a);return b}function p(a){a=a.slice(a.indexOf("[")+1,-1);return-1!==a.indexOf(",")?a.split(","):[a]}function n(a){for(var b=[],c=0;c<a.length;c++){var g=a[c],d=[],h=g.indexOf("[");-1!==h&&(d=d.concat(p(g)),g=g.slice(0,h));b.push({rule:g,args:d})}return b}var h=d.extend(!0,
{debug:!1,autoDetect:!1,visibleOnly:!0,beforeSubmit:function(){},singleError:function(){},overallError:function(){},singleSuccess:function(){},overallSuccess:function(){},regExp:{alpha:/^[a-zA-Z]*$/,numeric:/^[0-9]*$/,alphanumeric:/^[a-zA-Z0-9]*$/,url:/^(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/,email:/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/}},
m),c=this,q=["checkGroupRequired","checkGroupMin","checkGroupMax"];c.$form=f;c.version="1.0.0";if(f!==l)f.on("submit",function(a){if(!c.validate()||h.debug)a.stopImmediatePropagation(),a.preventDefault()});c.validate=function(a){a="undefined"===typeof a?c.$form:a;var b=!1,e=d();h.beforeSubmit.call(c);c.fieldsToCheck(a).each(function(){var a=d(this);if((h.visibleOnly&&a.is(":visible")||!h.visibleOnly)&&!c.checkField(a))b=!0,e=e.add(a)});b?h.overallError.call(c,a,e):!1===h.overallSuccess.call(c,a)&&
(b=!0);return!b};c.checkField=function(a){var b=a.data("validate")?a.data("validate").split("|"):[];a.val();var e=[];if(h.autoDetect&&a.is('input:not([type="checkbox"], [type="radio"])')&&"text"!=a.attr("type"))switch(e=a.attr("type"),e){case "number":b=j("numeric",b);break;default:b=j(e,b)}b=n(b);e=c.checkValue(a,b);if(e instanceof Object)return h.singleError.call(c,a,e),!1;h.singleSuccess.call(c,a,b);return!0};c.checkValue=function(a,b){if(!b)return!0;b="string"==typeof b?n(b):b;for(var e=[],g=
0;g<b.length;g++){var f=b[g].rule,k="",j=[a].concat(b[g].args.slice());f.indexOf("[");k="check"+f.charAt(0).toUpperCase()+f.slice(1);"checkRequired"==k&&a.is('input[type="checkbox"]')?k="checkRequiredCheckbox":-1!=d.inArray(k,q)&&(f=d('input[type="checkbox"]',a),f.length||(f=d('input[type="radio"]',a)),j=[f].concat(j.slice(1)));c[k]instanceof Function?c[k].apply(c,j)||e.push(b[g]):h.regExp[b[g].rule]?""!==a.val()&&!c.checkRegExp(a,b[g].rule)&&e.push(b[g]):e.push(b[g])}return 0<e.length?e:!0};c.fieldsToCheck=
function(a){a=d("[data-validate]",a===l?c.$form:a);h.autoDetect&&(a=d("input[required]").add(a));return a};c.checkRequired=function(a){return 0<a.val().length?!0:!1};c.checkRequiredCheckbox=function(a){return a.is(":checked")};c.checkGroupRequired=function(a){return a.filter(":checked").length?!0:!1};c.checkGroupMin=function(a,b){return a.filter(":checked").length>=b};c.checkGroupMax=function(a,b){return a.filter(":checked").length<=b};c.checkCustomRegExp=function(a,b,c){if(""===a.val())return!0;
b=RegExp(b,c);return a.val().match(b)?!0:!1};c.checkRegExp=function(a,b){return a.val().match(h.regExp[b])?!0:!1};c.checkMaxLength=function(a,b){return""===a.val()?!0:a.val().length<=b};c.checkMinLength=function(a,b){return""===a.val()?!0:a.val().length>=b};c.checkMax=function(a,b){return""===a.val()?!0:parseFloat(a.val())<=parseFloat(b)};c.checkMin=function(a,b){return""===a.val()?!0:parseFloat(a.val())>=parseFloat(b)}}})(window,jQuery);

$(document).ready(function(){
	/*sticky header*/
	$(window).scroll(function() {
	    if ($(this).scrollTop() > 70){
	        $('.navbar-default').addClass("transparency");
	    }else{ 
	        $('.navbar-default').removeClass("transparency");
	    }
	});

	$('.icon-volume-up').on('click', function(){
		$('#backgroundaudio').toggleClass('top0');
	});

	$('.fade-container').slick({
	  infinite: true,
	  speed: 500,
	  fade: true,
	  autoplay:true,
	  arrows:true,
	  cssEase: 'linear'
	});
	
	/*validator*/
	$(function(){
	    var formSettings = {
	        singleError : function($field, rules){ 
	        	$field.closest('.form-group').removeClass('valid').addClass('error');
	        	$('.alert_fields').fadeIn();
	    	},
	        singleSuccess : function($field, rules){ 
	        	$field.closest('.form-group').removeClass('error').addClass('valid');
	        	$('.alert_fields').fadeOut();
	        },
	        overallSuccess : function(){
	            var form    = $('#contactForm'),
	                name    = form.find( "input[name='name']" ).val(),
	                email   = form.find( "input[name='email']" ).val(),
	                confirm	= form.find( "input[name='confirm']" ).val(),
	                message = form.find( "textarea[name='message']" ).val(),
	                _token	= form.find( "input[name='_token']").val(),
	                action  = form.attr( "action"),
	                url     = action;
	            var posting = $.post( 
	                url, { name: name, email: email, confirm: confirm, _token: _token, message: message }
	                );
	            posting.done(function( data ) {
	                console.log(data);
	                $('#contactForm')[0].reset();
	                $('.sent_mail_alert').fadeIn().delay(3000).fadeOut();
	            });
	        },
	        overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
	        autoDetect : true, debug : true
	    };
	    var $validate = $('#contactForm').validate(formSettings).data('validate');
	});

	/*-TIMER-*/
	var CDown = function() {
		this.state=0;// if initialized
		this.counts=[];// array holding countdown date objects and id to print to {d:new Date(2013,11,18,18,54,36), id:"countbox1"}
		this.interval=null;// setInterval object
	}
	CDown.prototype = {
		init: function(){
			this.state=1;
			var self=this;
			this.interval=window.setInterval(function(){self.tick();}, 1000);
		},
		add: function(date,id){
			this.counts.push({d:date,id:id});
			this.tick();
			if(this.state==0) this.init();
		},
		expire: function(idxs){
			for(var x in idxs) {
				this.display(this.counts[idxs[x]], "Now!");
				this.counts.splice(idxs[x], 1);
			}
		},
		format: function(r){
			var out="<div class='timer'><p class='title'>Sólo falta:</p><div class='blocks-container'><div class='block'><div class='number'>";
			out += r.d +"</div><div class='text'>"+((r.d==1)?"día":"días")+"</div></div><div class='block'><div class='number'>";
			out += r.h +"</div><div class='text'>"+((r.h==1)?"hora":"horas")+"</div></div><div class='block'><div class='number'>";
			out += r.m +"</div><div class='text'>"+((r.m==1)?"minuto":"minutos")+"</div></div><div class='block'><div class='number'>";
			out += r.s +"</div><div class='text'>"+((r.s==1)?"segundo":"segundos")+"</div></div></div></div>";
			return out.substr(0,out.length-2);
		},
		math: function(work){
			var	y=w=d=h=m=s=ms=0;
			ms=(""+((work%1000)+1000)).substr(1,3);
			work=Math.floor(work/1000);//kill the "milliseconds" so just secs
			y=Math.floor(work/31536000);//years (no leapyear support)
			w=Math.floor(work/604800);//weeks
			d=Math.floor(work/86400);//days
			work=work%86400;
			h=Math.floor(work/3600);//hours
			work=work%3600;
			m=Math.floor(work/60);//minutes
			work=work%60;
			s=Math.floor(work);//seconds
			return {y:y,w:w,d:d,h:h,m:m,s:s,ms:ms};
		},
		tick: function(){
			var now=(new Date()).getTime(),
				expired=[],cnt=0,amount=0;
			if(this.counts)
			for(var idx=0,n=this.counts.length; idx<n; ++idx){
				cnt=this.counts[idx];
				amount=cnt.d.getTime()-now;//calc milliseconds between dates
				// if time is already past
				if(amount<0){
					expired.push(idx);
				}
				// date is still good
				else{
					this.display(cnt, this.format(this.math(amount)));
				}
			}
			// deal with any expired
			if(expired.length>0) this.expire(expired);
			// if no active counts, stop updating
			if(this.counts.length==0) window.clearTimeout(this.interval);
			
		},
		display: function(cnt,msg){
			document.getElementById(cnt.id).innerHTML=msg;
		}
	};

	window.onload=function(){
		var cdown = new CDown();

		cdown.add(new Date(2015,8,12,18,00,00), "sm-timer");
		cdown.add(new Date(2015,8,12,18,00,00), "lg-timer");

	};
});
