(function() {
  (function($) {
    var ZoomToo;
    ZoomToo = function(element, options) {
      this.element = element;
      this.load(options);
    };
    ZoomToo.defaults = {
      showDuration: 500,
      moveDuration: 1200,
      magnify: 1,
      lensWidth: 200,
      lensHeight: 200
    };
    ZoomToo.prototype = {
      load: function(options) {
        var img_src, nestedImage;
        nestedImage = this.element.find("img").first();
        img_src = nestedImage.data("src");
        this.element.one("zoomtoo.destroy", $.proxy(this.destroy, this));
        if (!img_src) {
          return;
        }
        this.img = new Image();
        this.img.src = img_src;
        this.img.onload = $.proxy(this.init, this, options);
      },
      init: function(options) {
        var position;
        position = this.element.css("position");
        this.settings = $.extend({}, ZoomToo.defaults, options);
        this.element.get(0).style.position = /(absolute|fixed)/.test(position) ? position : "relative";
        this.element.get(0).style.overflow = "hidden";
        this.elementWidth = this.element.outerWidth();
        this.elementHeight = this.element.outerHeight();
        this.imgWidth = this.img.width * this.settings.magnify;
        this.imgHeight = this.img.height * this.settings.magnify;
        this.elementOffset = this.element.offset();
        this.newZoom = {
          left: 0,
          top: 0
        };
        this.currentZoom = {
          left: 0,
          top: 0
        };
        this.moveImageTimer = 0;
        this.continueSlowMove = false;
        this.prepareElements();
      },
      prepareElements: function() {
        $(this.img).css({
          position: "absolute",
          top: 0,
          left: 0,
          opacity: 0,
          width: this.imgWidth,
          height: this.imgHeight,
          border: "none",
          maxWidth: "none",
          maxHeight: "none"
        }).appendTo(this.element);
        this.element.css({
          cursor: "crosshair"
        }).on("mouseenter.zoomtoo", $.proxy(this.mouseEnter, this)).on("mouseleave.zoomtoo", $.proxy(this.mouseLeave, this)).on("mousemove.zoomtoo", $.proxy(this.mouseMove, this));
      },
      destroy: function() {
        this.cancelTimer();
        this.element.off();
        $(this.img).remove();
        this.element.removeData("zoomtoo");
      },
      calculateOffset: function(currentMousePos) {
        var adjustedHeight, adjustedWidth, currentMouseOffsetX, currentMouseOffsetY, deltaHeight, deltaWidth, halfLensHeight, halfLensWidth, lensBottom, lensLeft, lensRight, lensTop, zoomLeft, zoomTop;
        currentMouseOffsetX = currentMousePos.x - this.elementOffset.left;
        currentMouseOffsetY = currentMousePos.y - this.elementOffset.top;
        halfLensHeight = Math.round(this.settings.lensHeight / 2);
        halfLensWidth = Math.round(this.settings.lensWidth / 2);
        lensTop = currentMouseOffsetY - halfLensHeight;
        lensBottom = currentMouseOffsetY + halfLensHeight;
        lensLeft = currentMouseOffsetX - halfLensWidth;
        lensRight = currentMouseOffsetX + halfLensWidth;
        if (lensTop < 0) {
          currentMouseOffsetY = halfLensHeight;
        }
        if (lensBottom > this.elementHeight) {
          currentMouseOffsetY = this.elementHeight - halfLensHeight;
        }
        if (lensLeft < 0) {
          currentMouseOffsetX = halfLensWidth;
        }
        if (lensRight > this.elementWidth) {
          currentMouseOffsetX = this.elementWidth - halfLensWidth;
        }
        deltaHeight = this.imgHeight - this.elementHeight;
        adjustedHeight = this.elementHeight - this.settings.lensHeight;
        deltaWidth = this.imgWidth - this.elementWidth;
        adjustedWidth = this.elementWidth - this.settings.lensWidth;
        zoomTop = -deltaHeight / adjustedHeight * (currentMouseOffsetY - halfLensHeight);
        zoomLeft = -deltaWidth / adjustedWidth * (currentMouseOffsetX - halfLensWidth);
        this.newZoom.left = zoomLeft;
        this.newZoom.top = zoomTop;
      },
      cancelTimer: function() {
        clearTimeout(this.moveImageTimer);
      },
      stopSlowMoveImage: function() {
        this.continueSlowMove = false;
      },
      mouseLeave: function() {
        $(this.img).stop().fadeTo(this.settings.showDuration, 0).promise().done(this.stopSlowMoveImage);
      },
      mouseEnter: function(e) {
        var currentMousePos;
        currentMousePos = {
          x: e.pageX,
          y: e.pageY
        };
        this.calculateOffset(currentMousePos);
        this.continueSlowMove = true;
        this.currentZoom.top = this.newZoom.top;
        this.currentZoom.left = this.newZoom.left;
        this.moveImage();
        $(this.img).stop().fadeTo(this.settings.showDuration, 1);
      },
      mouseMove: function(e) {
        var currentMousePos;
        currentMousePos = {
          x: e.pageX,
          y: e.pageY
        };
        this.calculateOffset(currentMousePos);
        this.cancelTimer();
        this.continueSlowMove = true;
        this.slowMoveImage();
      },
      slowMoveImage: function() {
        var delta, moveZoomPos, reachedLeft, reachedTop;
        delta = {
          left: 0,
          top: 0
        };
        moveZoomPos = {
          left: 0,
          top: 0
        };
        reachedLeft = false;
        reachedTop = false;
        delta.left = this.newZoom.left - this.currentZoom.left;
        delta.top = this.newZoom.top - this.currentZoom.top;
        moveZoomPos.left = -delta.left / (this.settings.moveDuration / 100);
        moveZoomPos.top = -delta.top / (this.settings.moveDuration / 100);
        this.currentZoom.left = this.currentZoom.left - moveZoomPos.left;
        this.currentZoom.top = this.currentZoom.top - moveZoomPos.top;
        if (Math.abs(delta.left) < 1) {
          this.currentZoom.left = this.newZoom.left;
          reachedLeft = true;
        }
        if (Math.abs(delta.top) < 1) {
          this.currentZoom.top = this.newZoom.top;
          reachedTop = true;
        }
        this.moveImage();
        if (reachedLeft && reachedTop) {
          this.continueSlowMove = false;
        }
        if (this.continueSlowMove === true) {
          this.moveImageTimer = setTimeout($.proxy(this.slowMoveImage, this), 25);
        }
      },
      moveImage: function() {
        this.img.style.left = this.currentZoom.left + "px";
        this.img.style.top = this.currentZoom.top + "px";
      }
    };
    $.fn.zoomToo = function(options) {
      this.each(function() {
        var instance;
        instance = $.data(this, "zoomtoo");
        if (!instance) {
          $.data(this, "zoomtoo", new ZoomToo($(this), options));
        }
      });
    };
  })(window.jQuery);

}).call(this);

//# sourceMappingURL=jquery.zoomtoo.js.map
