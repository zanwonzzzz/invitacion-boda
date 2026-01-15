<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Iram & Samantha</title>

<style>
html, body {
  margin: 0;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
}

/* ===== SECCIÓN 1 ===== */
.hero {
  position: relative;
  width: 100%;
  height: 100vh;
  background: url('{{ asset('foto_filtro_si_2.jpeg') }}') center/cover no-repeat;
}

/* Overlay oscuro */
.hero::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,.45);
  z-index: 1;
}

/* 🔥 IRAM & SAM (ARRIBA, GRANDE) */
.names {
  position: absolute;
  top: -68vh;
  left: 53%;
  transform: translateX(-50%);
  width: 110vw;
  max-width: none;
  z-index: 10;
}

/* 📅 FECHA */
.date {
  position: absolute;
  top: 5vh;
  left: 57%;
  transform: translateX(-50%);
  width: 65vw;
  z-index: 10;
}

/* ⏳ CUENTA REGRESIVA */
.countdown {
  position: absolute;
  top: 5vh;
  left: 60%;
  transform: translateX(-50%);
  width: 100vw;
  z-index: 20;
}

.countdown-wrapper {
  position: relative;
  width: 100%;
}

.countdown-img {
  width: 100%;
  height: auto;
  display: block;
}

/* CAPA SUPERIOR */
.countdown-overlay {
  position: absolute;
  top: 0;
  left: 0;

  width: 100%;
  height: 100%;

  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;

  text-align: center;
  pointer-events: none;
}

/* TEXTO */
.countdown-title {
  color: #ffff;
  font-size: 20px;
  margin-bottom: 1000px;
    z-index: 20;
}

#countdown {
  color: #FFFF;
  font-size: 52px;
  font-weight: 700;
  
  margin-left: 120px;
    z-index: 20;
}



/* 📱 RESPONSIVE */
@media (max-width: 768px) {
  .names {
    width: 130vw;
    top: -22vh;
  }

  .date {
    width: 80vw;
    top: 46vh;
  }

  .countdown {
    width: 85vw;
    top: 62vh;
  }
}

/* ===== SECCIÓN 2: CELEBRATE ===== */
.celebrate {
  position: relative;
  width: 100%;
  height: 85vh;
  background: url('{{ asset('i_y_s.png') }}') left -150px no-repeat;
  background-color: #eeede7;
  background-size: cover;
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: auto auto;
  gap: 40px;
  padding: 60px 80px;
  align-items: center;
  overflow: hidden;
}

/* Sobre (arriba izquierda) */
.sobre {
  grid-column: 1;
  grid-row: 1;
  width: 150%;
  max-width: 2000px;
  justify-self: end;
  margin-right: -490px;
  z-index: 2;
}

/* Foto (arriba derecha) */
.foto {
  grid-column: 2;
  grid-row: 1;
  width: 90%;
  max-width: 460px;
  justify-self: start;
  margin-left: -350px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.2);
  margin-top: -400px;
  z-index: 1;
}

/* Agradecimiento (arriba derecha, junto a la foto) */
.agradecimiento {
  grid-column: 2;
  grid-row: 1;
  width: 150%;
  max-width: 3000px;
  justify-self: end;
  align-self: start;
  margin-top: 40px;
  margin-right: 180px;
  z-index: 2;
}

/* Versículo (abajo centro) */
.versiculo {
  grid-column: 1 / -1;
  grid-row: 2;
  width: 150%;
  max-width: 1500px;
  justify-self: left;
  margin-top: -1100px;
  z-index: 2;
}

/* Te esperamos (abajo derecha) */
.te-esperamos {
  grid-column: 2;
  grid-row: 2;
  width: 100%;
  max-width: 400px;
  justify-self: end;
  align-self: end;
  margin-right: 40px;
  z-index: 2;
}

/* ===== SECCIÓN 3: UBICACION ===== */
/* ===== SECCIÓN 3: UBICACION ===== */
.ubication {
  position: relative;
  width: 100%;
  min-height: 85vh;
  background-color: #fff;
  grid-template-columns: 1fr 1fr;
  display: grid;
  align-items: start;
}

/* Imagen izquierda */
.foto-propuesta {
  width: 160%;
  height: 100%;
  object-fit: cover;
  object-position: center top;
}

/* Contenedor derecho */
.ubicacion-info {
  display: flex;
  flex-direction: column;
  align-items: center;
}


/* Texto */
.nos-casaremos {
  max-width: 2500px;
  width: 250%;

  position: relative;   /* 👈 NECESARIO */
  left: 10%;            /* 👈 MISMO VALOR QUE NH QUINTA */
}


.nh-quinta {
  max-width: none;      /* quita límite */
  width: 220%;          /* 👈 MÁS GRANDE (ajusta si quieres) */

  position: relative;
  top: -1500px;         /* el que ya te gustó */

  left: -30%;           /* 👈 MUEVE A LA IZQUIERDA */
}

.mapa-wrap {
  margin-top: -2500px;   /* 🔼 SUBE el iframe */
  width: 100%;
  display: flex;
  justify-content: center;
  position: relative;
  z-index: 20;
}

/* 🗺️ MAPA */
.ubicacion-info iframe {
  width: 100%;
  max-width: 480px;   /* 👈 MÁS PEQUEÑO */
  height: 300px;      /* 👈 MÁS BAJO */
  border: 0;
}

/* ===== SECCIÓN 4: DAY (ORDEN DEL DÍA) ===== */
.day {
  position: relative;
  width: 100%;
  height: 85vh;
  background-color: #eeede7;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  padding-top: 40px;
  z-index: 1;
}

/* TÍTULO */
.day-title-img {
  width: 140%;
  max-width: 1400px;
  height: auto;
  margin-top: -50px;
  margin-bottom: 20px;
  margin-left: 200px;
}

/* CONTENEDOR EVENTOS */
.eventos-container {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  gap: 120px;
  width: 100%;
  max-width: 1200px;
  margin-top: -1000px;
}

/* EVENTO */
.evento {
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* ICONOS GRANDES */
.evento-icon {
  width: 420px;
  height: auto;
}

/* TEXTO / HORARIO */
.evento-info {
  width: 320px;
  margin-top: -150px;
  height: auto;
}


/* FRANJA CAFÉ (DEBE ESTAR ENCIMA DEL CREMA) */
.dress-code-section {
  position: relative;
  width: 100%;
  height: 200px;        /* 👈 AQUÍ CONTROLAS LA ALTURA */
  background-color: #8b8680;

  display: flex;
  flex-direction: column;
  align-items: flex-start;

  padding-left: 80px;
  z-index: 2;
}



.dress-code-img {
  width: 150%;
  max-width: 1500px;
  margin-left: -40px;
  margin-top: -480px;
}


.no-blanco-img {
  width: 150%;
  max-width: 1500px;
  margin-left: -40px;
  margin-top: -1200px; /* 👈 súbela un poco */
}

/* ===== SECCIÓN 5: GIFTS ===== */
.gifts {
  position: relative;
  width: 100%;
  min-height: 85vh;
  background-color: black;
  grid-template-columns: 1fr 1fr;
  display: grid;
  align-items: start;
}



.gifts-content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 40px;

  padding: 80px;
  box-sizing: border-box;
}



.mesa-regalos-title {
  width: 300%;
  max-width: 3000px;
  margin-left: -80px;
  margin-top: 50px;
}

.selecciona-text {
  color: white;
  font-size: 22px;
  margin: 0;
  margin-top: -1050px;
  margin-left: 10px;
}

.logos-tiendas {
  display: flex;
  gap: 40px;
}

.logos-tiendas img {
  max-width: 200px;
}

.foto-mano {
  grid-column: 2;
  grid-row: 1 / -1;

  width: 100%;
  height: 100%;

  background-image: url('{{ asset('foto_mano.png') }}');
  background-size: cover;       /* 👈 CLAVE */
  background-position: center;
  background-repeat: no-repeat;
}


/* ===== SECCIÓN 6: CONFIRMATION ===== */
.confirmation {
  position: relative;
  width: 100%;
  height: 100vh;
  background-color: #eeede7;
  display: grid;
  grid-template-columns: 1.2fr 1fr; /* Dividimos en dos columnas */
  align-items: center;
  overflow: hidden;
}

/* Contenedor del lado izquierdo (Textos y Botón) */
.confirmation-content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start; /* Alineado a la izquierda */
  padding-left: 100px;
  gap: 20px;
}

/* Imagen "Queremos que seas parte..." */
.queremos-title {
  width: 200%;
  max-width: 1900px; /* Evita que se haga zoom o se estire demasiado */
  height: auto;
}

/* Imagen "Confirma tu asistencia" */
.confirma-text {
  width: 200%;
  max-width: 1000px;
  margin-top: -1100px;
  margin-left: 40px;
  height: auto;
}

/* Botón RSVP */
.boton-rsvp {
  width: 200%;
  max-width: 1000px;
  margin-top: -1100px;
  margin-left: 40px;
  height: auto;
  cursor: pointer;
  transition: transform 0.3s;
}

.boton-rsvp:hover {
  transform: scale(1.05);
}

/* Imagen de las flores (Derecha) */
.flores-confirmation {
  width: 100%;
  height: 100%;
  /* Eliminamos el margin-top negativo que las sacaba de la pantalla */
  background-image: url('{{ asset('flores.png') }}');
  
  /* 'cover' hará que las flores se vean grandes y llenen su mitad de la sección */
  background-size: cover; 
  
  /* Las anclamos a la derecha y abajo */
  background-position: right bottom; 
  background-repeat: no-repeat;
  margin-top: -450px;
  
  /* Esto asegura que se mantengan en su columna del grid */
  grid-column: 2;
}
/* ===== SECCIÓN 7: WAITING ===== */
.waiting {
  position: relative;
  width: 100%;
  height: 100vh; 
  background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
              url('{{ asset('foto_beso.png') }}') center/cover no-repeat;
  display: flex;
  flex-direction: column;
  justify-content: flex-end; 
  overflow: hidden; 
}

/* Franja negra inferior */
.waiting-footer {
  background-color: black;
  width: 100%;
  height: 25vh; 
  position: relative; 
  display: flex;
  align-items: center;
  padding: 0 80px;
  box-sizing: border-box;
  z-index: 10;
}

/* Lado Izquierdo: "Te esperamos" (1800px) */
.waiting-left {
  position: absolute; 
  left: -50px; 
  bottom: -670px; 
}

.waiting-left .te-esperamos-final {
  width: 1800px; 
  height: auto;
}

/* Lado Derecho: Samantha (1800px) y Teléfono (450px) */
.waiting-right {
  position: absolute; /* CLAVE: Ahora Samantha no empuja al número fuera */
  right: -50px; /* Ajusta para mover el nombre a la derecha o izquierda */
  bottom: -670px; /* Misma altura que el t-esperamos para que se alineen */
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  z-index: 20; 
}

.waiting-right .nombre-firma {
  width: 1800px; /* Mantenemos el tamaño que pediste */
  height: auto;
}

/* El número ahora se posiciona de forma independiente para que lo veas */
.waiting-right .contacto-img {
  width: 1000px; 
  height: auto;
  position: absolute; /* Lo sacamos del flujo para que flote sobre el nombre */
  top: 320px; /* AJUSTA ESTO: Menos píxeles para subirlo, más para bajarlo */
  right: 250px; /* AJUSTA ESTO: Para moverlo a la izquierda o derecha */
  z-index: 30;
}

/* Responsive */
@media (max-width: 768px) {
  .waiting-footer {
    flex-direction: column;
    height: auto;
    padding: 40px 20px;
  }
  .waiting-left .te-esperamos-final,
  .waiting-right .nombre-firma,
  .waiting-right .contacto-img {
    width: 280px;
    margin: 10px 0;
  }
}

/* Responsive para celulares */
@media (max-width: 768px) {
  .waiting-footer {
    flex-direction: column;
    text-align: center;
    padding: 20px;
    gap: 20px;
  }
  .waiting-left, .waiting-right {
    align-items: center;
  }
}

/* Responsive para celulares */
@media (max-width: 768px) {
  .confirmation {
    grid-template-columns: 1fr;
    text-align: center;
  }
  .confirmation-content {
    padding-left: 20px;
    padding-right: 20px;
    align-items: center;
  }
  .flores-confirmation {
    display: none; /* Ocultamos flores en móvil para dar espacio al texto */
  }
}



/* Móvil: Mantenemos los 3 iconos grandes y visibles */
@media (max-width: 768px) {
  .eventos-container { gap: 10px; }
  .evento-icon { max-width: 90px !important; }
  .evento-info { max-width: 110px !important; }
  .day-title-img { max-width: 320px; }
}
/* Responsive */
@media (max-width: 1024px) {
  .celebrate {
    grid-template-columns: 1fr;
    padding: 40px;
    gap: 30px;
  }

  .sobre,
  .foto,
  .agradecimiento,
  .versiculo,
  .te-esperamos {
    grid-column: 1;
    justify-self: center;
    margin: 0;
  }

  .sobre {
    grid-row: 1;
    max-width: 400px;
  }

  .foto {
    grid-row: 2;
    max-width: 500px;
  }

  .agradecimiento {
    grid-row: 3;
    max-width: 300px;
  }

  .versiculo {
    grid-row: 4;
    max-width: 600px;
  }

  .te-esperamos {
    grid-row: 5;
    max-width: 350px;
  }

  .ubication {
    grid-template-columns: 1fr;
    grid-template-rows: auto auto;
    height: auto;
  }

  .foto-propuesta {
    height: 50vh;
  }

  .ubicacion-info {
    padding: 40px;
  }
}
</style>
</head>

<body>

<section class="hero">
  <img src="{{ asset('Diseño sin título.png') }}"
       class="names"
       alt="Iram y Samantha">

  <img src="{{ asset('14_Marzo_2026.png') }}"
       class="date"
       alt="14 de marzo">

  <div class="countdown-wrapper">
  <!-- SOLO ESTA CAPA ES NUEVA -->
  <div class="countdown-overlay">
    <p class="countdown-title">Cuenta regresiva</p>
    <div id="countdown"></div>
  </div>
</div>

</section>

<section class="celebrate">
  <img src="{{ asset('sobre.png') }}" alt="Sobre" class="sobre">
  <img src="{{ asset('foto_filtro_si_1.jpeg') }}" alt="Foto de la pareja" class="foto">
  <img src="{{ asset('agradecimiento.png') }}" alt="Agradecimiento" class="agradecimiento">
  <img src="{{ asset('versiculo.png') }}" alt="Versículo" class="versiculo">
  <img src="{{ asset('t_esperamos.png') }}" alt="Te esperamos para celebrar" class="te-esperamos">
</section>

<section class="ubication">
  <img src="{{ asset('imagen_propuesta_cortada.png') }}" alt="Propuesta" class="foto-propuesta">
  
  <div class="ubicacion-info">
    <img src="{{ asset('nos_casaremos_en.png') }}" alt="Nos casaremos en" class="nos-casaremos">
    <img src="{{ asset('NH_Quinta.png') }}" alt="NH Quinta" class="nh-quinta">
    <div class="mapa-wrap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.9509390766566!2d-103.5512223!3d25.5066827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86902700718ce15f%3A0xbe017dc87cb8fbeb!2sNH%20Quinta!5e0!3m2!1ses-419!2smx!4v1768082056830!5m2!1ses-419!2smx" 
          width="600" 
          height="450" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>

</section>

<section class="day">
  <img src="{{ asset('orden_del_dia.png') }}" class="day-title-img" alt="Orden del día">

  <div class="eventos-container">
    <div class="evento">
      <img src="{{ asset('logo_civil.png') }}" class="evento-icon">
      <img src="{{ asset('civil_6.png') }}" class="evento-info">
    </div>

    <div class="evento">
      <img src="{{ asset('logo_anillos.png') }}" class="evento-icon">
      <img src="{{ asset('religiosa_7.png') }}" class="evento-info">
    </div>

    <div class="evento">
      <img src="{{ asset('logo_copas.png') }}" class="evento-icon">
      <img src="{{ asset('recepcion_8.png') }}" class="evento-info">
    </div>
  </div>

  <div class="dress-code-section">
    <img src="{{ asset('drees_code.png') }}" class="dress-code-img">
    <img src="{{ asset('no_blanco.png') }}" class="no-blanco-img">
  </div>
</section>

<section class="gifts">
  <div class="gifts-content">
    <img src="{{ asset('mesa_regalos.png') }}" class="mesa-regalos-title">
    <p class="selecciona-text">Selecciona:</p>

    <div class="logos-tiendas">
       <a href="https://mdr.cimaco.com.mx/evento/46495" target="_blank">
         <img src="{{ asset('logo_cimaco.png') }}">
       </a>
     
      <a href="https://mesaderegalos.liverpool.com.mx/milistaderegalos/51923616" target="_blank">
        <img src="{{ asset('logo_liverpool.png') }}">
      </a>
      
    </div>
  </div>

  <div class="foto-mano"></div>
</section>

<section class="confirmation">
  <div class="confirmation-content">
    <img src="{{ asset('queremos.png') }}" class="queremos-title" alt="Queremos que seas parte">
    <img src="{{ asset('confirma.png') }}" class="confirma-text" alt="Confirma tu asistencia">
    
    <a href="URL_DE_TU_FORMULARIO" target="_blank">
      <img src="{{ asset('boton.png') }}" class="boton-rsvp" alt="Boton RSVP">
    </a>
  </div>

  <div class="flores-confirmation"></div>
</section>

<section class="waiting">
  <div class="waiting-footer">
    
    <div class="waiting-left">
      <img src="{{ asset('t_esperamos.png') }}" class="te-esperamos-final" alt="Te esperamos">
    </div>

    <div class="waiting-right">
      <img src="{{ asset('s_e.png') }}" class="nombre-firma" alt="Samantha Estrada">
      <img src="{{ asset('numero.png') }}" class="contacto-img" alt="871 145 8601">
    </div>

  </div>
</section>

<script>
var end = new Date('03/14/2026 5:00 PM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown').innerHTML = days + ' dias, ';
        document.getElementById('countdown').innerHTML += hours + ' horas, ';
        document.getElementById('countdown').innerHTML += minutes + ' minutos';
    }

    timer = setInterval(showRemaining, 1000);
</script>
</body>
</html>