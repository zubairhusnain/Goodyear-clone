<?php
declare(strict_types=1);
require_once dirname(__DIR__, 2) . '/base-url.php';
gy_start_output_rewrite();
?>
<!DOCTYPE html><html lang="en" class="backgroundblendmode"><head><base href="__GY_BASE__/">
<!-- begin spin_special_output(head_start) -->
<script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/MHBiAvbtvk5Wb2eTZHoP1dUd/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-sqowHdlB0Wd7Pyivp8HlgVSUp0y72f9c+AA/LnYmxQ3ftGNyujn1FRgphnO7e4Oo" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg=="></script><script type="text/javascript" wd_script_id="view_printable_script" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">
	function view_printable() {
		var loc = window.location;
		var sep = (loc.search == "") ? "?" : "&";
		var url = loc.protocol+"//"+loc.host+loc.pathname+loc.search+sep+"printable"+loc.hash;
		window.open(url, "_blank", "");
	}
</script>
<link href="assets/news.goodyear.com/thirdparty/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" wd_script_id="font-awesome.min.css">
<style type="text/css" wd_script_id="toolbar_style" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">
			div.wd_toolbar {
				border-top: 1px solid #cccccc;
				border-bottom: 1px solid #cccccc;
				margin: 15px 0px 15px 0px;
				padding: 5px;
				line-height: 1;
			}
			div.wd_toolbar-page {
				clear: both;
			}
			div.wd_toolbar ul.wd_tools {
				display: inline-block;
				width: 100%;
				margin: 0;
				padding: 5px 0;
			}
			div.wd_toolbar ul.wd_tools li.wd_tool {
				display: block;
				list-style-type: none;
				margin-right: 5px;
				padding: 0;
				float: right;
			}
			span.wd_tool_icon > a:link,
			span.wd_tool_icon > a:visited {
				border-radius: 2px;
				display: inline-block;
				width: 30px;
				height: 30px;
				box-sizing: border-box;
				margin: 0;
				padding: 7px;
				font-size: 16px;
				line-height: 1;
				text-align: center;
				color: #ffffff;
				background-color: #767676;
			} 
			span.wd_tool_icon > a:hover {
				color: #ffffff;
				background-color: #666666;
				text-decoration: none;
			}
			div.wd_toolbar ul.wd_tools li.wd_tool-addthis {
				float: left;
			}
		</style>
<link href="assets/news.goodyear.com/css/wd_wcag.css" type="text/css" rel="stylesheet" wd_script_id="wd_wcag.css">
<script type="text/javascript" src="assets/news.goodyear.com/js/jquery-webdriver.js" wd_script_id="jquery-webdriver.js" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg=="></script>
<script type="text/javascript" src="assets/news.goodyear.com/js/webdriver.js" wd_script_id="webdriver.js" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg=="></script>
<script type="text/javascript" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">webDriver.push_jQuery();</script>
<script type="text/javascript" src="assets/news.goodyear.com/js/jquery-ui.js" wd_script_id="jquery-ui.js" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg=="></script>
<script type="text/javascript" src="assets/news.goodyear.com/js/wd_resize.js" wd_script_id="wd_resize.js" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg=="></script>
<link href="assets/news.goodyear.com/css/wd_modal.css" type="text/css" rel="stylesheet" wd_script_id="wd_modal.css">
<script type="text/javascript" wd_script_id="wd_modal_script" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">
(function($) {
	webDriver.resizeModal = function() {
		$(this).find(".wd_modal").wd_modal("resize");
		return false;
	}
	
	var modals = [];
		
	function _value(value, base) {
		if (typeof value == "string" && value.indexOf("%") > 0) {
			return  base * parseInt(value, 10) / 100;
		} else {
			return parseInt(value, 10);
		}
	}
	
	var wd_modal = function(element, options) {
		this.init(element, options);
	};
	
	wd_modal.prototype = {
		init: function(element, options) {
			var self = this;
			
			this.isOpen = false;
			this.opener = null;
			
			this.$element = $(element);
			this._options = {
				autoOpen: false,
				closeExisting: false,
				closeOnEscape: true,
				closeOnOverlayClick: true,
				fadeDuration: null,
				margin: "10%",
				padding: 10
			};
			
			this.options(options);
			
			this.$overlay = $("<div>").addClass("wd_modal-overlay").attr("wd_resize","resizeModal").appendTo($("body")).hide();
			this.$outer = $("<div>").addClass("wd_modal-outer").appendTo(this.$overlay);
			this.$inner = $("<div>").addClass("wd_modal-inner").appendTo(this.$outer).append(this.$element);
			// Hack because I can't figure out where the extra few pixels at the bottom of the content are coming from
			this.$inner.css("overflow-y", "hidden");
			this.$close = $("<a class=\"wd_modal-close fa fa-times\" href=\"#close\" title=\"Close\"><span class=\"wd_sr-only\">Close Dialog<\/span><\/a>")
					.on("click", function(event) {self.close(); event.preventDefault();})
					.appendTo(this.$outer);
			this.$element.addClass("wd_modal");
			
			if (this._options.autoOpen)
				this.open(this._options.closeExisting);
		},
		
		options: function(options) {
			if (options) {
				$.extend(this._options, options);

				this._options.fadeDuration = parseInt(this._options.fadeDuration, 10);
				if (isNaN(this._options.fadeDuration))
					this._options.fadeDuration = false;
				
				if (!$.isArray(this._options.margin))
					this._options.margin = [this._options.margin];
				if (this._options.margin.length < 2)
					this._options.margin[1] = this._options.margin[0];
				if (this._options.margin.length < 3)
					this._options.margin[2] = this._options.margin[0];
				if (this._options.margin.length < 4)
					this._options.margin[3] = this._options.margin[1];
				
				if (!$.isArray(this._options.padding))
					this._options.padding = [this._options.padding];
				if (this._options.padding.length < 2)
					this._options.padding[1] = this._options.padding[0];
				if (this._options.padding.length < 3)
					this._options.padding[2] = this._options.padding[0];
				if (this._options.padding.length < 4)
					this._options.padding[3] = this._options.padding[1];
			} else {
				return this._options;
			}
		},
		
		reload: function(options) {
			if (options) {
				this.options(options);
			}
			
			this.resize();
		},
		
		open: function(closeExisting, now) {
			if (this.isOpen)
				return;
			
			var self = this;
			var myCloseExisting = closeExisting;
			
			if (!this.opener)
				this.opener = document.activeElement;

			if (closeExisting && modals.length > 0) {
				for (var i = modals.length - 1; i >= 0; --i)
					modals[i].close(true, true);
			}

			this.$overlay.addClass("wd_modal-current");
			$("body").append(this.$overlay);

			if (!now && this._options.fadeDuration) {
				this.$overlay.fadeIn(this._options.fadeDuration, function() {self.open(myCloseExisting, true);});
			} else {
				if (modals.length == 0) {
					$("body").css("overflow","hidden");
					$(document).on("keydown.wd_modal", function (event) {
						var current = modals[modals.length - 1];
						if ((event.which == 27 || event.keyCode == 27) && current._options.closeOnEscape) {
							current.close();
							event.stopImmediatePropagation();
							event.preventDefault();
						}
					});
				}

				if (this._options.closeOnOverlayClick) {
					this.$overlay.on("click.wd_modal", function (event) {
						if (event.target == this) {
							self.close();
							event.preventDefault();
						}
					});
				}

				modals.push(this);
				
				this.$overlay.show();
				
				var $focus = this.$element.find(":focusable");
				if ($focus.length > 0)
					$focus[0].focus();
				
				this.isOpen = true;

				this.$element.trigger("open");
			}
		},
		
		close: function(skipCurrent, now) {
			if (!this.isOpen)
				return;
			
			this.$element.trigger("beforeClose");
			
			// TODO: allow closing of lower modals
			modals.pop();
			
			if (modals.length == 0) {
				$("body").css("overflow","");
				$(document).off("keydown.wd_modal");
			}
			
			this.$overlay.off("click.wd_modal");
			
			if (this.opener) {
				this.opener.focus();
				this.opener = null;
			}
			
			this.isOpen = false;
			this.$overlay.removeClass("wd_modal-current").hide();
			
			if (!skipCurrent && modals.length > 0)
				modals[modals.length-1].$overlay.addClass("wd_modal-current");
			
			this.$element.trigger("close");
		},
		
		destroy: function() {
			this.close(false, true);
			$("body").append(this.$element);
			this.$overlay.remove();
		},
		
		resize: function() {
			if (!this.isOpen)
				return;
			
			var self = this;
			var winWidth = $(window).width();
			var winHeight = $(window).height();
			
			var margin = this._options.margin;
			var padding = this._options.padding;
			
			var width = winWidth - _value(margin[1], winWidth) - _value(margin[3], winWidth) - _value(padding[1], winWidth) - _value(padding[1], winWidth);
			var height = winHeight - _value(margin[0], winHeight) - _value(margin[2], winHeight) - _value(padding[0], winHeight) - _value(padding[2], winHeight);
			
			this.$inner.css("max-width", width);
			this.$inner.css("max-height", height);
			
			$.each(["Top", "Right", "Bottom", "Left"], function(i, v) {
				self.$outer.css("padding" + v, _value(padding[i])+"px");
			});
			
			var fixed = this.$element.find("[wd_need_fixed_container]").is(":visible");
			
			this.$inner.css("width", width);
			this.$inner.css("height", height);

			webDriver.doResize(this.$inner);
			
			if (!fixed) {
				this.$inner.css("width", "auto");
				this.$inner.css("height", "auto");
				if (this.$element.outerHeight() > height)
					this.$inner.css("height", height);
				if (this.$element.outerWidth() > width)
					this.$inner.css("width", width);
			}
		}
	};

	$.fn.wd_modal = function(options) {
		if (options == "exists") {
			return !!$(this).data("wd_modal");
		} else if (typeof options == "string") {
            var instance = $(this).data("wd_modal");
			if (!instance)
				return null;
			var args = Array.prototype.slice.call(arguments, 1);
            return instance[options].apply(instance, args);
        } else {
            return this.each(function() {
                var instance = $(this).data("wd_modal");
                if (instance) {
                    instance.reload(options);
                } else {
                    $(this).data("wd_modal", new wd_modal(this, options));
                }
            });
        }
    };
})(webDriver.jQuery);
</script>
<script type="text/javascript" src="assets/news.goodyear.com/js/wd_hashchange.js" wd_script_id="wd_hashchange.js" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg=="></script>
<script type="text/javascript" wd_script_id="asset_modal_support_script" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">
			(function($) {
				var prev_group_id = "";
				var prev_type_id = "";
				var prev_item_id = "";
				var prev_hash = false;
				var on_close = "back";
				function hash_update() {
					var hash = window.location.hash || "#";
					if (hash == prev_hash) return;

					var type_id = "";
					var item_id = ""
					var group_id = "main";

					var apos = hash.indexOf("assets_");
					if (apos >= 0) {
						type_id = hash.substr(apos+7);

						var dpos = type_id.indexOf("-");
						if (dpos >= 0) {
							group_id = type_id.substr(0, dpos);
							type_id = type_id.substr(dpos+1);
						}

						var cpos = type_id.indexOf(":");
						if (cpos >= 0) {
							item_id = type_id.substr(cpos+1);
							type_id = type_id.substr(0, cpos);
						}
					}

					if (type_id == "")
						type_id = "all";

					if ((type_id != prev_type_id || group_id != prev_group_id) && item_id == "") {
						var $carousel = $(".wd_asset_carousel_"+group_id+"_list")
						if ($carousel.length > 0)
							$carousel.wd_carousel("filter", (type_id == "all") ? false : ".wd_asset_type_"+type_id);

						var $slideshow = $(".wd_asset_slideshow_"+group_id+"_list")
						if ($slideshow.length > 0)
							$slideshow.wd_slideshow("filter", (type_id == "all") ? false : ".wd_asset_type_"+type_id);

						$(".wd_asset_carousel_type_link").removeClass("wd_active");
						$(".wd_asset_carousel_type_link.wd_asset_type_"+type_id).addClass("wd_active");

						prev_type_id = type_id;
						on_close = "back";
					}

					if (type_id != prev_type_id || item_id != prev_item_id || group_id != prev_group_id) {
						if (item_id == "") {
							var save_close = on_close;
							on_close = false;
							hide_asset_modal();
							on_close = save_close;
						} else {
							load_asset_modal(group_id, type_id, item_id);
						}
						set_social_share_data();

						prev_item_id = item_id;

						if (prev_hash === false)
							on_close = "reset";
					}

					prev_group_id = group_id;
					prev_hash = hash;
				}

				hide_asset_modal = function() {
					$(".wd_asset_modal").wd_modal("close");
				}

				load_asset_modal = function(group_id, type_id, item_id) {
					var $modal = $(".wd_asset_modal_"+group_id);;
					if ($modal.length == 0)
						return;

					if (!$modal.wd_modal("exists")) {
						$modal.wd_modal({
							autoOpen: false,
						});

						$modal.show();

						$modal.on("close", function() {
							if (on_close == "back") {
								history.back();
							} else if (on_close == "reset") {
								var href = window.location.href;
								href = href.replace(/#.*$/, "#assets_all");
								window.location.replace(href);
							}
						});
					}

					$modal.wd_modal("open", true);
					
					var $slideshow = $(".wd_asset_slideshow_"+group_id+"_list");
					if ($slideshow.length > 0) {
						var $slideshow_item = $slideshow.find(".wd_asset_"+type_id+"-"+item_id).not(".wd_clone");
						if ($slideshow_item.length > 0)
							$slideshow.wd_slideshow("scrollToItem", $slideshow_item);
					}

					var $carousel = $(".wd_asset_carousel_"+group_id+"_list");
					if ($carousel.length > 0) {
						var $carousel_item = $carousel.find(".wd_asset_"+type_id+"-"+item_id).not(".wd_clone");
						if ($carousel_item.length > 0)
							$carousel.wd_carousel("scrollToItem", $carousel_item);
					}
				}
				
				set_social_share_data = function() {
					var href = window.location.href.replace("#", "#!");
					window.addthis_share = {
						url: href
					}
				}
				
				$(function() {
					setTimeout(hash_update, 10);
					$(window).hashchange(hash_update);
				});
			})(webDriver.jQuery);
		</script>
<style type="text/css" wd_script_id="asset_modal_support_style" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">
			.wd_asset_modal .wd_captioned_image {
				max-width: 100%;
				max-height: 100%;
			}
			.wd_asset_modal img {
				max-width: 100%;
				max-height: 100%;
			}
			.wd_asset_modal div.wd_toolbar.wd_toolbar-asset_modal {
				position: fixed;
				background: transparent;
				top: 5%;
				left: 50%;
				transform: translate(-50%,-50%);
				border: none;
				margin: 0;
			}
		</style>
<style type="text/css" wd_script_id="asset_carousel_style" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">
			.wd_asset_carousel_aspect {
				position: relative;
				height: 100%;
				clear: both;
			}
			.wd_asset_carousel {
				background-color: #666666;
			}
			.wd_carousel.wd_asset_carousel_wrapper a.wd_carousel-arrow:link,
			.wd_carousel.wd_asset_carousel_wrapper a.wd_carousel-arrow:visited {
				color: #aaaaaa;
				font-size: 2em;
				position: relative;
				left: 0;
				top: 0;
				right: 0;
				bottom: 0;
				transform: none;
				margin: 10px 0;
			}
			.wd_carousel.wd_asset_carousel_wrapper a.wd_carousel-arrow:hover {
				color: #666666;
			}
			.wd_carousel.wd_asset_carousel_wrapper .wd_carousel-prev {
				float: left;
			}
			.wd_carousel.wd_asset_carousel_wrapper .wd_carousel-next {
				float: right;
			}
			.wd_asset_carousel_list div.wd_toolbar {
				border: none;
				font-size: 10px;
				position: relative;
			}
			.wd_asset_carousel_list span.wd_tool_icon a {
				font-size: 10px;
				width: 16px;
				height: 16px;
				padding: 3px;
			}
		</style>
<script type="text/javascript" src="assets/news.goodyear.com/js/wd_imagesloaded.js" wd_script_id="wd_imagesloaded.js" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg=="></script>
<link href="assets/news.goodyear.com/css/wd_carousel.css" type="text/css" rel="stylesheet" wd_script_id="wd_carousel.css">
<script type="text/javascript" wd_script_id="wd_carousel_script" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">
(function($, undefined) {
	webDriver.loadCarousel = function() {
		var options = {};
		var options_string = $(this).attr("wd_carousel_options");
		if (options_string)
			options = JSON.parse(options_string);
		$(this).wd_carousel(options);
	}
	
	webDriver.resizeCarousel = function() {
		$(this).find(".wd_carousel-list").wd_carousel("resize");
		return false;
	}
	
	var wd_carousel = function(element, options) {
		this.init(element, options);
	};
	
	wd_carousel.prototype = {
		init: function(element, options) {
			var self = this;
			
			this.$element = $(element);
			this._options = {
				selector: "li",
				center: true,
				slideSpeed: 500,
				slideEasing: "linear",
				infinite: true,
				widthMode: "content", // content, columns, width
				heightMode: "fixed", // content, fixed
				columns: 3,
				minWidth: 250,
				scrollUnit: "item", // item, page
				scrollSize: 1,
				dragThreshold: 10,
				"class": "",
				autoScroll: 0
			};
			
			this.options(options);
			
			this.$container = $("<div>").addClass("wd_carousel").attr("wd_resize","resizeCarousel").insertBefore(this.$element);
			if (this._options["class"])
				this.$container.addClass(this._options["class"]);
			this.$cropper = $("<div>").addClass("wd_carousel-cropper").appendTo(this.$container);
			this.$element
					.addClass("wd_carousel-list")
					.appendTo(this.$cropper)
					.css({position:"absolute",top:0,left:0})
					.on("dragstart", "*", function(event) {event.preventDefault();});
			this.$prev = $("<a class=\"wd_carousel-arrow wd_carousel-prev fa fa-chevron-left\" href=\"#prev\"><\/a>")
					.on("click", function(event) {
						self.stop();
						self.prev();
						event.preventDefault();
					})
					.appendTo(this.$container);
			this.$next = $("<a class=\"wd_carousel-arrow wd_carousel-next fa fa-chevron-right\" href=\"#next\"><\/a>")
					.on("click", function(event) {
						self.stop();
						self.next();
						event.preventDefault();
					})
					.appendTo(this.$container);
			
//			this.$dragger = $("<div>")
//					.addClass("wd_carousel-dragger")
//					.appendTo(this.$cropper)
			this.$cropper
					.on("click", function(event) {
						self.onClick(event);
					})
					.on("mousedown touchstart", function(event) {
						self.dragStart(event);
					})
					.on("mousemove touchmove", function(event) {
						self.dragMove(event);
					})
					.on("mouseup touchend mouseleave touchcancel", function(event) {
						self.dragEnd(event);
					});
			this.dragging = false;
			this.dragged = false;
			
			this.$items = this.$element.children(this._options.selector);
			this.$items.addClass("wd_carousel-item");
			
			// Remove any non-items (e.g. unintended text nodes)
			this.$element.empty();
			this.$element.append(this.$items);

			this.navEnabled = true;
			this.currentIndex = 0;
			this.$currentItem = this.$items.eq(0);
			
			this.$clones = $([]);
			
			this.size_known = false;
			this.$element.wd_imagesloaded(
				function() {
					self.size_known = true;					
					self.resize();
				},
				"size"
			);
			
			this.reset();
			
			this.start(this._options.autoScroll);
		},
		
		options: function(options) {
			if (options) {
				$.extend(this._options, options);
			} else {
				return this._options;
			}
		},
		
		reload: function(options) {
			if (options) {
				this.options(options);
			}
			
			this.resize();
		},

		reset: function() {
			this.$items.data("wd_carousel-index", null);
			this.$clones.data("wd_carousel-index", null);
			this.$element.children(".wd_clone").detach();
			
			var $children = this.$element.children();
			this.itemCount = $children.length;
			$children.each(function(index) {
				$(this).data("wd_carousel-index", index);
			});
			
			if (this.itemCount > 0) {
				var $last_child = $children.eq(-1);
				this.listWidth = $last_child.position().left + $last_child.outerWidth();
			} else {
				this.listWidth = 0;
			}
			
			var cropperWidth = this.$cropper.innerWidth();
			
			if (this.itemCount < 2 || this.listWidth <= cropperWidth) {
				var position = this._options.center ? ((cropperWidth-this.listWidth)/2) : 0;
				this.$element.css("left", position);
				$children.addClass("wd_carousel-current");
				if (this.itemCount > 0 && this.size_known) {
					this.$currentItem = this.itemAt(this.listWidth/2);
					this.currentIndex = this.$currentItem.data("wd_carousel-index");
				}
				this.hideNav(true);
			} else {
				var left = cropperWidth;
				for (var i = -1; i > -$children.length; --i) {
					var $item = $children.eq(i);
					var $clone = $item.data("wd_carousel-clone-left");
					if (!$clone)
						$clone = this.clone($item, "left");
					this.$element.prepend($clone);
					$clone.data("wd_carousel-index", i);
					left -= $item.outerWidth();
					if (left <= 0)
						break;
				}
				
				var right = 0;
				for (var i = 0; i < $children.length; ++i) {
					var $item = $children.eq(i);
					var $clone = $item.data("wd_carousel-clone-right");
					if (!$clone)
						$clone = this.clone($item, "right");
					this.$element.append($clone);
					$clone.data("wd_carousel-index", $children.length+i);
					right += $item.outerWidth();
					if (right >= cropperWidth)
						break;
				}

				this.hideNav(false);

				var index = this.$currentItem.data("wd_carousel-index");
				if (!index)
					index = 0;
				this.scrollToIndex(index, true);
			}
		},
				
		clone: function($item, dir) {
			var $clone = $item.clone(true)
				.attr("id","")
				.addClass("wd_clone")
				.data("wd_carousel-cloned-from", $item);
		
			$clone.find("[id]").each(function() {
				$(this).attr("id", "");
			});

			$item.data("wd_carousel-clone-"+dir, $clone);
			
			this.$clones = this.$clones.add($clone);
			
			return $clone;
		},
				
		hideNav: function(hide) {
			this.$prev.toggle(!hide);
			this.$next.toggle(!hide);
			this.navEnabled = !hide;
		},
				
		next: function() {
			return this.scrollBy(this._options.scrollSize, this._options.scrollUnit);
		},

		prev: function() {
			return this.scrollBy(-this._options.scrollSize, this._options.scrollUnit);
		},
		
		scrollBy: function(count, unit) {
			if (!this.navEnabled)
				return false;
			
			var index;
			if (unit == "item") {
				index = this.currentIndex + count;
			} else { // unit == "page"
				var pageWidth = this.$cropper.innerWidth();
				var offset = count;
				if (this._options.center) {
					pageWidth /= 2;
					++offset;
				}
				var position = offset * pageWidth - this.$element.position().left;
				var $item = this.itemAt(position);
				index = $item.data("wd_carousel-index");
				if (index == this.currentIndex)
					index += (count < 0) ? -1 : 1;
			}
			
			return this.scrollToIndex(index);
		},
				
		_doAutoScroll: function() {
			if (this.navEnabled && this.autoScrollInterval > 0) {
				var self = this;
				this.autoScrollTimer = setTimeout(function() {
						self.next();
					},
					this.autoScrollInterval
				);
			}
		},
		
		start: function(interval) {
			this.pause();
			if (interval !== undefined)
				this.autoScrollInterval = interval;
			this._doAutoScroll();
		},
		
		pause: function() {
			if (this.autoScrollTimer) {
				clearTimeout(this.autoScrollTimer);
				this.autoScrollTimer = null;
			}
		},
				
		stop: function() {
			this.pause();
			this.autoScrollInterval = 0;
		},
		
		scrollToIndex: function(index, now) {
			if (this.itemCount == 0 || !this.navEnabled)
				return false;
			
			this.pause();
			
			var $children = this.$element.children().not(".wd_clone");
			
			index = (index + $children.length) % $children.length;
			var $child = $children.eq(index);
			
			this.$element.find(".wd_carousel-current").removeClass("wd_carousel-current");
			$child.addClass("wd_carousel-current");
			
			var position = -$child.position().left;
			if (this._options.center) {
				position += this.$cropper.innerWidth()/2 - $child.outerWidth()/2;
			}
			
			if (this._options.slideEasing && !now) {
				this.$element.stop();
				
				var cur_offset = this._options.center ? (this.$cropper.innerWidth() / 2) : 0;
				var cur_pos = this.$element.position().left;
				var $cur_item = this.itemAt(cur_offset - cur_pos);
				var cur_dist = Math.abs(position - cur_pos);
				
				var $clone, clone_pos, clone_dist;
				$clone = $cur_item.data("wd_carousel-clone-left");
				if ($clone) {
					var clone_pos = -$clone.position().left;
					if (this._options.center) {
						clone_pos += this.$cropper.innerWidth()/2 - $clone.outerWidth()/2;
					}
					clone_dist = Math.abs(position - clone_pos);
					if (clone_dist < cur_dist) {
						cur_pos = clone_pos;
						cur_dist = clone_dist;
					}
				}

				$clone = $cur_item.data("wd_carousel-clone-right");
				if ($clone) {
					var clone_pos = -$clone.position().left;
					if (this._options.center) {
						clone_pos += this.$cropper.innerWidth()/2 - $clone.outerWidth()/2;
					}
					clone_dist = Math.abs(position - clone_pos);
					if (clone_dist < cur_dist) {
						cur_pos = clone_pos;
						cur_dist = clone_dist;
					}
				}

				var self = this;
				this.$element.css("left", cur_pos);
				this.$element.animate({left: position}, this._options.slideSpeed, this._options.slideEasing, function() {self.start();});
			} else {
				this.$element.css("left", position);
				this.start();
			}

			this.currentIndex = index;
			this.$currentItem = $child;
		},
				
		scrollToItem: function(item) {
			var index = $(item).data("wd_carousel-index");
			if (index !== null)
				this.scrollToIndex(index);
		},
				
		makeItemCurrent: function(item) {
			var $item = $(item);
			if (!$item.hasClass("wd_carousel-current")) {
				this.$element.find(".wd_carousel-current").removeClass("wd_carousel-current");
				
				var $clonedFrom = $item.data("wd_carousel-cloned-from");
				if ($clonedFrom) {
					var clone_pos = $item.position().left;
					var item_pos = $clonedFrom.position().left;
					var offset = clone_pos - item_pos;
					this.$element.css("left", this.$element.css("left") + offset);
					this.dragListX += offset;
					$item = $clonedFrom;
				}
				
				$item.addClass("wd_carousel-current");
				this.currentIndex = $item.data("wd_carousel-index");
				this.$currentItem = $item;
			}
		},
				
		itemAt: function(position) {
			var $children = this.$element.children();
			if ($children.length == 0)
				return null;
			
			var $item = $children.eq(Math.floor($children.length/2));
			var dir = 0;
			while (true) {
				if (position < $item.position().left) {
					$item = $item.prev();
					if (dir == 1)
						break;
					dir = -1;
				} else if (position > $item.position().left + $item.outerWidth()) {
					$item = $item.next();
					if (dir == -1)
						break;
					dir = 1;
				} else {
					break;
				}
				if ($item.length == 0)
					break;
			}
			
			return $item;
		},
				
		onClick: function(event) {
			if (this.dragged) {
				event.stopImmediatePropagation();
				event.stopPropagation();
				event.preventDefault();
			}
		},
				
		dragStart: function(event) {
			this.dragged = false;

			if (!this.navEnabled)
				return;

			this.pause();
			this.dragIndex = this.currentIndex;
			
			this.dragStartX = this.eventPosition(event);
			if (this.dragStartX === undefined)
				return;
			
			this.dragListX = this.$element.position().left;

//			this.$cropper.addClass("dragging");
			this.dragging = true;
		},
				
		dragMove: function(event) {
			if (!this.dragging)
				return;
			
			event.preventDefault();
			
			var pos = this.eventPosition(event);
			var delta = pos - this.dragStartX;
			
			if (!this.dragged && Math.abs(delta) >= this._options.dragThreshold) {
				this.$cropper.addClass("dragging");
				this.dragged = true;
			}
			
			if (this.dragged) {
				var list_position = this.dragListX+delta;
				this.$element.css("left", list_position);
				
				var offset = this._options.center ? (this.$cropper.innerWidth() / 2) : 0;
				var position = offset - this.$element.position().left;
				var $item = this.itemAt(position);
				this.makeItemCurrent($item);
			}
		},
				
		dragEnd: function(event) {
			if (!this.dragging)
				return;
			
			if (this.dragged) {
				var offset = this._options.center ? (this.$cropper.innerWidth() / 2) : 0;
				var position = offset - this.$element.position().left;
				var $item = this.itemAt(position);
				var index = $item.data("wd_carousel-index");
				if (index !== null && index != this.dragIndex)
					this.stop();
				this.scrollToIndex(index);
			}

			this.$cropper.removeClass("dragging");
			this.dragging = false;
			this.start();
		},
				
		eventPosition: function(event) {
			if (event.originalEvent && event.originalEvent.touches) {
				var touches = event.originalEvent.touches;
				if (touches.length != 1)
					return undefined;
				return touches[0].pageX;
			} else {
				return event.pageX;
			}
		},
				
		filter: function(selector) {
			this.$element.children().detach();
			var $items = this.$items;
			if (selector)
				$items = $items.filter(selector);
			if ($items.length > 0)
				this.$element.append($items);
			this.reset();
		},
		
		destroy: function() {
			this.stop();
			this.filter(false);
			this.$clones = $([]);
			this.$items
				.removeClass("wd_carousel-item")
				.data("wd_carousel-index", null)
				.data("wd_carousel-clone-right", null)
				.data("wd_carousel-clone-left", null);
			this.$element
				.removeClass("wd_carousel-list")
				.insertBefore(this.$container);
			this.$container.remove();
		},
		
		resize: function() {
			if (this._options.widthMode != "content") {
				var totalWidth = this.$cropper.innerWidth();
				var columns = this._options.columns;
				if (this._options.widthMode == "width")
					columns = Math.max(Math.floor(totalWidth / this._options.minWidth), 1);
				var width = totalWidth / columns;
				this.$items.outerWidth(width);
				this.$clones.outerWidth(width);
			}
			
			webDriver.doResize(this.$element);
			
			if (this._options.heightMode == "content") {
				var height = this.$element.outerHeight();
				this.$cropper.height(height);
			}
			
			this.reset();
		}
	};

	$.fn.wd_carousel = function(options) {
		var args = Array.prototype.slice.call(arguments, 1);
		var result = this;
		
		this.each(function() {
			var instance = $(this).data("wd_carousel");
			if (typeof options == "string") {
				var res = instance[options].apply(instance, args);
				if (typeof res != "undefined") {
					result = res;
					return false;
				}
			} else {
                if (instance) {
                    instance.reload(options);
                } else {
                    $(this).data("wd_carousel", new wd_carousel(this, options));
                }
			}
        });
		
		return result;
    };
})(webDriver.jQuery);
</script>
<script type="text/javascript" src="assets/news.goodyear.com/js/wd_scriptloader.js" wd_script_id="wd_scriptloader.js" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg=="></script>
<link href="assets/news.goodyear.com/css/wd_slideshow.css" type="text/css" rel="stylesheet" wd_script_id="wd_slideshow.css">
<script type="text/javascript" wd_script_id="wd_slideshow_script" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">
(function($, undefined) {
	webDriver.resizeSlideshow = function() {
		$(this).find(".wd_slideshow-list").wd_slideshow("resize");
		return false;
	}
	
	var wd_slideshow = function(element, options) {
		this.init(element, options);
	};
	
	wd_slideshow.prototype = {
		init: function(element, options) {
			var self = this;
			
			this.$element = $(element);
			this._options = {
				selector: "li",
				preload: false,
				"class": "",
				resize: "container" // children, self, container
			};
			
			this.options(options);
			
			this.$container = $("<div>").addClass("wd_slideshow").attr("wd_resize","resizeSlideshow").attr("tabindex","-1").insertBefore(this.$element);
			if (this._options["class"])
				this.$container.addClass(this._options["class"]);
			this.$cropper = $("<div>").addClass("wd_slideshow-cropper").appendTo(this.$container);
			this.$element
					.addClass("wd_slideshow-list")
					.appendTo(this.$cropper)
			;
			this.$prev = $("<a class=\"wd_slideshow-arrow wd_slideshow-prev fa fa-chevron-left\" href=\"#prev\" title=\"Previous\"><span class=\"wd_sr-only\">Previous Item<\/span><\/a>")
					.on("click", function(event) {
						self.prev();
						event.preventDefault();
					})
					.appendTo(this.$container);
			this.$next = $("<a class=\"wd_slideshow-arrow wd_slideshow-next fa fa-chevron-right\" href=\"#next\" title=\"Next\"><span class=\"wd_sr-only\">Next Item<\/span><\/a>")
					.on("click", function(event) {
						self.next();
						event.preventDefault();
					})
					.appendTo(this.$container);
			
			this.$container.on("keydown.wd_slideshow", function (event) {
				var key = event.which || event.keyCode;
				if (key == 37) {
					self.prev();
					event.stopImmediatePropagation();
					event.preventDefault();
				}
				if (key == 39) {
					self.next();
					event.stopImmediatePropagation();
					event.preventDefault();
				}
			});

			this.$items = this.$element.children(this._options.selector);
			this.$items.addClass("wd_slideshow-item");
			
			// Remove any non-items (e.g. unintended text nodes)
			this.$element.empty();
			this.$element.append(this.$items);

			this.navEnabled = true;
			this.currentIndex = 0;
			this.$currentItem = this.$items.eq(0);
			
			if (this._options.preload)
				this.load_next();
		},
		
		options: function(options) {
			if (options) {
				$.extend(this._options, options);
			} else {
				return this._options;
			}
		},
		
		reload: function(options) {
			if (options) {
				this.options(options);
			}
			
			this.reset();
		},

		reset: function() {
			this.$items.data("wd_slideshow-index", null);
			
			var $children = this.$element.children();
			this.itemCount = $children.length;
			$children.each(function(index) {
				$(this).data("wd_slideshow-index", index);
			});

			this.hideNav(this.itemCount < 2);
			
			var index = this.$currentItem.data("wd_slideshow-index");
			if (!index)
				index = 0;
			
			this.scrollToIndex(index, false);
		},
				
		hideNav: function(hide) {
			this.$prev.toggle(!hide);
			this.$next.toggle(!hide);
			this.navEnabled = !hide;
		},
				
		item_loaded: function(item) {
			var $item = $(item);
			return ($item.children().length > 0 || !$item.attr("wd_ajax_url"));
		},
				
		load_next: function() {
			var self = this;
			var next = null;
			var $children = this.$element.children().not(".wd_clone");

			var after = this.currentIndex;
			var before = this.currentIndex;
			while (after < $children.length || before >= 0) {
				if (after < $children.length && !this.item_loaded($children[after])) {
					next = $children[after];
					break;
				}
				++after;
				if (before >= 0 && !this.item_loaded($children[before])) {
					next = $children[before];
					break;
				}
				--before;
			}
			
			if (!next) {
				var $filtered = this.$items.remove($children);

				$filtered.each(function() {
					if (!self.item_loaded(this)) {
						next = this;
						return false;
					}
				});
			}
			
			if (next)
				this.load_item(next, function() {self.load_next();});
		},
		
		load_item: function(item, on_complete) {
			var self = this;
			var $item = $(item);
			var complete = on_complete;
			
			if (!this.item_loaded($item)) {
				$item.html("<div>Loading...</div>");
				$item.addClass("wd_loading");
				$item.load(
					$item.attr("wd_ajax_url"),
					function(response, status, xhr) {
						if ($item.children().length == 0)
							$item.append("<div>No content</div>");
						webDriver.queueCallback(function() {
							if ($item.hasClass("wd_slideshow-current"))
								self.resize(self._options["resize"] == "container");
							$item.removeClass("wd_loading");
							if ($item.hasClass("wd_slideshow-current")) {
								$item.wd_imagesloaded(
									function() {
										self.resize(self._options["resize"] == "container");
									},
									"size"
								);
							}
						});

						if (complete)
							complete(response, status, xhr);
					}
				);
			}
		},
				
		next: function() {
			return this.scrollBy(1);
		},

		prev: function() {
			return this.scrollBy(-1);
		},
		
		scrollBy: function(count) {
			var index = this.currentIndex + count;
			
			return this.scrollToIndex(index, true);
		},
		
		scrollToIndex: function(index, update_hash) {
			var self = this;
			var $children = this.$element.children().not(".wd_clone");
			
			var orig_index = index;
			index = (index + $children.length) % $children.length;
			var $child = $children.eq(index);
			
			if (update_hash && $child.attr("wd_item_hash")) {
				var hash = "#"+$child.attr("wd_item_hash");
				var current_hash = window.location.hash || "#";
				if (hash != current_hash) {
					var href = window.location.href+"#";
					href = href.replace(/#.*$/, hash);
					window.location.replace(href);
					return;
				}
			}
			
			this.$element.find(".wd_slideshow-current").removeClass("wd_slideshow-current");
			$child.addClass("wd_slideshow-current");
			
			if (!this.item_loaded($child))
				this.load_item($child);
			
			this.$container[0].focus();

			this.currentIndex = index;
			this.$currentItem = $child;
			
			this.resize(this._options["resize"] == "container");
		},
				
		scrollToItem: function(item) {
			var index = $(item).data("wd_slideshow-index");
			if (index !== null)
				this.scrollToIndex(index, true);
		},
				
		filter: function(selector) {
			this.$element.children().detach();
			var $items = this.$items;
			if (selector)
				$items = $items.filter(selector);
			this.$element.append($items);
			this.reset();
		},
		
		destroy: function() {
			this.filter(false);
			this.$items
				.removeClass("wd_slideshow-item")
				.data("wd_slideshow-index", null)
			;
			this.$element
				.removeClass("wd_slideshow-list")
				.insertBefore(this.$container)
			;
			this.$container.remove();
		},
		
		resize: function(resize_container) {
			if (resize_container) {
				webDriver.doResize(this.$container, "container");
			} else if (this.$currentItem && !this.$currentItem.hasClass("wd_loading")) {
				webDriver.doResize(this.$currentItem);
			}
		}
	};

	$.fn.wd_slideshow = function(options) {
		var args = Array.prototype.slice.call(arguments, 1);
		var result = this;
		
		this.each(function() {
			var instance = $(this).data("wd_slideshow");
			if (typeof options == "string") {
				var res = instance[options].apply(instance, args);
				if (typeof res != "undefined") {
					result = res;
					return false;
				}
			} else {
                if (!instance) {
					instance = new wd_slideshow(this, options);
					$(this).data("wd_slideshow", instance);
				}
				
                instance.reload(options);
			}
        });
		
		return result;
    };
})(webDriver.jQuery);
</script>
<script type="text/javascript" wd_script_id="template_list_slideshow_script" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">
						webDriver.jQuery(function($) {
							$(".wd_layout-slideshow").each(function() {
								var $slideshow = $(this);
								$slideshow.wd_slideshow({
									preload: true,
									"class": "wd_asset_slideshow_wrapper wd_asset_slideshow_main_wrapper"
								});
							});
						});
					</script>
<style type="text/css" wd_script_id="template asset_carousel_item:gallery:system style" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">
.wd_gallery_asset {
	height: 100%;
	width: 100%;
	position: relative;
	color: #ffffff;
	min-height: 100px;
	min-width: 100px;
}
.wd_gallery_asset .wd_asset_image {
	height: 100%;
	width: 100%;
	margin: 0;
	padding: 0;
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-webkit-justify-content: center;
	-moz-justify-content: center;
	-ms-flex-pack: center;
	justify-content: center;
	-webkit-box-align: center;
	-webkit-align-items: center;
	-moz-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	font-size: 0px;
}
.wd_gallery_asset .wd_asset_image img {
	max-width: 100%;
	max-height: 100%;
	flex-shrink: 0;
	margin: 0;
	float: none;
}
.wd_gallery_asset .wd_icon_overlay {
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, .75) none center center no-repeat;
	opacity: 0.0;
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-webkit-justify-content: center;
	-moz-justify-content: center;
	-ms-flex-pack: center;
	justify-content: center;
	-webkit-box-align: center;
	-webkit-align-items: center;
	-moz-box-align: center;
	-ms-flex-align: center;
	align-items: center;
}
.wd_gallery_asset .wd_icon_overlay .wd_link_underlay {
	display: block;
	position: absolute;
	bottom: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	box-sizing: border-box;
}
.wd_gallery_asset .wd_icon_overlay a.wd_link_underlay:hover {
	background-color: transparent;
}
.wd_gallery_asset .wd_icon_overlay .wd_icon_container {
	font-size: 50px;
	position: relative;
	text-align: center;
}
.wd_gallery_asset .wd_icon_overlay .wd_icon_container > a,
.wd_gallery_asset .wd_icon_overlay .wd_icon_container > a:link,
.wd_gallery_asset .wd_icon_overlay .wd_icon_container > a:visited {
	color: #cccccc;
}
.wd_gallery_asset .wd_icon_overlay .wd_icon_container > a:hover {
	text-decoration: none;
	background-color: transparent;
}
.wd_gallery_asset .wd_title_overlay {
	position: absolute;
	bottom: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	box-sizing: border-box;
	padding: 10px;
	pointer-events: none;
	opacity: 0.0;
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: start;
	-webkit-justify-content: flex-start;
	-moz-justify-content: flex-start;
	-ms-flex-pack: start;
	justify-content: flex-start;
	-webkit-box-align: end;
	-webkit-align-items: flex-end;
	-moz-box-align: end;
	-ms-flex-align: end;
	align-items: flex-end;
}
.wd_gallery_asset:hover .wd_icon_overlay,
.wd_gallery_asset:hover .wd_title_overlay,
.wd_gallery_asset:focus-within .wd_icon_overlay,
.wd_gallery_asset:focus-within .wd_title_overlay {
	opacity: 1.0;
}</style>
<script type="text/javascript" src="assets/news.goodyear.com/js/wd_load.js" wd_script_id="wd_load.js" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg=="></script>
<script type="text/javascript" src="assets/news.goodyear.com/js/wd_fixed_aspect_ratio.js" wd_script_id="wd_fixed_aspect_ratio.js" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg=="></script>
<script type="text/javascript" wd_script_id="move_content_script" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">
				(function($) {
					function wd_move_content() {
						$("[wd_move_after]").each(function() {
							var $this = $(this);
							var selectors = $this.attr("wd_move_after").split("|");
							for (var i = 0; i < selectors.length; ++i) {
								var $dest = $(selectors[i]);
								if ($dest.length > 0) {
									$this.insertAfter($dest.eq(0));
									break;
								}
							}
						});
					}
					
					$(function() {
						wd_move_content();
					});
				})(webDriver.jQuery);
			</script>
<script type="text/javascript" wd_script_id="format_news_script" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">
(function($) {
	webDriver.formatNews = function() {
		var $news = $(this);
		var print_url = $news.attr("wd_print_url");
		$news.find("table").each(function() {
			var $table = $(this);
			var $parent = $table.parent();
			if ($parent.innerWidth() < $table.outerWidth()) {
				if ($parent.hasClass("wd_news_table")) {
					$parent.find(".fullscreen-button").show();
				} else {
					var $btn = $("<button>View News Release Full Screen</button>")
						.addClass("fullscreen-button")
						.on("click", function() {
							if (print_url)
								window.open(print_url, "_blank", "");
							else
								view_printable();
						})
					;

					var $div = $("<div></div>)")
						.addClass("wd_news_table")
						.css("overflow-x", "auto")
						.append($btn)
					;

					$table.replaceWith($div);
					$div.append($table);
				}
			} else {
				if ($parent.hasClass("wd_news_table"))
					$parent.find(".fullscreen-button").hide();
			}
		});
	}
})(webDriver.jQuery);
</script>
<style type="text/css" wd_script_id="template detail:newsfeed_releases:site style" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">.wd_title {
	font-size: 1.3em;
	font-weight: bold;
}
.wd_subtitle {
	font-weight: bold;
}
table.wd_extimagetable {
	border-style: none; 
	border-spacing:0px;
	clear: right; 
	float: right; 
}
td.wd_extimagecell {
	text-align: right; 
	margin: 0px 0px 5px 5px;
	padding:0px;
}
td.wd_extimagecell img {
	padding-left:10px;
	padding-bottom:10px;
	border-style: none; 
}
blockquote.wd_pullquote {
	font-style: italic;
	width:200px;
	margin:0 0 20px 20px;
	line-height: 1.8em;
	float: right;
	clear: right;
}
blockquote.wd_pullquote:before {
	content: "“ ";
	font-size: xx-large;
}
blockquote.wd_pullquote:after {
	content: " ”";
	font-size: xx-large;
	float: right;
}
.fullscreen-button {
	border: 1px solid #d1d1d1;
	background: #e3e3e3 url(images/webdriver/view_full_screen_button_background.png) no-repeat;
	padding: 3px 3px 3px 30px;
	margin: 5px 0px 5px 0px;
	color: #727272;
	width: 220px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	cursor: pointer;
}
.wd_contact {
	margin: 1em 0;
}
.wd_release_data {
	margin: 1em 0;
}
.wd_caption {
	text-align: center;
	font-size: 0.72em;
	font-style: italic;
	margin: 1em 0 0 0;
}
</style>
<style type="text/css" wd_script_id="template teaser_list:newsfeed_releases:site style" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">.wd_newsfeed_releases-teaser .wd_date {
	font-weight: bold;
}
.wd_newsfeed_releases-teaser .wd_title {
	font-weight: bold;
}
.wd_newsfeed_releases-teaser .subscribe_link {
	margin-bottom: 1em;
}
.wd_newsfeed_releases-teaser span.wd_subscribe_email-icon {  
	font-size: 1.2em; 
}</style>
<style type="text/css" wd_script_id="featureboxes_style" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">
		.wd_featurebox_icon {
			display: inline;
		}
		.wd_featurebox_icon img {
			vertical-align: middle;
		}
		div.wd_featurebox_group div.wd_tabs_wrapper {
			border: none;
			border-bottom: 1px solid #E1E1E1;
			padding: 0 0 5px 0;
		}
		div.wd_featurebox_group div.wd_featurebox {
			border: none;
			padding: 8px 0 0 0;
		}
		div.wd_featurebox_group li.wd_tab {
			float: none;
			color: #666666;
		}
		div.wd_featurebox_group li.wd_tab-active {
			border: none;
			background-color: transparent;
			color: #000000;
			font-weight: bold;
		}
		div.wd_featurebox_group li.wd_tab-inactive {
			cursor: auto;
		}
	</style>
<script type="text/javascript" nonce="M2Y0MzZjNjkxMTE5NmE2MTM0ZTY0ZGQxYWI3MWJmMmViZmMxMzgzZg==">webDriver.pop_jQuery();</script>

<!-- end spin_special_output(head_start) -->

	<!-- OneTrust Cookies Consent Notice start for news.goodyear.com -->
	
	

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">

	<meta name="template" content="page-content">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google Tag Manager -->
	
	<!-- End Google Tag Manager -->

	<link rel="shortcut icon" href="https://corporate.goodyear.com/content/dam/goodyear-corp/component-images/brand/favicon.ico">

	

	<link rel="stylesheet" href="assets/news.goodyear.com/css/clientlib-base.lc-fdb3112dc1a6d8539c965b7c1031b6a2-lc.min.css" type="text/css">

	<link rel="stylesheet" href="assets/news.goodyear.com/css/clientlib-site.lc-6594afbb1fbdfcf62d7a59e864508bb1-lc.min.css" type="text/css">

	<link rel="stylesheet" href="https://use.typekit.net/wfl5xgw.css">

			<title>Did Someone Say Horsepower? Goodyear Launches Global Campaign Celebrating Eagle Performance Tire - May 1, 2026</title>
		
 <meta name="keywords" content="">
 <meta name="description" content="Find breaking Goodyear news and press releases.">
 <meta name="twitter:card" content="summary">
 <meta name="twitter:title" content="Did Someone Say Horsepower? Goodyear Launches Global Campaign Celebrating Eagle Performance Tire">
 <meta name="twitter:description" content="&quot;Fast Is In Us&quot; positions company to lead the performance category as it celebrates the legacy of Eagle tires Goodyear gallops into official campaign launch at the Kentucky Derby AKRON, Ohio, May...">
 <meta name="twitter:image" content="https://news.goodyear.com/image/home-header-2021.jpg">
 <meta property="og:site_name" content="Media | Goodyear Corporate">
 <meta property="og:url" content="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html">
 <meta property="og:title" content="Did Someone Say Horsepower? Goodyear Launches Global Campaign Celebrating Eagle Performance Tire">
 <meta property="og:description" content="&quot;Fast Is In Us&quot; positions company to lead the performance category as it celebrates the legacy of Eagle tires Goodyear gallops into official campaign launch at the Kentucky Derby AKRON, Ohio, May...">
 <meta name="image" property="og:image" content="https://mma.prnewswire.com/media/2971059/Fast_Is_In_Us___Czinger_Goodyear.jpg?p=facebook">
	
	<link href="assets/news.goodyear.com/thirdparty/font-awesome/css/all.min.css" type="text/css" rel="stylesheet" wd_script_id="all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/news.goodyear.com/css/template.css">
	<link rel="stylesheet" type="text/css" href="assets/news.goodyear.com/css/wdcontent.css">
	<link rel="stylesheet" type="text/css" href="assets/news.goodyear.com/css/megamenu.css">
	<link rel="alternate" href="index.html?pagetemplate=rss" type="application/rss+xml" title="News | Goodyear Corporate">

<!-- begin spin_special_output(head_end) -->
<!-- OneTrust Cookies Consent Notice start -->
<script src="" type="text/javascript" charset="UTF-8"></script>
<script type="text/javascript">
	function OptanonWrapper() { }
</script>
<!-- OneTrust Cookies Consent Notice end -->

<link rel="canonical" href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html">
<!-- end spin_special_output(head_end) -->
<script type="text/javascript" src="assets/news.goodyear.com/js/wd_distribute_height.js" wd_script_id="wd_distribute_height.js"></script>






























<style id="offline-nav-patch">
  header, header nav, header nav ul, header nav li.offline-mega-li {
    overflow: visible !important;
  }
  li.offline-mega-li { position: relative; }
  .offline-mega-panel {
    display: none;
    position: absolute;
    left: 0;
    top: calc(100% + 8px);
    min-width: 240px;
    background: #fff;
    z-index: 10000;
    padding: 16px 20px;
    border-radius: 8px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
  }
  li.offline-mega-li.offline-mega-open > .offline-mega-panel,
  li.offline-mega-li:focus-within > .offline-mega-panel {
    display: block !important;
  }
  @media (min-width: 768px) {
    li.offline-mega-li:hover > .offline-mega-panel {
      display: block !important;
    }
  }
  .offline-mega-panel ul { list-style: none; margin: 0; padding: 0; }
  .offline-mega-panel li { margin: 0; padding: 0; }
  .offline-mega-panel a {
    display: block;
    padding: 10px 4px;
    color: #1a1a1a;
    text-decoration: none;
    font-size: 14px;
    line-height: 1.4;
  }
  .offline-mega-panel a:hover { color: #004ea8; }
  [class^="icon-"]::before,
  [class*=" icon-"]::before {
    font-family: global-icons !important;
    display: inline-block;
  }
  [class^="icon-"] > span[class*="path"],
  [class*=" icon-"] > span[class*="path"] {
    display: none !important;
  }
  #onetrust-consent-sdk,
  #onetrust-banner-sdk,
  #onetrust-pc-sdk,
  #ot-sdk-btn-floating,
  .onetrust-pc-dark-filter,
  .ot-floating-button,
  .ot-sdk-show-settings {
    display: none !important;
    visibility: hidden !important;
    pointer-events: none !important;
  }
  button[data-qa-id*="find-tires-header"],
  button#g001-search-icon,
  button[data-qa-id*="main-nav-search"],
  button#g001-account-icon,
  button[data-qa-id*="main-nav-my-account"],
  button#g001-cart-icon,
  button[data-qa-id*="mini-cart"] {
    display: none !important;
    visibility: hidden !important;
    pointer-events: none !important;
  }
  #embedded-messaging,
  .embedded-messaging,
  .embeddedMessagingConversationButton,
  .embeddedMessagingConversationButtonWrapper,
  #embeddedMessagingSiteContextFrame,
  #embeddedMessagingLiveRegion {
    display: none !important;
    visibility: hidden !important;
    pointer-events: none !important;
  }
  html {
    --header-stack-height: 156px;
  }
  .swiper.offline-carousel-ready .swiper-wrapper {
    transition: transform 0.35s ease;
  }
  .swiper.offline-carousel-ready .swiper-slide {
    flex-shrink: 0;
  }
</style></head>


<body class="wd_pageid_20295 wd_item_page wd_item_123471 page basicpage " id="page-2b792b9b24" data-cmp-data-layer-enabled="">

	<!-- Google Tag Manager (noscript) -->
	
	<!-- End Google Tag Manager (noscript) -->

	<script>
		window.adobeDataLayer = window.adobeDataLayer || [];
		adobeDataLayer.push({
			page: JSON.parse("{\x22page\u002D2b792b9b24\x22:{\x22@type\x22:\x22goodyear\u002Dcorp\/components\/page\x22,\x22repo:modifyDate\x22:\x222021\u002D08\u002D10T05:21:43Z\x22,\x22dc:title\x22:\x22Media | Goodyear Corporate\x22,\x22dc:description\x22:\x22Get up\u002Dto\u002Ddate company information and the latest on Goodyear innovation.\x22,\x22xdm:template\x22:\x22\/conf\/goodyear\u002Dcorp\/settings\/wcm\/templates\/page\u002Dcontent\x22,\x22xdm:language\x22:\x22en\x22,\x22xdm:tags\x22:[],\x22repo:path\x22:\x22\/content\/goodyear\u002Dcorp\/us\/en\/media.html\x22}}"),
			event: 'cmp:show',
			eventInfo: {
				path: 'page.page\u002D2b792b9b24'
			}
		});
	</script>


	<div class="root container responsivegrid" id="root">
		<div id="container-77a27e2a88" class="cmp-container">

			<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

				<!-- NAV -->
				<div class="experiencefragment aem-GridColumn aem-GridColumn--default--12">
					<div id="experiencefragment-1a39e84c7d" class="cmp-experiencefragment cmp-experiencefragment--header">

						<div id="container-fb682c1094" class="cmp-container">



							<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

								<div class="button cmp-button-right cmp-button--header-black-banner aem-GridColumn--default--none aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--offset--default--0">


									<a id="button-0447fb2438" class="cmp-button" href="international/index.html" data-cmp-clickable="" data-cmp-data-layer="{&quot;button-0447fb2438&quot;:{&quot;@type&quot;:&quot;goodyear-corp/components/button&quot;,&quot;repo:modifyDate&quot;:&quot;2024-06-05T19:33:36Z&quot;,&quot;dc:title&quot;:&quot;All Goodyear Sites&quot;,&quot;xdm:linkURL&quot;:&quot;-us/international/index.html?expand=international">


										<span class="cmp-button__text">
											<img src="assets/news.goodyear.com/images/wing.png" alt="">
											<span class="hover-underline">All Goodyear Sites</span>
										</span>
										<i class="cta-arrow-icon" aria-hidden="true"></i>
									</a>





								</div>
								<div class="megamenu aem-GridColumn aem-GridColumn--default--12">



									<div class="cmp-mega-menu">
										<div class="cmp-mega-menu__container">
											<div class="cmp-mega-menu__logo-container">
												<a class="cmp-brandlogo" href="index.html" aria-label="Goodyear Corporate Logo">
													<span class="icon-goodyear-logo">
														<img src="assets/news.goodyear.com/images/logo.svg" alt="">
													</span>
												</a>
											</div>
											<div class="cmp-mega-menu__hamberger cmp-mega-menu__hamberger-open cmp-mega-menu__hamberger-close">
											</div> <a href="#" class="cross" style="display: none;"></a>
											<ul class="cmp-mega-menu__link-container ">
												<li class="cmp-mega-menu__item ">
													<a href="#" class="cmp-mega-menu__link desktop" data-link="Company" id="megaMenuLink">Company</a>
													<a href="us/en/company.html/index.html" class="cmp-mega-menu__link mobile" data-link="Company" id="megaMenuLink">Company</a>
												</li>

												<li class="cmp-mega-menu__item ">
													<a href="#" class="cmp-mega-menu__link desktop" data-link="Commitments" id="megaMenuLink">Commitments</a>
													<a href="us/en/commitments.html/index.html" class="cmp-mega-menu__link mobile" data-link="Commitments" id="megaMenuLink">Commitments</a>
												</li>

												<li class="cmp-mega-menu__item ">
													<a href="#" class="cmp-mega-menu__link desktop" data-link="Products &amp; Innovations" id="megaMenuLink">Products
														&amp; Innovations</a>
													<a href="us/en/products-and-innovations.html/index.html" class="cmp-mega-menu__link mobile" data-link="Products &amp; Innovations" id="megaMenuLink">Products
														&amp; Innovations</a>
												</li>

												<li class="cmp-mega-menu__item ">
													<a href="#" class="cmp-mega-menu__link desktop" data-link="Investors" id="megaMenuLink">Investors</a>
													<a href="us/en/investors.html/index.html" class="cmp-mega-menu__link mobile" data-link="Investors" id="megaMenuLink">Investors</a>
												</li>

												<li class="cmp-mega-menu__item ">
													<a href="#" class="cmp-mega-menu__link desktop" data-link="Newsroom" id="megaMenuLink">Newsroom</a>
													<a href="index.html" class="cmp-mega-menu__link mobile" data-link="Newsroom" id="megaMenuLink">Newsroom</a>
												</li>
											</ul>

											<div class="shopping">
												<span class="gy-megamenu-search" id="gy-menu-search"></span>
												<a href="international/index.html" class="shopingHeader" data-link="-us/international/index.html" id="shoppingLink">Shop</a>
											</div>
										</div>
										<div class="cmp-sub-nav" id="mySidenav">
											<div class="cmp-sub-nav__item" data-target="Company" style="display:none;">
												<div class="cmp-sub-nav__background">
													<a href="us/en/company.html/index.html" class="cmp-sub-nav__content">
														<div class="main_heading">Company</div>
														<p>At Goodyear, innovation isn't just what we do-it's who we
															are. Learn about what drives us and where we're headed next.
														</p>
													</a>
													<div class="cmp-sub-nav__container">
														<a href="us/en/company/strategy.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Strategy</div>
														</a>

														<a href="us/en/company/working-at-goodyear.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Working at Goodyear</div>
														</a>

														<a href="us/en/company/awards.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Awards</div>
														</a>

														<a href="us/en/company/blimp.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Blimp</div>
														</a>

														<a href="us/en/company/leadership.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Leadership</div>
														</a>

														<a href="us/en/company/locations.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Locations</div>
														</a>

														<a href="us/en/company/contact-us.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Contact Us</div>
														</a>

														<a href="us/en/company/history.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">History</div>
														</a>
													</div>
												</div>
												<a href="#" class="cmp-sub-nav__close"></a>
											</div>

											<div class="cmp-sub-nav__item" data-target="Commitments" style="display:none;">
												<div class="cmp-sub-nav__background">
													<a href="us/en/commitments.html/index.html" class="cmp-sub-nav__content">
														<div class="main_heading">Commitments</div>
														<p>At Goodyear, we are focused on creating value for all our
															stakeholders—working with our customers to help them meet their
															own sustainability goals, reducing our impact on the
															environment, educating and engaging our associates in our
															sustainability journey and giving back to the community.</p>
													</a>
													<div class="cmp-sub-nav__container">
														<a href="us/en/commitments/acting-with-integrity.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Acting with Integrity</div>
														</a>

														<a href="us/en/commitments/sourcing-sustainably.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Sourcing Sustainably</div>
														</a>

														<a href="us/en/commitments/operating-responsibly.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Operating Responsibly</div>
														</a>

														<a href="us/en/commitments/engaging-associates-and-communities.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Engaging Associates &amp; Communities
															</div>
														</a>

														<a href="us/en/commitments/reports-and-policies.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Report &amp; Policies</div>
														</a>

														<a href="https://secure.ethicspoint.com/domain/media/en/gui/39890/index.html" target="_blank" class="cmp-sub-nav__link">
															<div class="sub_heading">Integrity Hotline</div>
														</a>
													</div>
												</div>
												<a href="#" class="cmp-sub-nav__close"></a>
											</div>

											<div class="cmp-sub-nav__item" data-target="Products &amp; Innovations" style="display:none;">
												<div class="cmp-sub-nav__background">
													<a href="us/en/products-and-innovations.html/index.html" class="cmp-sub-nav__content">
														<div class="main_heading">Products &amp; Innovations</div>
														<p>Goodyear has always been at the forefront of tire technology,
															continuously producing products, services and solutions that
															enable mobility across various industries worldwide.</p>
													</a>
													<div class="cmp-sub-nav__container">
														<a href="us/en/products-and-innovations/tires.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Tires</div>
														</a>

														<a href="us/en/products-and-innovations/brands.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Brands</div>
														</a>

														<a href="us/en/products-and-innovations/services-and-solutions.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Services &amp; Solutions</div>
														</a>

														<a href="us/en/products-and-innovations/technologies.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Technologies</div>
														</a>

														<a href="us/en/products-and-innovations/collaborations.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Collaborations</div>
														</a>
													</div>
												</div>
												<a href="#" class="cmp-sub-nav__close"></a>
											</div>

											<div class="cmp-sub-nav__item" data-target="Investors" style="display:none;">
												<div class="cmp-sub-nav__background">
													<a href="us/en/investors.html/index.html" class="cmp-sub-nav__content">
														<div class="main_heading">Investors</div>
														<p>Goodyear has been an industry leader for more than 125 years, but
															we believe our best is yet to come.</p>
														<p> </p>
														<p> </p>
													</a>
													<div class="cmp-sub-nav__container">
														<a href="us/en/investors/financial-news.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Financial News</div>
														</a>

														<a href="us/en/investors/events-and-presentations.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Events &amp; Presentations</div>
														</a>

														<a href="us/en/investors/reports-and-filings.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Reports &amp; Filings</div>
														</a>

														<a href="us/en/investors/stock-information.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Stock Information</div>
														</a>

														<a href="us/en/investors/governance.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Governance</div>
														</a>

														<a href="us/en/investors/investor-contacts.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Investor Contacts</div>
														</a>

														<a href="us/en/investors/investor-alerts.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Investor Alerts</div>
														</a>
													</div>
												</div>
												<a href="#" class="cmp-sub-nav__close"></a>
											</div>

											<div class="cmp-sub-nav__item" data-target="Newsroom" style="display:none;">
												<div class="cmp-sub-nav__background">
													<a href="index.html" class="cmp-sub-nav__content">
														<div class="main_heading">Newsroom</div>
														<p>Get up-to-date company information and the latest in Goodyear
															innovation.</p>
													</a>
													<div class="cmp-sub-nav__container">
														<a href="news/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">All News</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">News Alerts</div>
														</a>

														<a href="us/en/company/contact-us/media-contacts.html/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Media Contacts</div>
														</a>

														<a href="media-gallery/index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Media Gallery</div>
														</a>

													</div>
												</div>
												<a href="#" class="cmp-sub-nav__close"></a>
											</div>
										</div>
										<ul class="cmp-sub-nav-mobile" id="mySidenav" style="display: none;">
											<li class="cmp-sub-nav__item cmp-sub-nav__background cmp-megamenu-mobile" data-target="Company">

												<a href="us/en/company.html/index.html" class="cmp-sub-nav__content cmp-sub-nav__content_mobile ">
													<div class="main_heading_mobile">Company</div>


												</a>

												<span class="cmp-content-open"></span>

												<span class="cmp-content-close" style="display: none;"></span>
												<!-- child Elements -->
												<ul class="cmp-sub-mobile" style="display:none;">
													<li class="cmp-sub-nav__container cmp-sub-nav__container_mobile">
														<a href="us/en/company/strategy.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Strategy</div>
														</a>

														<a href="us/en/company/working-at-goodyear.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Working at Goodyear</div>
														</a>

														<a href="us/en/company/awards.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Awards</div>
														</a>

														<a href="us/en/company/blimp.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Blimp</div>
														</a>

														<a href="us/en/company/leadership.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Leadership</div>
														</a>

														<a href="us/en/company/locations.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Locations</div>
														</a>

														<a href="us/en/company/contact-us.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Contact Us</div>
														</a>

														<a href="us/en/company/history.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">History</div>
														</a>
													</li>
												</ul>

												<a href="#" class="cmp-sub-nav__close"></a>
											</li>

											<li class="cmp-sub-nav__item cmp-sub-nav__background cmp-megamenu-mobile" data-target="Commitments">

												<a href="us/en/commitments.html/index.html" class="cmp-sub-nav__content cmp-sub-nav__content_mobile ">
													<div class="main_heading_mobile">Commitments</div>


												</a>

												<span class="cmp-content-open"></span>

												<span class="cmp-content-close" style="display: none;"></span>
												<!-- child Elements -->
												<ul class="cmp-sub-mobile" style="display:none;">
													<li class="cmp-sub-nav__container cmp-sub-nav__container_mobile">
														<a href="us/en/commitments/acting-with-integrity.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Acting with Integrity</div>
														</a>

														<a href="us/en/commitments/sourcing-sustainably.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Sourcing Sustainably</div>
														</a>

														<a href="us/en/commitments/operating-responsibly.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Operating Responsibly</div>
														</a>

														<a href="us/en/commitments/engaging-associates-and-communities.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Engaging Associates &amp;
																Communities</div>
														</a>

														<a href="us/en/commitments/reports-and-policies.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Report &amp; Policies</div>
														</a>

														<a href="https://secure.ethicspoint.com/domain/media/en/gui/39890/index.html" target="_blank" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Integrity Hotline</div>
														</a>
													</li>
												</ul>

												<a href="#" class="cmp-sub-nav__close"></a>
											</li>

											<li class="cmp-sub-nav__item cmp-sub-nav__background cmp-megamenu-mobile" data-target="Products &amp; Innovations">

												<a href="us/en/products-and-innovations.html/index.html" class="cmp-sub-nav__content cmp-sub-nav__content_mobile ">
													<div class="main_heading_mobile">Products &amp; Innovations</div>


												</a>

												<span class="cmp-content-open"></span>

												<span class="cmp-content-close" style="display: none;"></span>
												<!-- child Elements -->
												<ul class="cmp-sub-mobile" style="display:none;">
													<li class="cmp-sub-nav__container cmp-sub-nav__container_mobile">
														<a href="us/en/products-and-innovations/tires.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Tires</div>
														</a>

														<a href="us/en/products-and-innovations/brands.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Brands</div>
														</a>

														<a href="us/en/products-and-innovations/services-and-solutions.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Services &amp; Solutions</div>
														</a>

														<a href="us/en/products-and-innovations/technologies.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Technologies</div>
														</a>

														<a href="us/en/products-and-innovations/collaborations.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Collaborations</div>
														</a>
													</li>
												</ul>

												<a href="#" class="cmp-sub-nav__close"></a>
											</li>

											<li class="cmp-sub-nav__item cmp-sub-nav__background cmp-megamenu-mobile" data-target="Investors">

												<a href="us/en/investors.html/index.html" class="cmp-sub-nav__content cmp-sub-nav__content_mobile ">
													<div class="main_heading_mobile">Investors</div>


												</a>

												<span class="cmp-content-open"></span>

												<span class="cmp-content-close" style="display: none;"></span>
												<!-- child Elements -->
												<ul class="cmp-sub-mobile" style="display:none;">
													<li class="cmp-sub-nav__container cmp-sub-nav__container_mobile">
														<a href="us/en/investors/financial-news.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Financial News</div>
														</a>

														<a href="us/en/investors/events-and-presentations.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Events &amp; Presentations</div>
														</a>

														<a href="us/en/investors/reports-and-filings.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Reports &amp; Filings</div>
														</a>

														<a href="us/en/investors/stock-information.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Stock Information</div>
														</a>

														<a href="us/en/investors/governance.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Governance</div>
														</a>

														<a href="us/en/investors/investor-contacts.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Investor Contacts</div>
														</a>

														<a href="us/en/investors/investor-alerts.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Investor Alerts</div>
														</a>
													</li>
												</ul>

												<a href="#" class="cmp-sub-nav__close"></a>
											</li>

											<li class="cmp-sub-nav__item cmp-sub-nav__background cmp-megamenu-mobile" data-target="Newsroom">

												<a href="index.html" class="cmp-sub-nav__content cmp-sub-nav__content_mobile ">
													<div class="main_heading_mobile">Newsroom</div>


												</a>

												<span class="cmp-content-open"></span>

												<span class="cmp-content-close" style="display: none;"></span>
												<!-- child Elements -->
												<ul class="cmp-sub-mobile" style="display:none;">
													<li class="cmp-sub-nav__container cmp-sub-nav__container_mobile">
														<a href="news/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">All News</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">News Alerts</div>
														</a>

														<a href="us/en/company/contact-us/media-contacts.html/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Media Contacts</div>
														</a>

														<a href="media-gallery/index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Media Gallery</div>
														</a>

													</li>
												</ul>

												<a href="#" class="cmp-sub-nav__close"></a>
											</li>
										</ul>

									</div>
								</div>


							</div>

						</div>

					</div>

				</div>
				<!-- NAV END -->

				<div class="teaser cmp-teaser--hero-banner aem-GridColumn aem-GridColumn--default--12">


					<div class="breadcrumb">
	<a href="index.php/index.html">Newsroom</a>
<a href="news/index.html" target="_self" class="nav">All News</a>
<span class="wd_current-page">News</span></div>
	
					<div class="wd_home_hero cmp-container--max-width">

												<div class="wd_hero-left" style="background-image: url(/image/goodyear-blimp-desktop.png);"></div>
						<div class="wd_hero-right">
							<div class="header-wrap">
							<div class="header-title">
								News							</div>
							<div class="header-desc">
								<p>Browse Goodyear’s latest news releases and sign up to receive updates for breaking Goodyear news.</p>
							</div>
							<div class="wd_date">May 1, 2026</div><div class="wd_title wd_language_left">Did Someone Say Horsepower? Goodyear Launches Global Campaign Celebrating Eagle Performance Tire</div></div>
						</div>
						
					</div>
					
				</div>

				<!-- MAIN CONTENT -->

				<main class="container responsivegrid aem-GridColumn aem-GridColumn--default--12">		


									<div class="wd_content cmp-container--max-width">
																		<div class="wd_content-flex">
						<div id="wd_printable_content" class="fr-view">
<div class="wd_newsfeed_releases-detail">






			
		

			
		

<style type="text/css">


/* Style Definitions */
span.prnews_span
{
font-size:8pt;
font-family:"Arial";
color:black;
}
a.prnews_a
{
color:blue;
}
li.prnews_li
{
font-size:8pt;
font-family:"Arial";
color:black;
}
p.prnews_p
{
font-size:0.62em;
font-family:"Arial";
color:black;
margin:0in;
}


					span.prnews_span{
						font-size:inherit;
						font-family:inherit;
					}
					li.prnews_li{
						font-size: inherit;
						font-family: inherit;           
					}
					p.prnews_p{
						font-size: inherit;
						font-family: inherit;           
					}
				
					div.PRN_ImbeddedAssetReference{
						display: none;
					}
					div[id^="prni_dvprne"]{
						display: none;
					}
				</style>

<div class="wd_body wd_news_body fr-view" wd_resize="formatNews" wd_print_url="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html?printable=1">
<p><i>"Fast Is In Us" positions company to lead the performance category as it celebrates the legacy of Eagle tires</i></p><p><i>Goodyear gallops into official campaign launch at the Kentucky Derby</i></p><div wd_move_after=".wd_body &gt; p ~ p|.wd_body &gt; p">
			<div class="wd_asset_modal wd_asset_modal_main" style="display:none;">
				
				<div class="wd_slideshow wd_asset_slideshow_wrapper wd_asset_slideshow_main_wrapper" wd_resize="resizeSlideshow" tabindex="-1"><div class="wd_slideshow-cropper"><ul class="wd_layout-slideshow wd_asset_slideshow_list wd_asset_slideshow_main_list wd_slideshow-list"><li class="wd_asset_slideshow wd_asset_type_117 wd_asset_117-20130 wd_slideshow-item wd_slideshow-current" wd_item_hash="assets_117:20130" wd_ajax_url="index.html?gallery=20130&ajax=ajax&op=modal">
<div class="wd_gallery-modal">
<style type="text/css">

.wd_gallery-modal {
	height: 100%;
	width: 100%;
}
.wd_gallery_modal {
	height: 100%;
	width: 100%;
}
.wd_gallery_modal .wd_info {
	overflow: auto;
}
.wd_gallery_modal .wd_image {
	height: 75%; /* will be overridden when load complete */
	width: 100%;
}
.wd_gallery_modal .wd_image img {
	height: 100%;
}
.wd_resizing .wd_image img {
	height: auto;
	max-width: 100%;
	max-height: 100%;
}
</style>
<div class="wd_gallery_modal" wd_resize="distributeHeight">
	<div class="wd_image" wd_proportion="2" wd_fix_height="1" style="height: 0px;">
		<img src="https://mma.prnewswire.com/media/2971059/Fast_Is_In_Us___Czinger_Goodyear.jpg?w=2700" title="Fast-Is-In-Us---Czinger Goodyear" border="0">
	</div>
	<div class="wd_info" wd_max_height="200" style="height: auto;">
		<div class="wd_title">Fast-Is-In-Us---Czinger Goodyear</div>
		<div class="wd_summary"><p>Goodyear, on a bold mission to become No. 1 in tires and service, today launched Fast Is In Us, a global campaign celebrating the legendary Eagle performance tire family as one of the most iconic names in performance driving.</p></div>
		<div class="wd_hi_res_link_wrapper">Download: <a href="https://mma.prnewswire.com/media/2971059/Fast_Is_In_Us___Czinger_Goodyear.jpg?p=original" target="" class="wd_hi_res_link">Hi Res</a></div>
	</div>
</div>

</div>

			<script type="text/javascript">
				if (webDriver && webDriver.loadScripts)
					webDriver.loadScripts([{"type":"script_url","url":"js\/jquery-webdriver.js","id":"jquery-webdriver.js"},{"type":"script_url","url":"js\/webdriver.js","id":"webdriver.js"},{"type":"script_url","url":"js\/wd_resize.js","id":"wd_resize.js"},{"type":"script_url","url":"js\/wd_distribute_height.js","id":"wd_distribute_height.js"}]);
			</script>
		
<!-- begin spin_special_output(head_end) -->
<!-- OneTrust Cookies Consent Notice start -->
<script src="" type="text/javascript" charset="UTF-8"></script>
<script type="text/javascript">
	function OptanonWrapper() { }
</script>
<!-- OneTrust Cookies Consent Notice end -->


<!-- end spin_special_output(head_end) -->
</li><li class="wd_asset_slideshow wd_asset_type_117 wd_asset_117-20131 wd_slideshow-item" wd_item_hash="assets_117:20131" wd_ajax_url="index.html?gallery=20131&ajax=ajax&op=modal">
<div class="wd_gallery-modal">
<style type="text/css">

.wd_gallery-modal {
	height: 100%;
	width: 100%;
}
.wd_gallery_modal {
	height: 100%;
	width: 100%;
}
.wd_gallery_modal .wd_info {
	overflow: auto;
}
.wd_gallery_modal .wd_image {
	height: 75%; /* will be overridden when load complete */
	width: 100%;
}
.wd_gallery_modal .wd_image img {
	height: 100%;
}
.wd_resizing .wd_image img {
	height: auto;
	max-width: 100%;
	max-height: 100%;
}
</style>
<div class="wd_gallery_modal" wd_resize="distributeHeight">
	<div class="wd_image" wd_proportion="2" wd_fix_height="1">
		<img src="https://mma.prnewswire.com/media/2971060/Fast_Is_In_Us___Shelby_Goodyear.jpg?w=2700" title="Fast-Is-In-Us---Shelby Goodyear" border="0">
	</div>
	<div class="wd_info" wd_max_height="200">
		<div class="wd_title">Fast-Is-In-Us---Shelby Goodyear</div>
		<div class="wd_summary"><p>Goodyear, on a bold mission to become No. 1 in tires and service, today launched Fast Is In Us, a global campaign celebrating the legendary Eagle performance tire family as one of the most iconic names in performance driving.</p></div>
		<div class="wd_hi_res_link_wrapper">Download: <a href="https://mma.prnewswire.com/media/2971060/Fast_Is_In_Us___Shelby_Goodyear.jpg?p=original" target="" class="wd_hi_res_link">Hi Res</a></div>
	</div>
</div>

</div>

			<script type="text/javascript">
				if (webDriver && webDriver.loadScripts)
					webDriver.loadScripts([{"type":"script_url","url":"js\/jquery-webdriver.js","id":"jquery-webdriver.js"},{"type":"script_url","url":"js\/webdriver.js","id":"webdriver.js"},{"type":"script_url","url":"js\/wd_resize.js","id":"wd_resize.js"},{"type":"script_url","url":"js\/wd_distribute_height.js","id":"wd_distribute_height.js"}]);
			</script>
		
<!-- begin spin_special_output(head_end) -->
<!-- OneTrust Cookies Consent Notice start -->
<script src="" type="text/javascript" charset="UTF-8"></script>
<script type="text/javascript">
	function OptanonWrapper() { }
</script>
<!-- OneTrust Cookies Consent Notice end -->


<!-- end spin_special_output(head_end) -->
</li><li class="wd_asset_slideshow wd_asset_type_117 wd_asset_117-20132 wd_slideshow-item" wd_item_hash="assets_117:20132" wd_ajax_url="index.html?gallery=20132&ajax=ajax&op=modal">
<div class="wd_gallery-modal">
<style type="text/css">

.wd_gallery-modal {
	height: 100%;
	width: 100%;
}
.wd_gallery_modal {
	height: 100%;
	width: 100%;
}
.wd_gallery_modal .wd_info {
	overflow: auto;
}
.wd_gallery_modal .wd_image {
	height: 75%; /* will be overridden when load complete */
	width: 100%;
}
.wd_gallery_modal .wd_image img {
	height: 100%;
}
.wd_resizing .wd_image img {
	height: auto;
	max-width: 100%;
	max-height: 100%;
}
</style>
<div class="wd_gallery_modal" wd_resize="distributeHeight">
	<div class="wd_image" wd_proportion="2" wd_fix_height="1">
		<img src="https://mma.prnewswire.com/media/2971061/Grand_Prix_Wins_Goodyear.jpg?w=2700" title="Grand-Prix-Wins Goodyear" border="0">
	</div>
	<div class="wd_info" wd_max_height="200">
		<div class="wd_title">Grand-Prix-Wins Goodyear</div>
		<div class="wd_summary"><p>Goodyear, on a bold mission to become No. 1 in tires and service, today launched Fast Is In Us, a global campaign celebrating the legendary Eagle performance tire family as one of the most iconic names in performance driving.</p></div>
		<div class="wd_hi_res_link_wrapper">Download: <a href="https://mma.prnewswire.com/media/2971061/Grand_Prix_Wins_Goodyear.jpg?p=original" target="" class="wd_hi_res_link">Hi Res</a></div>
	</div>
</div>

</div>

			<script type="text/javascript">
				if (webDriver && webDriver.loadScripts)
					webDriver.loadScripts([{"type":"script_url","url":"js\/jquery-webdriver.js","id":"jquery-webdriver.js"},{"type":"script_url","url":"js\/webdriver.js","id":"webdriver.js"},{"type":"script_url","url":"js\/wd_resize.js","id":"wd_resize.js"},{"type":"script_url","url":"js\/wd_distribute_height.js","id":"wd_distribute_height.js"}]);
			</script>
		
<!-- begin spin_special_output(head_end) -->
<!-- OneTrust Cookies Consent Notice start -->
<script src="" type="text/javascript" charset="UTF-8"></script>
<script type="text/javascript">
	function OptanonWrapper() { }
</script>
<!-- OneTrust Cookies Consent Notice end -->


<!-- end spin_special_output(head_end) -->
</li><li class="wd_asset_slideshow wd_asset_type_117 wd_asset_117-20133 wd_slideshow-item" wd_item_hash="assets_117:20133" wd_ajax_url="index.html?gallery=20133&ajax=ajax&op=modal">
<div class="wd_gallery-modal">
<style type="text/css">

.wd_gallery-modal {
	height: 100%;
	width: 100%;
}
.wd_gallery_modal {
	height: 100%;
	width: 100%;
}
.wd_gallery_modal .wd_info {
	overflow: auto;
}
.wd_gallery_modal .wd_image {
	height: 75%; /* will be overridden when load complete */
	width: 100%;
}
.wd_gallery_modal .wd_image img {
	height: 100%;
}
.wd_resizing .wd_image img {
	height: auto;
	max-width: 100%;
	max-height: 100%;
}
</style>
<div class="wd_gallery_modal" wd_resize="distributeHeight">
	<div class="wd_image" wd_proportion="2" wd_fix_height="1">
		<img src="https://mma.prnewswire.com/media/2971062/Grip_and_Rip_Goodyear.jpg?w=2700" title="Grip-and-Rip Goodyear" border="0">
	</div>
	<div class="wd_info" wd_max_height="200">
		<div class="wd_title">Grip-and-Rip Goodyear</div>
		<div class="wd_summary"><p>Goodyear, on a bold mission to become No. 1 in tires and service, today launched Fast Is In Us, a global campaign celebrating the legendary Eagle performance tire family as one of the most iconic names in performance driving.</p></div>
		<div class="wd_hi_res_link_wrapper">Download: <a href="https://mma.prnewswire.com/media/2971062/Grip_and_Rip_Goodyear.jpg?p=original" target="" class="wd_hi_res_link">Hi Res</a></div>
	</div>
</div>

</div>

			<script type="text/javascript">
				if (webDriver && webDriver.loadScripts)
					webDriver.loadScripts([{"type":"script_url","url":"js\/jquery-webdriver.js","id":"jquery-webdriver.js"},{"type":"script_url","url":"js\/webdriver.js","id":"webdriver.js"},{"type":"script_url","url":"js\/wd_resize.js","id":"wd_resize.js"},{"type":"script_url","url":"js\/wd_distribute_height.js","id":"wd_distribute_height.js"}]);
			</script>
		
<!-- begin spin_special_output(head_end) -->
<!-- OneTrust Cookies Consent Notice start -->
<script src="" type="text/javascript" charset="UTF-8"></script>
<script type="text/javascript">
	function OptanonWrapper() { }
</script>
<!-- OneTrust Cookies Consent Notice end -->


<!-- end spin_special_output(head_end) -->
</li></ul></div><a class="wd_slideshow-arrow wd_slideshow-prev fa fa-chevron-left" href="#prev" title="Previous"><span class="wd_sr-only">Previous Item</span></a><a class="wd_slideshow-arrow wd_slideshow-next fa fa-chevron-right" href="#next" title="Next"><span class="wd_sr-only">Next Item</span></a></div>
			</div>
		
			<div class="wd_asset_carousel_aspect" wd_resize="adjustAspectRatio" wd_fixed_aspect="height:32:9:100:200" style="height: 200px;">
			<div class="wd_carousel wd_asset_wrapper wd_asset_carousel_wrapper wd_asset_carousel_main_wrapper" wd_resize="resizeCarousel"><div class="wd_carousel-cropper"><ul class="wd_layout-carousel wd_asset_list wd_asset_carousel_list wd_asset_carousel_main_list wd_carousel-list" wd_carousel_options="{&quot;class&quot;:&quot;wd_asset_wrapper wd_asset_carousel_wrapper wd_asset_carousel_main_wrapper&quot;}" wd_onload="loadCarousel" style="position: absolute; top: 0px; left: -1134.52px;"><li class="wd_asset_carousel wd_asset_type_117 wd_asset_117-20131 wd_carousel-item wd_clone" style="height: 100%;" id="">
					
						<div class="wd_gallery_asset">
	<div class="wd_asset_image">
		<img src="https://mma.prnewswire.com/media/2971060/Fast_Is_In_Us___Shelby_Goodyear.jpg?w=600" title="Fast-Is-In-Us---Shelby Goodyear" border="0">
	</div>
	<div class="wd_icon_overlay">
		<a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html" class="wd_link_underlay" tabindex="-1"></a>
		<div>
			<div class="wd_icon_container"><a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html"><span class="fa fa-search-plus"></span><span class="wd_sr-only wd_sr-only-focusable">View File</span></a> <a href="https://mma.prnewswire.com/media/2971060/Fast_Is_In_Us___Shelby_Goodyear.jpg?p=original" target=""><span class="fa fa-download"></span><span class="wd_sr-only wd_sr-only-focusable">Download File</span></a></div>
			
		</div>
	</div>
	<div class="wd_title_overlay">
		Fast-Is-In-Us---Shelby Goodyear
	</div>
</div>

					
				</li><li class="wd_asset_carousel wd_asset_type_117 wd_asset_117-20132 wd_carousel-item wd_clone" style="height: 100%;" id="">
					
						<div class="wd_gallery_asset">
	<div class="wd_asset_image">
		<img src="https://mma.prnewswire.com/media/2971061/Grand_Prix_Wins_Goodyear.jpg?w=600" title="Grand-Prix-Wins Goodyear" border="0">
	</div>
	<div class="wd_icon_overlay">
		<a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html" class="wd_link_underlay" tabindex="-1"></a>
		<div>
			<div class="wd_icon_container"><a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html"><span class="fa fa-search-plus"></span><span class="wd_sr-only wd_sr-only-focusable">View File</span></a> <a href="https://mma.prnewswire.com/media/2971061/Grand_Prix_Wins_Goodyear.jpg?p=original" target=""><span class="fa fa-download"></span><span class="wd_sr-only wd_sr-only-focusable">Download File</span></a></div>
			
		</div>
	</div>
	<div class="wd_title_overlay">
		Grand-Prix-Wins Goodyear
	</div>
</div>

					
				</li><li class="wd_asset_carousel wd_asset_type_117 wd_asset_117-20133 wd_carousel-item wd_clone" style="height: 100%;" id="">
					
						<div class="wd_gallery_asset">
	<div class="wd_asset_image">
		<img src="https://mma.prnewswire.com/media/2971062/Grip_and_Rip_Goodyear.jpg?w=600" title="Grip-and-Rip Goodyear" border="0">
	</div>
	<div class="wd_icon_overlay">
		<a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html" class="wd_link_underlay" tabindex="-1"></a>
		<div>
			<div class="wd_icon_container"><a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html"><span class="fa fa-search-plus"></span><span class="wd_sr-only wd_sr-only-focusable">View File</span></a> <a href="https://mma.prnewswire.com/media/2971062/Grip_and_Rip_Goodyear.jpg?p=original" target=""><span class="fa fa-download"></span><span class="wd_sr-only wd_sr-only-focusable">Download File</span></a></div>
			
		</div>
	</div>
	<div class="wd_title_overlay">
		Grip-and-Rip Goodyear
	</div>
</div>

					
				</li><li class="wd_asset_carousel wd_asset_type_117 wd_asset_117-20130 wd_carousel-item" style="height: 100%;">
					
						<div class="wd_gallery_asset">
	<div class="wd_asset_image">
		<img src="https://mma.prnewswire.com/media/2971059/Fast_Is_In_Us___Czinger_Goodyear.jpg?w=600" title="Fast-Is-In-Us---Czinger Goodyear" border="0">
	</div>
	<div class="wd_icon_overlay">
		<a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html" class="wd_link_underlay" tabindex="-1"></a>
		<div>
			<div class="wd_icon_container"><a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html"><span class="fa fa-search-plus"></span><span class="wd_sr-only wd_sr-only-focusable">View File</span></a> <a href="https://mma.prnewswire.com/media/2971059/Fast_Is_In_Us___Czinger_Goodyear.jpg?p=original" target=""><span class="fa fa-download"></span><span class="wd_sr-only wd_sr-only-focusable">Download File</span></a></div>
			
		</div>
	</div>
	<div class="wd_title_overlay">
		Fast-Is-In-Us---Czinger Goodyear
	</div>
</div>

					
				</li><li class="wd_asset_carousel wd_asset_type_117 wd_asset_117-20131 wd_carousel-item wd_carousel-current" style="height: 100%;">
					
						<div class="wd_gallery_asset">
	<div class="wd_asset_image">
		<img src="https://mma.prnewswire.com/media/2971060/Fast_Is_In_Us___Shelby_Goodyear.jpg?w=600" title="Fast-Is-In-Us---Shelby Goodyear" border="0">
	</div>
	<div class="wd_icon_overlay">
		<a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html" class="wd_link_underlay" tabindex="-1"></a>
		<div>
			<div class="wd_icon_container"><a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html"><span class="fa fa-search-plus"></span><span class="wd_sr-only wd_sr-only-focusable">View File</span></a> <a href="https://mma.prnewswire.com/media/2971060/Fast_Is_In_Us___Shelby_Goodyear.jpg?p=original" target=""><span class="fa fa-download"></span><span class="wd_sr-only wd_sr-only-focusable">Download File</span></a></div>
			
		</div>
	</div>
	<div class="wd_title_overlay">
		Fast-Is-In-Us---Shelby Goodyear
	</div>
</div>

					
				</li><li class="wd_asset_carousel wd_asset_type_117 wd_asset_117-20132 wd_carousel-item" style="height: 100%;">
					
						<div class="wd_gallery_asset">
	<div class="wd_asset_image">
		<img src="https://mma.prnewswire.com/media/2971061/Grand_Prix_Wins_Goodyear.jpg?w=600" title="Grand-Prix-Wins Goodyear" border="0">
	</div>
	<div class="wd_icon_overlay">
		<a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html" class="wd_link_underlay" tabindex="-1"></a>
		<div>
			<div class="wd_icon_container"><a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html"><span class="fa fa-search-plus"></span><span class="wd_sr-only wd_sr-only-focusable">View File</span></a> <a href="https://mma.prnewswire.com/media/2971061/Grand_Prix_Wins_Goodyear.jpg?p=original" target=""><span class="fa fa-download"></span><span class="wd_sr-only wd_sr-only-focusable">Download File</span></a></div>
			
		</div>
	</div>
	<div class="wd_title_overlay">
		Grand-Prix-Wins Goodyear
	</div>
</div>

					
				</li><li class="wd_asset_carousel wd_asset_type_117 wd_asset_117-20133 wd_carousel-item" style="height: 100%;">
					
						<div class="wd_gallery_asset">
	<div class="wd_asset_image">
		<img src="https://mma.prnewswire.com/media/2971062/Grip_and_Rip_Goodyear.jpg?w=600" title="Grip-and-Rip Goodyear" border="0">
	</div>
	<div class="wd_icon_overlay">
		<a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html" class="wd_link_underlay" tabindex="-1"></a>
		<div>
			<div class="wd_icon_container"><a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html"><span class="fa fa-search-plus"></span><span class="wd_sr-only wd_sr-only-focusable">View File</span></a> <a href="https://mma.prnewswire.com/media/2971062/Grip_and_Rip_Goodyear.jpg?p=original" target=""><span class="fa fa-download"></span><span class="wd_sr-only wd_sr-only-focusable">Download File</span></a></div>
			
		</div>
	</div>
	<div class="wd_title_overlay">
		Grip-and-Rip Goodyear
	</div>
</div>

					
				</li><li class="wd_asset_carousel wd_asset_type_117 wd_asset_117-20130 wd_carousel-item wd_clone" style="height: 100%;" id="">
					
						<div class="wd_gallery_asset">
	<div class="wd_asset_image">
		<img src="https://mma.prnewswire.com/media/2971059/Fast_Is_In_Us___Czinger_Goodyear.jpg?w=600" title="Fast-Is-In-Us---Czinger Goodyear" border="0">
	</div>
	<div class="wd_icon_overlay">
		<a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html" class="wd_link_underlay" tabindex="-1"></a>
		<div>
			<div class="wd_icon_container"><a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html"><span class="fa fa-search-plus"></span><span class="wd_sr-only wd_sr-only-focusable">View File</span></a> <a href="https://mma.prnewswire.com/media/2971059/Fast_Is_In_Us___Czinger_Goodyear.jpg?p=original" target=""><span class="fa fa-download"></span><span class="wd_sr-only wd_sr-only-focusable">Download File</span></a></div>
			
		</div>
	</div>
	<div class="wd_title_overlay">
		Fast-Is-In-Us---Czinger Goodyear
	</div>
</div>

					
				</li><li class="wd_asset_carousel wd_asset_type_117 wd_asset_117-20131 wd_carousel-item wd_clone" style="height: 100%;" id="">
					
						<div class="wd_gallery_asset">
	<div class="wd_asset_image">
		<img src="https://mma.prnewswire.com/media/2971060/Fast_Is_In_Us___Shelby_Goodyear.jpg?w=600" title="Fast-Is-In-Us---Shelby Goodyear" border="0">
	</div>
	<div class="wd_icon_overlay">
		<a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html" class="wd_link_underlay" tabindex="-1"></a>
		<div>
			<div class="wd_icon_container"><a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html"><span class="fa fa-search-plus"></span><span class="wd_sr-only wd_sr-only-focusable">View File</span></a> <a href="https://mma.prnewswire.com/media/2971060/Fast_Is_In_Us___Shelby_Goodyear.jpg?p=original" target=""><span class="fa fa-download"></span><span class="wd_sr-only wd_sr-only-focusable">Download File</span></a></div>
			
		</div>
	</div>
	<div class="wd_title_overlay">
		Fast-Is-In-Us---Shelby Goodyear
	</div>
</div>

					
				</li></ul></div><a class="wd_carousel-arrow wd_carousel-prev fa fa-chevron-left" href="#prev" style=""></a><a class="wd_carousel-arrow wd_carousel-next fa fa-chevron-right" href="#next" style=""></a></div>
			</div>
		
				
			</div><p><span class="legendSpanClass">AKRON, Ohio</span>, <span class="legendSpanClass">May 1, 2026</span> /<a href="http://www.prnewswire.com/" target="_blank">PRNewswire</a>/ -- Goodyear (NASDAQ: GT), on a bold mission to become No. 1 in tires and service, today launched&nbsp;<i>Fast Is In Us</i>, a global campaign celebrating the legendary Eagle performance tire family as one of the most iconic names in performance driving.</p>
    <div class="PRN_ImbeddedAssetReference" id="DivAssetPlaceHolder1">
                <p>
                        <a href="https://mma.prnewswire.com/media/2971059/Fast_Is_In_Us___Czinger_Goodyear.html" target="_blank" rel="nofollow">
                    <img src="https://mma.prnewswire.com/media/2971059/Fast_Is_In_Us___Czinger_Goodyear.jpg" title="Goodyear, on a bold mission to become No. 1 in tires and service, today launched Fast Is In Us, a global campaign celebrating the legendary Eagle performance tire family as one of the most iconic names in performance driving." alt="Goodyear, on a bold mission to become No. 1 in tires and service, today launched Fast Is In Us, a global campaign celebrating the legendary Eagle performance tire family as one of the most iconic names in performance driving.">
                        </a>
                </p>
    </div>
<p>Debuting at the Kentucky Derby, the campaign marks the next chapter in Goodyear's brand resurgence following last year's STILL campaign, which leveraged the brand's iconic status, reminding audiences that not all tires are born equal. <i>Fast Is In Us</i> builds on that momentum.</p><p>"The performance car category is growing, and the drivers entering it want tires worth bragging about," said Mark Stewart, Goodyear Chief Executive Officer and President. "Eagle has more than four decades of credibility in performance and racing, and <i>Fast Is In Us</i> puts that legacy back to work—re‑establishing Eagle as the tire knowledgeable drivers choose when performance truly matters. This campaign reflects how we're building Goodyear for the future: leading with premium products, authentic performance, and brands that mean something."</p><p><b>Fast Isn't a Number. It's an Obsession.</b></p><p><i>Fast Is In Us</i> goes beyond traditional ideas of speed. The campaign celebrates the people who are wired to love cars: the design, the engineering, the feel through the wheel, the moment when everything clicks and a car comes alive.</p><p>J.J. Kraft, VP Global Creative at Goodyear said "Eagle isn't a product line — it's a piece of car culture. <i>Fast Is In Us</i>&nbsp;is a comprehensive platform built to put Eagle back at the center of that enthusiasm. It expresses performance through feel and confidence behind the wheel, not just numbers on a page. It stands as one global campaign idea with the range to live across motorsport, retail, and culture, and the ambition to lead the category, not chase it."</p><p>"For these drivers, Eagle is more than a tire, it's a badge of devotion for drivers who respect the craft behind performance and demand confidence, responsiveness, and control every time they drive. Fast, in this world, isn't something you switch on. It's something you live," Kraft added.</p><p><b>Performance That's Earned, Not Claimed</b></p><p><i>Fast Is In Us</i> is grounded in Eagle's decades‑long performance pedigree, shaped in elite motorsport environments and refined through high‑performance automotive partnerships and award-winning products such as the Eagle F1 Asymmetric 6, Eagle F1 SuperSport and Eagle F1 All Season. Eagle tires are designed by those who understand performance as something you feel, not something you claim.</p><p>After 45 years, millions of drivers, and a legacy built on performance, Eagle enters its next era with a simple belief: Fast isn't new to us. It's the way we're built.<br><br><b>A Campaign Built to Lead, Not Follow</b></p><p><i>Fast Is In Us</i> marks Goodyear's first global campaign built around a family of performance tires, inviting drivers to live and breathe Eagle as a performance philosophy, not a one‑off product. Designed as a multi‑phased, multi‑year platform, the campaign will roll out globally across premium TV, out‑of‑home, digital, social, and cultural moments—guided by a single ambition: to make Eagle impossible to ignore.</p><p>Launching at the Kentucky Derby, the campaign makes its debut as the Goodyear Blimp flies overhead with the line: "Did someone say horsepower?" across campaign assets. A playful nod to one of America's most iconic sporting moments, the message blends performance, heritage and confidence.</p><p>Following launch, Goodyear will take <i>Fast Is In Us</i> into the heart of global performance culture, integrating with major moments such as the 24 Hours of Le Mans and other elite racing and enthusiast events around the world.</p><p>With Fast Is In Us, Goodyear isn't introducing Eagle to a new audience—it's reminding performance drivers why it belonged with them in the first place.</p><p>The campaign was created in collaboration with Publicis P1T Crew, creatively led by BBH USA.</p><p>For more information, visit <a href="https://edge.prnewswire.com/c/link/?t=0&amp;l=en&amp;o=4678833-1&amp;h=190152474&amp;u=index.htmls%2Ftires%2Fby-brand%2Fgoodyear%2Feagle&amp;a=index.htmls%2Ftires%2Fby-brand%2Fgoodyear%2Feagle" target="_blank" rel="nofollow">-us/tires/by-brand/goodyear/eagle/index.html</a></p><p><b>About The Goodyear Tire &amp; Rubber Company<br></b>Goodyear is one of the world's largest tire companies. It employs about 63,000 people and manufactures its products in 49 facilities in 19 countries around the world. Its two Innovation Centers in&nbsp;Akron, Ohio, and Colmar-Berg,&nbsp;Luxembourg, strive to develop state-of-the-art products and services that set the technology and performance standard for the industry. For more information about Goodyear and its products, go to&nbsp;<a href="us/en.html/index.html" target="_blank" rel="nofollow">www.goodyear.com/corporate</a>.</p><p><b>CONTACT:</b><br>DOUG GRASSIAN<br>407.376.9429<br><a href="mailto:DOUG_GRASSIAN@GOODYEAR.COM" target="_blank" rel="nofollow">DOUG_GRASSIAN@GOODYEAR.COM</a></p>
<div class="PRN_ImbeddedAssetReference" id="DivAssetPlaceHolder2">
                <p>
                        <a href="https://mma.prnewswire.com/media/2971060/Fast_Is_In_Us___Shelby_Goodyear.html" target="_blank" rel="nofollow">
                    <img src="https://mma.prnewswire.com/media/2971060/Fast_Is_In_Us___Shelby_Goodyear.jpg" title="Goodyear, on a bold mission to become No. 1 in tires and service, today launched Fast Is In Us, a global campaign celebrating the legendary Eagle performance tire family as one of the most iconic names in performance driving." alt="Goodyear, on a bold mission to become No. 1 in tires and service, today launched Fast Is In Us, a global campaign celebrating the legendary Eagle performance tire family as one of the most iconic names in performance driving.">
                        </a>
                </p>
                <p>
                        <a href="https://mma.prnewswire.com/media/2971061/Grand_Prix_Wins_Goodyear.html" target="_blank" rel="nofollow">
                    <img src="https://mma.prnewswire.com/media/2971061/Grand_Prix_Wins_Goodyear.jpg" title="Goodyear, on a bold mission to become No. 1 in tires and service, today launched Fast Is In Us, a global campaign celebrating the legendary Eagle performance tire family as one of the most iconic names in performance driving." alt="Goodyear, on a bold mission to become No. 1 in tires and service, today launched Fast Is In Us, a global campaign celebrating the legendary Eagle performance tire family as one of the most iconic names in performance driving.">
                        </a>
                </p>
                <p>
                        <a href="https://mma.prnewswire.com/media/2971062/Grip_and_Rip_Goodyear.html" target="_blank" rel="nofollow">
                    <img src="https://mma.prnewswire.com/media/2971062/Grip_and_Rip_Goodyear.jpg" title="Goodyear, on a bold mission to become No. 1 in tires and service, today launched Fast Is In Us, a global campaign celebrating the legendary Eagle performance tire family as one of the most iconic names in performance driving." alt="Goodyear, on a bold mission to become No. 1 in tires and service, today launched Fast Is In Us, a global campaign celebrating the legendary Eagle performance tire family as one of the most iconic names in performance driving.">
                        </a>
                </p>
                <p>
                        <a href="https://mma.prnewswire.com/media/2918623/The_Goodyear_and_Tire_Rubber_Logo.html" target="_blank" rel="nofollow">
                    <img src="https://mma.prnewswire.com/media/2918623/The_Goodyear_and_Tire_Rubber_Logo.jpg" title="The Goodyear Tire &amp; Rubber Company, Akron, Ohio, USA. (PRNewsfoto/The Goodyear Tire &amp; Rubber Company)" alt="The Goodyear Tire &amp; Rubber Company, Akron, Ohio, USA. (PRNewsfoto/The Goodyear Tire &amp; Rubber Company)">
                        </a>
                </p>
</div>



<p>SOURCE The Goodyear Tire &amp; Rubber Company</p></div>




 
				
			


<!-- ITEMDATE: 2026-05-01 14:00:00 EDT -->

</div>
</div><div class="wd_featureboxes_right_side wd_featureboxes-vertical fr-view"><div class="wd_toolbar wd_toolbar-detail"><div class="wd_featurebox_title">Share Article</div><ul class="wd_tools"><li class="wd_tool wd_tool-print"><span class="wd_tool_icon"><a onclick="view_printable(); return false;" rel="nofollow" href="#print" title="Open a printable version of this page"><span class="fa fa-print"></span><span class="wd_sr-only wd_sr-only-focusable">Open a printable version of this page</span></a></span></li><li class="wd_tool wd_tool-email"><span class="wd_tool_icon"><a onclick="window.location.href = 'mailto:?subject=Did%20Someone%20Say%20Horsepower%3F%20Goodyear%20Launches%20Global%20Campaign%20Celebrating%20Eagle%20Performance%20Tire%20-%20May%201%2C%202026&amp;body='+encodeURIComponent(window.location.href);return false;" href="#email" title="Email the URL of this page to a friend"><span class="fa fa-envelope"></span><span class="wd_sr-only wd_sr-only-focusable">Email the URL of this page to a friend</span></a></span></li><li class="wd_tool wd_tool-socialshare_linkedin"><span class="wd_tool_icon">
                    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire%2Findex.htmls%3D20295%26item%3D123471" target="_blank" title="Linkedin Share" style="background-color:#0077B5;">
                    <span class="fa fa-linkedin"></span>
		    <span class="wd_sr-only wd_sr-only-focusable">Share this page on LinkedIn</span>
                    </a>
                </span></li><li class="wd_tool wd_tool-socialshare_twitter"><span class="wd_tool_icon">
                    <a href="https://x.com/share?url=2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire%2Findex.htmls%3D20295%26item%3D123471" target="_blank" title="X Share" style="background-color:#000;">
                    <span class="fa fa-twitter"></span>
		    <span class="wd_sr-only wd_sr-only-focusable">Share this page on X</span>
                    </a>
                </span></li><li class="wd_tool wd_tool-socialshare_facebook"><span class="wd_tool_icon">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire%2Findex.htmls%3D20295%26item%3D123471" target="_blank" title="Facebook Share" style="background-color:#4267B2;">
                    <span class="fa fa-facebook"></span>
		    <span class="wd_sr-only wd_sr-only-focusable">Share this page on Facebook</span>
                    </a>
                </span></li></ul></div>
<div id="wd_featurebox-teaser_1379" class="wd_featurebox_container wd_featurebox-teaser"><div class="wd_featurebox_title">More Stories</div><div class="wd_featurebox">
<div class="wd_newsfeed_releases-teaser">
<div class="subscribe_link"><a href="index.html"><span class="wd_subscribe_email-icon fa fa-envelope-o"></span></a> <a href="index.html">News Alerts</a></div>

	
		<a class="wd_link-wrap" href="2026-05-06-Goodyear-Announces-First-Quarter-2026-Results/index.html"><div class="item">
			
			<div class="item-inner">
			<div class="wd_title"><a href="2026-05-06-Goodyear-Announces-First-Quarter-2026-Results/index.html">Goodyear Announces First Quarter 2026 Results</a></div>
			<div class="wd_date">May 6, 2026</div>
</div>
		</div></a>
	
		<a class="wd_link-wrap" href="2026-05-06-Goodyear-Announces-First-Quarter-2026-Results/index.html"><div class="item">
			<div class="wd_thumbnail"><a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html"><img src="https://mma.prnewswire.com/media/2971059/Fast_Is_In_Us___Czinger_Goodyear.jpg?p=thumbnail" border="0"></a></div>
			<div class="item-inner">
			<div class="wd_title"><a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html">Did Someone Say Horsepower? Goodyear Launches Global Campaign Celebrating Eagle Performance Tire</a></div>
			<div class="wd_date">May 1, 2026</div>
</div>
		</div></a>
	
		<a class="wd_link-wrap" href="2026-05-06-Goodyear-Announces-First-Quarter-2026-Results/index.html"><div class="item">
			
			<div class="item-inner">
			<div class="wd_title"><a href="2026-04-29-Goodyear-to-Announce-First-Quarter-2026-Financial-Results/index.html">Goodyear to Announce First Quarter 2026 Financial Results</a></div>
			<div class="wd_date">Apr 29, 2026</div>
</div>
		</div></a>
	
		<a class="wd_link-wrap" href="2026-05-06-Goodyear-Announces-First-Quarter-2026-Results/index.html"><div class="item">
			<div class="wd_thumbnail"><a href="2026-04-21-GOODYEAR-NAMES-TRAVIS-PARMAN-AS-CHIEF-COMMUNICATIONS-OFFICER/index.html"><img src="https://mma.prnewswire.com/media/2959648/Travis_Parman_headshot.jpg?p=thumbnail" border="0"></a></div>
			<div class="item-inner">
			<div class="wd_title"><a href="2026-04-21-GOODYEAR-NAMES-TRAVIS-PARMAN-AS-CHIEF-COMMUNICATIONS-OFFICER/index.html">GOODYEAR NAMES TRAVIS PARMAN AS CHIEF COMMUNICATIONS OFFICER</a></div>
			<div class="wd_date">Apr 21, 2026</div>
</div>
		</div></a>
	


</div>
<p class="more"><a href="news/index.html" class="wd_anim wd_primary"><span>All News</span></a></p>
</div></div></div>
						</div>
						<div class="wd_featureboxes_right_side wd_featureboxes-vertical fr-view"><div class="wd_toolbar wd_toolbar-detail"><div class="wd_featurebox_title">Share Article</div><ul class="wd_tools"><li class="wd_tool wd_tool-print"><span class="wd_tool_icon"><a onclick="view_printable(); return false;" rel="nofollow" href="#print" title="Open a printable version of this page"><span class="fa fa-print"></span><span class="wd_sr-only wd_sr-only-focusable">Open a printable version of this page</span></a></span></li><li class="wd_tool wd_tool-email"><span class="wd_tool_icon"><a onclick="window.location.href = 'mailto:?subject=Did%20Someone%20Say%20Horsepower%3F%20Goodyear%20Launches%20Global%20Campaign%20Celebrating%20Eagle%20Performance%20Tire%20-%20May%201%2C%202026&amp;body='+encodeURIComponent(window.location.href);return false;" href="#email" title="Email the URL of this page to a friend"><span class="fa fa-envelope"></span><span class="wd_sr-only wd_sr-only-focusable">Email the URL of this page to a friend</span></a></span></li><li class="wd_tool wd_tool-socialshare_linkedin"><span class="wd_tool_icon">
                    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire%2Findex.htmls%3D20295%26item%3D123471" target="_blank" title="Linkedin Share" style="background-color:#0077B5;">
                    <span class="fa fa-linkedin"></span>
		    <span class="wd_sr-only wd_sr-only-focusable">Share this page on LinkedIn</span>
                    </a>
                </span></li><li class="wd_tool wd_tool-socialshare_twitter"><span class="wd_tool_icon">
                    <a href="https://x.com/share?url=2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire%2Findex.htmls%3D20295%26item%3D123471" target="_blank" title="X Share" style="background-color:#000;">
                    <span class="fa fa-twitter"></span>
		    <span class="wd_sr-only wd_sr-only-focusable">Share this page on X</span>
                    </a>
                </span></li><li class="wd_tool wd_tool-socialshare_facebook"><span class="wd_tool_icon">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire%2Findex.htmls%3D20295%26item%3D123471" target="_blank" title="Facebook Share" style="background-color:#4267B2;">
                    <span class="fa fa-facebook"></span>
		    <span class="wd_sr-only wd_sr-only-focusable">Share this page on Facebook</span>
                    </a>
                </span></li></ul></div>
<div id="wd_featurebox-teaser_1379" class="wd_featurebox_container wd_featurebox-teaser"><div class="wd_featurebox_title">More Stories</div><div class="wd_featurebox">
<div class="wd_newsfeed_releases-teaser">
<div class="subscribe_link"><a href="index.html"><span class="wd_subscribe_email-icon fa fa-envelope-o"></span></a> <a href="index.html">News Alerts</a></div>

	
		<a class="wd_link-wrap" href="2026-05-06-Goodyear-Announces-First-Quarter-2026-Results/index.html"><div class="item">
			
			<div class="item-inner">
			<div class="wd_title"><a href="2026-05-06-Goodyear-Announces-First-Quarter-2026-Results/index.html">Goodyear Announces First Quarter 2026 Results</a></div>
			<div class="wd_date">May 6, 2026</div>
</div>
		</div></a>
	
		<a class="wd_link-wrap" href="2026-05-06-Goodyear-Announces-First-Quarter-2026-Results/index.html"><div class="item">
			<div class="wd_thumbnail"><a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html"><img src="https://mma.prnewswire.com/media/2971059/Fast_Is_In_Us___Czinger_Goodyear.jpg?p=thumbnail" border="0"></a></div>
			<div class="item-inner">
			<div class="wd_title"><a href="2026-05-01-Did-Someone-Say-Horsepower-Goodyear-Launches-Global-Campaign-Celebrating-Eagle-Performance-Tire/index.html">Did Someone Say Horsepower? Goodyear Launches Global Campaign Celebrating Eagle Performance Tire</a></div>
			<div class="wd_date">May 1, 2026</div>
</div>
		</div></a>
	
		<a class="wd_link-wrap" href="2026-05-06-Goodyear-Announces-First-Quarter-2026-Results/index.html"><div class="item">
			
			<div class="item-inner">
			<div class="wd_title"><a href="2026-04-29-Goodyear-to-Announce-First-Quarter-2026-Financial-Results/index.html">Goodyear to Announce First Quarter 2026 Financial Results</a></div>
			<div class="wd_date">Apr 29, 2026</div>
</div>
		</div></a>
	
		<a class="wd_link-wrap" href="2026-05-06-Goodyear-Announces-First-Quarter-2026-Results/index.html"><div class="item">
			<div class="wd_thumbnail"><a href="2026-04-21-GOODYEAR-NAMES-TRAVIS-PARMAN-AS-CHIEF-COMMUNICATIONS-OFFICER/index.html"><img src="https://mma.prnewswire.com/media/2959648/Travis_Parman_headshot.jpg?p=thumbnail" border="0"></a></div>
			<div class="item-inner">
			<div class="wd_title"><a href="2026-04-21-GOODYEAR-NAMES-TRAVIS-PARMAN-AS-CHIEF-COMMUNICATIONS-OFFICER/index.html">GOODYEAR NAMES TRAVIS PARMAN AS CHIEF COMMUNICATIONS OFFICER</a></div>
			<div class="wd_date">Apr 21, 2026</div>
</div>
		</div></a>
	


</div>
<p class="more"><a href="news/index.html" class="wd_anim wd_primary"><span>All News</span></a></p>
</div></div></div>
						
					
        <div class="wd_alert-cta">
            <h3>Get News Alerts</h3>
            <p>Sign up to receive automatic email alerts for breaking Goodyear news and updates.</p>
            <a href="index.html" class="wd_anim wd_primary">sign up</a>
        </div>
        </div>
				
				</main>
				<!-- MAIN CONTENT END -->

				<!-- FOOTER -->
				<div class="experiencefragment aem-GridColumn aem-GridColumn--default--12">
					<div id="experiencefragment-8a6e468fb5" class="cmp-experiencefragment cmp-experiencefragment--footer">



						<div id="container-236786830e" class="cmp-container">



							<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

								<div class="container responsivegrid aem-GridColumn aem-GridColumn--default--12">


									<div id="goodyear-footer" class="cmp-container">



										<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

											<div class="image aem-GridColumn aem-GridColumn--default--12">
												<div data-cmp-lazythreshold="0" data-cmp-src="/content/experience-fragments/goodyear-corp/us/en/site/footer/footer-v2/_jcr_content/root/container_1967570642/image.coreimg{.width}.svg/1683660255720/footer-bg.svg" data-asset="/content/dam/goodyear-corp/component-images/footer/footer-bg.svg" data-asset-id="941004df-3c8d-42b1-b584-fec255f30d5b" id="goodyear-footer-swish" data-cmp-data-layer="{&quot;goodyear-footer-swish&quot;:{&quot;@type&quot;:&quot;goodyear-corp/components/image&quot;,&quot;repo:modifyDate&quot;:&quot;2023-05-09T19:24:15Z&quot;,&quot;image&quot;:{&quot;repo:id&quot;:&quot;941004df-3c8d-42b1-b584-fec255f30d5b&quot;,&quot;repo:modifyDate&quot;:&quot;2023-04-28T18:16:05Z&quot;,&quot;@type&quot;:&quot;image/svg+xml&quot;,&quot;repo:path&quot;:&quot;/content/dam/goodyear-corp/component-images/footer/footer-bg.svg&quot;}}}" class="cmp-image" itemscope="" itemtype="http://schema.org/ImageObject">



													<img src="assets/news.goodyear.com/images/footer-bg.svg" class="cmp-image__image" itemprop="contentUrl" data-cmp-hook-image="image" alt="">





												</div>



											</div>
											<div class="container responsivegrid aem-GridColumn aem-GridColumn--default--12">




												<div id="goodyear-footer-bg" class="cmp-container">

													<div class="container responsivegrid">


														<div id="goodyear-footer-inner" class="cmp-container">



															<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 aem-Grid--phone--12 ">

																<div class="brandlogo aem-GridColumn aem-GridColumn--default--12">

																	<a class="cmp-brandlogo-footer" href="index.html" aria-label="Goodyear Corporate Logo">

																		<span class="icon-goodyear-logo"><img src="assets/news.goodyear.com/images/logo.svg" alt=""></span>

																	</a>

																</div>
																<div class="container responsivegrid aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0 aem-GridColumn--default--4">




																	<div id="container-7338eb35b0" class="cmp-container">

																		<div class="footerlinks">


																			<div class="cmp-footer-menu">
																				<div class="cmp-footer-menu__item" data-target="Company">
																					<a href="us/en/company.html/index.html" class="cmp-footer-menu__link">
																						Company
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Commitments">
																					<a href="us/en/commitments.html/index.html" class="cmp-footer-menu__link">
																						Commitments
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Careers">
																					<a href="index.html" target="_blank" class="cmp-footer-menu__link">
																						Careers
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Investors">
																					<a href="us/en/investors.html/index.html" class="cmp-footer-menu__link">
																						Investors
																					</a>
																				</div>
																			</div>
																		</div>


																	</div>

																</div>
																<div class="container responsivegrid aem-GridColumn--default--none aem-GridColumn--phone--12 aem-GridColumn--phone--newline aem-GridColumn aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0 aem-GridColumn--default--4">




																	<div id="container-faa53a46aa" class="cmp-container">

																		<div class="footerlinks">


																			<div class="cmp-footer-menu">
																				<div class="cmp-footer-menu__item" data-target="Products &amp; Innovations">
																					<a href="us/en/products-and-innovations.html/index.html" class="cmp-footer-menu__link">
																						Products &amp; Innovations
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Newsroom">
																					<a href="index.html" class="cmp-footer-menu__link">
																						Newsroom
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Goodyear Suppliers">
																					<a href="us/en/more/goodyear-suppliers.html/index.html" class="cmp-footer-menu__link">
																						Goodyear Suppliers
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Insurance Verification">
																					<a href="us/en/more/insurance-verification.html/index.html" class="cmp-footer-menu__link">
																						Insurance Verification
																					</a>
																				</div>
																			</div>
																		</div>


																	</div>

																</div>
																<div class="container responsivegrid aem-GridColumn--default--none aem-GridColumn--phone--12 aem-GridColumn--phone--newline aem-GridColumn aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0 aem-GridColumn--default--4">




																	<div id="container-70b1f73958" class="cmp-container">

																		<div class="footerlinks">


																			<div class="cmp-footer-menu">
																				<div class="cmp-footer-menu__item" data-target="Contact Us">
																					<a href="us/en/company/contact-us.html/index.html" class="cmp-footer-menu__link">
																						Contact Us
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Governance">
																					<a href="us/en/investors/governance.html/index.html" class="cmp-footer-menu__link">
																						Governance
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Reports &amp; Policies">
																					<a href="us/en/commitments/reports-and-policies.html/index.html" class="cmp-footer-menu__link">
																						Reports &amp; Policies
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Integrity Hotline">
																					<a href="https://secure.ethicspoint.com/domain/media/en/gui/39890/index.html" class="cmp-footer-menu__link" target="_blank">
																						Integrity Hotline
																					</a>
																				</div>

																			</div>
																		</div>


																	</div>

																</div>
																<div class="footersociallinks aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--11 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">

																	<div class="cmp-footer-social-links">
																		<div class="cmp-footer-social-links__text">
																		</div>
																		<div class="cmp-footer-social-links__container" current-path="/content/goodyear-corp/us/en/media" social-media-resource="TemplatedResourceImpl, type=goodyear-corp/components/footersociallinks, path=/content/experience-fragments/goodyear-corp/us/en/site/footer/footer-v2/jcr:content/root/container_1967570642/container/container_1414193570/footersociallinks">





																			<div class="cmp-footer-social-links__icons" page-path-url="/content/goodyear-corp/us/en/media" social-links-data="TemplatedResourceImpl, type=goodyear-corp/components/footersociallinks, path=/content/experience-fragments/goodyear-corp/us/en/site/footer/footer-v2/jcr:content/root/container_1967570642/container/container_1414193570/footersociallinks">
																				<a href="https://www.facebook.com/GoodyearNorthAmerica/" class="cmp-footer-social-links__item" target="_blank">
																					<img src="assets/news.goodyear.com/images/social-icon-facebook.svg" alt="Facebook">
																				</a>

																				<a href="https://x.com/goodyear" class="cmp-footer-social-links__item" target="_blank">
																					<img src="assets/news.goodyear.com/images/social-icon-x.svg" alt="X Logo">
																				</a>

																				<a href="https://www.linkedin.com/company/goodyear/" class="cmp-footer-social-links__item" target="_blank">
																					<img src="assets/news.goodyear.com/images/social-icon-linkedin.svg" alt="LinkedIn">
																				</a>

																				<a href="https://www.youtube.com/user/Goodyear" class="cmp-footer-social-links__item" target="_blank">
																					<img src="assets/news.goodyear.com/images/social-icon-youtube.svg" alt="YouTube">
																				</a>

																				<a href="https://www.instagram.com/goodyear/?hl=en" class="cmp-footer-social-links__item" target="_blank">
																					<img src="assets/news.goodyear.com/images/social-icon-instagram.svg" alt="Instagram">
																				</a>
																			</div>


																		</div>
																	</div>




																</div>

																

																<div class="text aem-GridColumn--default--none aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--offset--default--0">
																	<div data-cmp-data-layer="{&quot;text-f6a37d2798&quot;:{&quot;@type&quot;:&quot;goodyear-corp/components/text&quot;,&quot;repo:modifyDate&quot;:&quot;2023-05-09T19:24:16Z&quot;,&quot;xdm:text&quot;:&quot;&lt;p&gt;© 2023 The Goodyear Tire &amp;amp; Rubber Company&lt;/p&gt;\r\n&quot;}}" id="text-f6a37d2798" class="cmp-text">
																		<p>© 2026 The Goodyear Tire &amp; Rubber Company
																		</p>

																		<div class="site-map">
																			<a class="cmp-footer-menu__link" href="international/index.html" target="_blank">International Site Directory</a><span class="footer-break">|</span>
																			<a class="cmp-footer-menu__link" href="us/en/more/sitemap.html/index.html">Site Map</a><span class="footer-break">|</span>
																			<a class="cmp-footer-menu__link" href="us/en/more/terms-conditions-and-privacy-policy.html/index.html">Terms, Conditions &amp; Privacy Policy</a><span class="footer-break">|</span>
																			<button id="ot-sdk-btn" class="ot-sdk-show-settings">Do Not Sell or Share My Personal Information</button>

																		</div>

																	</div>



																</div>


															</div>

														</div>


													</div>


												</div>

											</div>


										</div>

									</div>


								</div>


							</div>

						</div>


					</div>


				</div>
				<!-- FOOTER END -->

			</div>

		</div>
	</div>

	<script src="assets/news.goodyear.com/js/jquery.lc-7842899024219bcbdb5e72c946870b79-lc.min.js"></script>
	<script src="assets/news.goodyear.com/js/utils.lc-e7bf340a353e643d198b25d0c8ccce47-lc.min.js"></script>
	<script src="assets/news.goodyear.com/js/granite.lc-543d214c88dfa6f4a3233b630c82d875-lc.min.js"></script>
	<script src="assets/news.goodyear.com/js/jquery.lc-dd9b395c741ce2784096e26619e14910-lc.min.js"></script>
	<script src="assets/news.goodyear.com/js/clientlib-base.lc-e6d9e95c45f8f5a772b2b100ca3038ce-lc.min.js"></script>
	<script src="assets/news.goodyear.com/js/clientlib-site.lc-5012930c82256ceb6f11b117b772f259-lc.min.js"></script>



	<script type="text/javascript" src="assets/news.goodyear.com/js/buttons.js"></script>



	<script src="assets/news.goodyear.com/js/api.js" async="" defer="defer"></script>



	<div class="modal fade gycorporate-modal js-contact-overlay-captcha">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<a href="#" class="close" data-dismiss="modal">
						<span class="icon-close"></span>
					</a>
				</div>
				<div class="modal-body">
					<div class="contact-overlay-captcha__content">
						<h2 class="modal-main-title">Contact Us</h2>
						<p class="error-message error-message-paragraph">Please make
							sure you've entered valid information for all required fields.</p>
						<p class="text-oblique">Note: All fields are required</p>
						<p class="text-to">To:</p>
						<h3 class="contact-overlay-captcha__sub-title js-sub-title"></h3>

						<form action="/services/mail" method="post" class="gy-form" enctype="text/plain">
							<input type="hidden" name="type" id="type" value="contact">
							<label for="contactName" class=""> <span class="input-name">Your Name</span> <input name="contactName" id="contactName" type="text" class="form-control required">
							</label> <label for="contactEmail" class=""> <span class="input-name">Email Address</span>
								<input name="contactEmail" id="contactEmail" type="text" class="form-control required-email">
							</label> <label for="message" class="">

								<div>
									<span class="small-text input-name" style="float: left">Message</span>
									<span class="remaining small-text" style="float: right">1000
										characters remaining</span>
								</div> <br> <textarea class="input message required" name="message" id="message" maxlength="1000" cols="55" rows="6"></textarea>

							</label>
							<input class="js-email-key" name="emailKey" id="emailKey" type="hidden">

							<div class="footer-form">
								<div id="captchaId" class="form-captcha" data-captcha-id="0">
									<div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
										<div class="grecaptcha-logo"><iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-ldaqjkhd0tyx" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="goodyear_files/anchor.html"></iframe></div>
										<div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
									</div><iframe style="display: none;"></iframe>
								</div>
								<input type="submit" value="SEND MESSAGE" class="cta"> <a class="cancel-cta" data-dismiss="modal" href="#">Cancel</a>
							</div>
						</form>
						<br>
						<div>
							<a class="policy" target="_blank" href="us/en/more/terms-conditions-and-privacy-policy.html/index.html">Privacy
								Policy</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<div>
		<div class="modal fade gycorporate-modal thank-you-overlay contact-overlay js-thank_you-overlay" style="display:none">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<a href="#" class="close" data-dismiss="modal"></a>
					</div>
					<div class="modal-body">
						<div class="thank-you-overlay__modal">
							<h2 class="modal-main-title--small">Thank you for your message.</h2>
							<p>Thanks for your interest in Goodyear. Your
								message has been forwarded to our experts. Our associates typically
								reply within 2 business days.</p>

							<a class="cta" data-dismiss="modal" href="#">CLOSE</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div>
			<div class="modal fade gycorporate-modal error-overlay contact-overlay js-error-overlay">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a href="#" class="close" data-dismiss="modal"><span class="icon-close"></span></a>
						</div>
						<div class="modal-body">
							<div class="contact-overlay__content">
								<h2 class="modal-main-title--small">Sorry! There seems to be a problem.</h2>
								<p>This action is temporarily unavailable. Please try again later.</p>

								<a class="cta" data-dismiss="modal" href="#">CLOSE</a>
							</div>
						</div>
					</div>
				</div>
			</div>



		</div>
	</div>

	<script type="text/javascript" src="assets/news.goodyear.com/thirdparty/font-awesome/v4-shims.min.js"></script>
	<script type="text/javascript" src="assets/news.goodyear.com/js/wd_script.js"></script>

<!-- begin spin_special_output(body_end) -->
<script wd_script_id="piwik_tracking_code"></script>
<!-- Piwik Tracking Code -->

<noscript>
	<img src="https://stats.drivetheweb.com/piwik.php?idsite=6972&rec=1" style="border:0" alt="" />
</noscript>
<!-- End Piwik Tracking Code -->
		
<!-- end spin_special_output(body_end) -->
<iframe height="1" width="1" style="position: absolute; top: 0px; left: 0px; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; visibility: hidden;"></iframe>


<script type="text/javascript" class="optanon-category-2">
  var _paq = _paq || [];

  _paq.push(["setCustomVariable", 4, "News Release Feed ID", "202605011400PR_NEWS_USPR_____CL49267", "page"]);

  _paq.push(["setCustomVariable", 1, "Content Type", "News Releases Feed", "page"]);

  _paq.push(["setCustomVariable", 3, "Navigation Page", "News", "page"]);

  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);
  (function() {
    var u="//stats.drivetheweb.com/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", 6972]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0];
    g.type="text/javascript"; g.async=true; g.defer=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>
























<script id="offline-nav-script">
(function () {
  var BTN = 'button[data-qa-id^="RegularHeader-mainNavigation-meganav-"]';
  var CAROUSEL_QA = 'CardCarouselContainer-CardCarouselContainer';
  var PREV_QA = 'CardCarouselContainer-CardCarouselContainer-prev-button';
  var NEXT_QA = 'CardCarouselContainer-CardCarouselContainer-next-button';
  var RACING_READ_MORE_QA = 'TwoColumnContainer-ContentCard-ContentBlock-read-more-button';
  var RACING_NEWS_HREF = '2025-09-30-Goodyear-Launches-Global-Racing-Organization-to-Enhance-Motorsport-Strategy-Worldwide/index.html';
  var ENABLED_BTN = 'bg-action-color-primary text-action-text-btn-primary cursor-pointer hover:opacity-100';
  var DISABLED_BTN = 'bg-action-disabled-btn !bg-action-disabled-btn pointer-events-none text-action-disabled-disabled hover:opacity-100';

  function closeAll() {
    document.querySelectorAll('.offline-mega-open').forEach(function (el) {
      el.classList.remove('offline-mega-open');
    });
    document.querySelectorAll(BTN).forEach(function (btn) {
      btn.setAttribute('aria-expanded', 'false');
    });
  }

  function toggleMenu(btn) {
    var li = btn.closest('li.offline-mega-li');
    if (!li) return;
    var wasOpen = li.classList.contains('offline-mega-open');
    closeAll();
    if (!wasOpen) {
      li.classList.add('offline-mega-open');
      btn.setAttribute('aria-expanded', 'true');
    }
  }

  function setNavButtonState(btn, enabled) {
    if (!btn) return;
    btn.setAttribute('aria-disabled', enabled ? 'false' : 'true');
    btn.tabIndex = enabled ? 0 : -1;
    if (enabled) btn.removeAttribute('disabled');
    else btn.setAttribute('disabled', 'disabled');
    btn.classList.remove('bg-action-color-primary', 'text-action-text-btn-primary', 'cursor-pointer',
      'bg-action-disabled-btn', '!bg-action-disabled-btn', 'pointer-events-none', 'text-action-disabled-disabled');
    (enabled ? ENABLED_BTN : DISABLED_BTN).split(' ').forEach(function (cls) {
      if (cls) btn.classList.add(cls);
    });
  }

  function getMaxIndex(slides, swiper) {
    if (!slides.length) return 0;
    var maxOffset = 0;
    for (var i = slides.length - 1; i >= 0; i--) {
      var offset = slides[i].offsetLeft;
      if (offset <= slides[slides.length - 1].offsetLeft) {
        maxOffset = offset;
      }
    }
    var viewport = swiper.clientWidth;
    var total = slides[slides.length - 1].offsetLeft + slides[slides.length - 1].offsetWidth;
    if (total <= viewport) return 0;
    for (var j = slides.length - 1; j >= 0; j--) {
      var left = slides[j].offsetLeft;
      if (left + slides[j].offsetWidth > viewport - 1) {
        return j;
      }
    }
    return slides.length - 1;
  }

  function updateScrollbar(section, swiper, wrapper, offset) {
    var drag = section.querySelector('.swiper-scrollbar-drag');
    var track = section.querySelector('.swiper-scrollbar');
    if (!drag || !track) return;
    var maxScroll = Math.max(wrapper.scrollWidth - swiper.clientWidth, 0);
    var trackWidth = track.clientWidth;
    var dragWidth = maxScroll > 0 ? Math.max((swiper.clientWidth / wrapper.scrollWidth) * trackWidth, 24) : trackWidth;
    drag.style.width = dragWidth + 'px';
    var travel = Math.max(trackWidth - dragWidth, 0);
    drag.style.transform = maxScroll > 0
      ? 'translate3d(' + ((offset / maxScroll) * travel) + 'px, 0px, 0px)'
      : 'translate3d(0px, 0px, 0px)';
  }

  function markSlideStates(slides, activeIndex) {
    slides.forEach(function (slide, index) {
      slide.classList.remove('swiper-slide-active', 'swiper-slide-prev', 'swiper-slide-next');
      if (index === activeIndex) slide.classList.add('swiper-slide-active');
      else if (index === activeIndex - 1) slide.classList.add('swiper-slide-prev');
      else if (index === activeIndex + 1) slide.classList.add('swiper-slide-next');
      slide.setAttribute('aria-label', (index + 1) + ' / ' + slides.length);
    });
  }

  function initCarousel(section) {
    if (section.getAttribute('data-offline-carousel-init') === 'true') return;
    var swiper = section.querySelector('.swiper');
    var wrapper = section.querySelector('.swiper-wrapper');
    var slides = Array.prototype.slice.call(section.querySelectorAll('.swiper-slide'));
    var prevBtn = section.querySelector('[data-qa-id="' + PREV_QA + '"]');
    var nextBtn = section.querySelector('[data-qa-id="' + NEXT_QA + '"]');
    if (!swiper || !wrapper || slides.length < 2 || !prevBtn || !nextBtn) return;

    section.setAttribute('data-offline-carousel-init', 'true');
    swiper.classList.add('offline-carousel-ready');

    var state = {
      activeIndex: slides.findIndex(function (slide) {
        return slide.classList.contains('swiper-slide-active');
      }),
      slides: slides,
      wrapper: wrapper,
      swiper: swiper,
      prevBtn: prevBtn,
      nextBtn: nextBtn,
    };
    if (state.activeIndex < 0) state.activeIndex = 0;

    function goTo(index, animate) {
      var maxIndex = getMaxIndex(state.slides, state.swiper);
      state.activeIndex = Math.max(0, Math.min(index, maxIndex));
      var offset = state.slides[state.activeIndex].offsetLeft;
      state.wrapper.style.transition = animate === false ? 'none' : '';
      state.wrapper.style.transform = 'translate3d(' + (-offset) + 'px, 0px, 0px)';
      markSlideStates(state.slides, state.activeIndex);
      setNavButtonState(state.prevBtn, state.activeIndex > 0);
      setNavButtonState(state.nextBtn, state.activeIndex < maxIndex);
      updateScrollbar(section, state.swiper, state.wrapper, offset);
    }

    state.goTo = goTo;
    section.__offlineCarousel = state;

    window.addEventListener('resize', function () {
      goTo(state.activeIndex, false);
    });

    goTo(state.activeIndex, false);
  }

  function initCarousels() {
    document.querySelectorAll('[data-qa-id="' + CAROUSEL_QA + '"]').forEach(initCarousel);
  }

  function fixRemainingGoodyearAnchors() {
    document.querySelectorAll('a[href*="goodyear.com"]').forEach(function (anchor) {
      var href = anchor.getAttribute('href') || '';
      if (!href || href.indexOf('mailto:') === 0 || href.indexOf('localhost') !== -1) return;
      if (/news\.goodyear\.com\/news-alerts/i.test(href)) {
        anchor.setAttribute('href', 'index.html');
      }
    });
  }

  function fixGlobalRacingReadMore() {
    var btn = document.querySelector('[data-qa-id="' + RACING_READ_MORE_QA + '"]');
    if (!btn) return;
    var card = btn.closest('[data-qa-id="TwoColumnContainer-ContentCard"]');
    if (!card || card.textContent.indexOf('Global Racing Organization') === -1) return;
    var href = btn.getAttribute('href') || '';
    if (href.indexOf('road-trip-checklist') !== -1 || href.indexOf('2025-09-30-Goodyear-Launches-Global-Racing-Organization') === -1) {
      btn.setAttribute('href', RACING_NEWS_HREF);
    }
  }

  document.addEventListener('click', function (e) {
    var prev = e.target.closest('[data-qa-id="' + PREV_QA + '"]');
    var next = e.target.closest('[data-qa-id="' + NEXT_QA + '"]');
    if (prev || next) {
      var section = (prev || next).closest('[data-qa-id="' + CAROUSEL_QA + '"]');
      var state = section && section.__offlineCarousel;
      if (state) {
        e.preventDefault();
        e.stopImmediatePropagation();
        if (prev) state.goTo(state.activeIndex - 1, true);
        else state.goTo(state.activeIndex + 1, true);
      }
      return;
    }

    var btn = e.target.closest(BTN);
    if (btn) {
      e.preventDefault();
      e.stopImmediatePropagation();
      toggleMenu(btn);
      return;
    }
    if (!e.target.closest('.offline-mega-panel') && !e.target.closest('header nav')) {
      closeAll();
    }
  }, true);

  function boot() {
    fixGlobalRacingReadMore();
    fixRemainingGoodyearAnchors();
    initCarousels();
    window.setTimeout(function () {
      fixGlobalRacingReadMore();
      fixRemainingGoodyearAnchors();
      initCarousels();
    }, 300);
    window.setTimeout(function () {
      fixGlobalRacingReadMore();
      fixRemainingGoodyearAnchors();
      initCarousels();
    }, 1200);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();
</script></body></html>