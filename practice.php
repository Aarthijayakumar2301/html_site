<?php include './header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Experiment 1 - Portfolio Example</title>
  <style>
   html, body {
  height: 100%;
  margin: 0;
  font-family: Arial, sans-serif;
  overflow: hidden;
}

.layout {
  display: flex;
  height: 100vh;
  width: 100vw;
}

.code-box, .output-box {
  flex: 1;
  display: flex;
  flex-direction: column;
  box-sizing: border-box;
  height: 80%;
  margin-right: 150px;
  width:200px;
  overflow: hidden; /* prevent extra scrollbars on panels */
}

.code-box {
  background-color: #f5f5f5;
  border-right: 1px solid #ccc;
  padding: 15px;
}

.output-box {
  background-color: #fff;
  padding: 15px;
}

textarea {
  flex: 1;
  width: 100%;
  font-family: Consolas, monospace;
  font-size: 14px;
  padding: 10px;
  border: 1px solid #ccc;
  resize: none;
  overflow: auto;
  box-sizing: border-box;
  background: #fff;
}

button {
  margin-top: 10px;
  padding: 10px 15px;
  font-size: 14px;
  cursor: pointer;
  border: none;
  background-color: #333;
  color: white;
}

button:hover {
  background-color: #555;
}

iframe {
  flex: 1;
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  overflow: auto; /* allow iframe content to scroll */
}
  </style>
</head>
<body>

<?php
// Plain HTML (no htmlspecialchars!)
$htmlContent = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sample Page</title>
</head>
<body>
  <h1>Hello from the editor!</h1>
  <p>Edit this HTML and click Run to see changes.</p>
</body>
</html>
HTML;
?>

<div class="layout">
  <div class="code-box">
    <h2>HTML Source Code</h2>
    <textarea id="editor"><?php echo $htmlContent; ?></textarea>
    <button onclick="updateIframe()">Run ▶</button>
  </div>
  <div class="output-box">
    <h2>Rendered Output</h2>
    <iframe id="preview"></iframe>
  </div>
</div>

<script>
  function updateIframe() {
    const htmlCode = document.getElementById("editor").value;
    const iframe = document.getElementById("preview");
    const doc = iframe.contentWindow.document;

    doc.open();
    doc.write(htmlCode);
    doc.close();
  }

  // Auto-run on load
  window.onload = updateIframe;
</script>

</body>
</html>

