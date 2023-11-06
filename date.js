document.addEventListener('DOMContentLoaded', function() {
    var dateInput = document.getElementById('dateInput');
    var currentDate = new Date();
    var year = currentDate.getFullYear();
    var month = String(currentDate.getMonth() + 1).padStart(2, '0');
    var day = String(currentDate.getDate()).padStart(2, '0');
    var formattedDate = year + '-' + month + '-' + day;
    dateInput.min = formattedDate;
    dateInput.value = formattedDate;
    dateInput.addEventListener('input', function(event) {
        var selectedDate = event.target.value;
        console.log('Selected date:', selectedDate);
  
    });
});
