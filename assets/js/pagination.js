document.addEventListener('DOMContentLoaded', function () {
    const itemsDiv = document.getElementById('sermon-page_parent-div');
    const paginationLinksContainer = document.getElementById('pagination-links');
    const previousButton = document.querySelector('#pagination-btn_left');
    const nextButton = document.querySelector('#pagination-btn_right');
    const itemsPerPage = 6;
    let currentPage = 1;

    const items = itemsDiv.getElementsByClassName('item');
    const totalItems = items.length;
    const totalPages = Math.ceil(totalItems / itemsPerPage);

    function displayItemsForPage() {
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;

        // Hide all items first
        Array.from(items).forEach(item => {
            item.style.display = 'none';
        });

        // Show items for the current page
        for (let i = startIndex; i < endIndex && i < totalItems; i++) {
            items[i].style.display = 'block';
        }

        // Update pagination links
        Array.from(paginationLinksContainer.children).forEach(link => {
            link.classList.remove('current-page');
            if (parseInt(link.getAttribute('data-page')) === currentPage) {
                link.classList.add('current-page');
            }
        });

        // Show/hide previous and next buttons
        previousButton.style.display = currentPage === 1 ? 'none' : 'inline-block';
        nextButton.style.display = currentPage === totalPages ? 'none' : 'inline-block';
    }

    function generatePaginationLinks() {
        for (let i = 1; i <= totalPages; i++) {
            const link = document.createElement('a');
            link.href = "#";
            link.textContent = i;
            link.setAttribute('data-page', i);
            link.classList.add('pagination-link');
            link.addEventListener('click', function (e) {
                e.preventDefault();
                currentPage = parseInt(this.getAttribute('data-page'));
                displayItemsForPage();
            });
            paginationLinksContainer.appendChild(link);
        }
    }

    // Function to handle the next and previous buttons
    previousButton.addEventListener('click', function (e) {
        e.preventDefault();
        if (currentPage > 1) {
            currentPage--;
            displayItemsForPage();
        }
    });

    nextButton.addEventListener('click', function (e) {
        e.preventDefault();
        if (currentPage < totalPages) {
            currentPage++;
            displayItemsForPage();
        }
    });

    // Initial setup
    generatePaginationLinks();
    displayItemsForPage();
});
