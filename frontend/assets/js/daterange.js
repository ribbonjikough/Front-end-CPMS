// Only for parking_history.php Exit Date Range filter
$(function() {
  // Use the universal class for the input in your HTML: class="daterange-input"
  $('#exit-daterange').daterangepicker({
    autoUpdateInput: false,
    locale: {
      cancelLabel: 'Clear',
      format: 'YYYY-MM-DD'
    }
  });

  $('#exit-daterange').on('apply.daterangepicker', function(ev, picker) {
    $(this).val(picker.startDate.format('YYYY-MM-DD') + ' to ' + picker.endDate.format('YYYY-MM-DD'));
    filterByExitDate(picker.startDate, picker.endDate);
  });

  $('#exit-daterange').on('cancel.daterangepicker', function(ev, picker) {
    $(this).val('');
    filterByExitDate(null, null);
  });

  function filterByExitDate(start, end) {
    // Loop through table rows and filter by Exit Time column (index 6, 0-based)
    $('.table tbody tr').each(function() {
      var exitTime = $(this).find('td').eq(6).text().trim();
      if (!exitTime) {
        $(this).show();
        return;
      }
      var exitDate = moment(exitTime.split(' ')[0], 'YYYY-MM-DD');
      if (!start || !end) {
        $(this).show();
      } else if (exitDate.isBetween(start.clone().subtract(1, 'days'), end.clone().add(1, 'days'))) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  }
});

function setupDaterangeFilter(inputSelector, tableSelector, dateColIndex) {
  $(inputSelector).daterangepicker({
    autoUpdateInput: false,
    locale: {
      cancelLabel: 'Clear',
      format: 'YYYY-MM-DD'
    }
  });

  $(inputSelector).on('apply.daterangepicker', function(ev, picker) {
    $(this).val(picker.startDate.format('YYYY-MM-DD') + ' to ' + picker.endDate.format('YYYY-MM-DD'));
    filterByDate(picker.startDate, picker.endDate);
  });

  $(inputSelector).on('cancel.daterangepicker', function(ev, picker) {
    $(this).val('');
    filterByDate(null, null);
  });

  function filterByDate(start, end) {
    $(tableSelector + ' tbody tr').each(function() {
      var dateText = $(this).find('td').eq(dateColIndex).text().trim();
      if (!dateText) { $(this).show(); return; }
      var rowDate = moment(dateText.split(' ')[0], 'YYYY-MM-DD');
      if (!start || !end) {
        $(this).show();
      } else if (rowDate.isBetween(start.clone().subtract(1, 'days'), end.clone().add(1, 'days'))) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  }
}

// For transactions.php, Trx Time is column 12 (0-based)
$(function() {
  setupDaterangeFilter('#trx-daterange', '.table', 12);
});

// For daily_sales.php, Date column is index 1 (0-based)
$(function() {
  setupDaterangeFilter('#sales-daterange', '.table', 1);
});

// For manual_open_barrier.php, Date column is index 1 (0-based)
$(function() {
  setupDaterangeFilter('#manual-daterange', '.table', 1);
});

// For length_of_stay.php, Date column is index 1 (0-based)
$(function() {
  setupDaterangeFilter('#length-daterange', '.table', 1);
});