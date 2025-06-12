<script>
  let index = 0;
  const carrusel = document.getElementById("carrusel");
  const total = carrusel.getElementsByTagName("img").length;

  function showNextImage() {
    index = (index + 1) % total;
    carrusel.style.transform = `translateX(-${index * 100}%)`;
  }

  setInterval(showNextImage, 3000);
</script>