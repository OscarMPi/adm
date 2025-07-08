document.addEventListener('DOMContentLoaded', function() {
    // Fix for dashboard icon
    const dashboardIcons = document.querySelectorAll('.ti-dashboard');
    dashboardIcons.forEach(icon => {
        if (!icon.innerHTML.trim()) {
            // If the icon is empty, add the necessary HTML
            icon.innerHTML = '<i class="fa fa-dashboard"></i>';
            icon.classList.add('icon-wrapper');
        }
    });
    
    // Fix for logout/power-off icon
    const powerOffIcons = document.querySelectorAll('.ti-power-off');
    powerOffIcons.forEach(icon => {
        if (!icon.innerHTML.trim()) {
            // If the icon is empty, add the necessary HTML
            icon.innerHTML = '<i class="fa fa-power-off"></i>';
            icon.classList.add('icon-wrapper');
        }
    });
});
