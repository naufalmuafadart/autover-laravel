// This file contain function that used by more than one file

const hideAllSmall = () => {
  const smallElements = document.getElementsByTagName("small");
  for (let i = 0; i < smallElements.length; i++) {
    smallElements[i].style.display = 'none';
    console.log(smallElements[i]);
  }
};
