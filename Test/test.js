document.addEventListener('mousemove', function(e) {
    const cursor = document.querySelector('.cursor');
    const tail = document.querySelector('.tail');
  
    cursor.style.transform = `translate(${e.clientX}px, ${e.clientY}px)`;
    tail.style.transform = `rotate(${Math.atan2(e.clientY - window.innerHeight / 2, e.clientX - window.innerWidth / 2)}rad)`;
  });