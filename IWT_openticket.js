function closeOptionsContainer(optionsContainer) {
  optionsContainer.classList.remove("active");
}

function handleSelectBox(selected, optionsContainer, optionsList) {
  selected.addEventListener("click", () => {
      optionsContainer.classList.toggle("active");
  });

  optionsList.forEach(option => {
      option.addEventListener("click", () => {
          selected.innerHTML = option.querySelector("label").innerHTML;
          closeOptionsContainer(optionsContainer);
      });
  });
}
function handleOutsideClick(optionsContainer, selected) {
  document.addEventListener("click", event => {
      const isClickInside = optionsContainer.contains(event.target) || selected.contains(event.target);
      if (!isClickInside) {
          closeOptionsContainer(optionsContainer);
      }
  });
}
function handleScrolling(optionsContainer) {
  optionsContainer.addEventListener("wheel", event => {
      event.preventDefault();
      const delta = Math.max(-1, Math.min(1, (event.deltaY || -event.detail)));
      optionsContainer.scrollTop += delta * 30;
  });
}
const selectBoxes = document.querySelectorAll(".select-box");

selectBoxes.forEach(selectBox => {
  const selected = selectBox.querySelector(".selected");
  const optionsContainer = selectBox.querySelector(".option-container");
  const optionsList = selectBox.querySelectorAll(".option");

  handleSelectBox(selected, optionsContainer, optionsList);
  handleOutsideClick(optionsContainer, selected);
  handleScrolling(optionsContainer);

  closeOptionsContainer(optionsContainer);
});