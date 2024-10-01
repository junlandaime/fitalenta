function countVisit() {
    fetch('/api/count-visitor')
        .then(response => response.json())
        .then(data => {
            console.log('Visit counted:', data);
        })
        .catch(error => {
            console.error('Error counting visit:', error);
        });
}

function displayStats() {
    fetch('/api/visitor-stats')
        .then(response => response.json())
        .then(data => {
            document.getElementById('total-visitors').textContent = data.total_visitors;
            document.getElementById('total-visits').textContent = data.total_visits;
            document.getElementById('today-visits').textContent = data.today_visits;
        })
        .catch(error => {
            console.error('Error fetching stats:', error);
        });
}

// Call these functions when the page loads
document.addEventListener('DOMContentLoaded', () => {
    countVisit();
    displayStats();
});