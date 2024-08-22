document.addEventListener('alpine:init', () => {
    Alpine.data('pagination', (currentPage, lastPage) => ({
        currentPage: currentPage,
        lastPage: lastPage,
        changePage(page) {
            if (page > 0 && page <= this.lastPage) {
                this.currentPage = page;
                // Redirige a la página seleccionada
                window.location.href = `?page=${this.currentPage}`;
            }
        }
    }));
});
