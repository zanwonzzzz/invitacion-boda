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

/* ===== TRANSICIÓN ENTRE SECCIONES ===== */
section,
.hero,
.celebrate,
.ubication,
.day,
.gifts,
.confirmation,
.waiting {
  opacity: 0;
  transform: translateY(40px);
  transition: opacity 0.9s ease, transform 0.9s ease;
}

/* Cuando la sección entra en pantalla */
.section-visible {
  opacity: 1;
  transform: translateY(0);
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
  overflow: visible;
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
  margin-top: -700px;
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
  position: absolute;   /* 🔑 ya no depende del contenido */
  right: 0;
  bottom: 0;

  width: 50%;
  height: 100%;

  background-image: url('{{ asset('flores.png') }}');
  background-size: cover;
  background-position: right bottom;
  background-repeat: no-repeat;
}
/* ===== FORM RSVP ===== */
#rsvpForm {
  position: absolute;
  top: 50%;
  left: 200px;
  z-index: 50;
  display: flex;
  flex-direction: column;
  gap: 14px;
  width: 360px;
  background: rgba(255,255,255,0.95);
  padding: 20px;
  border-radius: 20px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}


/* Select y input */
#rsvpForm select,
#rsvpForm input {
  width: 100%;
  padding: 14px 16px;
  font-size: 16px;
  font-family: 'Georgia', serif;
  border-radius: 10px;
  border: 1px solid #cfcfcf;
  background-color: #fff;
  color: #333;
  outline: none;
  transition: all 0.3s ease;

  box-sizing: border-box;
  height: 52px;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;

  margin-bottom: 14px; /* 🔑 separación */
}



/* Focus elegante */
#rsvpForm select:focus,
#rsvpForm input:focus {
  border-color: #b89b5e;
  box-shadow: 0 0 0 2px rgba(184, 155, 94, 0.2);
}

/* Botones */
#btnConfirmar,
#btnNoAsistire {
  padding: 14px;
  font-size: 15px;
  font-family: 'Georgia', serif;
  border-radius: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease;
}

/* Confirmar */
#btnConfirmar {
  background-color: #b89b5e;
  color: #fff;
}

#btnConfirmar:hover {
  background-color: #a4884f;
  transform: translateY(-2px);
}

/* No asistir */
#btnNoAsistire {
  background-color: transparent;
  color: #777;
  border: 1px solid #bbb;
}

#btnNoAsistire:hover {
  background-color: #f2f2f2;
  color: #444;
}

/* Botones deshabilitados (anti-spam visual) */
#btnConfirmar:disabled,
#btnNoAsistire:disabled {
  opacity: 0.6;
  cursor: not-allowed;
  transform: none;
}

/* Input deshabilitado */
#rsvpForm input:disabled,
#rsvpForm select:disabled {
  background-color: #f5f5f5;
  color: #999;
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

/*responsive */
@media (min-width: 1024px) {
  .hero,
  .celebrate,
  .day,
  .gifts,
  .confirmation,
  .waiting {
    min-height: 100vh;
  }

  /* RSVP */
  #rsvpForm {
    left: 200px;
    top: 50%;
    transform: translateY(-50%);
  }
}

@media (max-width: 1023px) {

  /* ===== HERO ===== */
  .names {
    top: -40vh;
    width: 130vw;
  }

  .date,
  .countdown {
    left: 50%;
    width: 90vw;
  }

  /* ===== CELEBRATE ===== */
  .celebrate {
    grid-template-columns: 1fr;
    height: auto;
    padding: 40px;
  }

  .sobre,
  .foto,
  .agradecimiento,
  .versiculo,
  .te-esperamos {
    width: 100%;
    margin: 0;
    justify-self: center;
  }

  /* ===== UBICACIÓN ===== */
  .ubication {
    grid-template-columns: 1fr;
  }

  .foto-propuesta {
    width: 100%;
  }

  .nh-quinta,
  .nos-casaremos {
    width: 100%;
    left: 0;
    top: 0;
  }

  .mapa-wrap {
    margin-top: 40px;
  }

  /* ===== DAY ===== */
  .eventos-container {
    flex-direction: column;
    gap: 60px;
    margin-top: 0;
  }

  /* ===== GIFTS ===== */
  .gifts {
    grid-template-columns: 1fr;
  }

  .mesa-regalos-title {
    width: 100%;
    margin-left: 0;
  }

  /* ===== CONFIRMATION ===== */
  .confirmation {
    grid-template-columns: 1fr;
  }

  .flores-confirmation {
    width: 100%;
    height: 40vh;
    bottom: 0;
  }

  #rsvpForm {
    position: relative;
    left: 0;
    top: 0;
    transform: none;
    margin: 40px auto;
  }
}



/*celular */
/* ================================
   📱 MOBILE CSS LIMPIO Y REAL
   ================================ */
@media (max-width: 768px) {

  section {
    min-height: auto !important;
    height: auto !important;
    overflow: visible !important;
  }

  body {
    overflow-y: auto !important;
  }

  /* ================= HERO ================= */

  .hero {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 40px 20px;
  }

  /* 🔥 IRAM & SAMANTHA */
.names { 
  position: relative !important;
  top: -100px !important;
  left: 0 !important;
  transform: none !important;

  width: 120%;
  max-width: 420px;

  margin: 0 auto 100px auto;

  /* 👇 ESTA ES LA CLAVE */
  translate: -20px 0;

  display: block;
  z-index: 15;
}


  /* 📅 FECHA */
  .date {
    display: block;

    width: 360px;
    max-width: 90vw;

    /* 👇 mueve a la derecha */
    margin-left: 40px;   /* prueba 15px – 30px */

    position: relative !important;
    left: 0 !important;
    top: -400px ;
    transform: none !important;

    z-index: 14;
  }

  /* ⏳ COUNTDOWN */
 .countdown {
  position: relative;
  width: 100%;
  max-width: 340px;

  transform: translateY(-200px); /* 👈 SUBE */
  z-index: 20;
}

.countdown-wrapper {
    position: relative;
  }

  .countdown-overlay {
    position: relative;
    transform: translateY(-200px); /* 👈 AQUÍ SÍ SUBE */
    z-index: 20;
  }


  .countdown-title {
    margin-bottom: 10px;
    font-size: 18px;
  }

  #countdown {
    font-size: 20px;
    margin: 0;
  }



/* ================= CELEBRATE ================= */
.celebrate {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 24px;

  padding: 180px 30px 60px;
  height: auto;

  background-color: #eeede7;
  background-image: url('{{ asset('i_y_s.png') }}');
  background-repeat: no-repeat;
  background-size: 700px auto;
  background-position: top -40px left;
}


  /* SOBRE */
  .celebrate .sobre {
  width: 85%;
  max-width: 400px;

  transform: translate(-60px, -80px) !important;
}
  /* FOTO */
  .celebrate .foto {
  width: 85%;
  max-width: 260px;

  transform: translate(-20px, -380px) !important;

  box-shadow: 0 12px 28px rgba(0,0,0,0.25);
}


  /* TEXTO CURSIVO (VERSÍCULO) */
.celebrate .versiculo {
  width: 200% !important;
  max-width: 1000px !important;
  margin-left: 95% !important;
  margin-top: -1100px !important;
  transform: scale(1.15) !important;
}




  /* TEXTO NORMAL (AGRADECIMIENTO) */
.celebrate .agradecimiento {
  width: 150% !important;
  max-width: 900px !important;

  position: relative;
  left: 30%;

  transform: translate(-75%, -100px) scale(1.2) !important; /* 👈 AQUÍ SUBE */
}



  /* TE ESPERAMOS */
  .celebrate .te-esperamos {
    width: 80%;
    max-width: 260px;
    margin: 30px auto 0;
  }
  
/* ================= UBICACIÓN ================= */
.ubication {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 20px;
  overflow: visible !important; /* 🔥 CLAVE */
  min-height: auto !important;
  padding-top: 0 !important;
}

/* IMAGEN PRINCIPAL FULL WIDTH */
.foto-propuesta {
  width: 180vw;          /* 👈 MÁS ancha por ambos lados */
  max-width: none;
  height: auto;

  position: relative;
  left: 50%;             /* 👈 centra respecto a la pantalla */
  transform: translateX(-10%); /* 👈 reparte el ancho a ambos lados */

  margin: 0;
  display: block;
}


/* IMÁGENES TEXTO */
.nos-casaremos,
.nh-quinta {
  width: 200% !important;
  max-width: 600px !important;
  text-align: center;
  margin-left: -80px !important;  /* 👈 ESTO CENTRA */
  margin-right: auto !important; /* 👈 ESTO CENTRA */
}

/* 👇 SUBE ESTE */
/* 👇 SUBE ESTE */
.nos-casaremos {
  margin-top: -30px !important;
}

/* 👇 ESTE SE QUEDA NORMAL */
.nh-quinta {
  position: relative !important;
  transform: translateY(-480px)  translateX(-50px) !important; /* 👈 SUBE SIN AFECTAR EL FLUJO */
  z-index: 0;
}

.mapa-wrap {
  width: 100%;
  display: flex;
  justify-content: center;
  position: relative !important;
  z-index: 1 !important;
  margin-top: -800px !important; /* 👈 SUBE EL MAPA */
}

.mapa-wrap iframe {
  width: 85% !important;
  max-width: 500px !important;
  height: 220px !important;
  border-radius: 12px;
  margin-bottom: 50px;
}

  /* ================= DAY ================= */
 /* ================= DAY ================= */
.day {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 40px 20px 60px;
}

.day-title-img {
  width: 200%;
  max-width: 900px;
  margin: 0 auto 40px; /* 👈 Ya está centrado con "auto" */
  display: block; /* 👈 AGREGA ESTO */
  margin-left: -150px !important; /* 👈 FUERZA EL CENTRADO */
  margin-right: auto !important; /* 👈 FUERZA EL CENTRADO */
}



.eventos-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 50px;
  margin-top: -400px;
  width: 100%;
  margin-left: -30px !important; /* 👈 MISMO VALOR que day-title */
  margin-right: auto !important;
}

.evento {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  margin-top: -140px; /* 👈 SUBE CADA EVENTO */
}

/* ÍCONO EVENTO */
.evento-icon {
  width: 300px !important;
  height: auto !important;
  margin: 0 auto !important;
  margin-top: -20px !important; /* 👈 SUBE EL ÍCONO */
}

/* INFO EVENTO */
.evento-info {
  width: 90% !important;
  max-width: 300px !important;
  margin: -100px auto 0 !important; /* 👈 ACERCA EL TEXTO AL ÍCONO (cambié de -400 a -40) */
  text-align: center;
}

/* ================= DRESS CODE ================= */
.dress-code-section {
  width: 100% !important;
  height: 180px !important; /* 👈 Altura FIJA en píxeles */
  background-color: #8b8680;
  display: flex !important;
  flex-direction: column !important;
  align-items: center !important;
  padding: 20px 20px !important;
  margin-top: 60px !important;
  position: relative !important;
  overflow: hidden !important; /* 👈 CLAVE: Oculta lo que sobresalga */
}

.dress-code-img {
  width: 200% !important;
  max-width: 900px !important;
  margin: 0 auto 20px auto !important;
  position: relative !important;
  left: -50px !important;
  top: -280px !important;
}

.no-blanco-img {
  width: 150% !important;
  max-width: 700px !important;
  margin: 0 auto !important;
  position: relative !important;
  left: 0 !important;
  top: -890px !important;
}


 /* ================= GIFTS ================= */
.gifts {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;

  width: 100%;
  height: 60vh;
  background-color: black;

  padding: 60px 20px;
  margin-top: -150px !important;  /* 👈 SUBE PARA TAPAR EL HUECO BLANCO */
  gap: 30px;
  
  overflow: hidden;
  position: relative;
  z-index: 5;
}

/* Contenido centrado */
.gifts-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 30px;
  width: 100%;
  padding: 0;
  box-sizing: border-box;
  position: relative;
  z-index: 2;
}

.mesa-regalos-title {
  width: 200%;
  max-width: 1200px;
  position: relative;
  left: 10%;
  transform: translateX(30%) translateY(-20%);
}


.selecciona-text {
  color: white;
  font-size: 18px;
  text-align: center;
  margin: 10px 0;
  transform: translateX(-20px) translateY(-600px);
}

.logos-tiendas {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
  margin-bottom: 30px;
  transform: translateX(-20px) translateY(-580px);
}


.logos-tiendas img {
  max-width: 140px;
  height: auto;
}

/* IMAGEN DE MANO - LLENA EL ESPACIO */
.foto-mano {
  position: absolute !important;
  bottom: 0 !important;
  left: 45% !important;
  transform: translateX(-50%) translateY(-2%) !important;
  
  width: 100% !important;
  height: 400px !important;
  
  background-size: cover !important;
  background-position: center bottom !important;
  background-repeat: no-repeat !important;
  
  opacity: 0.4 !important;
  z-index: 1 !important;
}
  /* ================= CONFIRMATION ================= */
.confirmation {
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;

  padding: 60px 20px 120px; /* 👈 MUCHO MÁS CHICA */
  height: 75vh;            /* 👈 ALTUTA REAL */
  max-height: 75vh;        /* 👈 BLOQUEO */
  min-height: unset !important; /* 👈 CLAVE */

  overflow: hidden;
  text-align: center;
}


  /* CONTENIDO */
  .confirmation-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 24px;

    padding: 0;
    width: 100%;
    max-width: 360px;
    z-index: 2;
  }

  /* IMÁGENES TEXTO */
  .queremos-title {
    width: 200%;
    max-width: 1000px;
    transform: translateX(17%) translateY(-10%) !important;
  }

  .confirma-text {
    width: 200%;
    max-width: 700px;
    margin: 0;
    transform: translateX(30%) translateY(-110%) !important;
  }

  /* BOTÓN RSVP */
  .boton-rsvp {
    width: 600px;
    margin: 10px auto 0;
    transform: translateX(12%) translateY(-230%) !important;
  }

  /* FORM RSVP */
  #rsvpForm {
    position: relative !important;
    top: auto !important;
    left: auto !important;
    transform: none !important;

    width: 100%;
    max-width: 200px;
    margin: 20px auto 0;
    transform:  translateX(-7%)  translateY(-390%) !important;
    z-index: 5;
  }

 .flores-confirmation {
  position: absolute !important;

  bottom: 0;          /* 🔒 JAMÁS SE MUEVE */
  left: -160px;

  width: 130%;
  height: 28vh;       /* 👈 MÁS CHICAS */

  z-index: 1;

  background-position: left bottom;
  background-repeat: no-repeat;
  background-size: cover;
  pointer-events: none;
}




.waiting {
  position: relative !important;
  width: 100% !important;
  height: auto !important;
  min-height: 100vh !important;
  background: black !important;
  display: flex !important;
  flex-direction: column !important;
  justify-content: flex-start !important;
  padding: 0 !important;
  margin: 0 !important;
  overflow: hidden !important;
  box-sizing: border-box !important;
}

.waiting::before {
  content: "" !important;
  display: block !important;
  position: relative !important;
  width: 100% !important;
  height: 40vh !important;
  background-image: url('{{ asset('foto_beso.png') }}') !important;
  background-position: center -40px !important;
  background-size: cover !important;
  background-repeat: no-repeat !important;
  z-index: 1 !important;
}

.waiting-footer {
  position: relative !important;
  z-index: 10 !important;
  width: 100% !important;
  height: auto !important;
  background-color: black !important;
  display: flex !important;
  flex-direction: column !important;
  align-items: center !important;
  justify-content: center !important;
  gap: 20px !important;
  padding: 30px 20px !important;
  margin: 0 !important;
  box-sizing: border-box !important;
}

.waiting-left,
.waiting-right {
  position: relative !important;
  width: 100% !important;
  display: flex !important;
  flex-direction: column !important;
  align-items: center !important;
  z-index: 20 !important;
  margin: 0 !important; /* Cero margenes */
  padding: 0 !important;
}

.waiting-left .te-esperamos-final {
  width: 200% !important;
  max-width: 800px !important;
  height: auto !important;
  display: block !important;
  visibility: visible !important;
  margin: 0 auto 10px auto !important; /* Sin margen arriba, solo abajo */
  position: relative !important;
  top: -800px !important; /* Sube la imagen */
  left: 30% !important;
  transform: translateX(-10%) !important; /* Centra horizontalmente */
  right: auto !important;
  bottom: auto !important;
}

.waiting-right .nombre-firma{
  width: 150% !important;
  max-width: 600px !important;
  height: auto !important;
  display: block !important;
  visibility: visible !important;
  margin: 0 auto 10px auto !important; /* Sin margen arriba, solo abajo */
  position: relative !important;
  top: -1350px !important; /* Sube ambas imágenes */
  left: 50% !important;
  transform: translateX(-50%) !important; /* Centrado horizontal */
  right: auto !important;
  bottom: auto !important;
}

.waiting-right .contacto-img {
  width: 150% !important;
  max-width: 600px !important;
  height: auto !important;
  display: block !important;
  visibility: visible !important;
  margin: 0 auto 10px auto !important; /* Sin margen arriba, solo abajo */
  position: relative !important;
  top: -1750px !important; /* Sube ambas imágenes */
  left: 50% !important;
  transform: translateX(-50%) !important; /* Centrado horizontal */
  right: auto !important;
  bottom: auto !important;
}


}

@media (max-width: 428px) and (min-height: 926px){
  .celebrate .versiculo {
  width: 200% !important;
  max-width: 1000px !important;
  margin-left: 95% !important;
  margin-top: -980px !important;
  transform: scale(1.15) !important;
}
}



@media (max-width: 430px) and (min-height: 820px) {
  .no-blanco-img {
    top: -860px !important;
  }

  .celebrate .sobre {
    width: 85%;
    max-width: 400px;

    transform: translate(-60px, -130px) !important;
  }

  .celebrate .versiculo {
  width: 200% !important;
  max-width: 1000px !important;
  margin-left: 95% !important;
  margin-top: -1300px !important;
  transform: scale(1.15) !important;
}
}

@media (max-width: 412px) and (min-height: 780px) {
  .no-blanco-img {
  top: -900px !important;
}
.waiting-right .nombre-firma{
  top: -1360px !important; 
}
.waiting-right .contacto-img {
  top: -1790px !important;
}
}

@media (max-width: 360px) and (min-height: 740px) {
    /* FOTO */
  .celebrate .foto {
  width: 85%;
  max-width: 260px;

  transform: translate(-20px, -350px) !important;

  box-shadow: 0 12px 28px rgba(0,0,0,0.25);
}


  /* TEXTO CURSIVO (VERSÍCULO) */
.celebrate .versiculo {
  width: 200% !important;
  max-width: 1000px !important;
  margin-left: 95% !important;
  margin-top: -980px !important;
  transform: scale(1.15) !important;
}

 .celebrate .sobre {
    width: 85%;
    max-width: 400px;

    transform: translate(-60px, -120px) !important;
  }
   
.no-blanco-img {
  top: -790px !important;
}

.dress-code-img {
  top: -260px !important;
}

.waiting-right .nombre-firma{
  top: -1280px !important; 
}
.waiting-right .contacto-img {
  top: -1650px !important;
}
}








#toast-container {
  position: fixed !important; /* 👈 Obligatorio para que ignore el diseño de la página */
  top: 30px !important;      /* 👈 Lo sube al borde superior */
  right: 20px !important;    /* 👈 Lo pega a la derecha */
  width: 300px;
  z-index: 999999 !important; /* 👈 Por encima de TODO */
  
  display: flex;
  flex-direction: column;
  gap: 10px;
  pointer-events: none; 
}

.toast {
  /* El toast individual sí debe permitir clicks si fuera necesario */
  pointer-events: auto; 
  background-color: rgba(51, 51, 51, 0.95);
  color: white;
  padding: 12px 15px;
  border-radius: 10px;
  font-family: 'Georgia', serif;
  font-size: 14px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);
  
  /* Animación suave */
  opacity: 0;
  transform: translateX(20px);
  animation: slideIn 0.4s forwards, fadeOut 0.4s 3.5s forwards;
}
.toast-success {
  background-color: #4CAF50;
}

.toast-error {
  background-color: #F44336;
}

.toast-info {
  background-color: #2196F3;
}

@keyframes slideIn {
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes fadeOut {
  to {
    opacity: 0;
    transform: translateX(100%);
  }
}


/* ===== AL FINAL, DESPUÉS DE TODOS LOS @media ===== */

/* Eliminar espacios en blanco globales */
body {
    margin: 0 !important;
    padding: 0 !important;
}

html {
    margin: 0 !important;
    padding: 0 !important;
}

/* Asegurar que waiting sea la última sección sin espacios */
.waiting:last-child {
    margin-bottom: 0 !important;
}

section:last-of-type {
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
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
    
   <img src="{{ asset('boton.png') }}" class="boton-rsvp" id="btnRSVP" alt="Boton RSVP">

    <div id="rsvpForm" style="display:none; margin-top:20px;">
      <select id="invitados">
        <option value="">Selecciona tu nombre</option>
      </select>

      <input type="number" id="numero" min="0">

      <button id="btnConfirmar">Confirmar asistencia</button>
      <button id="btnNoAsistire">No asistiré</button>
    </div>
  </div>

  <div class="flores-confirmation"></div>
  
  
<div id="toast-container"></div>
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



<audio id="miMusica" loop>
    <source src="{{ asset('cancion_boda.mp3') }}" type="audio/mpeg">
    Tu navegador no soporta el elemento de audio.
</audio>


<script>
  document.addEventListener('click', function() {
        var audio = document.getElementById('miMusica');
        audio.play().catch(function(error) {
            console.log("El navegador bloqueó el autoplay inicialmente:", error);
        });
    }, { once: true });
    
  const sections = document.querySelectorAll(
    '.hero, .celebrate, .ubication, .day, .gifts, .confirmation, .waiting'
  );

  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('section-visible');
        }
      });
    },
    {
      threshold: 0.25
    }
  );

  sections.forEach(section => observer.observe(section));
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

  function showToast(message, type = 'info') {
  const container = document.getElementById('toast-container');
  if (!container) return;

  const toast = document.createElement('div');
  toast.classList.add('toast', `toast-${type}`);
  toast.textContent = message;

  container.appendChild(toast);

  setTimeout(() => {
    toast.remove();
  }, 4500);
}

    //invitados
    // invitados
const btnRSVP = document.getElementById('btnRSVP');
const form = document.getElementById('rsvpForm');
const selectInvitados = document.getElementById('invitados');
const inputNumero = document.getElementById('numero');
const btnConfirmar = document.getElementById('btnConfirmar');
const btnNoAsistire = document.getElementById('btnNoAsistire');

let invitadoSeleccionado = null;

/* bloquear todo */
function bloquearBotones() {
  btnConfirmar.disabled = true;
  btnNoAsistire.disabled = true;
  selectInvitados.disabled = true;
  inputNumero.disabled = true;
}

/* 1️⃣ Mostrar formulario y cargar invitados */
btnRSVP.addEventListener('click', () => {
  form.style.display = 'block';
  btnRSVP.style.display = 'none';

  fetch('https://myweeding.website/api/invitados')
    .then(res => res.json())
    .then(data => {
      selectInvitados.innerHTML = '<option value="">Selecciona tu nombre</option>';
      data.forEach(inv => {
        selectInvitados.innerHTML += `
          <option value="${inv.id}">${inv.familia}</option>
        `;
      });
    });
});

/* 2️⃣ Al seleccionar invitado → obtener número contemplado */
selectInvitados.addEventListener('change', () => {
  invitadoSeleccionado = selectInvitados.value;
  if (!invitadoSeleccionado) return;

  fetch(`https://myweeding.website/api/numero/${invitadoSeleccionado}`)
    .then(res => res.json())
    .then(data => {
      inputNumero.value = data.miembros_contemplados;
      inputNumero.max = data.miembros_contemplados;
    });
});

/* 3️⃣ No permitir aumentar invitados */
inputNumero.addEventListener('input', () => {
  const max = parseInt(inputNumero.max);
  let valor = parseInt(inputNumero.value);

  if (valor > max) inputNumero.value = max;
  if (valor < 0 || isNaN(valor)) inputNumero.value = 0;
});

/* 4️⃣ Confirmar asistencia */
btnConfirmar.addEventListener('click', () => {
  if (!invitadoSeleccionado) return showToast('Selecciona un invitado','error');

  btnConfirmar.disabled = true;
  btnNoAsistire.disabled = true;

  fetch(`https://myweeding.website/api/confirmacion/${invitadoSeleccionado}`, {
    method: 'PUT',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    body: JSON.stringify({
      confirmacion: true,
      miembros_confirmados: inputNumero.value
    })
  })
  .then(() => {
    showToast('Asistencia confirmada 🎉','success');
    bloquearBotones();
  });
});

/* 5️⃣ No asistiré */
btnNoAsistire.addEventListener('click', () => {
  if (!invitadoSeleccionado) return showToast('Selecciona un invitado','error');

  btnConfirmar.disabled = true;
  btnNoAsistire.disabled = true;

  fetch(`https://myweeding.website/api/no-confirmacion/${invitadoSeleccionado}`, {
    method: 'PUT',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    body: JSON.stringify({
      confirmacion: false,
      miembros_confirmados: 0
    })
  })
  .then(() => {
    showToast('Gracias por avisar ❤️','success');
    bloquearBotones();
  });
});

</script>
</body>
</html>