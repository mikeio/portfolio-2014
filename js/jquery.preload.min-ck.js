/*! Copyright 2011, Ben Lin (http://dreamerslab.com/)
* Licensed under the MIT License (LICENSE.txt).
*
* Version: 1.0.3
*
* Requires: jQuery 1.2.3+
*/(function(e){e.preload=function(){var t=Object.prototype.toString.call(arguments[0])==="[object Array]"?arguments[0]:arguments,n=[],r=t.length;for(;r--;)n.push(e("<img />").attr("src",t[r]))}})(jQuery);