// Espera a que se cargue completamente el contenido de la página
document.addEventListener("DOMContentLoaded", function() {
    // Obtiene todos los elementos con la clase "slide"
    var slides = document.querySelectorAll(".slide");
  
    // Establece el índice inicial del slide activo
    var currentSlide = 0;
  
    // Muestra el primer slide al cargar la página
    slides[currentSlide].classList.add("active");
  
    // Función para mostrar el siguiente slide
    function nextSlide() {
      slides[currentSlide].classList.remove("active");
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].classList.add("active");
    }
  
    // Establece el intervalo de tiempo para cambiar los slides (5 segundos en este ejemplo)
    var slideInterval = setInterval(nextSlide, 5000);
  });
  