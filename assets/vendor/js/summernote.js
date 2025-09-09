function setImage(context, html) {
  if (!context.hasOwnProperty("ui")) {
    console.log("Context is null undefined or empty");
    return;
  }

  context.invoke("editor.pasteHTML", html);
  closeModel("#uploadMedia");
}

var replaceImage = function (context) {
  var ui = $.summernote.ui;
  // create button
  var button = ui.button({
    contents: '<i class="fe fe-image d-flex align-items-center" style="font-size: 16px;padding:3px"></i>',
    tooltip: "Insert HTML",
    click: function () {
      showModel("#uploadMedia");
      defaultContext = context;
    },
  });
  return button.render(); // return button as jquery object
};

function createEditor(element) {
  $(element).summernote({
    spellCheck: true,
    disableGrammar: false,
    placeholder: "Mail Body",
    tabsize: 2,
    toolbar: [
      ["style", ["style"]],
      [
        "font",
        [
          "bold",
          "italic",
          "underline",
          "clear",
          "strikethrough",
          "superscript",
          "subscript",
        ],
      ],
      ["fontsize", ["fontsize", "fontsizeunit"]],
      ["color", ["color"]],
      ["para", ["ul", "ol", "paragraph"]],
      ["table", ["table"]],
      ["insert", ["link"]],
      ["view", ["fullscreen", "codeview", "help", "undo", "redo"]],
      ["custom", ["replaceImageBtn"]], // Custom button group
    ],
    buttons: {
      replaceImageBtn: replaceImage,
    },
  });
}

function removeEditor(element) {
  if ($(element).summernote("isInitialized")) {
    $(element).summernote("destroy");
  }
}


function minimizeEditor(element, context) {
  $(element).summernote({
    spellCheck: true,
    disableGrammar: true,
    placeholder: context,
    tabsize: 2,
    toolbar: [
      [
        "font",
        [
          "bold",
          "italic",
          "underline",
          "strikethrough",
        ],
      ],
      ["fontsize", ["fontsize", "fontsizeunit"]],
      ["color", ["color"]],
      ["para", ["ul", "ol", "paragraph"]],
      ["insert", ["link"]],
    ],
  });
}
