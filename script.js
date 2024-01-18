var i = 0;
var txt = 'System.out.println("Merhaba! Ben Anıl ONGAN");';
var speed = 50;

document.addEventListener('DOMContentLoaded', function() {
  // Sürekli döngü için bir fonksiyon çağır
  setInterval(function() {
    // Her döngüde i'yi sıfırla ve demo içeriğini temizle
    i = 0;
    document.getElementById("demo").innerHTML = '';
    // Yazıyı baştan yazdır
    typeWriter();
  }, txt.length * speed + 1000); // 1000ms (1 saniye) bekletme süresi ekledik
});

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}



















