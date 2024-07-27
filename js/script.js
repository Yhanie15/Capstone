document.getElementById('toggleSidebar').addEventListener('click', function() {
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('main-content');
    const topbar = document.getElementById('topbar');
    const toggleButton = document.getElementById('toggleSidebar');

    sidebar.classList.toggle('collapsed');
    mainContent.classList.toggle('collapsed');
    topbar.classList.toggle('collapsed');
    toggleButton.classList.toggle('collapsed');
});
