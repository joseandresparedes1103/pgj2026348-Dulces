export default function pagination(currentPage, lastPage) {
    return {
        currentPage: currentPage,
        lastPage: lastPage,
        changePage(page) {
            if (page > 0 && page <= this.lastPage) {
                this.currentPage = page;
                window.location.href = '?page=' + page;
            }
        }
    };
}
