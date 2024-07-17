@extends('layouts.app')

@section('content')
    <div class="container" id="email">
        <div class="row">
            <div class="col-12" v-if="loading"> loading..</div>
            <div class="col-md-4">
                <ul class="overflow-hidden d-grid gap-3">
                    <li @click="selected_id = email.uid"
                        v-for="(email, index) in emails.data"
                        class="btn btn-outline-primary text-start"
                        :class="{active: email.seen == 0, }"
                        style="width: 100%;" :key="index">
                        <div style="max-width: 160px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">
                            @{{ email.from }}
                        </div>
                        <div>
                            @{{ email.subject }}
                        </div>
                    </li>
                </ul>
                <div class="pagination_data" @click="get_page_data" v-html="pagination"></div>
            </div>
            <div class="col-md-8">
                {{-- <div class="email_details" v-html="email_details"></div> --}}
                <iframe v-if="selected_id"
                    style="width: 100%; height: calc(100vh - 200px);"
                    :key="selected_id"
                    :src="'/email/read?id=' + selected_id" frameborder="0"></iframe>
            </div>
        </div>
    </div>

    <script src="/assets/js/vue.js"></script>
    <script>
        new Vue({
            el: "#email",
            data: () => ({
                emails: {},
                pagination: "",
                loading: false,
                email_details: "",
                selected_id: null,
            }),
            created: async function() {
                await this.get_emails();
            },
            methods: {
                get_emails: function(page = 1) {
                    if (this.loading) return;

                    this.loading = true;
                    fetch('/email/list?page=' + page)
                        .then(res => res.json())
                        .then(res => {
                            this.emails = res.data;
                            this.pagination = res.pagination;

                            this.loading = false;
                        })
                },
                get_page_data: function() {
                    event.preventDefault();
                    let url = new URL(event.target.href);
                    let page = url.searchParams.get('page');
                    this.get_emails(page);
                },
                read_email: function(id = 1) {
                    if (this.loading) return;

                    this.loading = true;
                    fetch('/email/read?id=' + id)
                        .then(res => res.text())
                        .then(res => {
                            this.email_details = res;
                            this.loading = false;
                        })
                },
            }
        })
    </script>
@endsection
