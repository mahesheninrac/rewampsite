<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Editor Example</title>
    Include CodeMirror stylesheets
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/theme/dracula.min.css">
    <style>
        /* Set height for the editor */
        #editor {
            height: 500px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>

    <h2>Code Editor</h2>
    <textarea id="editor"></textarea>
    <button id="save">Save</button>

    Include CodeMirror JS
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/javascript/javascript.min.js"></script>

    <script>
        // Initialize the CodeMirror editor
        var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
            lineNumbers: true, // Show line numbers
            mode: "javascript", // Syntax highlighting for JavaScript
            theme: "dracula", // Use the Dracula theme
            indentUnit: 2, // Set indentation to 2 spaces
            tabSize: 2, // Set tab size to 2 spaces
            lineWrapping: true // Enable line wrapping
        });

        document.querySelector('#save').addEventListener('click', function() {
            // Get the content from the editor
            var content = editor.getValue();
            // Save the content to a file (this is just a placeholder, implement your own save logic)
            console.log('Saving content:', content);
            //   alert('Content saved! Check the console for details.');
        });
    </script>

</body>

</html> -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EcoSystem report form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="card w-50 mx-auto mt-5">
      <div class="card-header">
        <h1 class="card-title h6">Battery Demand Outlook Service</h1>
      </div>
      <div class="card-body">
        <form id="customForm">
          <div class="form-group mb-2">
            <label for="title">Title</label>
            <input type="text" id="title" class="form-control" />
          </div>
          <div class="form-group mb-2">
            <label for="description">Description</label>
            <input type="text" id="description" class="form-control" />
          </div>
          <div class="form-group mb-2">
            <div class="row">
              <div class="col-md-3">
                <input type="checkbox" name="pdf&excel" id="pdfexcel" />
                <label for="pdfexcel">PDF & Excel</label>
              </div>
              <div class="col-md-3">
                <input
                  type="checkbox"
                  name="releasedquarterly"
                  id="releasedquarterly"
                />
                <label for="releasedquarterly">Released quarterly</label>
              </div>
              <div class="col-md-3">
                <input type="checkbox" name="Customisable" id="customisable" />
                <label for="customisable">Customisable</label>
              </div>
              <div class="col-md-3">
                <input
                  type="checkbox"
                  name="Analyst access"
                  id="analystaccess"
                />
                <label for="analystaccess">Analyst access</label>
              </div>
            </div>
          </div>
          <div class="form-group mb-2">
            <table>
              <thead>
                <tr>
                  <th>What’s included?</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div>
                      <label>FAQ 1</label>
                      <div class="row row-gap-2">
                        <input
                          type="text"
                          class="form-control faqquestion"
                          placeholder="enter question"
                        />
                        <input
                          type="text"
                          class="form-control faqanswer"
                          placeholder="enter answer"
                        />
                      </div>
                      <div class="d-flex gap-2 mt-1">
                        <button
                          type="button"
                          class="newItem-add-btn btn btn-danger btn-sm"
                        >
                          +
                        </button>
                        <button
                          type="button"
                          class="item-delete-btn btn btn-success btn-sm"
                        >
                          x
                        </button>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <button
            id="customFormBtn"
            type="submit"
            class="btn btn-primary btn-sm"
          >
            Submit
          </button>
        </form>
      </div>
    </div>

    <script>
      document
        .getElementById("customForm")
        .addEventListener("submit", function (e) {
          e.preventDefault();
          const title = document.getElementById("title").value.trim();
          const description = document
            .getElementById("description")
            .value.trim();
          const features = {
            "pdf&excel": document.getElementById("pdfexcel").checked,
            releasedquarterly:
              document.getElementById("releasedquarterly").checked,
            Customisable: document.getElementById("customisable").checked,
            "Analyst access": document.getElementById("analystaccess").checked,
          };

          const faqs = [];
          document.querySelectorAll("table tbody tr").forEach((row) => {
            const question = row.querySelector(".faqquestion")?.value.trim();
            const answer = row.querySelector(".faqanswer")?.value.trim();
            if (question || answer) {
              faqs.push({ question, answer });
            }
          });

          const formData = {
            title,
            description,
            features,
            faqs,
          };

          console.log("Form Data: ", formData);
        });

      let itemCount = 1;
      document
        .querySelector("table tbody")
        .addEventListener("click", function (e) {
          if (e.target.classList.contains("newItem-add-btn")) {
            const currentRow = e.target.closest("tr");
            const clonedRow = currentRow.cloneNode(true);
            itemCount++;

            const label = clonedRow.querySelector("label");
            const input = clonedRow.querySelector("input");

            label.textContent = `FAQ ${itemCount}`;
            input.value = "";

            currentRow.after(clonedRow);
          }

          if (e.target.classList.contains("item-delete-btn")) {
            const allrows = document.querySelectorAll("table tbody tr");

            if (allrows.length > 1) {
              const rowToDelete = e.target.closest("tr");
              rowToDelete.remove();
            } else {
              alert("at least one row must remain");
            }
          }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
