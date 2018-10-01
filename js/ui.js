(function($) {
  'use strict';

  var $doc = $(document),
    $win = $(window);

  // swiperSet
  // https://github.com/nolimits4web/Swiper/blob/Swiper2/API.md
  $.fn.swiperSet = function(customOption) {
    var defaultOption = {
      appendController: null,
      pageControl: false,
      nextControl: false,
      prevControl: false,
      scrollbarControl: false,
      playControl: false,
      pauseControl: false
    };

    this.each(function() {
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

      option.onAutoplayStart = function() {
        if (option.playControl) {
          $(option.playButton).addClass('active');
        }
        if (option.pauseControl) {
          $(option.pauseButton).removeClass('active');
        }
      };
      option.onAutoplayStop = function() {
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
          $(option.nextBtn).on('click', function() {
            swiper.swipeNext();
          });
        }
        if (option.prevControl) {
          $(option.prevBtn).on('click', function() {
            swiper.swipePrev();
          });
        }
        if (option.playControl) {
          $(option.playButton).on('click', function() {
            swiper.startAutoplay();
          });
        }
        if (option.pauseControl) {
          $(option.pauseButton).on('click', function() {
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
  hadalaboUI.androidVersion = (function() {
    if (hadalaboUI.android) {
      var match = hadalaboUI.userAgent.match(/Android ([0-9]+\.[0-9]+(\.[0-9]+)*)/);
      return match[1];
    }
  })();
  hadalaboUI.transitionEnd = 'transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd';
  hadalaboUI.hasTransition = (function() {
    var transition = ['transition', 'WebkitTransition', 'MozTransition', 'OTransition', 'msTransition'],
      el = document.createElement('div'),
      array = [];

    $.each(transition, function(i, val) {
      if (el.style[val] !== undefined) {
        array.push(val);
      }
    });

    return array.length ? true : false;
  })();

  // hash
  hadalaboUI.hash = function(size, addString) {
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
    block: function() {
      var _ = hadalaboUI.scrollBlock,
        $html = $('html');

      if (!$html.hasClass(_.className.block)) {
        $html.addClass(_.className.block);
      }
    },
    clear: function() {
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
    bind: function() {
      var _ = hadalaboUI.layer;
      $doc
        .on('click.hadalaboUILayer', '[data-layer]', function(e) {
          var $this = $(this),
            datas = _.getDatas($this);

          _.open(datas.$layer, datas.options);

          if ($this.is('a')) {
            e.preventDefault();
          }
        })
        .on('click.hadalaboUILayer', '[data-layer-toggle]', function(e) {
          var $this = $(this),
            datas = _.getDatas($this);

          _.toggle(datas.$layer, datas.options);

          if ($this.is('a')) {
            e.preventDefault();
          }
        })
        .on('click.hadalaboUILayer', '[data-layer-close]', function(e) {
          var $this = $(this),
            datas = _.getDatas($this);

          _.close(datas.$layer, datas.options);

          if ($this.is('a')) {
            e.preventDefault();
          }
        })
        .on('click.hadalaboUILayer', '.' + _.className.closeBtn, function(e) {
          var $this = $(this),
            $layer = $this.closest('[data-layer-wrap]');

          if ($layer && $layer.length) {
            _.close($layer);
          }

          if ($this.is('a')) {
            e.preventDefault();
          }
        })
        .on('focusin.hadalaboUILayer', function(e) {
          _.checkFocus(e.target);
        });
    },
    checkFocus: function(target) {
      var _ = hadalaboUI.layer,
        $target = $(target),
        $openLayers = $('[data-layer-wrap].' + _.className.show),
        $crrLayerWrap = (function() {
          if ($openLayers.length) {
            var array = [];

            $openLayers.each(function() {
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
    getDatas: function($btn) {
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
    getOptions: function(string) {
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

        $.each(array, function(i, value) {
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
    toggle: function($layer, options) {
      var _ = hadalaboUI.layer;

      options = $.extend({}, _.defaultOptions, options || {});

      if ($layer.hasClass(_.className.show)) {
        _.close($layer, options);
      } else {
        _.open($layer, options);
      }
    },
    open: function($layer, options) {
      var _ = hadalaboUI.layer;

      if ($layer && $layer.length && !$layer.hasClass(_.className.show)) {
        options = $.extend({}, _.defaultOptions, options || {});
        options.animated = !_.hasTransition ? false : options.animated;

        if (options.allClose) {
          _.allClose($layer);
        }

        if (options.timer && typeof options.timer === 'number') {
          var timer = setTimeout(function() {
            _.close($layer);
          }, options.timer);

          $layer.data('hadalaboUILayerTimer', timer).one('layerClosed.hadalaboUILayerTimer', function() {
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

        setTimeout(function() {
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
            var transitionEndTimer = setTimeout(function() {
              $layer.off(_.transitionEnd);
              afterClose();
            }, 2000);
            $layer.one(_.transitionEnd, function() {
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
    close: function($layer, options) {
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
          var transitionEndTimer = setTimeout(function() {
            $layer.off(_.transitionEnd);
            afterClose();
          }, 2000);
          $layer.one(_.transitionEnd, function() {
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
    scrollBlockClearCheck: function() {
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
    allClose: function($notLayer) {
      var _ = hadalaboUI.layer,
        $openLayers = $('[data-layer-wrap].' + _.className.show);

      if ($openLayers.length) {
        $openLayers.each(function() {
          var $layer = $(this);

          if (!($notLayer && $layer.is($notLayer))) {
            _.close($layer, { $btn: null });
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
    bind: function() {
      var _ = this;

      $doc
        .on('click.hadalaboUISelectLayer', function() {
          _.close($('.' + _.className.wrap));
        })
        .on('click.hadalaboUISelectLayer', '.' + _.className.opener, function(e) {
          var $this = $(this),
            $wrap = $this.closest('.' + _.className.wrap);

          _.toggle($wrap);

          if ($this.is('a')) {
            e.preventDefault();
          }
        })
        .on('click.hadalaboUISelectLayer', '.' + _.className.option, function(e) {
          var $this = $(this),
            $wrap = $this.closest('.' + _.className.wrap);

          _.selected($wrap, $this);
          _.close($wrap);
        })
        .on('click.hadalaboUISelectLayer', '.' + _.className.wrap, function(e) {
          e.stopPropagation();
        });
    },
    selected: function($wrap, $this) {
      var _ = this,
        $option = $wrap.find('.' + _.className.option),
        $val = $wrap.find('.' + _.className.val);

      $option.removeClass(_.className.selected);
      $this.addClass(_.className.selected);

      if ($val.length) {
        $val.html($this.html());
      }
    },
    toggle: function($wrap) {
      var _ = this;

      if ($wrap.hasClass(_.className.active)) {
        _.close($wrap);
      } else {
        _.open($wrap);
      }
    },
    open: function($wrap) {
      var _ = this,
        docH = $doc.height();

      _.close($('.' + _.className.wrap).not($wrap));

      $wrap.each(function() {
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

          setTimeout(function() {
            $layerInner.css('transition-duration', '');
            $wrap.addClass(_.className.active);

            if (_.hasTransition) {
              $wrap.addClass(_.className.animated);

              $layerInner.one(_.transitionEnd, function() {
                $wrap.removeClass(_.className.animated);
                $layerInner.off(_.transitionEnd);
              });
            }
          }, 10);
        }
      });
    },
    close: function($wrap) {
      var _ = this;

      $wrap.each(function() {
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

            $layerInner.one(_.transitionEnd, function() {
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
  var HadalaboSelectbox = function(target, options) {
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
  HadalaboSelectbox.prototype.init = function() {
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

    _.name = (function() {
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

    _.$option.each(function(i) {
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
  HadalaboSelectbox.prototype.on = function() {
    var _ = this;

    _.radio.on('change.hadalaboSelectbox', function() {
      var i = _.radio.index($(this));
      _.selectChange(i);
    });

    _.$target.on('change.hadalaboSelectbox', function() {
      _.update();
    });

    _.label.on('click.hadalaboSelectbox', function() {
      hadalaboUI.selectLayer.close(_.wrap);
    });
  };
  HadalaboSelectbox.prototype.selectChange = function(i) {
    var _ = this;

    _.$option.prop('selected', false);
    _.$option.eq(i).prop('selected', true);
    _.$target.trigger('change');
  };
  HadalaboSelectbox.prototype.radioChange = function() {
    var _ = this,
      i = _.selected;

    _.radio.prop('checked', false);
    _.radio.eq(i).prop('checked', true);
  };
  HadalaboSelectbox.prototype.valChange = function() {
    var _ = this,
      i = _.selected;

    _.opener.html(_.data[i]);
  };
  HadalaboSelectbox.prototype.update = function() {
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
  $.fn.hadalaboSelectbox = function(custom) {
    var defaultOption = {
        customClass: null
      },
      other = [];

    custom = custom || {};

    $.each(arguments, function(i) {
      if (i > 0) {
        other.push(this);
      }
    });

    this.each(function() {
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
  $doc.on('focusout.hadalaboUI keydown.hadalaboUI keyup.hadalaboUI', 'input[type="text"]', function() {
    var $this = $(this),
      val = $this.val();

    if (val.length) {
      $this.addClass('is-value');
    } else {
      $this.removeClass('is-value');
    }
  });

  // 아래 화살표 기능
  $doc.on('click.hadalaboUI', '.js-main-down', function() {
    $('html, body')
      .stop()
      .animate(
        {
          scrollTop: $('.main-section--02').offset().top
        },
        500
      );
  });

  // dom ready
  $(function() {
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
  $win.on('load', function() {
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
        .animate(
          {
            scale: 100
          },
          {
            duration: duration[0],
            step: function(now, fx) {
              if (fx.prop === 'scale') {
                $(this).css({
                  '-webkit-transform': 'scale(' + now * 0.01 + ')',
                  transform: 'scale(' + now * 0.01 + ')'
                });
              }
            },
            complete: function() {
              var timer = setTimeout(function() {
                clearTimeout(timer);
                $drop.stop().animate(
                  {
                    marginTop: top,
                    opacity: 0.1
                  },
                  duration[2],
                  function() {
                    var timer = setTimeout(function() {
                      clearTimeout(timer);
                      drop($drop, duration, top);
                    }, duration[3]);
                  }
                );
              }, duration[1]);
            }
          }
        );
    }
    var $drop01 = $('.js-drop'),
      $drop02 = $('.js-drop-02'),
      $drop03 = $('.js-drop-03');
    if ($drop01.length) {
      drop($drop01, [2000, 1000, 800, 3200], 90);
    }
    if ($drop02.length) {
      setTimeout(function() {
        drop($drop02, [2000, 1000, 1000, 3000], 300);
      }, 500);
    }
    if ($drop03.length) {
      setTimeout(function() {
        drop($drop03, [2000, 1200, 800, 3000], 200);
      }, 700);
    }

    // light
    function light($light, duration, opacity) {
      $light
        .stop()
        .css('opacity', 1)
        .animate(
          {
            opacity: opacity[0]
          },
          duration[0],
          function() {
            $light.stop().animate(
              {
                opacity: opacity[1]
              },
              duration[1],
              function() {
                light($light, duration, opacity);
              }
            );
          }
        );
    }
    var $light01 = $('.js-light-01'),
      $light02 = $('.js-light-02');
    if ($light01.length) {
      light($light01, [2500, 2500], [0.3, 1]);
    }
    if ($light02.length) {
      light($light02, [1000, 1000], [0.4, 1]);
    }
  });
})(jQuery);
