(function ($) {
	'use strict';

	var $doc = $(document),
		$win = $(window);

	// swiperSet
	// https://github.com/nolimits4web/Swiper/blob/Swiper2/API.md
	$.fn.swiperSet = function (customOption) {
		var defaultOption = {
			appendController: null,
			pageControl: false,
			nextControl: false,
			prevControl: false,
			scrollbarControl: false,
			playControl: false,
			pauseControl: false
		};

		this.each(function () {
			var option = $.extend({}, defaultOption, customOption);
			var $this = $(this);

			if ($this.data('swiper') || !$.isFunction(window.Swiper)) return;

			var $items = $this.children();

			$this.wrap('<div class="swiper-object"><div class="swiper-container"></div></div>');
			$this.addClass('swiper-wrapper');
			$items.addClass('swiper-slide');

			var $container = $this.parent('.swiper-container'),
				$wrap = $container.parent('.swiper-object'),
				$appendController = $wrap;

			option.autoplay = $items.length > 1 && option.autoplay ? option.autoplay : false;
			option.loop = $items.length > 1 && option.loop ? option.loop : false;

			if (option.appendController) {
				$appendController = $(option.appendController);
			}

			if ($items.length === 1) {
				$wrap.addClass('swiper-container-one');
			} else if ($items.length <= 0) {
				$wrap.addClass('swiper-container-empty');
			}

			if (option.pageControl) {
				$appendController.append('<div class="swiper-pagination"></div>');
				option.pagination = $appendController.find('.swiper-pagination').get(0);
			}
			if (option.nextControl) {
				$appendController.append('<button class="swiper-button-next"><span class="swiper-button-next-text">다음</span></button>');
				option.nextBtn = $appendController.find('.swiper-button-next').get(0);
			}
			if (option.prevControl) {
				$appendController.append('<button class="swiper-button-prev"><span class="swiper-button-prev-text">이전</span></button>');
				option.prevBtn = $appendController.find('.swiper-button-prev').get(0);
			}
			if (option.playControl) {
				$appendController.append('<button class="swiper-button-play"><span class="swiper-button-play-text">재생</span></button>');
				option.playButton = $appendController.find('.swiper-button-play').get(0);
			}
			if (option.pauseControl) {
				$appendController.append('<button class="swiper-button-pause"><span class="swiper-button-pause-text">정지</span></button>');
				option.pauseButton = $appendController.find('.swiper-button-pause').get(0);
			}
			if (option.autoplay) {
				$(option.playButton).addClass('active');
			} else {
				$(option.pauseButton).addClass('active');
			}

			option.onAutoplayStart = function () {
				if (option.playControl) {
					$(option.playButton).addClass('active');
				}
				if (option.pauseControl) {
					$(option.pauseButton).removeClass('active');
				}
			};
			option.onAutoplayStop = function () {
				if (option.playControl) {
					$(option.playButton).removeClass('active');
				}
				if (option.pauseControl) {
					$(option.pauseButton).addClass('active');
				}
			};

			if ($.isFunction(window.Swiper)) {
				var swiper = new Swiper($container.get(0), option);
				$this.data('swiper', swiper);

				if (option.nextControl) {
					$(option.nextBtn).on('click', function () {
						swiper.swipeNext();
					});
				}
				if (option.prevControl) {
					$(option.prevBtn).on('click', function () {
						swiper.swipePrev();
					});
				}
				if (option.playControl) {
					$(option.playButton).on('click', function () {
						swiper.startAutoplay();
					});
				}
				if (option.pauseControl) {
					$(option.pauseButton).on('click', function () {
						swiper.stopAutoplay();
					});
				}
			}
		});
	};

	window.hadalaboUI = window.hadalaboUI || {};

	hadalaboUI.ieMode = document.documentMode;
	hadalaboUI.userAgent = navigator.userAgent;
	hadalaboUI.ios = hadalaboUI.userAgent.match(/iPod|iPhone|iPad/);
	hadalaboUI.android = hadalaboUI.userAgent.match(/Android/);
	hadalaboUI.androidVersion = (function () {
		if (hadalaboUI.android) {
			var match = hadalaboUI.userAgent.match(/Android ([0-9]+\.[0-9]+(\.[0-9]+)*)/);
			return match[1];
		}
	})();
	hadalaboUI.transitionEnd = 'transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd';
	hadalaboUI.hasTransition = (function () {
		var transition = ['transition', 'WebkitTransition', 'MozTransition', 'OTransition', 'msTransition'],
			el = document.createElement('div'),
			array = [];

		$.each(transition, function (i, val) {
			if (el.style[val] !== undefined) {
				array.push(val);
			}
		});

		return array.length ? true : false;
	})();

	// hash
	hadalaboUI.hash = function (size, addString) {
		var string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
			result = '';

		if (addString) {
			string += addString;
		}

		size = size || 10;

		for (var i = 0; i < size; i++) {
			result += string.charAt(Math.floor(Math.random() * string.length));
		}

		return result;
	};

	// scrollBlock
	hadalaboUI.scrollBlock = {
		className: {
			block: 'is-scroll-blocking'
		},
		block: function () {
			var _ = hadalaboUI.scrollBlock,
				$html = $('html');

			if (!$html.hasClass(_.className.block)) {
				$html.addClass(_.className.block);
			}
		},
		clear: function () {
			var _ = hadalaboUI.scrollBlock,
				$html = $('html');

			if ($html.hasClass(_.className.block)) {
				$html.removeClass(_.className.block);
			}
		}
	};

	// layer
	hadalaboUI.layer = {
		hasTransition: hadalaboUI.hasTransition,
		transitionEnd: hadalaboUI.transitionEnd.replace(/(end|End)/g, '$1.hadalaboUILayer'),
		scrollBlock: hadalaboUI.scrollBlock,
		className: {
			animated: 'is-animated',
			show: 'is-show',
			hide: 'is-hide',
			active: 'is-active',
			noAnimated: 'is-no-animated',
			closeBtn: 'js-layer-close'
		},
		defaultOptions: {
			$btn: null,
			scrollBlock: true,
			animated: true,
			animateTarget: null,
			allClose: false,
			timer: null
		},
		bind: function () {
			var _ = hadalaboUI.layer;
			$doc
				.on('click.hadalaboUILayer', '[data-layer]', function (e) {
					var $this = $(this),
						datas = _.getDatas($this);

					_.open(datas.$layer, datas.options);

					if ($this.is('a')) {
						e.preventDefault();
					}
				})
				.on('click.hadalaboUILayer', '[data-layer-toggle]', function (e) {
					var $this = $(this),
						datas = _.getDatas($this);

					_.toggle(datas.$layer, datas.options);

					if ($this.is('a')) {
						e.preventDefault();
					}
				})
				.on('click.hadalaboUILayer', '[data-layer-close]', function (e) {
					var $this = $(this),
						datas = _.getDatas($this);

					_.close(datas.$layer, datas.options);

					if ($this.is('a')) {
						e.preventDefault();
					}
				})
				.on('click.hadalaboUILayer', '.' + _.className.closeBtn, function (e) {
					var $this = $(this),
						$layer = $this.closest('[data-layer-wrap]');

					if ($layer && $layer.length) {
						_.close($layer);
					}

					if ($this.is('a')) {
						e.preventDefault();
					}
				})
				.on('focusin.hadalaboUILayer', function (e) {
					_.checkFocus(e.target);
				});
		},
		checkFocus: function (target) {
			var _ = hadalaboUI.layer,
				$target = $(target),
				$openLayers = $('[data-layer-wrap].' + _.className.show),
				$crrLayerWrap = (function () {
					if ($openLayers.length) {
						var array = [];

						$openLayers.each(function () {
							var $layer = $(this),
								index = Number($layer.attr('data-layer-wrap'));

							array.push(index);
						});

						return $('[data-layer-wrap="' + Math.max.apply(null, array) + '"].' + _.className.show);
					} else {
						return false;
					}
				})();

			if ($crrLayerWrap && !$crrLayerWrap.is($target) && !$crrLayerWrap.find($target).length) {
				$crrLayerWrap.trigger('focus');
			}
		},
		getDatas: function ($btn) {
			if ($btn && $btn.length) {
				var _ = hadalaboUI.layer,
					dataLayer = $btn.attr('data-layer-toggle') || $btn.attr('data-layer') || null,
					dataOptions = $btn.attr('data-layer-options'),
					datas = {
						$layer: dataLayer && $(dataLayer).length ? $(dataLayer) : null,
						options: null
					},
					layerDataOptions = datas.$layer.attr('data-layer-options'),
					btnOptions = _.getOptions(dataOptions),
					layerOptions = _.getOptions(layerDataOptions);

				datas.options = $.extend({}, _.defaultOptions, layerOptions, btnOptions);
				datas.options.$btn = $btn;

				return datas;
			} else {
				return {
					$layer: null,
					options: null
				};
			}
		},
		getOptions: function (string) {
			var _ = hadalaboUI.layer,
				string = string || '';

			if (string.length) {
				var blankReg = /^[ \t\r\n\v\f]+|[ \t\r\n\v\f]*[ \t\r\n\v\f]$/g,
					keyReg = /^[a-zA-Z_$][a-zA-Z_$0-9]*(?=\s*:)/,
					valReg = /:([^\:]+)$/,
					boolReg = /^true$|^false$/,
					numReg = /^[0-9.]+$/,
					stringReg = /^'([^']*)'$|^"([^"]*)"$/,
					nullReg = /^null$/,
					array = string.split(';'),
					options = {};

				$.each(array, function (i, value) {
					var crr = value.replace(blankReg, ''),
						key = crr.match(keyReg),
						val = crr.match(valReg);

					key = key && key[0] && key[0].replace(blankReg, '');
					val = val && val[1] && val[1].replace(blankReg, '');

					if (key && key.length) {
						if (val.match(boolReg)) {
							val = val === 'true';
						} else if (val.match(numReg)) {
							val = parseFloat(val);
						} else if (val.match(nullReg)) {
							val = null;
						} else if (val.match(stringReg)) {
							val = val.match(stringReg)[1];
						}
						options[key] = val;
					}
				});

				return options;
			} else {
				return {};
			}
		},
		toggle: function ($layer, options) {
			var _ = hadalaboUI.layer;

			options = $.extend({}, _.defaultOptions, options || {});

			if ($layer.hasClass(_.className.show)) {
				_.close($layer, options);
			} else {
				_.open($layer, options);
			}
		},
		open: function ($layer, options) {
			var _ = hadalaboUI.layer;

			if ($layer && $layer.length && !$layer.hasClass(_.className.show)) {
				options = $.extend({}, _.defaultOptions, options || {});
				options.animated = !_.hasTransition ? false : options.animated;

				if (options.allClose) {
					_.allClose($layer);
				}

				if (options.timer && typeof options.timer === 'number') {
					var timer = setTimeout(function () {
						_.close($layer);
					}, options.timer);

					$layer.data('hadalaboUILayerTimer', timer).one('layerClosed.hadalaboUILayerTimer', function () {
						var timer = $(this).data('hadalaboUILayerTimer') || null;
						clearTimeout(timer);
					});
				}

				if (options.$btn && options.$btn.length) {
					options.$btn.addClass(_.className.active);
				}

				var $openLayers = $('[data-layer-wrap].' + _.className.show);

				$layer.data('hadalaboUILayerOptions', options).attr('data-layer-wrap', $openLayers.length);

				if (options.animated) {
					$layer.removeClass(_.className.noAnimated);
				} else {
					$layer.addClass(_.className.noAnimated);
				}

				$layer.off(_.transitionEnd).css('display', 'block');

				if (options.scrollBlock) {
					_.scrollBlock.block();
				}

				setTimeout(function () {
					$layer
						.removeClass(_.className.hide)
						.addClass(_.className.animated + ' ' + _.className.show)
						.attr('tabindex', '0')
						.trigger('focus');

					$layer.trigger('layerOpened', [$layer, options.$btn]);

					function afterClose() {
						$layer.removeClass(_.className.animated);
						$layer.trigger('layerAfterOpened', [$layer, options.$btn]);
					}

					if (options.animated) {
						var transitionEndTimer = setTimeout(function () {
							$layer.off(_.transitionEnd);
							afterClose();
						}, 2000);
						$layer.one(_.transitionEnd, function () {
							clearTimeout(transitionEndTimer);
							$layer.off(_.transitionEnd);
							afterClose();
						});
					} else {
						afterClose();
					}
				}, 10);
			}
		},
		close: function ($layer, options) {
			var _ = hadalaboUI.layer;

			if ($layer && $layer.length && $layer.hasClass(_.className.show)) {
				var layerOptions = $layer.data('hadalaboUILayerOptions');
				options = $.extend({}, _.defaultOptions, layerOptions, options || {});
				options.animated = !_.hasTransition ? false : options.animated;

				if (options.$btn && options.$btn.length) {
					options.$btn.removeClass(_.className.active);
				}

				if (options.animated) {
					$layer.removeClass(_.className.noAnimated);
				} else {
					$layer.addClass(_.className.noAnimated);
				}

				$layer
					.off(_.transitionEnd)
					.removeClass(_.className.show)
					.addClass(_.className.animated + ' ' + _.className.hide)
					.removeAttr('tabindex');

				$layer.trigger('layerClosed', [$layer, options.$btn]);

				if (options.animated) {
					var transitionEndTimer = setTimeout(function () {
						$layer.off(_.transitionEnd);
						afterClose();
					}, 2000);
					$layer.one(_.transitionEnd, function () {
						clearTimeout(transitionEndTimer);
						$layer.off(_.transitionEnd);
						afterClose();
					});
				} else {
					afterClose();
				}
			}

			function afterClose() {
				$layer.removeClass(_.className.animated);
				$layer.css('display', 'none');

				if (_.scrollBlockClearCheck()) {
					_.scrollBlock.clear();
				}

				if (options.$btn && options.$btn.length) {
					options.$btn.trigger('focus');
				}

				$layer.trigger('layerAfterClosed', [$layer, options.$btn]);
			}
		},
		scrollBlockClearCheck: function () {
			var _ = hadalaboUI.layer,
				count = 0,
				$openLayers = $('[data-layer-wrap].' + _.className.show),
				length = $openLayers.length;

			if (length) {
				for (var i = 0; i < length; i++) {
					var options = $openLayers.eq(i).data('hadalaboUILayerOptions');
					if (options.scrollBlock) {
						count++;
					}
				}
				if (count) {
					return false;
				} else {
					return true;
				}
			} else {
				return true;
			}
		},
		allClose: function ($notLayer) {
			var _ = hadalaboUI.layer,
				$openLayers = $('[data-layer-wrap].' + _.className.show);

			if ($openLayers.length) {
				$openLayers.each(function () {
					var $layer = $(this);

					if (!($notLayer && $layer.is($notLayer))) {
						_.close($layer, {
							$btn: null
						});
					}
				});
			}
		}
	};
	hadalaboUI.layer.bind();

	// selecLayer
	hadalaboUI.selectLayer = {
		hasTransition: hadalaboUI.hasTransition,
		transitionEnd: hadalaboUI.transitionEnd.replace(/(end|End)/g, '$1.hadalaboUISelectLayer'),
		className: {
			animated: 'is-animated',
			active: 'is-active',
			top: 'is-top',
			selected: 'is-selected',
			wrap: 'js-select-ui',
			opener: 'js-select-ui__opener',
			layer: 'js-select-ui__layer',
			layerInner: 'js-select-ui__layer-inner',
			option: 'js-select-ui__option',
			val: 'js-select-ui__val'
		},
		bind: function () {
			var _ = this;

			$doc
				.on('click.hadalaboUISelectLayer', function () {
					_.close($('.' + _.className.wrap));
				})
				.on('click.hadalaboUISelectLayer', '.' + _.className.opener, function (e) {
					var $this = $(this),
						$wrap = $this.closest('.' + _.className.wrap);

					_.toggle($wrap);

					if ($this.is('a')) {
						e.preventDefault();
					}
				})
				.on('click.hadalaboUISelectLayer', '.' + _.className.option, function (e) {
					var $this = $(this),
						$wrap = $this.closest('.' + _.className.wrap);

					_.selected($wrap, $this);
					_.close($wrap);
				})
				.on('click.hadalaboUISelectLayer', '.' + _.className.wrap, function (e) {
					e.stopPropagation();
				});
		},
		selected: function ($wrap, $this) {
			var _ = this,
				$option = $wrap.find('.' + _.className.option),
				$val = $wrap.find('.' + _.className.val);

			$option.removeClass(_.className.selected);
			$this.addClass(_.className.selected);

			if ($val.length) {
				$val.html($this.html());
			}
		},
		toggle: function ($wrap) {
			var _ = this;

			if ($wrap.hasClass(_.className.active)) {
				_.close($wrap);
			} else {
				_.open($wrap);
			}
		},
		open: function ($wrap) {
			var _ = this,
				docH = $doc.height();

			_.close($('.' + _.className.wrap).not($wrap));

			$wrap.each(function () {
				var $wrap = $(this),
					$opener = $wrap.find('.' + _.className.opener),
					$layer = $wrap.find('.' + _.className.layer),
					$layerInner = $wrap.find('.' + _.className.layerInner);

				if (!$wrap.hasClass(_.className.active)) {
					$opener.trigger('focus');

					$layerInner.off(_.transitionEnd).css('transition-duration', '0s');
					$layer.css('display', 'block');

					var wrapTop = $wrap.offset().top,
						wrapH = $wrap.outerHeight(),
						top = $layer.offset().top,
						height = $layer.outerHeight();

					if (docH < wrapTop + wrapH + height && wrapTop - height >= 0) {
						$wrap.addClass(_.className.top);
					} else {
						$wrap.removeClass(_.className.top);
					}

					setTimeout(function () {
						$layerInner.css('transition-duration', '');
						$wrap.addClass(_.className.active);

						if (_.hasTransition) {
							$wrap.addClass(_.className.animated);

							$layerInner.one(_.transitionEnd, function () {
								$wrap.removeClass(_.className.animated);
								$layerInner.off(_.transitionEnd);
							});
						}
					}, 10);
				}
			});
		},
		close: function ($wrap) {
			var _ = this;

			$wrap.each(function () {
				var $wrap = $(this),
					$opener = $wrap.find('.' + _.className.opener),
					$layer = $wrap.find('.' + _.className.layer),
					$layerInner = $wrap.find('.' + _.className.layerInner);

				if ($wrap.hasClass(_.className.active)) {
					$layerInner.off(_.transitionEnd);
					$wrap.removeClass(_.className.active);
					$opener.trigger('focus');

					if (_.hasTransition) {
						$wrap.addClass(_.className.animated);

						$layerInner.one(_.transitionEnd, function () {
							$wrap.removeClass(_.className.animated + ' ' + _.className.top);
							$layer.css('display', 'none');
							$layerInner.off(_.transitionEnd);
						});
					} else {
						$wrap.removeClass(_.className.animated + ' ' + _.className.top);
						$layer.css('display', 'none');
					}
				}
			});
		}
	};
	hadalaboUI.selectLayer.bind();

	// selectbox
	var HadalaboSelectbox = function (target, options) {
		var _ = this,
			$target = $(target).eq(0);

		_.className = {
			active: 'is-active',
			animated: 'is-animated',
			disabled: 'is-disabled',
			wrap: 'js-ui-selectbox',
			opener: 'js-ui-selectbox__opener',
			layer: 'js-ui-selectbox__layer',
			layerInner: 'js-ui-selectbox__layer-inner',
			list: 'js-ui-selectbox__list',
			item: 'js-ui-selectbox__item',
			radio: 'js-ui-selectbox__radio',
			label: 'js-ui-selectbox__label'
		};
		_.options = options;
		_.$target = $target;
		_.$option = $target.find('option');
		_.data = [];
		_.init();
		_.on();
		_.update();
	};
	HadalaboSelectbox.prototype.init = function () {
		var _ = this,
			selectLayerClassName = hadalaboUI.selectLayer.className,
			html = '' + '<div class="' + _.className.wrap + ' ' + selectLayerClassName.wrap + '">' + '<button type="button" class="' + _.className.opener + ' ' + selectLayerClassName.opener + '" title="옵션 레이어 열기/닫기"></button>' + '<div class="' + _.className.layer + ' ' + selectLayerClassName.layer + '">' + '<div class="' + _.className.layerInner + ' ' + selectLayerClassName.layerInner + '">' + '<ul class="' + _.className.list + '">' + '</ul>' + '</div>' + '</div>' + '</div>',
			optionHtml = '',
			customClass = _.$target.data('class');

		_.$target
			.prop('hidden', true)
			.css('display', 'none')
			.after(html);

		_.wrap = _.$target.next('.' + _.className.wrap);
		_.opener = _.wrap.find('.' + _.className.opener);
		_.layer = _.wrap.find('.' + _.className.layer);
		_.layerInner = _.wrap.find('.' + _.className.layerInner);
		_.list = _.wrap.find('.' + _.className.list);

		if (customClass && customClass.length) {
			_.wrap.addClass(customClass);
		}

		function nameHashCheck() {
			var hash = 'hadalaboUI_' + hadalaboUI.hash(20);

			if ($('[name="' + hash + '"]').length) {
				hash = nameHashCheck();
			}

			return hash;
		}

		_.name = (function () {
			var name = _.$target.attr('name');

			if (!name || !name.length) {
				name = nameHashCheck();
			} else {
				name += '_' + hadalaboUI.hash(20);
			}

			return name;
		})();

		if (!_.$option.filter(':selected').length) {
			_.$option.eq(0).prop('selected', true);
		}

		_.$option.each(function (i) {
			var $this = $(this),
				data = $this.data('html');

			if (!data || !data.length) {
				data = $(this).html();
			}

			_.data[i] = data;

			optionHtml += '' + '<li class="' + _.className.item + '">' + '<input type="radio" class="' + _.className.radio + '" name="' + _.name + '" id="' + _.name + '_' + i + '">' + '<label for="' + _.name + '_' + i + '" class="' + _.className.label + '">' + data + '</label>' + '</li>';
		});

		_.list.append(optionHtml);
		_.item = _.list.find('.' + _.className.item);
		_.radio = _.list.find('.' + _.className.radio);
		_.label = _.list.find('.' + _.className.label);
	};
	HadalaboSelectbox.prototype.on = function () {
		var _ = this;

		_.radio.on('change.hadalaboSelectbox', function () {
			var i = _.radio.index($(this));
			_.selectChange(i);
		});

		_.$target.on('change.hadalaboSelectbox', function () {
			_.update();
		});

		_.label.on('click.hadalaboSelectbox', function () {
			hadalaboUI.selectLayer.close(_.wrap);
		});
	};
	HadalaboSelectbox.prototype.selectChange = function (i) {
		var _ = this;
		console.log(i);
		_.$option.prop('selected', false);
		_.$option.eq(i).prop('selected', true);
		_.$target.trigger('change');
	};
	HadalaboSelectbox.prototype.radioChange = function () {
		var _ = this,
			i = _.selected;

		_.radio.prop('checked', false);
		_.radio.eq(i).prop('checked', true);
	};
	HadalaboSelectbox.prototype.valChange = function () {
		var _ = this,
			i = _.selected;

		_.opener.html(_.data[i]);
	};
	HadalaboSelectbox.prototype.update = function () {
		var _ = this,
			i = _.$option.filter(':selected').index();

		_.selected = i;

		_.valChange();
		_.radioChange();

		if (_.$target.is(':disabled')) {
			_.wrap.addClass(_.className.disabled);
			_.opener.prop('disabled', true);
			_.radio.prop('disabled', true);
		} else {
			_.wrap.removeClass(_.className.disabled);
			_.opener.prop('disabled', false);
			_.radio.prop('disabled', false);
		}
	};
	$.fn.hadalaboSelectbox = function (custom) {
		var defaultOption = {
				customClass: null
			},
			other = [];

		custom = custom || {};

		$.each(arguments, function (i) {
			if (i > 0) {
				other.push(this);
			}
		});

		this.each(function () {
			if (typeof custom === 'object' && !this.HadalaboSelectbox) {
				var options = $.extend({}, defaultOption, custom);
				this.HadalaboSelectbox = new HadalaboSelectbox(this, options);
			} else if (typeof custom === 'string' && this.HadalaboSelectbox) {
				var hadalaboSelectbox = this.HadalaboSelectbox;

				switch (custom) {
					case 'update':
						hadalaboSelectbox.update();
						break;
					default:
						break;
				}
			}
		});
	};

	// input cheke val
	$doc.on('focusout.hadalaboUI keydown.hadalaboUI keyup.hadalaboUI', 'input[type="text"]', function () {
		var $this = $(this),
			val = $this.val();

		if (val.length) {
			$this.addClass('is-value');
		} else {
			$this.removeClass('is-value');
		}
	});

	// 아래 화살표 기능
	$doc.on('click.hadalaboUI', '.js-main-down', function () {
		$('html, body')
			.stop()
			.animate({
					scrollTop: $('.main-section--02').offset().top
				},
				500
			);
	});

	// dom ready
	$(function () {
		// selectbox
		$('.js-selectbox').hadalaboSelectbox();

		// main slide
		var $main01Slide = $('.main-section-01-slide ul');
		if ($main01Slide.length) {
			$main01Slide.swiperSet({
				prevControl: true,
				nextControl: true,
				loop: true
			});
		}

		// input
		$('input').trigger('keyup');
	});

	// window load
	$win.on('load', function () {
		//drop
		function drop($drop, duration, top) {
			$drop
				.stop()
				.prop('scale', 0)
				.css({
					marginTop: 0,
					opacity: 1,
					'-webkit-transform': 'scale(0)',
					transform: 'scale(0)'
				})
				.animate({
					scale: 100
				}, {
					duration: duration[0],
					step: function (now, fx) {
						if (fx.prop === 'scale') {
							$(this).css({
								'-webkit-transform': 'scale(' + now * 0.01 + ')',
								transform: 'scale(' + now * 0.01 + ')'
							});
						}
					},
					complete: function () {
						var timer = setTimeout(function () {
							clearTimeout(timer);
							$drop.stop().animate({
									marginTop: top,
									opacity: 0.1
								},
								duration[2],
								function () {
									var timer = setTimeout(function () {
										clearTimeout(timer);
										drop($drop, duration, top);
									}, duration[3]);
								}
							);
						}, duration[1]);
					}
				});
		}
		var $drop01 = $('.js-drop'),
			$drop02 = $('.js-drop-02'),
			$drop03 = $('.js-drop-03');
		if ($drop01.length) {
			drop($drop01, [2000, 1000, 800, 3200], 90);
		}
		if ($drop02.length) {
			setTimeout(function () {
				drop($drop02, [2000, 1000, 1000, 3000], 300);
			}, 500);
		}
		if ($drop03.length) {
			setTimeout(function () {
				drop($drop03, [2000, 1200, 800, 3000], 200);
			}, 700);
		}

		// light
		function light($light, duration, opacity) {
			setTimeout(function () {
				$light
					.stop()
					.css('opacity', 0)
					.animate({
							opacity: opacity[0]
						},
						duration[1],
						function () {
							setTimeout(function () {
								$light.stop().animate({
										opacity: opacity[1]
									},
									duration[3],
									function () {
										light($light, duration, opacity);
									}
								);
							}, duration[2]);
						}
					);
			}, duration[0]);
		}
		var $light01 = $('.js-light-01'),
			$light02 = $('.js-light-02');
		if ($light01.length) {
			light($light01, [0, 2500, 3500, 2000], [1, 0]);
		}
		if ($light02.length) {
			light($light02, [2000, 2500, 1500, 2000], [1, 0]);
		}
	});
	$(document).on('layerOpened', function (args) {
		switch(args.target.id) {
			case 'layerDetail':
				var target = $(args.target);
        
				// 로컬스토리지에 저장한 idx 불러와서 라이크여부 체크
				// target.attr("data-idx",detailPopupData[1]);
				var output = localStorage.getItem("like_idx");
				if (output)
				{
				  var getLikeArr  = JSON.parse(output);
				  console.log(detailPopupData[1]+"||"+getLikeArr);
				  $.each(getLikeArr,function(index, item){
					if (detailPopupData[1] == item)
					{
						target.find('.card .like').addClass("is-liked");
					  return false;
					}else{
						target.find('.card .like').removeClass("is-liked");
					}
				  });
				}
				target.find('.card .name').text(detailPopupData[0]);
				target.find('.card .like').attr("onclick","likeOn('popup','"+detailPopupData[1]+"')");
				target.find('.card .like').attr("id","like_pop_"+detailPopupData[1]);
				target.find('.card .node').each(function(idx, el) {
					$(el).html(detailPopupData[idx+2]);
//					var data = $(el).find('span')[0].outerHTML+detailPopupData[idx+1];
//					$(el).html(data);
				});
				break;
		}
	});
	$(document).on('layerClosed', function(args) {
		if(args.target.id == 'layerDetail') {
			detailPopupData = new Array();
		}
	});

})(jQuery);

function sns_share(media, flag)
{
	if (media == "fb")
	{
    var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('http://www.hadalabo-superbosp.com/?media=share_fb'),'sharer','toolbar=0,status=0,width=600,height=325');

		$.ajax({
			type   : "POST",
			async  : false,
			url    : "./main_exec.php",
			data:{
				"exec"          : "insert_share_info",
				"sns_media"     : media,
				"sns_flag"		: flag
			}
		});
	}else if (media == "kt"){
		Kakao.Link.sendDefault({
			objectType: 'feed',
			content: {
				// title: '불만족스러웠던 기존의 시카 제품들, 해결되지 않던 당신의 피부 고민!\n\n바이오더마의 특허 다프 성분과 안탈지신 기술을 담아 오랜 연구 끝에 탄생한 바이오더마 포마드로 A/S 받으세요!',
				title: '하다라보 내가 쓰는 수퍼보습 사행시',
				description: "더 깊어진 하다라보의 '수퍼보습'으로 4행시에 도전하세요.\n\n참여만 해도 100% 하다라보 5일 샘플을 드립니다.",
				// description: '#케익 #딸기 #삼평동 #카페 #분위기 #소개팅',
				imageUrl: "http://www.hadalabo-superbosp.com/images/kakao_share.jpg",
				link: {
					mobileWebUrl: 'http://www.hadalabo-superbosp.com/m/index.php?media=share_fb',
					webUrl: 'http://www.hadalabo-superbosp.com/?media=share_fb'
				}
			},
			buttons: [
				{
					title: '웹으로 보기',
					link: {
						mobileWebUrl: 'http://www.hadalabo-superbosp.com/m/index.php?media=share_fb',
						webUrl: 'http://www.hadalabo-superbosp.com/?media=share_fb'
					}
				}
			],
			success: function(res) {
				console.log("success");
				console.log(res);
			},
			fail: function(res) {
				console.log("fail");
				console.log(res);
			},
			callback: function() {
	//					console.log("callback:"+res);
				// shareEnd();
			}
		});
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "./main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"sns_media" : media,
				"sns_flag"		: flag
			}
		});
	}else if (media == "tw"){
    var newWindow = window.open('http://twitter.com/share?url=' + encodeURIComponent('http://www.hadalabo-superbosp.com/?media=share_tw') + '&text=' + encodeURIComponent("하다라보 내가 쓰는 수퍼보습 사행시\n\n더 깊어진 하다라보의 '수퍼보습'으로 4행시에 도전하세요.\n참여만 해도 100% 하다라보 5일 샘플을 드립니다."),'sharer','toolbar=0,status=0,width=600,height=325');

    $.ajax({
			type   : "POST",
			async  : false,
			url    : "./main_exec.php",
			data:{
				"exec"          : "insert_share_info",
				"sns_media"     : media,
				"sns_flag"		: flag
			}
		});
  }else{
    Kakao.Story.share({
      url: 'http://www.hadalabo-superbosp.com/?media=share_ks',
      text: "하다라보 내가 쓰는 수퍼보습 사행시\n\n더 깊어진 하다라보의 '수퍼보습'으로 4행시에 도전하세요.\n참여만 해도 100% 하다라보 5일 샘플을 드립니다."
    });
    $.ajax({
			type   : "POST",
			async  : false,
			url    : "./main_exec.php",
			data:{
				"exec"          : "insert_share_info",
				"sns_media"     : media,
				"sns_flag"		: flag
			}
		});
  }
}

function only_num(obj)
{
	var inText = obj.value;
	var outText = "";
	var flag = true;
	var ret;
	for(var i = 0; i < inText.length; i++)
	{
		ret = inText.charCodeAt(i);
		if((ret < 48) || (ret > 57))
		{
			flag = false;
		}
		else
		{
			outText += inText.charAt(i);
		}
	}

	if(flag == false)
	{
		alert("전화번호는 숫자입력만 가능합니다.");
		obj.value = outText;
		obj.focus();
		return false;
	}
	return true;
}
function chk_len(obj, len)
{
	if(obj.value.length >= len) {
		// alert("전화번호는 11자를 초과할 수 없습니다.");
		// obj.value = obj.value.slice(0, -(obj.value.length-4));
		obj.value = obj.value.substring(0, 11);
		$("#mb_phone").blur();

    return false;
	}
	return;
}
