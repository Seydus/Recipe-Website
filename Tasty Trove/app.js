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

// function adjustFooter() {
//   const wrapper = document.querySelector('.wrapper');
//   const footer = document.querySelector('.main-footer');
//   const wrapperHeight = wrapper.offsetHeight;
//   const windowHeight = window.innerHeight;

//   if (wrapperHeight < windowHeight) {
//     const footerHeight = footer.offsetHeight;
//     const remainingHeight = windowHeight - wrapperHeight;
//     footer.style.marginTop = remainingHeight + 'px';
//   } else {
//     footer.style.marginTop = 'auto';
//   }
// }

// // Call the adjustFooter function initially and on window resize
// window.addEventListener('load', adjustFooter);
// window.addEventListener('resize', adjustFooter);

const tagsInput = document.querySelector('.tags-input');
const select = tagsInput.querySelector('#tag-select');
const tagsContainer = tagsInput.querySelector('.tags-container');

function addTag() {
  const tag = select.value.trim();

  if (tag) {
    const tagElement = document.createElement('div');
    tagElement.classList.add('tag');
    tagElement.innerHTML = `
      <span>${tag}</span>
      <input type="hidden" name="tag[]" value="${tag}">
      <button>x</button>
    `;
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
