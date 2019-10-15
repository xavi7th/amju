<template>
    <div class="container-fluid">
        <nav>
        <ul class="pagination">
            <li>
                <a @click.prevent ="changePage(pagination.current_page - 1)" :disabled="pagination.current_page" aria-label="Previous">
                <span aria-hidden="true">Previous</span>
                </a>
            </li>
            <li v-for="page in pages" :key="page">
                <a :class="isCurrentPage(page) ? 'active' : ''" @click.prevent="changePage(page)">{{page}}</a>
            </li>
            <li>
            <a @click.prevent="changePage(pagination.current_page + 1)" :disabled="pagination.current_page >= pagination.last_page" aria-label="Next">
            <span aria-hidden="true">Next</span>
            </a>
            </li>
        </ul>
        </nav>
    </div>
</template>
<script>
    export default {
        name: 'pagination',
        props: ['pagination', 'offset'],
        methods: {
            isCurrentPage(page) {
                return this.pagination.current_page == page;
            },
            changePage() {
                if (page > this.pagination.last_page) {
                    page = this.pagination.last_page;
                }
                this.pagination.current_page = page;
                this.$emit('paginate');
            },

        },
        computed: {
            pages() {
                let pages = [];

                let from = this.pagination.current_page - Math.floor(this.offset / 2 );

                if (from < 1) {
                    from = 1;
                }
                let to = from + this.offset - 1;

                if (to > this.pagination.last_page) {
                    to = this.pagination.last_page;
                }

                while(from <= to) {
                    pages.push(from);
                    from++;
                }

                return pages;
            }
        }
    }
</script>
