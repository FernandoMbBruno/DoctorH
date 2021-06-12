document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      height: '100%',
      expandRows: true,
      slotMinTime: '08:00',
      slotMaxTime: '20:00',
      headerToolbar: {
        left: 'dayGridMonth,timeGridWeek,timeGridDay',
        center: 'title',
        right: 'prevYear,prev,next,nextYear custom1' 
      },
      customButtons: {
        custom1: {
          text: 'Sair',
          click: function() {
            window.location = './php/logout.php';
          }
        }
      },

      


      
      initialView: 'dayGridMonth',
      
      navLinks: true, 
      editable: true,
      selectable: true,
      nowIndicator: true,
      dayMaxEvents: true, 
      events: 'list_eventos.php',



    eventClick: function (info) {
        info.jsEvent.preventDefault(); // don't let the browser navigate

        $('#visualizar #id').text(info.event.id);
        $('#visualizar #title').text(info.event.title);
        $('#visualizar #start').text(info.event.start.toLocaleDateString());
        $('#visualizar #horario').text(info.event.start.toLocaleTimeString());
        $('#visualizar #description').text(info.event.extendedProps.Espec);
       





        $('#visualizar').modal('show');
        info.el.style.borderColor = 'red';
    },


    extraParams: function () {
        return {
            cachebuster: new Date().valueOf()
        };
    }


      
    });

    calendar.render();
  });

