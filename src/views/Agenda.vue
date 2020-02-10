<style>
div#calendar {
    display: flex;
    min-height: 60vh;
}
div#calendar > div >p {
    margin: 0;
    padding: 1em;
    border-bottom: 1px solid black;
}
div#calendar > div{
    border: 1px solid black;
    min-height: 10em;
    margin: 0;
}
</style>

<template>
<div id = 'calendar'>
    <div v-for = 'day in dow' :key = 'day.date'>
        <p class = 'title'>{{ day.dow }} {{ day.date }}</p>
        <div class = 'content'>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            dow: [{
                dow: "Monday",
                date: '17th',
                tasks: [{
                    title: "Title 1"
                  }, {
                    title: "Title 2",
                    duration: "3 hours",
                    start_time: "9am"
                }]
              },{
                dow: "Monday",
                date: '18th',
                tasks: [{
                    title: "Title 1"
                  }, {
                    title: "Title 2",
                    duration: "3 hours",
                    start_time: "9am"
                }]
              },{
                dow: "Monday",
                date: '19th',
                tasks: [{
                    title: "Title 1"
                  }, {
                    title: "Title 2",
                    duration: "3 hours",
                    start_time: "9am"
                }]

              },{
                dow: "Monday",
                date: '20th',
                tasks: [{
                    title: "Title 1"
                  }, {
                    title: "Title 2",
                    duration: "3 hours",
                    start_time: "9am"
                }]

              },{
                dow: "Monday",
                date: '21st'
              },{
                dow: "Monday",
                date: '22nd'
              },{
                dow: "Monday",
                date: '23rd'
            }]
        }
    }
}
</script>
