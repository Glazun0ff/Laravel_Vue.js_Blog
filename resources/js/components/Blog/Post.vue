<template>
    <div>
        <div class="uk-grid-small uk-card-default uk-card-hover uk-card-body uk-height-1-1">
            <div class="uk-card-header">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <h3 class="uk-card-title">{{ title | truncate(55) }}</h3>
                        <p class="uk-text-meta">
                            <time datetime="2016-04-01T19:00">{{ date | formatDate }}</time>
                        </p>
                    </div>
                </div>
            </div>
            <div class="uk-card-body">
                <p>{{ body | truncate(180) }}</p>
            </div>
            <div class="uk-card-footer">
                <!--<a href="#" class="uk-button uk-button-text">Подробнее</a>-->
                <router-link :to="'/post/' + id" class="uk-button uk-button-text">Подробнее</router-link>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            id: {
                type: Number,
                default: "NULL"
            },
            title: {
                type: String,
                default: "NULL"
            },
            body: {
                type: String,
                default: "NULL"
            },
            date: {
                type: String,
                default: "NULL"
            }
        }
    }
</script>

<style scoped>

</style>
