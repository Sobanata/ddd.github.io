let currentImageIndex = 1;

function switchImage() {
  const image1 = document.getElementById('image1');
  const image2 = document.getElementById('image2');

  if (currentImageIndex === 1) {
    image1.classList.remove('active');
    image2.classList.add('active');
    currentImageIndex = 2;
  } else {
    image1.classList.add('active');
    image2.classList.remove('active');
    currentImageIndex = 1;
  }
}