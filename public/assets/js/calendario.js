document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      // defaultDate: '2020-05-12',
      locale: 'pt-br',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      select: function(arg) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.addEvent({
            title: title,
            start: arg.start,
            end: arg.end,
            allDay: arg.allDay
          })
        }
        calendar.unselect()
      },
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events : '/cartoes/public/list',
      eventClick: function(info) {
        info.jsEvent.preventDefault();
        $('#visualizar #id').text(info.event.id)
        $('#visualizar #title').text(info.event.title)
        $('#visualizar #start').text(info.event.start.toLocaleString())
        $('#visualizar #end').text(info.event.end.toLocaleString())
        $('#visualizar').modal('show');
    
        info.el.style.borderColor = 'red';
      },

      extraParams: function() {
        return {
          cachebuster: new Date().valueOf()
        };
      }
    });

    calendar.render();
  });
