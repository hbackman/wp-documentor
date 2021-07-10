/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./assets/blocks-banner.js ***!
  \*********************************/
(function (blocks, element, blockEditor) {
  var el = element.createElement;
  var RichText = blockEditor.RichText;
  var BlockProps = blockEditor.useBlockProps;

  var build = function build(el, props, icon, text) {
    var info_icon = {
      "class": 'blocks-banner__icon'
    };
    var info_text = {
      "class": 'blocks-banner__text'
    };
    var info = {
      "class": 'blocks-banner'
    };
    return el('div', props, el('div', info, [el('div', info_icon, icon), el('div', info_text, text)]));
  };

  var buildIcon = function buildIcon(el, icon) {
    return el('span', {
      "class": 'dashicons ' + icon
    });
  };

  var buildEdit = function buildEdit(el, content, onChange) {
    return el(RichText, {
      tagName: 'div',
      className: 'blocks-banner__rich-text',
      value: content,
      onChange: onChange
    });
  };

  var buildSave = function buildSave(el, content) {
    return el(RichText.Content, {
      tagName: 'div',
      className: 'blocks-banner__rich-text',
      value: content
    });
  };

  blocks.registerBlockType('wp-documentor/banner', {
    apiVersion: 2,
    title: 'Banner',
    icon: 'info',
    category: 'design',
    attributes: {
      content: {
        type: 'array',
        source: 'children',
        selector: '.blocks-banner__rich-text'
      },
      icon: {
        type: 'string'
      }
    },
    example: {
      attributes: {
        content: 'Info'
      }
    },
    edit: function edit(props) {
      return build(el, BlockProps(), buildIcon(el, props.attributes.icon), buildEdit(el, props.attributes.content, function (newContent) {
        props.setAttributes({
          content: newContent
        });
      }));
    },
    save: function save(props) {
      return build(el, BlockProps.save(), buildIcon(el, props.attributes.icon), buildSave(el, props.attributes.content));
    }
  });
  blocks.registerBlockVariation('wp-documentor/banner', [{
    name: 'info',
    icon: 'info',
    title: 'Info Banner',
    attributes: {
      className: 'blocks-banner--info',
      icon: 'dashicons-info'
    },
    isDefault: true
  }, {
    name: 'warning',
    icon: 'warning',
    title: 'Warning Banner',
    attributes: {
      className: 'blocks-banner--warning',
      icon: 'dashicons-warning'
    }
  }, {
    name: 'error',
    icon: 'warning',
    title: 'Error Banner',
    attributes: {
      className: 'blocks-banner--error',
      icon: 'dashicons-warning'
    }
  }, {
    name: 'success',
    icon: 'yes',
    title: 'Success Banner',
    attributes: {
      className: 'blocks-banner--success',
      icon: 'dashicons-yes'
    }
  }]);
})(window.wp.blocks, window.wp.element, window.wp.blockEditor);
/******/ })()
;