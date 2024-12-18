document.getElementById('uploadForm').addEventListener('submit', function(event) {
  var fileInput = document.getElementById('fileInput');
  if (fileInput.files.length > 20) {
      alert('You can upload a maximum of 20 files.');
      event.preventDefault();
  } else if (fileInput.files.length === 0) {
      alert('Please select at least one file to upload.');
      event.preventDefault();
  }
});
