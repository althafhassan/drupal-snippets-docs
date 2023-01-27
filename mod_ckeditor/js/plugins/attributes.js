/**
 * @file
 * Attribute plugin definition.
 */
CKEDITOR.plugins.add('Attributes', {
  init: function(editor) {
    'use strict';
    editor.addCommand('attributes_template', {
      exec: function(editor) {
        let element = editor.getSelection().getStartElement();
        let tag = element.getName();
        if(tag == 'a') {
          element.setAttribute('target', '_blank');
          element.setAttribute('rel', 'noopener');
        }
      }
    });

    editor.ui.addButton('Attributes', {
      label: 'Open in New Tab',
      toolbar: 'insert',
      command: 'attributes_template',
      // icon: this.path + 'images/icon.svg'
      icon: 'http://yourcareer.docker.amazee.io/modules/custom/yc_ckeditor/js/plugins/images/icon.svg'
    });
  }

});

