let slideIndex = 0;
const slides = document.querySelectorAll(".slide");
slides.forEach((slide, index) => {
  console.log(slide, index)
  if (index !== 0) {
      slide.style.display = "none";  
  }
})

function showSlides() {
    slides.forEach((slide, index) => {
        console.log(slide)
        if (index !== slideIndex) {
            slide.style.display = "none";  
        }
    })   
  

    slides[slideIndex].style.display = "block";  
  
}

function prevSlide() {
  slideIndex--;
  if (slideIndex < 1) {
    slideIndex = slides.length -1;
  }
  showSlides();
}

function nextSlide() {
  slideIndex++;
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }
  showSlides();
}

// showSlides(); 

console.log("holamundo");