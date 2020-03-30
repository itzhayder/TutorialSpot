// Create post handler

const form = document.getElementById('form');
const title = document.getElementById('title');
const url = document.getElementById('url');
const sourceCode = document.getElementById('source-code');
// const language = document.getElementById('password2');
const videoCategory = document.getElementById('video-category');
const subCategory = document.getElementById('sub-category');


form.addEventListener('submit', e => {
  e.preventDefault();

  checkInputs();
});

function checkInputs() {
  // trim to remove the whitespaces
  const titleValue = title.value.trim();
  const urlValue = url.value.trim();
  // const languageValue = language.value.trim();
  const videoCategoryValue = videoCategory.value.trim();
  const subCategoryValue = subCategory.value.trim();

  if (titleValue === '') {
    setErrorFor(title, 'Title cannot be blank');
  } else {
    setSuccessFor(title);
  }

  if (urlValue === '') {
    setErrorFor(url, 'URL cannot be blank');
  } else {
    setSuccessFor(url);
  }

  //   if (passwordValue === '') {
  //     setErrorFor(password, 'Password cannot be blank');
  //   } else {
  //     setSuccessFor(password);
  //   }

  //   if (password2Value === '') {
  //     setErrorFor(password2, 'Password2 cannot be blank');
  //   } else if (passwordValue !== password2Value) {
  //     setErrorFor(password2, 'Passwords does not match');
  //   } else {
  //     setSuccessFor(password2);
  //   }
  // }

  function setErrorFor(input, message) {
    // const formControl = input.parentElement;
    // const small = formControl.querySelector('small');
    // formControl.className = 'form-control error';
    input.insertAdjacentHTML("afterend", `<p class="error">${message}</p>`);
    // small.innerText = message;
  }

  function setSuccessFor(input) {
    // const formControl = input.parentElement;
    // formControl.className = 'form-control success';
  }
}