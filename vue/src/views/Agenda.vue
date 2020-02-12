<style>
div#calendar {
    display: flex;
    min-height: 60vh;
}
div#calendar div.title {
    margin: 0;
    border-bottom: 1px solid black;
}

@media only screen and (max-width: 469px) {
    div#calendar > div:nth-child(4),
    div#calendar > div:nth-child(5),
    div#calendar > div:nth-child(6),
    div#calendar > div:nth-child(7) {
        display: none;
    }

}
@media only screen and (max-width: 918px) and (min-width: 470px) {
    div#calendar > div:nth-child(5),
    div#calendar > div:nth-child(6),
    div#calendar > div:nth-child(7) {
        display: none;
    }

}

@media only screen and (min-width: 919px) {
    div#calendar div.title {
        font-size: 1.6vw;
    }
   }

div#calendar > div{
    flex: 1 0 0;
    word-break: break-word;
    border: 1px solid black;
    min-height: 10em;
    margin: 0;
}
div.content {
    position: relative;
    width: 100%;
    height: 100%;
}
div.content > div {
    background-color: var(--pink);
    width: 100%;
    border: 1px solid #b58089;
    position: absolute;
}
</style>

<template>
<div id = 'calendar'>
    <div v-for = 'day in dow' :key = 'day.date'>
        <div class = 'title'>
            <p>{{ day.dow }}</p>
            <p>{{ day.date }}</p>
        </div>
        <div class = 'content'>
            <div v-for = '(task, index) in day.tasks' :style = "{ height: 'calc(3em * ' + task.duration, top: (3 * task.start_time) - (7 * 3) + 'em' }" :key = index>
                <p>{{task.title}}</p> <p>{{task.duration}} hours</p>
            </div>
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
                    title: "Title 1",
                    duration: .5,
                    start_time: 8
                  }, {
                    title: "Title 2",
                    duration: "7",
                    start_time: "9"
                }]
              },{
                dow: "Tuesday",
                date: '18th',
                tasks: [{
                    title: "Title 1",
                    duration: 1.2,
                    start_time: 10
                  }, {
                    title: "Title 2",
                    duration: "3",
                    start_time: "13"
                }]
              },{
                dow: "Wednesday",
                date: '19th',
                tasks: [{
                    title: "Title 1",
                    start_time: 12,
                    duration: 1
                  }, {
                    title: "Title 2",
                    duration: "3",
                    start_time: "21"
                }]

              },{
                dow: "Thursday",
                date: '20th',
                tasks: [{
                    title: "Title 1",
                    start_time: 11
                  }, {
                    title: "Title 2",
                    duration: "3",
                    start_time: "7.5"
                }]

              },{
                dow: "Friday",
                date: '21st',
                tasks: [{
                    title: "Title 1",
                    start_time: 14
                  }, {
                    title: "Title 2",
                    duration: "3",
                    start_time: "9"
                }]

              },{
                dow: "Saturday",
                date: '22nd',
                tasks: [{
                    title: "Title 1",
                    start_time: 14
                  }, {
                    title: "Title 3",
                    duration: "3",
                    start_time: "9"
                }]

              },{
                dow: "Sunday",
                date: '23rd'
            }]
        }
    }
}
</script>
