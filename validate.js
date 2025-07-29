function validateForm() {
  const title = document.querySelector('input[name=title]').value;
  const content = document.querySelector('textarea[name=content]').value;
  if (!title || !content) {
    alert('All fields are required.');
    return false;
  }
  return true;
}
