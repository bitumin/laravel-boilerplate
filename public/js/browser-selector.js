/*
Plugin Name: 	BrowserSelector
Written by: 	Crivos - (http://www.crivos.com)
Version: 		0.1
*/

(function($, navigator) {
	$.extend({

		browserSelector: function() {

			var u = navigator.userAgent,
				ua = u.toLowerCase(),
				is = function (t) {
					return ua.indexOf(t) > -1;
				},
				g = 'gecko',
				w = 'webkit',
				s = 'safari',
				o = 'opera',
				h = document.documentElement,
				b = [(!(/opera|webtv/i.test(ua)) && /msie\s(\d)/.test(ua)) ? ('ie ie' + parseFloat(navigator.appVersion.split("MSIE")[1])) : is('firefox/2') ? g + ' ff2' : is('firefox/3.5') ? g + ' ff3 ff3_5' : is('firefox/3') ? g + ' ff3' : is('gecko/index.html') ? g : is('opera') ? o + (/version\/(\d+)/.test(ua) ? ' ' + o + RegExp.jQuery1 : (/opera(\s|\/)(\d+)/.test(ua) ? ' ' + o + RegExp.jQuery2 : '')) : is('konqueror') ? 'konqueror' : is('chrome') ? w + ' chrome' : is('iron') ? w + ' iron' : is('applewebkit/index.html') ? w + ' ' + s + (/version\/(\d+)/.test(ua) ? ' ' + s + RegExp.jQuery1 : '') : is('mozilla/index.html') ? g : '', is('j2me') ? 'mobile' : is('iphone') ? 'iphone' : is('ipod') ? 'ipod' : is('mac') ? 'mac' : is('darwin') ? 'mac' : is('webtv') ? 'webtv' : is('win') ? 'win' : is('freebsd') ? 'freebsd' : (is('x11') || is('linux')) ? 'linux' : '', 'js'];

			c = b.join(' ');
			h.className += ' ' + c;

		}

	});
})(jQuery, navigator);


/*
 * jQuery.appear
 * https://github.com/bas2k/jquery.appear/
 *
 * Copyright (c) 2012-2014 Alexander Brovikov
 * Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php)
 */
(function($) {
    $.fn.appear = function(options) {
		
		var transEndEventNames = {
			'WebkitTransition': 'webkitTransitionEnd',
			'MozTransition': 'transitionend',
			'OTransition': 'oTransitionEnd',
			'msTransition': 'MSTransitionEnd',
			'transition': 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed('transition') ];

        var settings = $.extend({
            data: undefined,
			speedAddClass: 300,
			speedRemoveClass: 100,
            // X & Y accuracy
            accX: 0,
            accY: 0
        }, options);
		
        return this.each(function (id) {

            var t = $(this);
			
            //whether the element is currently visible
            t.appeared = false;
			
            var w = $(window),
			check = function () {

                //is the element hidden?
                if (!t.is(':visible')) {
					
                    //it became hidden
                    t.appeared = false;
                    return;
                }

                //is the element inside the visible window?
                var a = w.scrollLeft(),
					b = w.scrollTop(),
					o = t.offset(),
					x = o.left,
					y = o.top,

					ax = settings.accX,
					ay = settings.accY,
					th = t.height(),
					wh = w.height(),
					tw = t.width(),
					ww = w.width();
				
                if (y + th + ay >= b &&
                    y <= b + wh + ay &&
                    x + tw + ax >= a &&
                    x <= a + ww + ax) {

                    //trigger the custom event
                    if (!t.appeared) t.trigger('appear', settings.data);

                } else {

                    //it scrolled out of view
                    t.appeared = false;
                }
            };
			
			var fn = function (e) {
				if (e.data) {
					setTimeout(function() {
						$(e.currentTarget).addClass(e.data + 'Run').one(transEndEventName, function () {
							$(this).removeClass(e.data);
						});
					}, id * settings.speedAddClass);
				}
			}

            //create a modified fn with some additional logic
            var modifiedFn = function () {
				
                //mark the element as visible
                t.appeared = true;
				
                //trigger the original fn
                fn.apply(this, arguments);
            };

            //bind the modified fn to the element
			t.bind('appear', settings.data, modifiedFn);

            //check whenever the window scrolls
            w.scroll(check);

            //check whenever the dom changes
            $.fn.appear.checks.push(check);
			
            //check now
            (check)();
        });
    };

    //keep a queue of appearance checks
    $.extend($.fn.appear, {

        checks: [],
        timeout: null,

        //process the queue
        checkAll: function() {
            var length = $.fn.appear.checks.length;
            if (length > 0) while (length--) ($.fn.appear.checks[length])();
        },

        //check the queue asynchronously
        run: function() {
            if ($.fn.appear.timeout) clearTimeout($.fn.appear.timeout);
            $.fn.appear.timeout = setTimeout($.fn.appear.checkAll, 20);
        }
    });
	
    //run checks when these methods are called
    $.each(['append', 'prepend', 'after', 'before', 'attr',
        'removeAttr', 'addClass', 'removeClass', 'toggleClass',
        'remove', 'css', 'show', 'hide'], function(i, n) {
        var old = $.fn[n];
		
        if (old) {
            $.fn[n] = function() {
                var r = old.apply(this, arguments);
                $.fn.appear.run();
                return r;
            }
        }
    });

})(jQuery);


/*
jQuery Waypoints - v2.0.3
Copyright (c) 2011-2013 Caleb Troughton
Dual licensed under the MIT license and GPL license.
https://github.com/imakewebthings/jquery-waypoints/blob/master/licenses.txt
*/
(function(){
	var t=[].indexOf||function(t){
		for(var e=0,n=this.length;e<n;e++){
			if(e in this&&this[e]===t)return e
				}
				return-1
		},e=[].slice;
	(function(t,e){
		if(typeof define==="function"&&define.amd){
			return define("waypoints",["jquery"],function(n){
				return e(n,t)
				})
			}else{
			return e(t.jQuery,t)
			}
		})(this,function(n,r){
	var i,o,l,s,f,u,a,c,h,d,p,y,v,w,g,m;
	i=n(r);
	c=t.call(r,"ontouchstart")>=0;
	s={
		horizontal:{},
		vertical:{}
};

f=1;
a={};

u="waypoints-context-id";
p="resize.waypoints";
y="scroll.waypoints";
v=1;
w="waypoints-waypoint-ids";
g="waypoint";
m="waypoints";
o=function(){
	function t(t){
		var e=this;
		this.$element=t;
		this.element=t[0];
		this.didResize=false;
		this.didScroll=false;
		this.id="context"+f++;
		this.oldScroll={
			x:t.scrollLeft(),
			y:t.scrollTop()
			};
			
		this.waypoints={
			horizontal:{},
			vertical:{}
	};
	
	t.data(u,this.id);
	a[this.id]=this;
	t.bind(y,function(){
		var t;
		if(!(e.didScroll||c)){
			e.didScroll=true;
			t=function(){
				e.doScroll();
				return e.didScroll=false
				};
				
			return r.setTimeout(t,n[m].settings.scrollThrottle)
			}
		});
t.bind(p,function(){
	var t;
	if(!e.didResize){
		e.didResize=true;
		t=function(){
			n[m]("refresh");
			return e.didResize=false
			};
			
		return r.setTimeout(t,n[m].settings.resizeThrottle)
		}
	})
}
t.prototype.doScroll=function(){
	var t,e=this;
	t={
		horizontal:{
			newScroll:this.$element.scrollLeft(),
			oldScroll:this.oldScroll.x,
			forward:"right",
			backward:"left"
		},
		vertical:{
			newScroll:this.$element.scrollTop(),
			oldScroll:this.oldScroll.y,
			forward:"down",
			backward:"up"
		}
	};
	
if(c&&(!t.vertical.oldScroll||!t.vertical.newScroll)){
	n[m]("refresh")
	}
	n.each(t,function(t,r){
	var i,o,l;
	l=[];
	o=r.newScroll>r.oldScroll;
	i=o?r.forward:r.backward;
	n.each(e.waypoints[t],function(t,e){
		var n,i;
		if(r.oldScroll<(n=e.offset)&&n<=r.newScroll){
			return l.push(e)
			}else if(r.newScroll<(i=e.offset)&&i<=r.oldScroll){
			return l.push(e)
			}
		});
l.sort(function(t,e){
	return t.offset-e.offset
	});
if(!o){
	l.reverse()
	}
	return n.each(l,function(t,e){
	if(e.options.continuous||t===l.length-1){
		return e.trigger([i])
		}
	})
});
return this.oldScroll={
	x:t.horizontal.newScroll,
	y:t.vertical.newScroll
	}
};

t.prototype.refresh=function(){
	var t,e,r,i=this;
	r=n.isWindow(this.element);
	e=this.$element.offset();
	this.doScroll();
	t={
		horizontal:{
			contextOffset:r?0:e.left,
			contextScroll:r?0:this.oldScroll.x,
			contextDimension:this.$element.width(),
			oldScroll:this.oldScroll.x,
			forward:"right",
			backward:"left",
			offsetProp:"left"
		},
		vertical:{
			contextOffset:r?0:e.top,
			contextScroll:r?0:this.oldScroll.y,
			contextDimension:r?n[m]("viewportHeight"):this.$element.height(),
			oldScroll:this.oldScroll.y,
			forward:"down",
			backward:"up",
			offsetProp:"top"
		}
	};
	
return n.each(t,function(t,e){
	return n.each(i.waypoints[t],function(t,r){
		var i,o,l,s,f;
		i=r.options.offset;
		l=r.offset;
		o=n.isWindow(r.element)?0:r.$element.offset()[e.offsetProp];
		if(n.isFunction(i)){
			i=i.apply(r.element)
			}else if(typeof i==="string"){
			i=parseFloat(i);
			if(r.options.offset.indexOf("%")>-1){
				i=Math.ceil(e.contextDimension*i/100)
				}
			}
		r.offset=o-e.contextOffset+e.contextScroll-i;
	if(r.options.onlyOnScroll&&l!=null||!r.enabled){
		return
	}
	if(l!==null&&l<(s=e.oldScroll)&&s<=r.offset){
		return r.trigger([e.backward])
		}else if(l!==null&&l>(f=e.oldScroll)&&f>=r.offset){
		return r.trigger([e.forward])
		}else if(l===null&&e.oldScroll>=r.offset){
		return r.trigger([e.forward])
		}
	})
})
};

t.prototype.checkEmpty=function(){
	if(n.isEmptyObject(this.waypoints.horizontal)&&n.isEmptyObject(this.waypoints.vertical)){
		this.$element.unbind([p,y].join(" "));
		return delete a[this.id]
		}
	};

return t
}();
l=function(){
	function t(t,e,r){
		var i,o;
		r=n.extend({},n.fn[g].defaults,r);
		if(r.offset==="bottom-in-view"){
			r.offset=function(){
				var t;
				t=n[m]("viewportHeight");
				if(!n.isWindow(e.element)){
					t=e.$element.height()
					}
					return t-n(this).outerHeight()
				}
			}
		this.$element=t;
	this.element=t[0];
	this.axis=r.horizontal?"horizontal":"vertical";
	this.callback=r.handler;
	this.context=e;
	this.enabled=r.enabled;
	this.id="waypoints"+v++;
	this.offset=null;
	this.options=r;
	e.waypoints[this.axis][this.id]=this;
	s[this.axis][this.id]=this;
	i=(o=t.data(w))!=null?o:[];
	i.push(this.id);
	t.data(w,i)
	}
	t.prototype.trigger=function(t){
	if(!this.enabled){
		return
	}
	if(this.callback!=null){
		this.callback.apply(this.element,t)
		}
		if(this.options.triggerOnce){
		return this.destroy()
		}
	};

t.prototype.disable=function(){
	return this.enabled=false
	};
	
t.prototype.enable=function(){
	this.context.refresh();
	return this.enabled=true
	};
	
t.prototype.destroy=function(){
	delete s[this.axis][this.id];
	delete this.context.waypoints[this.axis][this.id];
	return this.context.checkEmpty()
	};
	
t.getWaypointsByElement=function(t){
	var e,r;
	r=n(t).data(w);
	if(!r){
		return[]
		}
		e=n.extend({},s.horizontal,s.vertical);
	return n.map(r,function(t){
		return e[t]
		})
	};
	
return t
}();
d={
	init:function(t,e){
		var r;
		if(e==null){
			e={}
		}
		if((r=e.handler)==null){
		e.handler=t
		}
		this.each(function(){
		var t,r,i,s;
		t=n(this);
		i=(s=e.context)!=null?s:n.fn[g].defaults.context;
		if(!n.isWindow(i)){
			i=t.closest(i)
			}
			i=n(i);
		r=a[i.data(u)];
		if(!r){
			r=new o(i)
			}
			return new l(t,r,e)
		});
	n[m]("refresh");
	return this
	},
disable:function(){
	return d._invoke(this,"disable")
	},
enable:function(){
	return d._invoke(this,"enable")
	},
destroy:function(){
	return d._invoke(this,"destroy")
	},
prev:function(t,e){
	return d._traverse.call(this,t,e,function(t,e,n){
		if(e>0){
			return t.push(n[e-1])
			}
		})
},
next:function(t,e){
	return d._traverse.call(this,t,e,function(t,e,n){
		if(e<n.length-1){
			return t.push(n[e+1])
			}
		})
},
_traverse:function(t,e,i){
	var o,l;
	if(t==null){
		t="vertical"
		}
		if(e==null){
		e=r
		}
		l=h.aggregate(e);
	o=[];
	this.each(function(){
		var e;
		e=n.inArray(this,l[t]);
		return i(o,e,l[t])
		});
	return this.pushStack(o)
	},
_invoke:function(t,e){
	t.each(function(){
		var t;
		t=l.getWaypointsByElement(this);
		return n.each(t,function(t,n){
			n[e]();
			return true
			})
		});
	return this
	}
};

n.fn[g]=function(){
	var t,r;
	r=arguments[0],t=2<=arguments.length?e.call(arguments,1):[];
	if(d[r]){
		return d[r].apply(this,t)
		}else if(n.isFunction(r)){
		return d.init.apply(this,arguments)
		}else if(n.isPlainObject(r)){
		return d.init.apply(this,[null,r])
		}else if(!r){
		return n.error("jQuery Waypoints needs a callback function or handler option.")
		}else{
		return n.error("The "+r+" method does not exist in jQuery Waypoints.")
		}
	};

n.fn[g].defaults={
	context:r,
	continuous:true,
	enabled:true,
	horizontal:false,
	offset:0,
	triggerOnce:false
};

h={
	refresh:function(){
		return n.each(a,function(t,e){
			return e.refresh()
			})
		},
	viewportHeight:function(){
		var t;
		return(t=r.innerHeight)!=null?t:i.height()
		},
	aggregate:function(t){
		var e,r,i;
		e=s;
		if(t){
			e=(i=a[n(t).data(u)])!=null?i.waypoints:void 0
			}
			if(!e){
			return[]
			}
			r={
			horizontal:[],
			vertical:[]
		};
		
		n.each(r,function(t,i){
			n.each(e[t],function(t,e){
				return i.push(e)
				});
			i.sort(function(t,e){
				return t.offset-e.offset
				});
			r[t]=n.map(i,function(t){
				return t.element
				});
			return r[t]=n.unique(r[t])
			});
		return r
		},
	above:function(t){
		if(t==null){
			t=r
			}
			return h._filter(t,"vertical",function(t,e){
			return e.offset<=t.oldScroll.y
			})
		},
	below:function(t){
		if(t==null){
			t=r
			}
			return h._filter(t,"vertical",function(t,e){
			return e.offset>t.oldScroll.y
			})
		},
	left:function(t){
		if(t==null){
			t=r
			}
			return h._filter(t,"horizontal",function(t,e){
			return e.offset<=t.oldScroll.x
			})
		},
	right:function(t){
		if(t==null){
			t=r
			}
			return h._filter(t,"horizontal",function(t,e){
			return e.offset>t.oldScroll.x
			})
		},
	enable:function(){
		return h._invoke("enable")
		},
	disable:function(){
		return h._invoke("disable")
		},
	destroy:function(){
		return h._invoke("destroy")
		},
	extendFn:function(t,e){
		return d[t]=e
		},
	_invoke:function(t){
		var e;
		e=n.extend({},s.vertical,s.horizontal);
		return n.each(e,function(e,n){
			n[t]();
			return true
			})
		},
	_filter:function(t,e,r){
		var i,o;
		i=a[n(t).data(u)];
		if(!i){
			return[]
			}
			o=[];
		n.each(i.waypoints[e],function(t,e){
			if(r(i,e)){
				return o.push(e)
				}
			});
	o.sort(function(t,e){
		return t.offset-e.offset
		});
	return n.map(o,function(t){
		return t.element
		})
	}
};

n[m]=function(){
	var t,n;
	n=arguments[0],t=2<=arguments.length?e.call(arguments,1):[];
	if(h[n]){
		return h[n].apply(null,t)
		}else{
		return h.aggregate.call(null,n)
		}
	};

n[m].settings={
	resizeThrottle:100,
	scrollThrottle:30
};

return i.load(function(){
	return n[m]("refresh")
	})
})
}).call(this);