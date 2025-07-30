<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Full Width Footer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    html, body {
      margin: 0;
      padding: 0;
      width: 100%;
    }

    .full-width-footer {
      width: 100vw;
      position: relative;
      left: 50%;
      right: 50%;
      margin-left: -50vw;
      margin-right: -50vw;
    }
  </style>
</head>
<body>

  
  <!-- ✅ Full-width footer using margin trick -->
  <footer class="bg-dark text-white text-center py-3 mt-4 full-width-footer">
    &copy; <?php echo date("Y"); ?> Learn HTML. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
