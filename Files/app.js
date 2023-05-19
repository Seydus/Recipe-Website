var hamburger = document.querySelector(".hamburger");
hamburger.addEventListener("click", function () {
  document.querySelector("body").classList.toggle("active");
})

window.onscroll = function () { myFunction() };

var header = document.getElementById("main-header-id");

var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

const tagsInput = document.querySelector('.tags-input');
const select = tagsInput.querySelector('#tag-select');
const tagsContainer = tagsInput.querySelector('.tags-container');

function addTag() {
  const tag = select.value.trim();

  if (tag) {
    const tagElement = document.createElement('div');
    tagElement.classList.add('tag');
    tagElement.innerHTML = `<span>${tag}</span><button>x</button>`;
    tagsContainer.appendChild(tagElement);

    const option = select.querySelector(`option[value="${tag}"]`);
    if (option) {
      option.remove();
    }
  }
}

tagsContainer.addEventListener('click', function (event) {
  if (event.target.tagName === 'BUTTON') {
    const tagElement = event.target.parentNode;
    const tag = tagElement.querySelector('span').textContent;
    const option = document.createElement('option');
    option.value = tag;
    option.textContent = tag;
    select.appendChild(option);
    tagElement.remove();
  }
});

select.addEventListener('change', function (event) {
  addTag();
});